@extends('layouts.frontendlayout')
@section('content')
<main>
    <div class="img-background small-jumbotron" style="background-image: url({{url('/')}}/front-end/uploads/banners/whyaffinos_banner.jpg)">
        <div class="text-center small-jumbotron container mt-30">
            <h1 class="white">Why Affinos is Great For Finding Government Bid Opportunities</h1>
        </div>
    </div>

    <div class="hidden-overflow">

        <div class="container mt-100 mb-60 hidden-br-md mt-md-50 mb-md-40 why-bidsync">

            <div class="row mb-100 mb-md-70 icon-1">
                <div class="col-lg-6 text-center right-direction">
                    <img src="{{url('/')}}/front-end/uploads/icons/search.svg" alt="Search" class="center-img-md">
                </div>
                <div class="col-lg-6 mt-20 ">
                    <h2 class="h1 mb-15">Find More Relevant Government Bid Opportunities</h2>
                    <p>Leveraging our AI-powered Relevance Engine, Affinos delivers more relevant bids for your business
                        than any traditional government bid notification service in North America.</p>
                </div>
            </div>

            <div class="row mb-100 mb-md-70 icon-2 reverse-wrap-medium">
                <div class="col-lg-6 mt-20">
                    <h2 class="h1 mb-15">Maximize Government Bid Opportunities</h2>
                    <p>Affinos large research team of government procurement experts use the most advanced search and
                        aggregation technology. </p>
                </div>
                <div class="col-lg-6 text-center">
                    <img src="{{url('/')}}/front-end/uploads/icons/purpose-driven.svg" alt="Purpose Driven" class="center-img-md">
                </div>
            </div>

            <div class="row mb-100 mb-md-70 icon-3">
                <div class="col-lg-6 text-center right-direction">
                    <img src="{{url('/')}}/front-end/uploads/icons/lock.svg" alt="Lock" class="center-img-md">
                </div>
                <div class="col-lg-6 mt-20 ">
                    <h2 class="h1 mb-15">Gain Exclusive <br />
                        Access to Bids</h2>
                    <p>With Affinos, you gain exclusive, real-time access to more agencies and bids than with any other
                        government bid notification service.</p>
                </div>
            </div>

            <div class="row mb-100 mb-md-70 icon-4 align-center justify-center reverse-wrap-medium">
                <div class="col-lg-7 mt-20">
                    <h2 class="h1 mb-15">Use Purpose-Driven <br />
                        Products and Services</h2>
                    <p>We strive to eradicate waste and maximize the value of every dollar spent. We’re dedicated to
                        transforming public sector procurement by connecting government suppliers and agencies. </p>
                </div>
                <div class="col-lg-5 text-center">
                    <img src="{{url('/')}}/front-end/uploads/icons/driven.svg" alt="Driven" class="center-img-md">
                </div>
            </div>

            <div class="row mb-100 mb-md-70 icon-5">
                <div class="col-lg-6 text-center right-direction">
                    <img src="{{url('/')}}/front-end/uploads/icons/engaging.svg" alt="Engaging" class="center-img-md">
                </div>
                <div class="col-lg-6 mt-20 ">
                    <h2 class="h1 mb-15">Engage Your Users</h2>
                    <p>Our intuitive, modern user experience across mobile, tablet, and desktop ensures easy adoption
                        across your organization. You gain access to the bids you need, when you need them.</p>
                </div>
            </div>

            <div class="row mb-100 mb-md-70 icon-6 align-center justify-center reverse-wrap-medium">
                <div class="col-lg-7 mt-20">
                    <h2 class="h1 mb-15">Work with <br />
                        Government Experts</h2>
                    <p>Our people have unique expertise in the public sector. You will be working with a team that truly
                        understands your needs as a government supplier.</p>
                </div>
                <div class="col-lg-5 text-center">
                    <img src="{{url('/')}}/front-end/uploads/icons/government_180228_203041.svg" alt="Government" class="center-img-md">
                </div>
            </div>

            <div class="row mb-100 mb-md-70 icon-7">
                <div class="col-lg-6 text-center right-direction">
                    <img src="{{url('/')}}/front-end/uploads/icons/winning.svg" alt="Winning" class="center-img-md">
                </div>
                <div class="col-lg-6 mt-20 ">
                    <h2 class="h1 mb-15">Beat Your Competition</h2>
                    <p>More than 400,000 suppliers trust Affinos to find the most relevant government opportunities for
                        their business - faster than their competition. You can too.</p>
                </div>
            </div>

        </div>
    </div>

    <div class="orange-background pt-80 pb-80">
        <div class="container-fluid">
            <div class="text-center">
                <h2 class="white h1 mt-20 mb-40">Save Time. Bid Smart. Win More.</h2>
                <a href="{{url('/pricing')}}" class="big-orange-btn large-btn ml-25 mr-25 mb-md-20">Get Affinos Pro Now</a>
                <a class="big-white-btn large-btn  ml-25 mr-25" href="{{url('/')}}">Try Affinos Basic For Free</a>
            </div>
        </div>
    </div>
</main>
@endsection