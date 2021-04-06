<?php

namespace App\Http\Controllers;
use App\Recurrance;
use App\Package;
use App\State;
use App\Region;
use App\User;
use Stripe\Stripe;
use Stripe\Customer;
use Stripe\Charge;
use App\Order;
use App\OrderAccountDetail;
use App\OrderAddon;
use App\OrderBillingAddress;
use App\OrderShippingAddress;
use App\PackageAddonPrice;
use Exception;
// use Mail;
use Illuminate\Support\Facades\Hash;
use Auth;
use App\Mail\OrderPlaced;
use App\Mail\UserCreated;
use Illuminate\Support\Facades\Mail;

use Illuminate\Http\Request;

class FrontEndController extends Controller
{
    public function index() {
        return view('frontend.home');
    }

    public function features() {
        return view('frontend.features');
    }

    public function pricing() {
        $recurrances = Recurrance::all();
        return view('frontend.pricing', compact('recurrances'));
    }

    public function customers() {
        return view('frontend.customers');
    }

    public function why() {
        return view('frontend.why');
    }

    public function checkout($id) {
        $selectedPackage = Package::find($id);
        $recurrances = Recurrance::all();
        $regions = Region::all();
        $states = State::all();
        return view('frontend.checkout', compact('selectedPackage', 'regions', 'states', 'recurrances'));
    }

    public function verifyEmail(Request $request) {
        $user = User::where("email", "=", $request->email)->first();
        if ($user) {
            $response = array(
                "status" => "success",
                "userId" => $user->id
            );
        } else {
            $response = array(
                "status" => "failed",
            );
        }
        if ($user && Auth::check() && Auth::user()->id == $user->id) {
            $response["logged_in"] = true;
            $response["active_subscription"] = $this->getActiveSubscriptionId($user->id);
        } else {
            $response["logged_in"] = false;
        }
        return json_encode($response);
    }

    public function getActiveSubscriptionId($userId) {
        $orders = Order::where("user_id", "=", $userId)->get();
        foreach($orders as $order) {
            if($order->status == "active") {
                $isValid = strtotime("+". $order->package->recurrance->frequency ." months", strtotime($order->created_at)) > time();
                if ($isValid) {
                    return $order->id;
                }
            }
        }
        return;
    }

    public function continueCheckOut(Request $request) {
        $package = Package::find($request->packageId);
        $recurrance = Recurrance::find($package->recurrance_id);
        $additionalUser = floatval($request->additionalUser);
        $additionalUserPrice = floatval($package->additional_user) * floatval($additionalUser);
        $addons = $request->addons ? explode(",", $request->addons) : [];
        $totalItems = 1 + ($additionalUser ? 1 : 0) + count($addons);
        $totalPrice = (floatval($package->price) * floatval($recurrance->frequency)) + ($additionalUserPrice * floatval($recurrance->frequency));
        $addonPrices = array();
        foreach($package->addons as $addon) {
            if(in_array($addon->addon_id, $addons)) {
                $innerAddonPrice = array(
                    "name" => $addon->addon["name"],
                    "price" => floatval($addon->price),
                    "total_price" => floatval($addon->price) * floatval($recurrance->frequency)
                );
                $totalPrice += floatval($addon->price) * floatval($recurrance->frequency);
                array_push($addonPrices, $innerAddonPrice);
            }
        }
        $checkout = array(
            "package" => array(
                "name" => $package->name,
                "total_price" => floatval($package->price) * floatval($recurrance->frequency),
                "price" => floatval($package->price)
            ),
            "additional_user" => array(
                "qty" => $additionalUser,
                "price" => floatval($package->additional_user),
                "frequency" => floatval($recurrance->frequency),
                "total_price" => floatval($additionalUser) * floatval($package->additional_user) * floatval($recurrance->frequency)
            ),
            "adddons" => $addonPrices,
            'total_items' => $totalItems,
            'total_price' => $totalPrice
        );
        return json_encode($checkout);
    }

