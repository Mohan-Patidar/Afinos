@extends('layouts.frontendlayout')
@section('content')
<main>
    <div class="img-background small-jumbotron" style="background-image: url({{url('/')}}/front-end/uploads/banners/pricing_banner.jpg)">
        <div class="text-center small-jumbotron container mt-30">
            <h1 class="white">Experience the Pro Advantage</h1>
        </div>
    </div>

    <div class="medium-container mt-60 mb-50">
        <div class="text-center mb-50 service-lengths flex justify-center">
            @foreach($recurrances as $index => $recurrace)
            @php 
            $recur = str_replace(' ', '_', $recurrace->name);
            @endphp
            <div class="inline-block  ml-20 mr-20 ml-sm-0 mr-sm-15 smol serivce-length {{$index == 0 ? 'active' : ''}}" onclick="changeRecurrance('prc{{$recur}}')">
                <span></span>
                <div class="length-name mt-10 mb-5">{{ $recurrace->name }}</div>
            </div>
            @endforeach
        </div>
        @foreach($recurrances as $index => $recurrace)
            @php 
            $recur = str_replace(' ', '_', $recurrace->name);
            @endphp
            <div class="row recurrances {{$index == 0 ? '' : 'hidden'}}" id="prc{{$recur}}">
            @foreach($recurrace->packages as $package)
            <div class="pricing-block  text-center col-lg-4 col-md-12 mb-md-30">
                <div class="light-grey-background service-type pt-25 pb-20 top-curved-border">
                    <h3>{{ $package->name }}</h3>
                </div>
                <div class="inner pb-40 bottom-curver-border">

                    <span class="price inline-block mt-40 mb-20 ">
                        <span class="pricing-info-large">
                            <div class="flex">{{ $package->price }}<div class="text-left"><sup>.00</sup><sub>/Month</sub></div>
                            </div>
                            <div class="smol mt-10">Billed {{ $recurrace->name }}</div>
                        </span>
                    </span>

                    <h5 class="orange mb-10">{{ $package->headline }}</h5>
                    <div class="mb-20 text-center">
                        {!! $package->description !!}
                    </div>
                    <a class="long-btn" href="{{url('/checkout')}}/{{ $package->id }}">Get {{ $package->name }}</a>
                </div>
            </div>
            @endforeach
        </div>
        @endforeach
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