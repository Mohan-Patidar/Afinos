<?php

namespace App\Http\Controllers;
use App\Order;
use Auth;
use App\OrderAccountDetail;
use App\OrderBillingAddress;
use App\OrderShippingAddress;
use App\OrderAddon;
use Stripe\Stripe;
use Exception;

use Illuminate\Http\Request;

class OrderController extends Controller
{
    public function index() {
        $user = Auth::user();
        if($user->id == 1) {
            $orders = Order::all();
        } else {
            $orders = Order::where("user_id", "=", $user->id)->get();
        }
        return view("admin.orders.index", compact("orders"));
    }

    public function view($id) {
        $order = Order::find($id);
        $accountDetails = OrderAccountDetail::where("order_id", "=", $order->id)->first();
        $billingAddress = OrderBillingAddress::where("order_id", "=", $order->id)->first();
        $shippingAddress = OrderShippingAddress::where("order_id", "=", $order->id)->first();
        $addons = OrderAddon::where("order_id", "=", $order->id)->get();
        return view("admin.orders.show", compact('order', 'accountDetails', 'billingAddress', 'shippingAddress', 'addons'));
    }

    public function activeSubscriptions() {
        $user = Auth::user();
        if($user->id == 1) {
            $orders = Order::where("status", "=", "active")->get();
        } else {
            $orders = Order::where("user_id", "=", $user->id)->where("status", "=", "active")->get();
        }
        return view("admin.orders.index", compact("orders"));
    }

    public function cancelSubscription($id) {
        $order = Order::find($id);
        if ($order && $order->status = 'active') {
            // cancel subscription
            $order->status = 'canceled';
            // transaction_id
            try {
                $stripe = new \Stripe\StripeClient(
                    'sk_test_51HabmJGexu1ceE1zzozBItFIRB46RoSfxwU0AnI4gpcFx6dRXaO46YNzYsFQqb3QCtxICVcZeJFveZWWzuUFExYX00pnpdiynl'
                );
                $cancelSubscription = $stripe->subscriptions->cancel(
                $order->transaction_id,
                []
                );
                // $cancelSubscription = \Stripe\Subscription::cancel(
                //     $order->transaction_id,
                // );
            } catch (Exception $e) {
                $api_error = $e->getMessage();
            }
            if (empty($api_error)) {
                $order->save();

                return redirect('all-orders');
               
                // print_r($cancelSubscription);
            } else {
                print_r($api_error);
            }
        }
    }
}