    public function payment(Request $request) {
        $package = Package::find($request->packageId);
        $package = Package::find($request->packageId);
        $recurrance = Recurrance::find($package->recurrance_id);
        $additionalUser = floatval($request->additionalUser);
        $fscs = $request->fscs;
        $additionalUserPrice = floatval($package->additional_user) * floatval($additionalUser);
        $addons = $request->addons ? explode(",", $request->addons) : [];
        $totalItems = 1 + ($additionalUser ? 1 : 0) + count($addons);
        $totalPrice = (floatval($package->price) * floatval($recurrance->frequency)) + ($additionalUserPrice * floatval($recurrance->frequency));
        $addonPrices = array();
        foreach($package->addons as $addon) {
            if(in_array($addon->addon_id, $addons)) {
                $innerAddonPrice = array(
                    "name" => $addon->addon["name"],
                    "id" => $addon->addon["id"],
                    "addon_price_id" => $addon->id,
                    "price" => floatval($addon->price),
                    "total_price" => floatval($addon->price) * floatval($recurrance->frequency),
                    "stripe_price_id" => $addon->stripe_price_id
                );
                $totalPrice += floatval($addon->price) * floatval($recurrance->frequency);
                array_push($addonPrices, $innerAddonPrice);
            }
        }
        $discountPercent = 0;
        if ($request->activeSubscription && $request->userId) {
            $order = Order::find($request->activeSubscription);
            if ($order && $order->user_id == Auth::user()->id) {
                $discountPercent = 15;
            }
        }
        $checkout = array(
            "package" => array(
                "name" => $package->name,
                "id" => $package->id,
                "total_price" => floatval($package->price) * floatval($recurrance->frequency),
                "price" => floatval($package->price),
                "stripe_price_id" => $package->stripe_price_id,
                "stripe_product_id" => $package->stripe_product_id  
            ),
            "additional_user" => array(
                "qty" => $additionalUser,
                "price" => floatval($package->additional_user),
                "frequency" => floatval($recurrance->frequency),
                "total_price" => floatval($additionalUser) * floatval($package->additional_user) * floatval($recurrance->frequency)
            ),
            "adddons" => $addonPrices,
            'total_items' => $totalItems,
            'total_price' => $totalPrice,
            'shipping_address' => array(),
            "billing_address" => array(),
            "user" => array(
                "email" => $request->email
            ),
            "fscs" => $fscs,
            "discountpercent" => $discountPercent
        );
        if ($discountPercent) {
            $descountPrice = ($discountPercent / 100) * $checkout["package"]["total_price"];
            $grandTotal = $totalPrice - $descountPrice;
            $checkout["discountprice"] = $descountPrice;
            $checkout["grandtotal"] = $grandTotal;
        } else {
            $grandTotal = $totalPrice;
            $checkout["grandtotal"] = $grandTotal;
        }
        if($discountPercent) {
            $checkout["subscription_id"] = $request->activeSubscription;
        }
        // print_r($checkout);
        // die; 
        $states = State::all();
        $stripe = [
            "secret_key"      => "sk_test_51HabmJGexu1ceE1zzozBItFIRB46RoSfxwU0AnI4gpcFx6dRXaO46YNzYsFQqb3QCtxICVcZeJFveZWWzuUFExYX00pnpdiynl",
            "publishable_key" => "pk_test_51HabmJGexu1ceE1zM7nxILFWgFYa6qOPIlkJ2FynETWFS8yuXVl33VNbwT1fN4xd62QXRcF0wdhVBpXwt7IlRTaL00Dd3yK5MU",
        ];
        Stripe::setApiKey($stripe['secret_key']);
        if (Auth::check()) {
            $user = Auth::user();
        } else {
            $user = "";
        }
        return view("frontend.payment", compact('checkout', 'states', 'stripe', 'user'));
    }

