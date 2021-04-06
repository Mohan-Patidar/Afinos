@extends('layouts.frontendlayout')
@section('content')
<main>
        <div class="img-background small-jumbotron" style="background-image: url({{url('/')}}/front-end/uploads/banners/features_banner.jpg)">
            <div class="text-center small-jumbotron container mt-30">
                <h1 class="white">How To Bid On Government Contracts With Affinos</h1>
            </div>
        </div>

        <span class="stop" id="how-bidsync-works"></span>
        <div class="large-container pt-70 hidden-br-md">
            <div class="row justify-center align-items reverse-wrap-large hidden-br-md">
                <div
                    class="col-xl-6 offset-xl-0 col-lg-8 pl-0 pr-50 text-center flex align-center justify-center pl-lg-15 pr-lg-15 mb-lg-50 pr-0">
                    <div>
                        <h2 class="h1 mb-20">How Affinos Works</h2>
                        <p>Affinos is the government bid application that uses Artificial Intelligence to find the right
                            bids for your business. </p>
                    </div>
                </div>
                <div class="col-xl-6 mb-lg-60">

                    <img src="{{url('/')}}/front-end/uploads/icons/circle.svg" alt="Circle" class="center-img-large">

                </div>
            </div>
        </div>

        <span class="stop" id="relevance-engine"></span>
        <div class="large-container mb-100 hidden-br-md">
            <div class="row justify-center mb-60 align-items mb-sm-0">
                <div class="col-lg-5 right-direction mb-lg-50"><img alt="Completely Connected"
                        src="{{url('/')}}/front-end/uploads/icons/Completely-Connected.svg" class="center-img-md"></div>
                <div class="col-lg-5 mb-lg-60 offset-xl-1 flex align-center justify-center hidden-br-md mb-sm-20">
                    <div>
                        <h2 class="h1 mb-20">AI-Powered<br />
                            Relevance Engine</h2>
                        <p>We feature an AI-powered Relevance Engine. Which means our application learns from your
                            behavior.
                            Our engine keeps track of what you open, what you bid on, what you don’t …and more. The
                            result?
                            You get the most relevant bid opportunities for your business…and discover new opportunities
                            simple keyword matching would miss.</p>
                    </div>
                </div>
            </div>
        </div>

        <span class="stop" id="database"></span>
        <div class="container mt-100">
            <div class="row text-center">
                <div class="col-sm-10 offset-sm-1">
                    <h2 class="h1 mb-30">Largest Database of Government Contract Bid Opportunities</h2>
                    <p class="mb-70 mb-sm-40">
                    <p>We use advanced search and aggregation technology to check thousands of agency websites on a near
                        real-time basis. With Affinos, you know about new bid opportunities as soon as they are
                        released. No more rushed responses or lost bid opportunities due to late notification.</p>
                    </p>
                </div>
            </div>
            <div class="row mb-100 mb-sm-50 text-center">
                <div class="col-sm-4 text-center mb-20">
                    <h2 class="h1 orange">100,000+</h2>
                    <h3>Agencies Monitored </h3>
                </div>
                <div class="col-sm-4 text-center mb-20">
                    <h2 class="h1 orange">100,000</h2>
                    <h3>New Government<br />
                        Bid Opportunities per Month</h3>
                </div>
                <div class="col-sm-4 text-center mb-20">
                    <h2 class="h1 orange">$2 Billion</h2>
                    <h3>in New Government<br />
                        Business per Month</h3>
                </div>
            </div>
            <div class="row text-center mb-150 mb-sm-100">
                <div class="col-lg-12"><img alt="{{url('/')}}/front-end//uploads/images/bidsync_coverage@8x.png"
                        src="{{url('/')}}/front-end/uploads/images/bidsync_coverage%408x.png" class="img-responsive map-image"></div>
            </div>
        </div>

        <span class="stop" id="email-notifications"></span>
        <div class="hidden-overflow">
            <div class="container hidden-br-md ">
                <div class="row mb-50 mb-lg-0 align-center justify-center reverse-wrap-large">
                    <div class="col-md-6 col-md-offset-1 col-lg-offset-0 mb-100">
                        <h2 class="h1 inline-block">Actionable Daily<br>
                            Email Notifications</h2>
                        <ul class="smol-dots">
                            <li class="mb-20">Daily Email Alerts</li>
                            <li class="mb-20">Key Bid Information</li>
                            <li class="mb-20">Direct Link to the Agency</li>
                            <li class="mb-20">Rate Each Bid</li>
                        </ul>
                    </div>
                    <div class="col-md-5 col-lg-6 right-direction">
                        <img alt="Mobile Phone" class="center-img-sm phone-img"
                            src="{{url('/')}}/front-end/assets/images/bidsync_email_mobile.png">
                    </div>
                </div>
            </div>
        </div>

        <span class="stop" id="search-tools"></span>
        <div class="large-container mb-100 hidden-br-md">
            <div class="row align-center justify-center">
                <div class="col-lg-6 right-direction"><img alt="" src="{{url('/')}}/front-end/assets/images/bidsync_tablet_search.png"
                        class="center-img-md  tablet-img"></div>
                <div class="col-lg-5 offset-lg-1">
                    <h2 class="h1 mb-20">Advanced Search Tools</h2>
                    <p>What good is the largest database of bid opportunities if you don’t know how to navigate it?
                        Affinos
                        makes sure you don’t waste any time searching our site – but instead easily discover exactly
                        what
                        you are looking for.</p>
                    <ul class="pl-20 mb-40 smol-dots">
                        <li class="mb-20">Filter by Key Attributes: Geography, Agency Type, Due Date</li>
                        <li class="mb-20">Save Searches</li>
                        <li class="mb-20">Visual Relevance Indicator</li>
                    </ul>
                </div>
            </div>
        </div>

        <span class="stop" id="bid-summary"></span>
        <div class="hidden-overflow">
            <div class="large-container mb-70 hidden-br-md">
                <div class="row">
                    <div class="col-sm-9">

                    </div>
                </div>
                <div class="row  reverse-wrap-medium align-center">
                    <div class="col-lg-5">

                        <div class="">
                            <h2 class="h1 mb-20">Easy to Review Government Contract Bids Summary</h2>
                            <p class="mb-40">Our Relevance Engine presents related bids you may be interested in - based
                                on
                                what it has learned about your bidding preferences. No other service does this. Now,
                                that’s
                                a competitive advantage. </p>
                            <ul class="">
                                <li class="mb-20">Bid Agency</li>
                                <li class="mb-20">Summary Descriptions</li>
                                <li class="mb-20">Key Dates</li>
                                <li class="mb-20">Links to Relevant Documents</li>
                                <li class="mb-20">Ability to Rate the Bid Detail</li>

                            </ul>

                        </div>
                    </div>

                    <div class="relative laptop-holder col-lg-7">

                        <img src="{{url('/')}}/front-end/assets/images/screenshot-mobile.png" alt="Laptop Screen" class="center-img-sm hidden">

                        <img src="{{url('/')}}/front-end/assets/images/laptop-screen.png" alt="Laptop Screen"
                            class="center-img-md hidden-sm lappy-screen">

                        <div class="laptop-slider-container hidden-sm">

                            <div class="slide-laptop">
                                <img src="{{url('/')}}/front-end/uploads/images/screenshot-1.jpg" alt="Screenshot 1">
                                <img src="{{url('/')}}/front-end/uploads/images/screenshot-2.jpg" alt="Screenshot 2">
                                <img src="{{url('/')}}/front-end/uploads/images/screenshot-3.jpg" alt="Screenshot 3">

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <span class="stop" id="periscope-agency-network"></span>
        <div class="container mb-150 mb-lg-100 mb-sm-60">
            <div class="row">
                <div class="text-center col-lg-10 offset-lg-1">
                    <h2 class="h1 mb-30">Exclusive Access to the Periscope Agency Network</h2>
                    <p class="mb-50">With Affinos, you gain real-time to access to bid opportunities from agencies that
                        partner with Periscope Holdings, Affinos parent company. More public sector agencies partner
                        with
                        Periscope for procurement and sourcing solutions than any other provider. And, many of these
                        agencies can only be accessed through Affinos. Hundreds of agencies, thousands of bid
                        opportunities.
                        You gain a competitive advantage.</p>
                </div>
            </div>

            <div class="row periscope-agency align-center justify-center">

                <img src="{{url('/')}}/front-end/uploads/logos/baltimore_f071d6c3813218663e5c2450cdafb07c_180228_171023.png"
                    alt="Baltimore F071D6C3813218663E5C2450Cdafb07C"
                    class="img-responsive  mr-10 ml-10 mb-10 mt-10 pl-sm-10 pr-sm-10">

                <img src="{{url('/')}}/front-end/uploads/logos/State-of-Oregon-Seal.png" alt="State Of Oregon Seal"
                    class="img-responsive  mr-10 ml-10 mb-10 mt-10 pl-sm-10 pr-sm-10">

                <img src="{{url('/')}}/front-end/uploads/logos/california_f071d6c3813218663e5c2450cdafb07c.png"
                    alt="California F071D6C3813218663E5C2450Cdafb07C"
                    class="img-responsive  mr-10 ml-10 mb-10 mt-10 pl-sm-10 pr-sm-10">

                <img src="{{url('/')}}/front-end/uploads/logos/City-of-Philadelphia-Seal-LOGO_1.png" alt="City Of Philadelphia Seal Logo 1"
                    class="img-responsive  mr-10 ml-10 mb-10 mt-10 pl-sm-10 pr-sm-10">

                <img src="{{url('/')}}/front-end/uploads/logos/fort-worth_f071d6c3813218663e5c2450cdafb07c.png"
                    alt="Fort Worth F071D6C3813218663E5C2450Cdafb07C"
                    class="img-responsive  mr-10 ml-10 mb-10 mt-10 pl-sm-10 pr-sm-10">

                <img src="{{url('/')}}/front-end/uploads/logos/Harris_f071d6c3813218663e5c2450cdafb07c.png"
                    alt="Harris F071D6C3813218663E5C2450Cdafb07C"
                    class="img-responsive  mr-10 ml-10 mb-10 mt-10 pl-sm-10 pr-sm-10">

                <img src="{{url('/')}}/front-end/uploads/logos/illinois_f071d6c3813218663e5c2450cdafb07c.png"
                    alt="Illinois F071D6C3813218663E5C2450Cdafb07C"
                    class="img-responsive  mr-10 ml-10 mb-10 mt-10 pl-sm-10 pr-sm-10">

                <img src="{{url('/')}}/front-end/uploads/logos/knox_f071d6c3813218663e5c2450cdafb07c.png"
                    alt="Knox F071D6C3813218663E5C2450Cdafb07C"
                    class="img-responsive  mr-10 ml-10 mb-10 mt-10 pl-sm-10 pr-sm-10">

                <img src="{{url('/')}}/front-end/uploads/logos/MA_f071d6c3813218663e5c2450cdafb07c.png"
                    alt="Ma F071D6C3813218663E5C2450Cdafb07C"
                    class="img-responsive  mr-10 ml-10 mb-10 mt-10 pl-sm-10 pr-sm-10">

                <img src="{{url('/')}}/front-end/uploads/logos/maryland_f071d6c3813218663e5c2450cdafb07c.png"
                    alt="Maryland F071D6C3813218663E5C2450Cdafb07C"
                    class="img-responsive  mr-10 ml-10 mb-10 mt-10 pl-sm-10 pr-sm-10">

                <img src="{{url('/')}}/front-end/uploads/logos/nevada_seal.png" alt="Nevada Seal"
                    class="img-responsive  mr-10 ml-10 mb-10 mt-10 pl-sm-10 pr-sm-10">

                <img src="{{url('/')}}/front-end/uploads/logos/new-jersey_f071d6c3813218663e5c2450cdafb07c.png"
                    alt="New Jersey F071D6C3813218663E5C2450Cdafb07C"
                    class="img-responsive  mr-10 ml-10 mb-10 mt-10 pl-sm-10 pr-sm-10">

                <img src="{{url('/')}}/front-end/uploads/logos/palm-beach-county-logo.png" alt="Palm Beach County Logo"
                    class="img-responsive  mr-10 ml-10 mb-10 mt-10 pl-sm-10 pr-sm-10">

                <img src="{{url('/')}}/front-end/uploads/logos/transparent-tc-logo.gif" alt="Transparent Tc Logo"
                    class="img-responsive  mr-10 ml-10 mb-10 mt-10 pl-sm-10 pr-sm-10">

            </div>
        </div>

        <div class="img-background pt-120 pb-120 pt-lg-80 pb-lg-80 pb-md-50 pt-md-50"
            style="background-image:url({{url('/')}}/front-end/uploads/banners/white-background.jpg)">
            <div class="container text-center mt-20">
                <h2 class="h1 mb-20">
                    Proposal Writing Services
                </h2>

                <p class="mb-40">We partner with the government experts at ProposalHelper to help you submit the very
                    best
                    proposal for your company. From a simple review to writing an entire document, ProposalHelper can
                    bring
                    success.</p>
                <a href="{{url('/features')}}" class="orange-btn">Learn
                    More</a>
            </div>
        </div>

        <div class="orange-background pt-80 pb-80">
            <div class="container-fluid">
                <div class="text-center">
                    <h2 class="white h1 mt-20 mb-40">Save Time. Bid Smart. Win More.</h2>
                    <a href="{{url('/pricing')}}" class="big-orange-btn large-btn ml-25 mr-25 mb-md-20">Get Affinos Pro Now</a>
                    <a class="big-white-btn large-btn  ml-25 mr-25" href="{{url('/')}}">Try Affinos Basic</a>
                </div>
            </div>
        </div>
    </main>
    @endsection