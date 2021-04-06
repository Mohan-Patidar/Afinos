@extends('layouts.frontendlayout')
@section('content')
<main>
    <div class="img-background small-jumbotron" style="background-image: url({{url('/')}}/front-end/uploads/banners/pricing_banner.jpg)">
        <div class="text-center small-jumbotron container mt-30">
            <h1 class="white">Your order placed successfully</h1>
        </div>
    </div>

    <div class="medium-container mt-60 mb-50">
        <div class="order-placed-sec">
            <h3 class="h1 mb-40">Order Detail</h3>
           <div class="row">
               <div class="col-md-7">
                <ul>
                <li><p class="large">order id: {{$order->id}}</p></li>
                <li><p class="large">Plan Name: {{$order->package->name}}</p></li>
                <li><p class="large">Subscription Type: {{$order->package->recurrance->name}}</p></li>
                <li><p class="large"> Total Amount:  {{$order->order_total}}</p></li>
                <li><p class="large">Additional Users: {{$order->additional_qty}}</p></li>
            </ul>
           </div>
           <div class="col-md-5">
            <a href="{{url('view-order') . "/" . $order->id}}" class="big-orange-btn large-btn mb-md-20 text-center">View Details</a>
           </div>
           </div>
        </div>
    </div>
    <div class="container mb-100 mt-100 mt-sm-40 mb-sm-40">
        <div class="text-center">
            <h2 class=" h1 mt-20 mb-40">Not Sure What Government Bidding Plan Is Best For Your Business?</h2>
            <p class="large mb-40">Visit our compare plans page to see a side by side comparison of our Basic, State
                Pro, Regional Pro, and National Pro plans. </p> <a href=""
                class="big-orange-btn large-btn mb-md-20">Compare Plans</a>
        </div>
    </div>
    <div class="orange-background pt-90 pb-90 pb-lg-70 pt-lg-70" style="background-color: #145fa1">
        <div class="container-fluid">
            <div class="text-center">
                <h2 class="white h1 mt-20 mb-20">Save Time. Bid Smart. Win More.</h2>
            </div>
        </div>
    </div>
   </main>
   @endsection

   @section('additionalscript')
    <script>
        function changeRecurrance(recurranceId) {
           $(".recurrances").removeClass("hidden");
           $(".recurrances").addClass("hidden");
           $("#" + recurranceId).removeClass("hidden");
        }
    </script>
   @endsection