    public function processPayment(Request $request) {
        $stripe = [
            "secret_key"      => "sk_test_51HabmJGexu1ceE1zzozBItFIRB46RoSfxwU0AnI4gpcFx6dRXaO46YNzYsFQqb3QCtxICVcZeJFveZWWzuUFExYX00pnpdiynl",
            "publishable_key" => "pk_test_51HabmJGexu1ceE1zM7nxILFWgFYa6qOPIlkJ2FynETWFS8yuXVl33VNbwT1fN4xd62QXRcF0wdhVBpXwt7IlRTaL00Dd3yK5MU",
        ];
        $checkout = json_decode($request->checkout_details);
        $itemName = $checkout->package->name; 
        $itemNumber = $checkout->package->id; 
        $itemPrice = $checkout->total_price * 100;
        // change curruncy to "USD" when goes live or with client details  
        $currency = "INR";
        Stripe::setApiKey($stripe['secret_key']);
        parse_str($request->account_details, $accountDetails);
        parse_str($request->address_from, $addressDetails);
        parse_str($request->payment_stripe, $stripeDetails);
        $response = array(
            "status" => "failed",
            "message" => "Error processing your order"
        );
        // Add customer to stripe 
        // remove address details when you change the details to live us account
        try {  
            $customer = Customer::create(array( 
                'email' => $accountDetails["email"], 
                'source'  => $stripeDetails["stripeToken"],
                'name' => $accountDetails['name'],
                "address" => [
                    "city" => "Indore",
                    "country" => "India",
                    "line1" => "Bengali square indore",
                    "postal_code" => 452001,
                    "state" => "Madhya Pradesh"
                ]
            )); 
        } catch(Exception $e) {  
            $api_error = $e->getMessage();  
        }
        if(empty($api_error)){
            try {
                // if you did not ceated new stripe price while updating price of a 
                // package then create stripe price id every where userd stripe 
                // price id in subscription item 
                $temsPrices = [
                    ["price" => $checkout->package->stripe_price_id]
                ];
                foreach($checkout->adddons as $adddon) {
                    array_push($temsPrices, ["price" => $adddon->stripe_price_id]);
                }
                $subArray = [
                    "customer" => $customer->id,
                    "items" => $temsPrices,
                ];
                if ($checkout->discountpercent) {
                    $subArray["coupon"] = 'renew-discount';
                }
                $charge = \Stripe\Subscription::create($subArray);
            }catch(Exception $e) {  
                $api_error = $e->getMessage();  
            } 
            
            if(empty($api_error) && $charge){ 
         
                // Retrieve charge details 
                $chargeJson = $charge->jsonSerialize(); 
                // print_r($chargeJson); die;
             
                // Check whether the charge is successful 
                if($chargeJson['status'] == 'active'){ 
                    // Transaction details  
                    $transactionID = $chargeJson['id']; 
                    $paidAmount = $itemPrice / 100;
                    $paidCurrency = $currency; 
                    $payment_status = $chargeJson['status'];  
                    // If the order is successful 
                    // if($payment_status == 'active'){ 
                        $user = User::where("email", "=", $accountDetails["email"])->first();
                        if ($user && $user->id) {
                            $orderId = $this->saveOrderDetails($checkout, $accountDetails, $addressDetails, $transactionID, $paidCurrency, $payment_status, $user->id);
                            $response = array(
                                "status" => "success",
                                "message" => "Your order has been placed",
                                "order_id" => $orderId
                            );
                        } else {
                            $user = User::create([
                                'name' => $accountDetails['name'],
                                'email' => $accountDetails['email'],
                                'password' => Hash::make('12345678'),
                                'last_name' => $accountDetails['last_name'],
                                'phone' => $accountDetails['phone'],
                                'sams' => 'yes',
                                'cagecode' => $accountDetails['cagecode'],
                                'city' => $addressDetails['city'],
                                'zip' => $addressDetails['zip'],
                                'state' => $addressDetails['states'],
                                'country' => $addressDetails['country'],
                                'address' => $addressDetails['address_1']
                            ]);
                            // Mail::to($accountDetails["email"])->send(new UserCreated($user, '12345678'));
                            $orderId = $this->saveOrderDetails($checkout, $accountDetails, $addressDetails, $transactionID, $paidCurrency, $payment_status, $user->id);
                            $response = array(
                                "status" => "success",
                                "message" => "Your order has been placed",
                                "order_id" => $orderId,
                            );
                        }
                    // }else{ 
                    //     $response = array(
                    //         "status" => "failed",
                    //         "message" => "Payment faild, please try later"
                    //     );
                    // } 
                }else{ 
                    $response = array(
                        "status" => "failed",
                        "message" => "Transaction faild, please try later"
                    );
                } 
            }else{ 
                $response = array(
                    "status" => "failed",
                    "message" => "Payment declined please check your card details"
                );
            }
        } else {
            $response = array(
                "status" => "failed",
                "message" => "Payment failed, please review your personal details"
            );
        }
        return json_encode($response);
    }

