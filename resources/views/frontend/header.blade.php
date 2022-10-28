<!DOCTYPE html>
<html lang="en">


<!-- Mirrored from st.ourhtmldemo.com/template/cargohub/ by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 12 Oct 2022 13:58:57 GMT -->

<head>
    <meta charset="utf-8">
    <title>CargoHub</title>
    <!-- Stylesheets -->
    <!-- bootstrap v3.3.6 css -->
    <link href="{{ asset('frontend/css/bootstrap.css') }}" rel="stylesheet">
    <!-- font-awesome css -->
    <link href="{{ asset('frontend/css/font-awesome.css') }}" rel="stylesheet">
    <!-- flaticon css -->
    <link href="{{ asset('frontend/css/flaticon.css') }}" rel="stylesheet">
    <!-- factoryplus-icons css -->
    <link href="{{ asset('frontend/css/factoryplus-icons.css') }}" rel="stylesheet">
    <!-- animate css -->
    <link href="{{ asset('frontend/css/animate.css') }}" rel="stylesheet">
    <!-- owl.carousel css -->
    <link href="{{ asset('frontend/css/owl.css') }}" rel="stylesheet">
    <!-- fancybox css -->
    <link href="{{ asset('frontend/css/jquery.fancybox.css') }}" rel="stylesheet">
    <link href="{{ asset('frontend/css/hover.css') }}" rel="stylesheet">
    <link href="{{ asset('frontend/css/frontend.css') }}" rel="stylesheet">
    <link href="{{ asset('frontend/css/style.css') }}" rel="stylesheet">
    <!-- switcher css -->
    <link href="{{ asset('frontend/css/switcher.css') }}" rel="stylesheet">
    <link rel='stylesheet' id='factoryhub-color-switcher-css'
        href='{{ asset('frontend/css/switcher/default.css') }}' />
    <!-- revolution slider css -->
    <link rel="stylesheet" type="text/css" href="{{ asset('frontend/css/revolution/settings.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('frontend/css/revolution/layers.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('frontend/css/revolution/navigation.css') }}">

    <!--Favicon-->
    <link rel="shortcut icon" href="{{ asset('frontend/images/favicon.ico') }}" type="image/x-icon">
    <link rel="icon" href="{{ asset('frontend/images/favicon.ico') }}" type="image/x-icon">
    <!-- Responsive -->
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="{{ asset('frontend/css/responsive.css') }}" rel="stylesheet">
</head>

