<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="description" content="Affinos">
        <meta name="keywords" content="Affinos">
        <meta name="author" content="stacks">
        <link rel="shortcut icon" href="{{url('/')}}/assets/images/favicon.ico">
        <!-- The above 6 meta tags *must* come first in the head; any other head content must come *after* these tags -->
        
        <!-- Title -->
        <title>Affinos</title>


        <!-- Styles -->
    <link href="https://fonts.googleapis.com/css?family=Ubuntu" rel="stylesheet">
    <link href="{{url('/')}}/assets/plugins/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link href="{{url('/')}}/assets/plugins/font-awesome/css/font-awesome.min.css" rel="stylesheet">
    <link href="{{url('/')}}/assets/plugins/icomoon/style.css" rel="stylesheet">
    <link href="{{url('/')}}/assets/plugins/uniform/css/default.css" rel="stylesheet" />
    <link href="{{url('/')}}/assets/plugins/switchery/switchery.min.css" rel="stylesheet" />
    <link href="{{url('/')}}/assets/plugins/summernote-master/summernote.css" rel="stylesheet" type="text/css" />
    <link href="{{url('/')}}/assets/plugins/bootstrap-datepicker/css/datepicker3.css" rel="stylesheet" type="text/css" />
    <link href="{{url('/')}}/assets/plugins/bootstrap-colorpicker/css/bootstrap-colorpicker.css" rel="stylesheet"
        type="text/css" />
    <link href="{{url('/')}}/assets/plugins/bootstrap-tagsinput/bootstrap-tagsinput.css" rel="stylesheet" type="text/css" />
    <link href="{{url('/')}}/assets/plugins/bootstrap-timepicker/css/bootstrap-timepicker.min.css" rel="stylesheet"
        type="text/css" />

    <!-- Theme Styles -->
    <link href="{{url('/')}}/assets/css/space.css" rel="stylesheet">
    <link href="{{url('/')}}/assets/css/custom.css" rel="stylesheet">



        
    </head>
    <body class="page-sidebar-fixed">
        
        <!-- Page Container -->
        <div class="page-container">
            <!-- Page Sidebar -->
            <!-- <div class="page-sidebar">
                <a class="logo-box" href="index.html">
                    <span>
                    <img style="width:100%;" src="{{url('/')}}/assets/images/affinos-technology-logo.png" alt="" />
                    </span>
                    <i class="hide-without-panel">
                    <img style="width:100%;" src="{{url('/')}}/assets/images/icon.png" alt="" />
                    </i>
                    <i class="icon-close" id="sidebar-toggle-button-close"></i>
                </a>
                <div class="page-sidebar-inner">
                    <div class="page-sidebar-menu">
                        <ul class="accordion-menu">
                            <li class="active-page">
                                <a href="{{url('/home')}}">
                                    <i class="menu-icon icon-home4"></i><span>Dashboard</span>
                                </a>
                            </li>
                            <li>
                                <a href="{{url('/packages')}}">
                                    <i class="menu-icon icon-show_chart"></i><span> Packages</span>
                                </a>
                            </li>
                            <li>
                                <a href="{{url('/recurrances')}}">
                                    <i class="menu-icon icon-show_chart"></i><span> Recurrances</span>
                                </a>
                            </li>
                            <li>
                                <a href="{{url('/pages')}}">
                                    <i class="menu-icon icon-show_chart"></i><span>Pages</span>
                                </a>
                            </li>
                            <li>
                                <a href="{{url('/sections')}}">
                                    <i class="menu-icon icon-show_chart"></i><span>Page Sections</span>
                                </a>
                            </li>
                    </div>
                </div>
            </div> -->
            <div class="page-sidebar">
            <a class="logo-box" href="index.html">
                <span><img style="width:100%" src="https://www.nextige.com/affinos/assets/icons/affinos-technology-logo.png" alt=""></span>
                <!-- <i class="icon-radio_button_unchecked" id="fixed-sidebar-toggle-button"></i> -->
                <i class="icon-close" id="sidebar-toggle-button-close"></i>
            </a>
            <div class="slimScrollDiv" style="position: relative; overflow: hidden; width: auto; height: 100%;"><div class="page-sidebar-inner" style="overflow: hidden; width: auto; height: 100%;">
                <div class="page-sidebar-menu">
                    <ul class="accordion-menu">
                        <li>
                            <a href="{{url('/profile')}}">
                                <i class="menu-icon icon-user"></i><span>Profile</span>
                            </a>
                        </li>
                        <li class="active-page">
                            <a href="javascript:void(0)">
                                <i class="menu-icon icon-price-tag"></i><span>Packages
                                    <i class="accordion-icon fa fa-angle-left"></i>
                                </span>
                            </a>
                            <ul class="sub-menu" style="display: none;">
                                <li class="animation"><a href="{{url('/packages')}}">Packages</a></li>
                                <li class="animation"><a href="{{url('/recurrances')}}">Recurrence</a></li>

                            </ul>
                        </li>
                        <li>
                            <a href="{{url('/addons')}}">
                                <i class="menu-icon icon-folder-plus"></i><span>Addons</span>
                            </a>
                        </li>
                        <li>
                            <a href="{{ route('users.index') }}">
                                <i class="menu-icon icon-users"></i><span>Users</span>
                            </a>
                        </li>
                        <li class="open">
                            <a href="payment.html">
                                <i class="menu-icon icon-shield"></i><span>Payment </span><i class="accordion-icon fa fa-angle-left"></i>
                            </a>
                            <ul class="sub-menu" style="display: block;">
                                <li class="animation"><a href="form-elements.html">Elements</a></li>
                                <li class="animation"><a href="form-wizard.html">Form Wizard</a></li>
                                <li class="animation"><a href="form-file-upload.html">File Upload</a></li>
                                <li class="animation"><a href="form-image-crop.html">Image Crop</a></li>
                                <li class="animation"><a href="form-image-zoom.html">Image Zoom</a></li>
                                <li class="animation"><a href="form-x-editable.html">X-editable</a></li>
                            </ul>
                        </li>
                        <li>
                            <a href="{{ url('/logout') }}">
                                <i class="menu-icon icon-arrow-right"></i><span>Log Out</span>
                            </a>
                        </li>
                    </ul>
                </div>
            </div><div class="slimScrollBar" style="background: rgb(204, 204, 204); width: 6px; position: absolute; top: 0px; opacity: 0.2; display: none; border-radius: 0px; z-index: 99; right: 0px; height: 106.257px;"></div><div class="slimScrollRail" style="width: 6px; height: 100%; position: absolute; top: 0px; display: none; border-radius: 0px; background: rgb(51, 51, 51); opacity: 0.2; z-index: 90; right: 0px;"></div></div>
        </div>

            <!-- /Page Sidebar -->
            
            <!-- Page Content -->
            <div class="page-content">
                <!-- Page Header -->
                    <!-- <div class="page-header">
                        <nav class="navbar navbar-default">
                            <div class="container-fluid">
                                Brand and toggle get grouped for better mobile display
                                <div class="navbar-header">
                                    <div class="logo-sm">
                                        <a href="javascript:void(0)" id="sidebar-toggle-button"><i class="fa fa-bars"></i></a>
                                        <a class="logo-box" href="index.html"><span>Space</span></a>
                                    </div>
                                    <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
                                        <i class="fa fa-angle-down"></i>
                                    </button>
                                </div>
                            
                                Collect the nav links, forms, and other content for toggling
                            
                                <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                                    <ul class="nav navbar-nav">
                                        <li><a href="javascript:void(0)" id="collapsed-sidebar-toggle-button"><i class="fa fa-bars"></i></a></li>
                                    </ul>
                                    <ul class="nav navbar-nav navbar-right">
                                        
                                        <li class="dropdown">
                                            <ul class="dropdown-menu dropdown-lg dropdown-content">
                                            
                                            
                                                    <ul class="list-unstyled dropdown-oc">
                                                        <li>
                                                            <a href="#"><span class="notification-badge bg-primary"><i class="fa fa-photo"></i></span>
                                                                <span class="notification-info">Finished uploading photos to gallery <b>"South Africa"</b>.
                                                                    <small class="notification-date">20:00</small>
                                                                </span></a>
                                                        </li>
                                                        <li>
                                                            <a href="#"><span class="notification-badge bg-primary"><i class="fa fa-at"></i></span>
                                                                <span class="notification-info"><b>John Doe</b> mentioned you in a post "Update v1.5".
                                                                    <small class="notification-date">06:07</small>
                                                                </span></a>
                                                        </li>
                                                        <li>
                                                            <a href="#"><span class="notification-badge bg-danger"><i class="fa fa-bolt"></i></span>
                                                                <span class="notification-info">4 new special offers from the apps you follow!
                                                                    <small class="notification-date">Yesterday</small>
                                                                </span></a>
                                                        </li>
                                                        <li>
                                                            <a href="#"><span class="notification-badge bg-success"><i class="fa fa-bullhorn"></i></span>
                                                                <span class="notification-info">There is a meeting with <b>Ethan</b> in 15 minutes!
                                                                    <small class="notification-date">Yesterday</small>
                                                                </span></a>
                                                        </li>
                                                    </ul>
                                                </li>
                                            </ul>
                                        </li>
                                        <li class="dropdown user-dropdown">
                                            <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"><img src="http://via.placeholder.com/36x36" alt="" class="img-circle"></a>
                                            <ul class="dropdown-menu">
                                                <li><a href="{{ url('/profile') }}">Profile</a></li>
                                                <li><a href="#">Calendar</a></li>
                                                <li><a href="#"><span class="badge pull-right badge-danger">42</span>Messages</a></li>
                                                <li role="separator" class="divider"></li>
                                                <li><a href="#">Account Settings</a></li>
                                                <li><a href="{{ url('/logout') }}">Log Out</a></li>
                                            </ul>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </nav>
                    </div> -->
                <div class="page-header">
                <nav class="navbar navbar-default">
                    <div class="container-fluid">
                        <!-- Brand and toggle get grouped for better mobile display -->
                        <div class="navbar-header">
                            <div class="logo-sm">
                                <a href="javascript:void(0)" id="sidebar-toggle-button"><i class="fa fa-bars"></i></a>
                                <a class="logo-box" href="index.html"><span>Affinos</span></a>
                            </div>
                        </div>

                        <!-- Collect the nav links, forms, and other content for toggling -->

                        <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                            <ul class="nav navbar-nav">
                                <li><a href="javascript:void(0)" id="collapsed-sidebar-toggle-button"><i class="fa fa-bars"></i></a></li>
                            </ul>
                            <ul class="nav navbar-nav navbar-right">

                                <li class="dropdown user-dropdown">
                                    <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"><img src="http://via.placeholder.com/36x36" alt="" class="img-circle"><span></span></a>
                                    <ul class="dropdown-menu">
                                        <li><a href="{{ url('/profile') }}">Profile</a></li>
                                        <li><a href="{{ url('/logout') }}">Log Out</a></li>
                                    </ul>
                                </li>
                            </ul>
                        </div><!-- /.navbar-collapse -->
                    </div><!-- /.container-fluid -->
                </nav>
            </div>
                <!-- /Page Header -->
                @yield('content')
            </div><!-- /Page Content -->
        </div><!-- /Page Container -->
        
        
        <!-- Javascripts -->
        <script src="{{url('/')}}/assets/plugins/jquery/jquery-3.1.0.min.js"></script>
        <script src="{{url('/')}}/assets/plugins/bootstrap/js/bootstrap.min.js"></script>
        <script src="{{url('/')}}/assets/plugins/jquery-slimscroll/jquery.slimscroll.min.js"></script>
        <script src="{{url('/')}}/assets/plugins/uniform/js/jquery.uniform.standalone.js"></script>
        <script src="{{url('/')}}/assets/plugins/switchery/switchery.min.js"></script>
        <script src="{{url('/')}}/assets/plugins/summernote-master/summernote.min.js"></script>
        <script src="{{url('/')}}/assets/plugins/d3/d3.min.js"></script>
        <script src="{{url('/')}}/assets/plugins/nvd3/nv.d3.min.js"></script>
        <script src="{{url('/')}}/assets/plugins/flot/jquery.flot.min.js"></script>
        <script src="{{url('/')}}/assets/plugins/flot/jquery.flot.time.min.js"></script>
        <script src="{{url('/')}}/assets/plugins/flot/jquery.flot.symbol.min.js"></script>
        <script src="{{url('/')}}/assets/plugins/flot/jquery.flot.resize.min.js"></script>
        <script src="{{url('/')}}/assets/plugins/flot/jquery.flot.tooltip.min.js"></script>
        <script src="{{url('/')}}/assets/plugins/flot/jquery.flot.pie.min.js"></script>
        <script src="{{url('/')}}/assets/plugins/chartjs/chart.min.js"></script>
        <script src="{{url('/')}}/assets/js/space.min.js"></script>
        <script src="{{url('/')}}/assets/js/pages/form-elements.js"></script>
        <script src="{{url('/')}}/assets/js/pages/dashboard.js"></script>
        <script src="{{url('/')}}/assets/js/jquery.datatables.min.js"></script>
        <script src="{{url('/')}}/assets/js/bootstrap-datepicker.js"></script>
        <script src="{{url('/')}}/assets/js/table-data.js"></script>




   <!-- Javascripts -->
      
       
     

    </body>
</html>