    public function saveOrderDetails($checkout, $accountDetails, $addressDetails, $transactionID, $paidCurrency, $paymentStatus, $userId) {
        $package = Package::find($checkout->package->id);
        // print_r($checkout); die;
        if (property_exists($checkout, "subscription_id")) {
            $subsc = Order::find($checkout->subscription_id);
            $subsc->status = "canceled";
            $subsc->save();
        }
        $order = Order::create([
            "package_id" => $checkout->package->id,
            "additional_qty" => $checkout->additional_user->qty,
            "recurrance_id" => $package->recurrance_id,
            "frequency" => $checkout->additional_user->frequency,
            "user_id" => $userId,
            "currency_code" => $paidCurrency,
            "package_name" => $package->name,
            "transaction_id" => $transactionID,
            "fscs" => $accountDetails["fscs"],
            "sub_total" => $checkout->package->price,
            "total" => $checkout->package->total_price,
            "status" => $paymentStatus,
            "order_total" => $checkout->grandtotal,
            "discount_price" => property_exists($checkout, "discountprice") ? $checkout->discountprice : 0
        ]);
        OrderAccountDetail::create([
            "order_id" => $order->id,
            "name" => $accountDetails["name"],
            "last_name" => $accountDetails["last_name"],
            "email" => $accountDetails["email"],
            "company" => $accountDetails["company"],
            "phone" => $accountDetails["phone"],
            "company_type" => $accountDetails["industry"],
            "company_size" => $accountDetails["company_size"],
            "revenue" => $accountDetails["revenue"],
            "reason" => $accountDetails["registration_reason"],
            "user_id" => $userId,
        ]);
        foreach($checkout->adddons as $addon) {
           $addon = OrderAddon::create([
               "order_id" => $order->id,
               "addon_id" => $addon->id,
               "addon_price_id" => $addon->addon_price_id,
               "frequency" => $checkout->additional_user->frequency,
               "sub_total" => $addon->price,
               "total" => $addon->total_price
           ]); 
        }
        OrderBillingAddress::create([
            "name" => $addressDetails["name"],
            "last_name" => $addressDetails["last_name"],
            "address" => $addressDetails["address_1"],
            "address1" => $addressDetails["address_2"],
            "city" => $addressDetails["city"],
            "zip" => $addressDetails["zip"],
            "state" => $addressDetails["states"],
            "country" => $addressDetails["country"],
            "order_id" => $order->id,
            "is_same_billing_address" => 1,
        ]);
        OrderShippingAddress::create([
            "name" => $addressDetails["name"],
            "last_name" => $addressDetails["last_name"],
            "address" => $addressDetails["address_1"],
            "address1" => $addressDetails["address_2"],
            "city" => $addressDetails["city"],
            "zip" => $addressDetails["zip"],
            "state" => $addressDetails["states"],
            "country" => $addressDetails["country"],
            "order_id" => $order->id,
        ]);
        // Mail::to($accountDetails["email"])->send(new OrderPlaced($order));
        return $order->id;
    }

    public function orderPlaced($id) {
        $order = Order::find($id);
        return view("frontend.order-placed", compact('order'));
    }

    public function login(Request $request) {
        $request->validate([
            'email' => 'required|string|email',
            'password' => 'required|string',
        ]);
        $response = array(
            "status" => "failed",
            "message" => "Password not matched fot the email you have entered."
        );
        $credentials = $request->only('email', 'password');
        if (Auth::attempt($credentials)) {
            $user = User::where("email", "=", $request->email)->first();
            $response = array(
                "status" => "success",
                "userId" => $user->id
            );
            $response["active_subscription"] = $this->getActiveSubscriptionId($user->id);
        }
        return json_encode($response);
    }
}