<body class="home header-transparent  header-sticky header-v1 hide-topbar-mobile">
    <div id="page">

        <!-- Preloader-->
        {{-- <div class="preloader"></div> --}}

        <!-- topbar -->
        <div id="fh-header-minimized" class="fh-header-minimized fh-header-v1"></div>
        <div id="topbar" class="topbar">
            <div class="container">

                <div class="topbar-left topbar-widgets text-left">
                    <div id="cargo-office-location-widget-2" class="widget cargo-office-location-widget">
                        <div class="office-location clearfix">
                            {{-- <div class="office-switcher"><i class="flaticon-globe "></i>
                                        <a class="current-office" href="#">Newyork Office</a>
                                        <ul>
                                            <li>Newyork Office</li>
                                            <li>London Office</li>
                                            <li>Tokyo Office</li>
                                        </ul>
                                    </div> --}}
                            <ul class="topbar-office active">
                                <li><i class="flaticon-telephone" aria-hidden="true"></i>Phone +88 02-55040852</li>
                                <li><i class="flaticon-web" aria-hidden="true"></i>chairman@usalogisticsltd.com</li>
                                <li><i class="flaticon-pin" aria-hidden="true"></i>H #76, R #02, Chairman Bari, Banani,
                                    Dhaka-1213</li>
                            </ul>
                            <ul class="topbar-office">
                                <li><i class="flaticon-telephone" aria-hidden="true"></i>Phone +099 222 1111</li>
                                <li><i class="flaticon-web" aria-hidden="true"></i>Mail@Evanto.com</li>
                                <li><i class="flaticon-pin" aria-hidden="true"></i>Cargo Hub, LD 32614, UK</li>
                            </ul>
                            <ul class="topbar-office">
                                <li><i class="flaticon-telephone" aria-hidden="true"></i>Phone +098 765 4321</li>
                                <li><i class="flaticon-web" aria-hidden="true"></i>Mail@Steelthemes.com</li>
                                <li><i class="flaticon-pin" aria-hidden="true"></i>Cargo Hub, Tokyo 32614, Japan</li>
                            </ul>
                        </div>
                    </div>
                </div>

                <div class="topbar-right topbar-widgets text-right">
                    <div class="widget cargohub-social-links-widget">
                        <div class="list-social style-1">
                            <a href="#" target="_blank"><i class="fa fa-facebook"></i></a>
                            <a href="#" target="_blank"><i class="fa fa-twitter"></i></a>
                            {{-- <a href="#" target="_blank"><i class="fa fa-google-plus"></i></a>
                                    <a href="#" target="_blank"><i class="fa fa-skype"></i></a> --}}
                            <a href="#" target="_blank"><i class="fa fa-youtube"></i></a>
                        </div>
                    </div>
                    <div class="widget cargo-search-widget">
                        <div class="topbar-search topbar-search-1">
                            <a href="#" class="toggle-search" id="toggle-search"><i class="fa fa-search"
                                    aria-hidden="true"></i></a>
                            <form class="search-form" action="#">
                                <i class="fa fa-search" aria-hidden="true"></i>
                                <input type="search" class="search-field" placeholder="Search..." value="">
                                <input type="submit" class="search-submit" value="Search">
                            </form>
                        </div>
                    </div>
                </div>

            </div>
        </div>
        <!-- topbar end -->

        <!-- masthead -->
        <header id="masthead" class="site-header clearfix">

            <div class="header-main clearfix">
                <div class="container mobile_relative">
                    <div class="row">
                        <div class="site-logo col-md-3 col-sm-6 col-xs-6">
                            <a href="{{ url('/') }}" class="logo">
                                <img src="{{ asset('frontend/images/logo-usa.png') }}" alt="CargoHub"
                                    class="logo-light show-logo" style="height: 80px; width: 80px">
                                <img src="{{ asset('frontend/images/logo-usa.png') }}" alt="CargoHub"
                                    class="logo-dark hide-logo" style="height: 100px; width: 100px">
                            </a>
                            <h1 class="site-title"><a href="#">CargoHub</a></h1>
                            <h2 class="site-description">Just another Steel Themes Sites site</h2>
                        </div>
                        <div class="site-menu col-md-9 col-sm-6 col-xs-6">
                            <nav id="site-navigation" class="main-nav primary-nav nav">
                                <ul class="menu">
                                    <li><a href="{{ url('/') }}" class="dropdown-toggle">Home</a>
                                    <li><a href="{{ url('/about') }}" class="dropdown-toggle active">About</a>
                                    </li>
                                    <li class="has-children"><a href="services.html"
                                            class="dropdown-toggle">Services</a>
                                        <ul class="sub-menu">
                                            <li><a href="services.html">All Services</a></li>
                                            <li><a href="road-freight-forwarding.html">Air Service</a></li>
                                            <li><a href="ocean-freight-forwarding.html">Ocean Service</a>
                                            </li>
                                            <li><a href="air-freight-forwarding.html">Ground Service</a></li>
                                            <li><a href="warehousing.html">Custom Clearance</a></li>
                                            <li><a href="door-to-door-delivery.html">Warehouse Services</a></li>
                                            <li><a href="ground-transport.html">Supply Chain Solutions</a></li>
                                            <li><a href="worldwide-transport.html">Project</a></li>
                                            <li><a href="cargo-service.html">Information Services</a></li>
                                        </ul>
                                    </li>
                                    <li><a href="{{ url('/contact') }}">Contact</a></li>
                                    <li><a href="https://s567.use6.mysecurecloudhost.com:2096/webmaillogout.cgi" class="dropdown-toggle">Webmail</a>
                                    </li>
                                    <li class="extra-menu-item menu-item-button-link">
                                        <a href="request-a-quote.html" class="fh-btn btn">Get A Quote</a>
                                    </li>
                                </ul>
                            </nav>
                        </div>
                    </div>
                    <a href="#" class="navbar-toggle">
                        <span class="navbar-icon">
                            <span class="navbars-line"></span>
                        </span>
                    </a>
                </div>
            </div>

        </header>

        <!-- masthead end -->
