@extends('layouts.frontendlayout')
@section('content')
<main>
        <div class="img-background small-jumbotron"
        style="background-image: url({{url('/')}}/front-end/uploads/banners/customer-3.2-ns-darker.png)">
        <div class="text-center small-jumbotron container mt-30">
            <h1 class="white">500,000+ Suppliers Are Bidding on Government Contracts With Affinos</h1>
        </div>
    </div>

    <div class="large-container text-center mt-100 mb-100 mt-lg-80 mb-lg-80 mt-sm-40 mb-sm-20">
        <div class="quote-slide">
            <div>
                <span class="large-quote ">“10 out of 10–</span>
                <h2 class="h1 mb-20">I would definitely recommend!”</h2>
            </div>
            <div>
                <span class="large-quote ">“It’s my Secret Weapon!”</span>
                <h2 class="h1 mb-20"></h2>
            </div>
            <div>
                <span class="large-quote ">“5 out of 5 Stars</span>
                <h2 class="h1 mb-20">– Very Helpful!”</h2>
            </div>
        </div>
    </div>
    <div class="v-light-grey-background pt-100 pb-100 pt-lg-80 pb-lg-60 ">
        <div class="large-container text-center">
            <h2 class="h1 mb-10">The ROI Bidding on Government Contracts with Affinos</h2>
            <p class="large mb-60">Example Customer Successes</p>
            <div class="row text-center align-center justify-center">
                <div class="col-md-3 col-sm-6 mb-70 mb-md-40">
                    <img src="{{url('/')}}/front-end/uploads/icons/minutes.svg" alt="Minutes" class="mb-20 ">
                    <h3 class="blue mb-5">Minutes</h3>
                    <p>Average Customer <br />
                        Time Savings Per Day</p>
                </div>
                <div class="col-md-3 col-sm-6 mb-70 mb-md-40">
                    <img src="{{url('/')}}/front-end/uploads/icons/80-reduction.svg" alt="80 Reduction" class="mb-20 ">
                    <h3 class="blue mb-5">Reduction</h3>
                    <p>In Time Reviewing <br />
                        Bid Emails</p>
                </div>
                <div class="col-md-3 col-sm-6 mb-70 mb-md-40">
                    <img src="{{url('/')}}/front-end/uploads/icons/increase.svg" alt="Increase" class="mb-20 ">
                    <h3 class="blue mb-5">Increase</h3>
                    <p>In Bids Responded</p>
                </div>
                <div class="col-md-3 col-sm-6 mb-70 mb-md-40">
                    <img src="{{url('/')}}/front-end/uploads/icons/30-day.svg" alt="30 Day" class="mb-20 ">
                    <h3 class="blue mb-5">Days</h3>
                    <p>Time to Pay Back</p>
                </div>
            </div>
            <div class="row text-center align-center justify-center">
                <div class="col-md-3 col-sm-6 mb-70 mb-md-40">
                    <img src="{{url('/')}}/front-end/uploads/icons/2.5-increase.svg" alt="2 5 Increase" class="mb-20 ">
                    <h3 class="blue mb-5">Increase</h3>
                    <p>In Number of Bids <br />
                        Responded To</p>
                </div>
                <div class="col-md-3 col-sm-6 mb-70 mb-md-40">
                    <img src="{{url('/')}}/front-end/uploads/icons/state-contracts.svg" alt="State Contracts" class="mb-20 ">
                    <h3 class="blue mb-5">State Contracts</h3>
                    <p>Won due to Affinos</p>
                </div>
                <div class="col-md-3 col-sm-6 mb-70 mb-md-40">
                    <img src="{{url('/')}}/front-end/uploads/icons/reduction.svg" alt="Reduction" class="mb-20 ">
                    <h3 class="blue mb-5">Reduction</h3>
                    <p>In Number of Daily Bid <br />
                        Emails Reviewed</p>
                </div>
            </div>
        </div>
    </div>

    <div class="large-container text-center mb-40 mb-lg-40 mt-100">
        <h2 class="h1 mb-80">Hear From Our Customers</h1>
            <div class="row  ">
                <div class="col-md-6 col-lg-4 pr-50 pl-50  mb-70 mb-md-40 ml-auto mr-auto pr-0 pl-0 pl-lg-15 pr-lg-15">
                    <img src="{{url('/')}}/front-end/uploads/icons/relevance.svg" alt="Relevance" class="mb-15">
                    <h4 class="orange text-uppercase mb-15">Relevance</h4>
                    <p>“Affinos shows me lots of bid that are targeted to my field. Very helpful!”<br />
                        <br />
                        <br />
                        <br />
                    </p>
                </div>
                <div class="col-md-6 col-lg-4 pr-50 pl-50  mb-70 mb-md-40 ml-auto mr-auto pr-0 pl-0 pl-lg-15 pr-lg-15">
                    <img src="{{url('/')}}/front-end/uploads/icons/time.svg" alt="Time" class="mb-15">
                    <h4 class="orange text-uppercase mb-15">Time Savings</h4>
                    <p>“Affinos does all the research which saves us time. If we had to do this, we would have to do
                        research and find out all websites for all different counties, municipalities, etc. and that
                        would take too much time.”</p>
                </div>
                <div class="col-md-6 col-lg-4 pr-50 pl-50  mb-70 mb-md-40 ml-auto mr-auto pr-0 pl-0 pl-lg-15 pr-lg-15">
                    <img src="{{url('/')}}/front-end/uploads/icons/value.svg" alt="Value" class="mb-15">
                    <h4 class="orange text-uppercase mb-15">Business Value</h4>
                    <p>“Affinos is worth every penny. We won our first deal within 2 weeks and realized full ROI in less
                        than 30 days.”</p>
                </div>
                <div class="col-md-6 col-lg-4 pr-50 pl-50  mb-70 mb-md-40 ml-auto mr-auto pr-0 pl-0 pl-lg-15 pr-lg-15">
                    <img src="{{url('/')}}/front-end/uploads/icons/speed.svg" alt="Speed" class="mb-15">
                    <h4 class="orange text-uppercase mb-15">Speed</h4>
                    <p>“10 of 10: Very timely getting the information to us.”</p>
                </div>
                <div class="col-md-6 col-lg-4 pr-50 pl-50  mb-70 mb-md-40 ml-auto mr-auto pr-0 pl-0 pl-lg-15 pr-lg-15">
                    <img src="{{url('/')}}/front-end/uploads/icons/advantage.svg" alt="Advantage" class="mb-15">
                    <h4 class="orange text-uppercase mb-15">Competitive Advantage</h4>
                    <p>“We need to keep Affinos a secret so that we have less competition.”</p>
                </div>
                <div class="col-md-6 col-lg-4 pr-50 pl-50  mb-70 mb-md-40 ml-auto mr-auto pr-0 pl-0 pl-lg-15 pr-lg-15">
                    <img src="{{url('/')}}/front-end/uploads/icons/email.svg" alt="Email" class="mb-15">
                    <h4 class="orange text-uppercase mb-15">Daily Email Notifications</h4>
                    <p>&quot;Affinos makes it easy because they send you an email every morning – here are the bids you
                        specialize in.&quot;</p>
                </div>
                <div class="col-md-6 col-lg-4 pr-50 pl-50  mb-70 mb-md-40 ml-auto mr-auto pr-0 pl-0 pl-lg-15 pr-lg-15">
                    <img src="{{url('/')}}/front-end/uploads/icons/bid.svg" alt="Bid" class="mb-15">
                    <h4 class="orange text-uppercase mb-15">Bid Database Search</h4>
                    <p>“Having a searchable database is one of the strongest features. Even looking up what’s been
                        issued for a historical reference. I could go into the site and look the opportunity up and see
                        why I didn’t win it.”</p>
                </div>
            </div>
    </div>
    <div class="large-container text-center pt-40 mb-120 mb-lg-80 leaders">
        <h2 class="mb-50 h1 black">Industry Leading Suppliers trust Affinos <br> to deliver relevant bids to their
            business.</h2>

        <div class="row align-center justify-center mb-20">
            <img src="{{url('/')}}/front-end/uploads/logos/accenture.svg" alt="Accenture" class="mt-20 mt-md-30 mb-20 pr-25 pl-25 icon-rows">
            <img src="{{url('/')}}/front-end/uploads/logos/century-link.svg" alt="Century Link"
                class="mt-20 mt-md-30 mb-20 pr-25 pl-25 icon-rows">
            <img src="{{url('/')}}/front-end/uploads/logos/hp.svg" alt="Hp" class="mt-20 mt-md-30 mb-20 pr-25 pl-25 icon-rows">
            <img src="{{url('/')}}/front-end/uploads/logos/aramark.svg" alt="Aramark" class="mt-20 mt-md-30 mb-20 pr-25 pl-25 icon-rows">
            <img src="{{url('/')}}/front-end/uploads/logos/ford.svg" alt="Ford" class="mt-20 mt-md-30 mb-20 pr-25 pl-25 icon-rows">
            <img src="{{url('/')}}/front-end/uploads/logos/IBM.svg" alt="Ibm" class="mt-20 mt-md-30 mb-20 pr-25 pl-25 icon-rows">
            <img src="{{url('/')}}/front-end/uploads/logos/kiewit.svg" alt="Kiewit" class="mt-20 mt-md-30 mb-20 pr-25 pl-25 icon-rows">
            <img src="{{url('/')}}/front-end/uploads/logos/GE.svg" alt="Ge" class="mt-20 mt-md-30 mb-20 pr-25 pl-25 icon-rows">
            <img src="{{url('/')}}/front-end/uploads/logos/mckesson.svg" alt="Mckesson" class="mt-20 mt-md-30 mb-20 pr-25 pl-25 icon-rows">
            <img src="{{url('/')}}/front-end/uploads/logos/l3.svg" alt="L3" class="mt-20 mt-md-30 mb-20 pr-25 pl-25 icon-rows">
            <img src="{{url('/')}}/front-end/uploads/logos/csc.png" alt="Csc" class="mt-20 mt-md-30 mb-20 pr-25 pl-25 icon-rows">

            <img src="{{url('/')}}/front-end/uploads/logos/roadsafe.svg" alt="Roadsafe" class="mt-20 mt-md-30 mb-20 pr-25 pl-25 icon-rows">

            <img src="{{url('/')}}/front-end/uploads/logos/aspen-refrigerent.svg" alt="Aspen Refrigerent"
                class="mt-20 mt-md-30 mb-20 pr-25 pl-25 icon-rows">

            <img src="{{url('/')}}/front-end/uploads/logos/bluelinerentals.svg" alt="Bluelinerentals"
                class="mt-20 mt-md-30 mb-20 pr-25 pl-25 icon-rows">

            <img src="{{url('/')}}/front-end/uploads/logos/wastezero.svg" alt="Wastezero" class="mt-20 mt-md-30 mb-20 pr-25 pl-25 icon-rows">

            <img src="{{url('/')}}/front-end/uploads/logos/whirex.svg" alt="Whirex" class="mt-20 mt-md-30 mb-20 pr-25 pl-25 icon-rows">

            <img src="{{url('/')}}/front-end/uploads/logos/kinnucan.svg" alt="Kinnucan" class="mt-20 mt-md-30 mb-20 pr-25 pl-25 icon-rows">

            <img src="{{url('/')}}/front-end/uploads/logos/nor-cal.svg" alt="Nor Cal" class="mt-20 mt-md-30 mb-20 pr-25 pl-25 icon-rows">
            <img src="{{url('/')}}/front-end/uploads/logos/brightview.svg" alt="Brightview" class="mt-20 mt-md-30 mb-20 pr-25 pl-25 icon-rows">
            <img src="{{url('/')}}/front-end/uploads/logos/fpi-security.svg" alt="Fpi Security"
                class="mt-20 mt-md-30 mb-20 pr-25 pl-25 icon-rows">
            <img src="{{url('/')}}/front-end/uploads/logos/adamson.svg" alt="Adamson" class="mt-20 mt-md-30 mb-20 pr-25 pl-25 icon-rows">
            <img src="{{url('/')}}/front-end/uploads/logos/lincoln-training.svg" alt="Lincoln Training"
                class="mt-20 mt-md-30 mb-20 pr-25 pl-25 icon-rows">
            <img src="{{url('/')}}/front-end/uploads/logos/holzberg.svg" alt="Holzberg" class="mt-20 mt-md-30 mb-20 pr-25 pl-25 icon-rows">
        </div>
    </div>

    <div class="orange-background pt-90 pb-90 pb-lg-70 pt-lg-70">
        <div class="container-fluid">
            <div class="text-center">
                <h2 class="white h1 mt-20 mb-20">Save Time. Bid Smart. Win More.</h2>
                <a href="{{url('/pricing')}}" class="big-white-btn mt-20">Get Affinos Now</a>
            </div>
        </div>
    </div>
    </main>
@endsection