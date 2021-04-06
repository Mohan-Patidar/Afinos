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
</head>

<body>
    <div class="nav homepage production 0">
        <div class="large-container">
            <div class="flex align-center justify-center">
                <div class="mobile-nav-holder">
                    <div class="hidden-large hidden-xs mr-auto">
                        <a href="pricing.html" class="orange-btn">Get Affinos Now</a>
                    </div>
                    <div class="logo">
                        <a href="{{url('/')}}">                           
                            <img src="{{url('/')}}/front-end/assets/icons/affinos-technology-logo.png" alt="affinos-technology"
                                class="logo-white">
                                <img src="{{url('/')}}/front-end/assets/icons/affinos-technology-logo.png" alt="affinos-technology"
                                class="logo-dark">
                            </a>
                    </div>
                    <div class="hidden-large ml-auto toggle-container text-right">
                        <div class="mobile-toggle ">
                            <span></span>
                            <span></span>
                            <span></span>
                        </div>
                    </div>
                </div>
                <div class="main-nav ml-auto">
                    <ul class="list-unstyled">
                        <li class="has-dropdown">
                            <a href="{{url('/features')}}" class="white p-5 pt-15 pb-15 mr-5">Features</a>
                            <ul class="drop">
                              <li><a href="{{url('/features')}}#how-bidsync-works" class="white">How Affinos Works</a></li>
                              <li><a href="{{url('/features')}}#relevance-engine" class="white">AI-Powered Relevance Engine</a></li>
                              <li><a href="{{url('/features')}}#database" class="white">Largest Database of Bids</a></li>
                              <li><a href="{{url('/features')}}#email-notifications" class="white">Daily Email Notifications</a></li>
                              <li><a href="{{url('/features')}}#search-tools" class="white">Advanced Search Tools</a></li>
                              <li><a href="{{url('/features')}}#bid-summary" class="white">Easy-to-Review Bid Summary</a></li>
                              <li><a href="{{url('/features')}}#periscope-agency-network" class="white">Periscope Agency Network</a></li>
                            </ul>
                          </li>
                        <li><a href="{{url('/customers')}}" class="white p-5 pt-15 pb-15 mr-5">Customers</a></li>
                        <li class="">
                            <a href="{{url('/pricing')}}" class="white p-5 pt-15 pb-15 mr-5">Pricing</a>
                        </li>

                        <li><a href="{{url('/why')}}" class="white p-5 pt-15 pb-15 mr-5">Why Affinos</a></li>

                        <style>
                            @media (min-width: 1200px) {
                                .hidden-lg-nav {
                                    display: none !important
                                }
                            }
                        </style>

                        <li>
                            @if(!Auth::check())
                            <a href="{{url('/login')}}" class="white p-5 pt-15 pb-15 mr-15 nowrap">
                                <svg width="16px" height="16px" viewBox="0 0 16 16" version="1.1"
                                    xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"
                                    class="profile">
                                    <g id="Symbols" stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                        <g id="Nav-Overlay" transform="translate(-996.000000, -17.000000)"
                                            fill="#FFFFFF">
                                            <g id="sign-in" transform="translate(996.000000, 13.000000)">
                                                <g id="Page-1" transform="translate(0.000000, 4.000000)">
                                                    <path
                                                        d="M7.9996,13.7618 C5.9996,13.7618 4.2376,12.7188 3.1986,11.1988 C3.1986,9.6018 6.3976,8.7188 7.9996,8.7188 C9.6026,8.7188 12.8016,9.6018 12.8016,11.1988 C11.7626,12.7188 9.9996,13.7618 7.9996,13.7618 M7.9996,2.3978 C9.3586,2.3978 10.3976,3.4408 10.3976,4.8008 C10.3976,6.1598 9.3586,7.1998 7.9996,7.1998 C6.6416,7.1998 5.6026,6.1598 5.6026,4.8008 C5.6026,3.4408 6.6416,2.3978 7.9996,2.3978 M7.9996,-0.0002 C3.6026,-0.0002 -0.0004,3.6018 -0.0004,7.9998 C-0.0004,12.3978 3.6026,15.9998 7.9996,15.9998 C12.3976,15.9998 15.9996,12.3978 15.9996,7.9998 C15.9996,3.6018 12.3976,-0.0002 7.9996,-0.0002"
                                                        id="Fill-1"></path>
                                                </g>
                                            </g>
                                        </g>
                                    </g>
                                </svg>
                                <strong class="text-uppercase">Sign In</strong></a>
                            @else 
                            <a href="{{url('/profile')}}" class="white p-5 pt-15 pb-15 mr-15 nowrap">
                                <svg width="16px" height="16px" viewBox="0 0 16 16" version="1.1"
                                    xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"
                                    class="profile">
                                    <g id="Symbols" stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                        <g id="Nav-Overlay" transform="translate(-996.000000, -17.000000)"
                                            fill="#FFFFFF">
                                            <g id="sign-in" transform="translate(996.000000, 13.000000)">
                                                <g id="Page-1" transform="translate(0.000000, 4.000000)">
                                                    <path
                                                        d="M7.9996,13.7618 C5.9996,13.7618 4.2376,12.7188 3.1986,11.1988 C3.1986,9.6018 6.3976,8.7188 7.9996,8.7188 C9.6026,8.7188 12.8016,9.6018 12.8016,11.1988 C11.7626,12.7188 9.9996,13.7618 7.9996,13.7618 M7.9996,2.3978 C9.3586,2.3978 10.3976,3.4408 10.3976,4.8008 C10.3976,6.1598 9.3586,7.1998 7.9996,7.1998 C6.6416,7.1998 5.6026,6.1598 5.6026,4.8008 C5.6026,3.4408 6.6416,2.3978 7.9996,2.3978 M7.9996,-0.0002 C3.6026,-0.0002 -0.0004,3.6018 -0.0004,7.9998 C-0.0004,12.3978 3.6026,15.9998 7.9996,15.9998 C12.3976,15.9998 15.9996,12.3978 15.9996,7.9998 C15.9996,3.6018 12.3976,-0.0002 7.9996,-0.0002"
                                                        id="Fill-1"></path>
                                                </g>
                                            </g>
                                        </g>
                                    </g>
                                </svg>
                                <strong class="text-uppercase">Profile</strong></a>
                            @endif
                        </li>
                        <li><a href="{{url('/pricing')}}" class="orange-btn">Get Affinos Now</a></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
    @yield('content')
    <footer class="dark-grey-background pt-80 pb-90 pt-md-40 pb-mb-0">
        <div class="large-container">
            <div class="row">
                <div class="col-lg-3 col-md-6 mb-20">
                    <h3><a href="" class="white mb-15 inline-block"
                            target="_blank">Periscope Holdings</a></h3>
                    <p class="grey smol"> Affinos is owned and operated by Periscope Holdings, the leader in
                        government-based solutions. Visit our corporate website to learn more.</p>

                </div>
                <div class="col-lg-2 col-md-6 mb-20">
                    <ul class="list-unstyled mt-0 pl-0 mb-0">
                        <li>
                            <h3 class="mb-15"><a href="{{url('/features')}}" class="white">Affinos Features</a></h3>
                        </li>
                        <li><a href="{{url('/features')}}#relevance-engine" class="grey smol">AI-Powered Relevance Engine</a>
                        </li>
                        <li><a href="{{url('/features')}}#database" class="grey smol">Largest Database of Bids</a></li>
                        <li><a href="{{url('/features')}}#email-notifications" class="grey smol">Daily Email Notifications</a>
                        </li>
                        <li><a href="{{url('/features')}}#search-tools" class="grey smol">Advanced Search Tools</a></li>
                        <li><a href="{{url('/features')}}#bid-summary" class="grey smol">Easy-to-Review Bid Summary</a></li>
                        <li><a href="{{url('/features')}}#periscope-agency-network" class="grey smol">Periscope Agency
                                Network</a></li>
                    </ul>
                </div>
                <div class="col-lg-2 col-md-6 ">
                    <ul class="list-unstyled mt-0 pl-0 mb-0">
                        <li>
                            <h3><a href="{{url('/customers')}}" class="white mb-15 inline-block">Customers</a></h3>
                        </li>
                        <li>
                            <h3><a href="{{url('/pricing')}}" class="white mb-15 inline-block">Pricing</a></h3>
                        </li>
                        <li>
                            <h3><a href="" class="white mb-15 inline-block">Compare Plans</a></h3>
                        </li>
                    </ul>
                </div>
                <div class="col-lg-2 col-md-6 mb-20">
                    <ul class="list-unstyled mt-0 pl-0 mb-0">
                        <li>
                            <h3><a href="{{url('/why')}}" class="white mb-15 inline-block">Why Affinos</a></h3>
                        </li>
                        <li>
                            @if(!Auth::check())
                                <h3><a href="{{url('/login')}}" class="white mb-15 inline-block">Sign In</a></h3>
                            @else
                                <h3><a href="{{url('/profile')}}" class="white mb-15 inline-block">Profile</a></h3>
                            @endif
                        </li>
                    </ul>

                </div>
                <div class="col-lg-3 relative mt-md-20 mb-md-20">
                    <h2><a href="tel: 123.456.7890" class="white">
                            Contact Us <br>
                            123.456.7890
                        </a></h2>
                    <div class="footer-social-list absolute text-center hidden-md">
                        <a href="" class="m-5 p-10" target="_blank">
                            <img src="{{url('/')}}/front-end/assets/icons/twitter.svg" alt="Twitter">
                        </a>
                        <a href="" class="m-5 p-10" target="_blank">
                            <img src="{{url('/')}}/front-end/assets/icons/facebook.svg" alt="Facebook">
                        </a>
                        <a href="" class="m-5 p-10" target="_blank">
                            <img src="{{url('/')}}/front-end/assets/icons/linkedin.svg" alt="Linkedin">
                        </a>
                    </div>

                </div>
            </div>
            <div class="row">
                <div class="col-sm-12">
                    <span class="grey smol">© Copyright 2020 Affinos Technology Group.</span>
                </div>
            </div>
        </div>
    </footer>

    <script src="{{url('/')}}/front-end/assets/js/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/js/bootstrap.min.js"></script>
    <script src="{{url('/')}}/front-end/assets/js/roi-calculator.js"></script>
    <script src="{{url('/')}}/front-end/assets/js/slick.min.js"></script>
    <script src="{{url('/')}}/front-end/assets/js/verify-email-v2.js"></script>
    <script src="{{url('/')}}/front-end/assets/js/app.js"></script>
    <script src="{{url('/')}}/assets/js/validate.js"></script>
    @yield('additionalscript')
</body>
</html>