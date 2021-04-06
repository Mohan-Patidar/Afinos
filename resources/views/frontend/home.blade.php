@extends('layouts.frontendlayout')
@section('content')
<main>
    <div class="jumbotron relative hidden-overflow " style="background-image:url({{url('/')}}/front-end/uploads/banners/home-background.jpg)">

        <div class="large-container">
            <div class="text-center">
                <h1 class="white mb-10">Government Bids That Matter</h1>
                <h2 class="white mb-40">We search, score and deliver the relevant opportunities for your business.</h2>
                <a href="{{url('/pricing')}}" class="orange-btn ml-15 mr-15 mb-sm-20" id="banner-button-orange">
                    Get Affinos Now
                </a>
                <a href="{{url('/')}}" class="white-btn  ml-15 mr-15" id="banner-button-white">
                    Try for Free
                </a>
            </div>
        </div>
    </div>

    <div class="container">
        <div class="text-center mt-100 mb-40 mb-lg-60 mt-lg-80 mt-md-50 mb-md-40">
            <span class="large-quote">“More Relevant Bids”</span>
        </div>
        <div class="text-center row">
            <div class="col-lg-10 offset-lg-1">
                <h2 class="mb-20">Join the hundreds of thousands of suppliers simplifying their government bid search
                </h2>
            </div>
        </div>
    </div>

    <div class="large-container leaders">

        <div class="row align-center justify-center">

            <img src="{{url('/')}}/front-end/uploads/logos/pitney-bowes.png" alt="Pitney Bowes" class="mt-20 mt-md-30 mb-20 mr-25 ml-25">
            <img src="{{url('/')}}/front-end/uploads/logos/hartford.png" alt="Hartford" class="mt-20 mt-md-30 mb-20 mr-25 ml-25">
            <img src="{{url('/')}}/front-end/uploads/logos/schneider.png" alt="Schneider" class="mt-20 mt-md-30 mb-20 mr-25 ml-25">
            <img src="{{url('/')}}/front-end/uploads/logos/thyssen-krupp.png" alt="Thyssen Krupp" class="mt-20 mt-md-30 mb-20 mr-25 ml-25">
            <img src="{{url('/')}}/front-end/uploads/logos/cisco.png" alt="Cisco" class="mt-20 mt-md-30 mb-20 mr-25 ml-25">

        </div>

        <div class="row mt-100 mb-140 mb-md-100 align-center justify-center">
            <div class="col-lg-6 mb-lg-30">
                <div class="iframe-container">
                    <iframe src="https://player.vimeo.com/video/270154655" frameborder="0"
                        allow="autoplay; encrypted-media" allowfullscreen class="center-img-large"></iframe>

                </div>
            </div>
            <div class="col-lg-6">
                <h2 class="h1 mb-20">Built for Relevance</h2>
                <p class="mb-30 pr-50">Affinos is the government bid notification service that relies on machine
                    learning technology to find bids that should be added to your sales pipeline. We call it our
                    Relevance Engine. It leverages Artificial Intelligence (AI) to learn what type of bids matter to
                    your business – delivering the most relevant, winnable bids on a daily basis.</p>
            </div>
        </div>
    </div>

    <div class="hidden-overflow mt-n-100">
        <div class="large-container computer-container mt-50 mt-sm-40">
            <div class="row">
                <div class="col-xl-6 pl-140 pl-md-25 mt-140 mt-lg-40 mr-lg-50 mr-sm-20">
                    <div class="floating-icon relative">
                        <img alt="Check" src="{{url('/')}}/front-end/uploads/icons/check.svg">
                        <h2 class="h1 mb-20">Way Beyond Matching </h2>
                    </div>
                    <p class="mb-80 mb-sm-50">Our Relevance Engine expands your search far beyond basic matching and
                        limited profile keywords. That’s how Affinos reveals those often “hidden” bids – the ones that
                        may not perfectly match your keywords, but do perfectly match your capabilities. </p>
                    <div class="floating-icon relative">
                        <img alt="Bulb" src="{{url('/')}}/front-end/uploads/icons/bulb.svg">
                        <h2 class="h1 mb-20"> Smarter Tech for Smarter Government Bidding</h2>
                    </div>
                    <p class="mb-80 mb-sm-50">Affinos is able to “think” outside the box and automatically adjust search
                        parameters based on your behavior. The more you use our application, the more the Relevance
                        Engine learns about your bidding preferences. </p>
                </div>
                <div class="col-xl-6"><img alt="Affinos Computer Mockup"
                        src="{{url('/')}}/front-end/uploads/images/bidsync_computer_mockup.png"
                        class="computer ml-lg-auto mr-lg-auto mt-lg-60"></div>
            </div>
        </div>
    </div>

    <div class="grey-bar pt-80 pb-100 mt-n-100 pb-lg-60"></div>

    <div class="container">
        <div class="text-center mt-120 mb-120 row mt-lg-80 mb-lg-80">
            <div class="col-lg-10 offset-lg-1">
                <h2 class=" orange large-quote">100,000</h2>
                <h3 class="h1 mb-20">Bids Every Month</h3>
                <p>We notify our customers of more than 100,000 government bids each month from states, municipalities,
                    counties, school districts, port authorities, community colleges, universities as well as federal
                    and military agencies.</p>
            </div>
        </div>
    </div>

    <div class="orange-background pt-90 pb-90 pb-lg-70 pt-lg-70" style="background-color: #145fa1">
        <div class="container-fluid">
            <div class="text-center">
                <h2 class="white h1 mt-20 mb-20">Save Time. Bid Smart. Win More.</h2>
                <a href="{{url('/pricing')}}" class="big-white-btn mt-20">Get Affinos Pro Now</a>
            </div>
        </div>
    </div>
   </main>
@endsection