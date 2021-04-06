<html lang="en">
   <meta http-equiv="content-type" content="text/html;charset=utf-8" />
   <head>
      <meta charset="UTF-8">
      <meta name="viewport" content="width=device-width, initial-scale=1.0">
      <link rel="shortcut icon" href="{{url('/')}}/assets/images/favicon.ico">
      <title>Affinos Technology Group</title>
      <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/css/bootstrap.min.css">
      <link rel="stylesheet" href="{{url('/')}}/front-end/assets/css/combined.css">
      <link rel="stylesheet" href="{{url('/')}}/front-end/assets/css/fonts.css">
      <script src="https://js.stripe.com/v3/"></script>
      <script>
        // Stripe.setPublishableKey('pk_test_TYooMQauvdEDq54NiTphI7jx');
        // Create an instance of Elements.
        // var elements = stripe.elements();
        // Create a Stripe client.
      </script>
      <style type="text/css">
        #account-details .error, #address-form .error {
            border: 1px solid red;
        }
      </style>
   </head>
   <body>
      <div class="modal-content">
         <!-- Modal Header -->
         <div class="modal-header">
            <button type="button" class="close modal-close" onclick="closepopup()"><span
               aria-hidden="true">&times;</span></button>
            <div class="modal-head-inr">
               <div class="modal-head-img">
                  <img src="{{url('/')}}/front-end/assets/icons/affinos-technology-logo.png" alt="affinos-logo">
               </div>
               <h4>Add your Payment detail</h4>
               <ul class="payment-nav">
                  <li class="payment-tab active">
                     <a href="#Commentary" data-toggle="tab"></a>
                  </li>
                  <li class="payment-tab">
                     <a href="#Videos" data-toggle="tab"></a>
                  </li>
                  <li class="payment-tab">
                     <a href="#Events" data-toggle="tab"></a>
                  </li>
               </ul>
            </div>
         </div>
         <!-- Modal Body -->
         <div class="modal-body">
            <div class="modal-body-inr">
               <div class="tab-content">
                  <div role="tabpanel" class="tab-pane fade in active" id="Commentary">
                     <div class="year-value-panel">
                        <h5>{{$checkout["total_items"]}} items in total</h5>
                        <h5>${{$checkout["total_price"]}} <span> > </span></h5>
                     </div>
                     <form class="payment-form" method="post" id="account-details" onsubmit="event.preventDefault()" novalidate>
                     <input type="hidden" name="fscs" value="{{$checkout['fscs']}}" />   
                     <div class="form-field no-full-field">
                           <input type="text" value="{{$user ? $user->name : ''}}" required name="name" placeholder="First Name">
                           <input type="text" value="{{$user ? $user->last_name : ''}}" required name="last_name" placeholder="Last Name">
                        </div>
                        <div class="form-field">
                           <input type="email" required name="email" value="{{$checkout['user']['email']}}" placeholder="Email">
                        </div>
                        <div class="form-field">
                           <input type="text" required name="company" placeholder="Company">
                        </div>
                        <div class="form-field">
                           <input type="text" required name="cagecode" value="{{$user ? $user->cagecode : ''}}" placeholder="Cage Code">
                        </div>
                        <div class="form-field">
                           <input type="text" value="{{$user ? $user->phone : ''}}" required name="phone" placeholder="phone">
                        </div>
                        <div class="form-field">
                           <select required name="industry">
                              <option disable="disable" value="">Company Type</option>
                              <option value="Administrative and Support and Waste Management and Remediation Services">Administrative and Support and Waste Management and Remediation Services</option>
                              <option value="Agriculture, Forestry, Fishing and Hunting">Agriculture, Forestry, Fishing and Hunting</option>
                              <option value="Mining">Mining</option>
                              <option value="Utilities">Utilities</option>
                              <option value="Construction">Construction</option>
                              <option value="Manufacturing">Manufacturing</option>
                              <option value="Wholesale Trade">Wholesale Trade</option>
                              <option value="Retail Trade">Retail Trade</option>
                              <option value="Transportation and Warehousing">Transportation and Warehousing</option>
                              <option value="Information">Information</option>
                              <option value="Finance and Insurance">Finance and Insurance</option>
                              <option value="Real Estate Rental and Leasing">Real Estate Rental and Leasing</option>
                              <option value="Professional, Scientific, and Technical Services">Professional, Scientific, and Technical Services</option>
                              <option value="Management of Companies and Enterprises">Management of Companies and Enterprises</option>
                              <option value="Educational Services">Educational Services</option>
                              <option value="Health Care and Social Assistance">Health Care and Social Assistance</option>
                              <option value="Arts, Entertainment, and Recreation">Arts, Entertainment, and Recreation</option>
                              <option value="Accommodation and Food Services">Accommodation and Food Services</option>
                              <option value="Other Services (except Public Administration)">Other Services (except Public Administration)</option>
                              <option value="Public Administration">Public Administration</option>
                           </select>
                        </div>
                        <div class="form-field">
                           <select required name="company_size">
                              <option disable="disable" value="">Company Size</option>
                              <option value="1-50">1-50</option>
                              <option value="51-100">51-100</option>
                              <option value="101-250">101-250</option>
                              <option value="251-500">251-500</option>
                              <option value="501-1,000">501-1,000</option>
                              <option value="1,001-5,000">1,001-5,000</option>
                              <option value="5,001-10,000">5,001-10,000</option>
                              <option value="10,001+">10,001+</option>
                           </select>
                        </div>
                        <div class="form-field">
                           <select required name="revenue">
                              <option selected="selected" disable="disable" value="">Revenue</option>
                              <option value="$0-$500K">$0-$500K</option>
                              <option value="$500K-$1M">$500K-$1M</option>
                              <option value="$1M-$10M">$1M-$10M</option>
                              <option value="$10M-$50M">$10M-$50M</option>
                              <option value="$50M-$100M">$50M-$100M</option>
                              <option value="$100M-$500M">$100M-$500M</option>
                              <option value="$500M+">$500M+</option>
                           </select>
                        </div>
                        <div class="form-field">
                           <select required name="registration_reason">
                              <option selected="selected" disable="disable" value="">Reason to register Affinos</option>
                              <option value="One Specific Solicitation - Registration is Required by Government Agency to Respond">One Specific Solicitation - Registration is Required by Government Agency to Respond</option>
                              <option value="Government Agency - Registration is Required to View and Respond to all Solicitations">Government Agency - Registration is Required to View and Respond to all Solicitations</option>
                              <option value="New to Government Selling - Just Exploring What Opportunities are Out there for my Business">New to Government Selling - Just Exploring What Opportunities are Out there for my Business</option>
                              <option value="Government Selling is Strategic to My Business Growth - Looking for Opportunities at a State, Regional or National Level">Government Selling is Strategic to My Business Growth - Looking for Opportunities at a State, Regional or National Level</option>
                           </select>
                        </div>
                        <div class="next-btn">
                           <button type="submit" class="orange-btn next-btn">Next</button>
                        </div>
                     </form>
                  </div>
                  <div role="tabpanel" class="tab-pane fade" id="Videos">
                     <div class="year-value-panel">
                        <h5>{{$checkout["package"]["name"]}}</h5>
                        <h5>${{$checkout["total_price"]}} <span> > </span></h5>
                     </div>
                     <form class="payment-form" method="post" id="address-form" onsubmit="event.preventDefault()" novalidate>
                        <div class="form-field no-full-field">
                           <input type="text" value="{{$user ? $user->name : ''}}" name="name" required placeholder="First Name">
                           <input type="text" value="{{$user ? $user->last_name : ''}}" name="last_name" required placeholder="Last Name">
                        </div>
                        <div class="form-field">
                           <input type="text" value="{{$user ? $user->address : ''}}" name="address_1" required placeholder="Address Line 1">
                        </div>
                        <div class="form-field">
                           <input type="text" name="address_2" placeholder="Address Line 2">
                        </div>
                        <div class="form-field no-full-field">
                           <input type="text" value="{{$user ? $user->city : ''}}" required name="city" placeholder="City">
                           <input type="text" value="{{$user ? $user->zip : ''}}" required name="zip" placeholder="zip">
                        </div>
                        <div class="form-field no-full-field">
                           <select name="country" required>
                              <option value="">Country</option>
                              <option @if($user && $user->country == 'US') selected @endif value="US">United States</option>
                           </select>
                           <select name="states" required>
                              <option value="">State</option>
                              @foreach($states as $state)
                                <option value="{{$state->state_code}}">{{$state->name}}</option>
                              @endforeach
                           </select>
                        </div>
                        <!-- <div class="switch-field">
                           <label class="switch">
                              <input name="sameaddress" type="checkbox" />
                              <div></div>
                           </label>
                           <label>Ship to my billing address</label>
                        </div> -->
                        <div class="next-btn">
                           <button type="submit" class="orange-btn next-btn">Next</button>
                        </div>
                     </form>
                  </div>
                  <div role="tabpanel" class="tab-pane fade" id="Events">
                     <div class="year-value-panel">
                        <h5>{{$checkout["package"]["name"]}}</h5>
                        <h5>${{$checkout["total_price"]}} <span> > </span></h5>
                     </div>
                     <div id="paymentResponse"></div>
                    <form action="{{ url('process-payment') }}" method="post" id="paymentFrm">
                        <div class="form-field">
                            <!--<label>CARD NUMBER</label>-->
                            <div id="card_number" class="field"></div>
                        </div>
                        <div class="input-50">
                            <div class="left">
                                <div class="">
                                    <!--<label>EXPIRY DATE</label>-->
                                    <div id="card_expiry" class="field"></div>
                                </div>
                            </div>
                            <div class="right">
                                <div class="">
                                    <!--<label>CVC CODE</label>-->
                                    <div id="card_cvc" class="field"></div>
                                </div>
                            </div>
                        </div>
                        <div class="next-btn">
                            <button type="submit" class="orange-btn next-btn" id="payBtn">Submit Payment</button>
                        </div>
                    </form>
                  </div>
               </div>
            </div>
         </div>
      </div>
      <script src="{{url('/')}}/front-end/assets/js/jquery.min.js"></script>
      <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/js/bootstrap.min.js"></script>
      <script src="{{url('/')}}/front-end/assets/js/roi-calculator.js"></script>
      <script src="{{url('/')}}/front-end/assets/js/slick.min.js"></script>
      <script src="{{url('/')}}/front-end/assets/js/verify-email-v2.js"></script>
      <script src="{{url('/')}}/front-end/assets/js/app.js"></script>
      <script src="{{url('/')}}/assets/js/validate.js"></script>
      <script>
        var stripe = Stripe('pk_test_51HabmJGexu1ceE1zM7nxILFWgFYa6qOPIlkJ2FynETWFS8yuXVl33VNbwT1fN4xd62QXRcF0wdhVBpXwt7IlRTaL00Dd3yK5MU');
        var checkout = '{!! json_encode($checkout) !!}';
        $("#account-details").validate({
            errorPlacement: function(error, element) {},
            submitHandler: function(ev) { 
                console.error("swithcing tabs");
                $('[href="#Videos"]').tab('show');
            }
        });
        $("#address-form").validate({
            errorPlacement: function(error, element) {},
            submitHandler: function(ev) { 
                console.error("swithcing tabs");
                $('[href="#Events"]').tab('show');

                // Create an instance of Elements.
                var elements = stripe.elements();

                ////////
                var style = {
                    base: {
                        fontWeight: 400,
                        fontFamily: 'Roboto, Open Sans, Segoe UI, sans-serif',
                        fontSize: '16px',
                        lineHeight: '50px',
                        color: '#555',
                        padding: '15px',
                        backgroundColor: '#fff',
                        '::placeholder': {
                            color: '#888',
                        },
                    },
                    invalid: {
                        color: '#eb1c26',
                    }
                };

                var cardElement = elements.create('cardNumber', {
                    style: style
                });
                cardElement.mount('#card_number');

                var exp = elements.create('cardExpiry', {
                    'style': style
                });
                exp.mount('#card_expiry');

                var cvc = elements.create('cardCvc', {
                    'style': style
                });
                cvc.mount('#card_cvc');

                // Validate input of the card elements
                var resultContainer = document.getElementById('paymentResponse');
                cardElement.addEventListener('change', function(event) {
                    if (event.error) {
                        resultContainer.innerHTML = '<p>'+event.error.message+'</p>';
                    } else {
                        resultContainer.innerHTML = '';
                    }
                });

                // Get payment form element
                var form = document.getElementById('paymentFrm');

                // Create a token when the form is submitted.
                form.addEventListener('submit', function(e) {
                    e.preventDefault();
                    createToken(cardElement, resultContainer);

                });
                ///////
            }
        });
        // Create single-use token to charge the user
        function createToken(cardElement, resultContainer) {
            stripe.createToken(cardElement).then(function(result) {
                if (result.error) {
                    // Inform the user if there was an error
                    resultContainer.innerHTML = '<p>'+result.error.message+'</p>';
                } else {
                    // Send the token to your server
                    stripeTokenHandler(result.token);
                }
            });
        }

        // Callback to handle the response from stripe
        function stripeTokenHandler(token) {
            // Insert the token ID into the form so it gets submitted to the server
            var formss = document.getElementById('paymentFrm');
            var hiddenInput = document.createElement('input');
            hiddenInput.setAttribute('type', 'hidden');
            hiddenInput.setAttribute('name', 'stripeToken');
            hiddenInput.setAttribute('value', token.id);
            formss.appendChild(hiddenInput);
            
            // Submit the form
            // formss.submit();
            var form1 = $("#account-details");
            var form2 = $("#address-form");
            var form3 = $("#paymentFrm");
            $.ajax({
                type: 'post',
                url: '{{url("/process-payment")}}',
                data: {
                    _token: '{{csrf_token()}}',
                    account_details: form1.serialize(),
                    address_from: form2.serialize(),
                    payment_stripe: form3.serialize(),
                    checkout_details: checkout,
                },
                success: function(response) {
                    var resp = JSON.parse(response);
                    if (resp.status == "success") {
                        window.parent.orderSuccess(resp.order_id);
                    } else {
                        window.parent.orderFailed(resp.order_id);    
                    }
                }
            });
        }

        function closepopup() {
         window.parent.closePaymentPopup();
        }
      </script>
   </body>
</html>