<?php
$user = auth()->user();
?>

    <!DOCTYPE html>

<html lang="en">

<head>

    <!-- META -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="keywords" content="" />
    <meta name="author" content="" />
    <meta name="robots" content="" />
    <meta name="description" content="" />
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <!-- FAVICONS ICON -->
    <link rel="icon" href="{{asset("assets/images/favicon.ico")}}" type="image/x-icon" />
    <link rel="shortcut icon" type="image/x-icon" href="{{get_imported_asset("images/favicon.png")}}" />

    <!-- PAGE TITLE HERE -->
    {{--    <title>Bit-invest Template | Home Page 1</title>--}}
    <title inertia>{{ config('app.name', 'Laravel') }}</title>

    <!-- MOBILE SPECIFIC -->
    <meta name="viewport" content="width=device-width, initial-scale=1">



    <!-- BOOTSTRAP STYLE SHEET -->
    <link rel="stylesheet" type="text/css" href="{{get_imported_asset("css/bootstrap.min.css")}}">
    <!-- FONTAWESOME STYLE SHEET -->
    <link rel="stylesheet" type="text/css" href=" {{get_imported_asset("css/fontawesome/css/font-awesome.min.css")}}" />
    <!-- FLATICON STYLE SHEET -->
    <link rel="stylesheet" type="text/css" href="{{get_imported_asset("css/flaticon.min.css")}}">
    <!-- ANIMATE STYLE SHEET -->
    <link rel="stylesheet" type="text/css" href="{{get_imported_asset("css/animate.min.css")}}">
    <!-- OWL CAROUSEL STYLE SHEET -->
    <link rel="stylesheet" type="text/css" href="{{get_imported_asset("css/owl.carousel.min.css")}}">
    <!-- BOOTSTRAP SELECT BOX STYLE SHEET -->
    <link rel="stylesheet" type="text/css" href="{{get_imported_asset("css/bootstrap-select.min.css")}}">
    <!-- MAGNIFIC POPUP STYLE SHEET -->
    <link rel="stylesheet" type="text/css" href="{{get_imported_asset("css/magnific-popup.min.css")}}">
    <!-- LOADER STYLE SHEET -->
    <link rel="stylesheet" type="text/css" href="{{get_imported_asset("css/loader.min.css")}}">
    <!-- MAIN STYLE SHEET -->
    <link rel="stylesheet" type="text/css" href="{{get_imported_asset("css/style.css")}}">
    <!-- THEME COLOR CHANGE STYLE SHEET -->
    <link rel="stylesheet" class="skin" type="text/css" href="{{get_imported_asset("css/skin/skin-1.css")}}">
    <!-- CUSTOM  STYLE SHEET -->
    <link rel="stylesheet" type="text/css" href="{{get_imported_asset("css/custom.css")}}">
    <!-- SIDE SWITCHER STYLE SHEET -->
    <link rel="stylesheet" type="text/css" href="{{get_imported_asset("css/switcher.css")}}">


    <!-- REVOLUTION SLIDER CSS -->
    <link rel="stylesheet" type="text/css" href="{{get_imported_asset("plugins/revolution/revolution/css/settings.css")}}">
    <!-- REVOLUTION NAVIGATION STYLE -->
    <link rel="stylesheet" type="text/css" href="{{get_imported_asset("plugins/revolution/revolution/css/navigation.css")}}">

    <!-- GOOGLE FONTS -->
    <link href="https://fonts.googleapis.com/css?family=Poppins:300,300i,400,400i,500,500i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Crete+Round:400,400i&amp;subset=latin-ext" rel="stylesheet">
    <!-- Scripts -->
    @routes
    @vite(['resources/js/app.ts'])
    <script
        src="https://cdn.jsdelivr.net/gh/dejurin/crypto-converter-widget/dist/latest.min.js"
        async
    ></script>
</head>

<body id="bg">
<div id="app">
    <div class="page-wraper">

        <!-- HEADER START -->
        <header class="site-header header-style-6 mobile-sider-drawer-menu">

            <div class="top-bar site-bg-primary">
                @include('components.core.top-bar')
            </div>
            <!-- Search Link -->

            <!-- Search Form -->
            <div class="main-bar header-middle bg-white">
                <div class="container">
                    <div class="logo-header">
                        <a href="index.html">
                            <img src="{{ get_logo() }}" width="216" height="37" alt="" />
                        </a>
                    </div>
                    <div class="header-info">
                        <ul>
                            <li>
                                <div>
                                    <div class="icon-sm">
                                        <span class="icon-cell  site-text-primary"><i class="iconmoon-travel"></i></span>
                                    </div>
                                    <div class="icon-content">
                                        <strong>Our Location </strong>
                                        <span>145 N Los Ave, NY</span>
                                    </div>
                                </div>
                            </li>
                            <li>
                                <div>
                                    <div class="icon-sm">
                                        <span class="icon-cell  site-text-primary"><i class="iconmoon-smartphone-1"></i></span>
                                    </div>
                                    <div class="icon-content">
                                        <strong>Phone Number</strong>
                                        <span>(+59)-2309-0202</span>
                                    </div>
                                </div>
                            </li>
                            <li class="btn-col-last">
                                <a class="site-button text-uppercase  font-weight-700">Requet a Quote</a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>

            <!-- Search Form -->
            <div class="sticky-header main-bar-wraper">
                <div class="main-bar header-botton nav-bg-secondry">
                    <div class="container">
                        <!-- NAV Toggle Button -->
                        <button id="mobile-side-drawer" data-target=".header-nav" data-toggle="collapse" type="button" class="navbar-toggler collapsed">
                            <span class="sr-only">Toggle navigation</span>
                            <span class="icon-bar icon-bar-first"></span>
                            <span class="icon-bar icon-bar-two"></span>
                            <span class="icon-bar icon-bar-three"></span>
                        </button>
                        <!-- ETRA Nav -->

                        @include('components.core.main-nav')

                        <div class="extra-nav">
                            <div class="extra-cell">
                                <a href="#search" class="site-search-btn"><i class="fa fa-search"></i></a>
                            </div>
                            <div class="extra-cell">
                                <a href="javascript:;" class="wt-cart cart-btn dropdown-toggle" title="Your Cart" data-bs-toggle="dropdown">
                                    <span class="link-inner">
                                        <span class="woo-cart-total"> </span>
                                        <span class="woo-cart-count">
                                            <span class="shopping-bag wcmenucart-count ">2</span>
                                        </span>
                                    </span>
                                </a>
                                <div class="dropdown-menu cart-dropdown-item-wraper">
                                    <div class="nav-cart-content">

                                        <div class="nav-cart-items p-a15">
                                            <div class="nav-cart-item clearfix">
                                                <div class="nav-cart-item-image">
                                                    <a href="#"><img src="{{ get_imported_asset('images/cart/pic-3.jpg') }}" alt="p-1"></a>
                                                </div>
                                                <div class="nav-cart-item-desc">
                                                    <a href="#">Product Three</a>
                                                    <span class="nav-cart-item-price"><strong>2</strong> x $19.99</span>
                                                    <a href="#" class="nav-cart-item-quantity">x</a>
                                                </div>
                                            </div>
                                            <div class="nav-cart-item clearfix">
                                                <div class="nav-cart-item-image">
                                                    <a href="#"><img src="{{ get_imported_asset('images/cart/pic-4.jpg') }}" alt="p-2"></a>
                                                </div>
                                                <div class="nav-cart-item-desc">
                                                    <a href="#">Product Four</a>
                                                    <span class="nav-cart-item-price"><strong>1</strong> x $24.99</span>
                                                    <a href="#" class="nav-cart-item-quantity">x</a>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="nav-cart-title p-tb10 p-lr15 clearfix">
                                            <h4  class="pull-left m-a0">Subtotal:</h4>
                                            <h5 class="pull-right m-a0">$114.95</h5>
                                        </div>
                                        <div class="nav-cart-action p-a15 clearfix">
                                            <button class="site-button  btn-block m-b15 " type="button">View Cart</button>
                                            <button class="site-button  btn-block" type="button">Checkout </button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- SITE Search -->
                        <div id="search">
                            <span class="close"></span>
                            <form role="search" id="searchform" action="/search" method="get" class="radius-xl">
                                <div class="input-group">
                                    <input value="" name="q" type="search" placeholder="Type to search"/>
                                    <span class="input-group-btn"><button type="button" class="search-btn"><i class="fa fa-search"></i></button></span>
                                </div>
                            </form>
                        </div>


                    </div>
                </div>
            </div>

        </header>
        <!-- HEADER END -->

        <!-- CONTENT START -->
        <div class="page-content">
            <!-- BREADCRUMB ROW -->
            <div class="bg-gray-light p-tb20">
                <div class="container">
                    <ul class="wt-breadcrumb breadcrumb-style-2">
                        <li><a href="javascript:void(0);"><i class="fa fa-home"></i> Home</a></li>
                        <li>{{isset($pageName) ? $pageName : "Unknown"}}</li>
                    </ul>
                </div>
            </div>
            <!-- BREADCRUMB  ROW END -->
            @yield('content')
            <!-- SECTION CONTENT END -->

        </div>
        <!-- CONTENT END -->

        <!-- FOOTER START -->
        @include('components.core.footer')
        <!-- FOOTER END -->

        <!-- BUTTON TOP START -->
        <coin-desk-button-to-top></coin-desk-button-to-top>


        @include('components.core.modals')

    </div>
    <!-- LOADING AREA START ===== -->
    <coin-desk-standard-loader></coin-desk-standard-loader>
    <!-- LOADING AREA  END ====== -->
</div>




<!-- JAVASCRIPT FILES ========================================= -->
<script src="{{ get_imported_asset('js/jquery-3.7.0.min.js') }}"></script><!-- JQUERY.MIN JS -->
<script src="{{ get_imported_asset('js/bootstrap.min.js') }}"></script><!-- BOOTSTRAP.MIN JS -->
<script src="{{ get_imported_asset('js/bootstrap-select.min.js') }}"></script><!-- FORM JS -->
<script src="{{ get_imported_asset('js/jquery.bootstrap-touchspin.min.js') }}"></script><!-- FORM JS -->
<script src="{{ get_imported_asset('js/magnific-popup.min.js') }}"></script><!-- MAGNIFIC-POPUP JS -->
<script src="{{ get_imported_asset('js/waypoints.min.js') }}"></script><!-- WAYPOINTS JS -->
<script src="{{ get_imported_asset('js/counterup.min.js') }}"></script><!-- COUNTERUP JS -->
<script src="{{ get_imported_asset('js/waypoints-sticky.min.js') }}"></script><!-- COUNTERUP JS -->
<script src="{{ get_imported_asset('js/isotope.pkgd.min.js') }}"></script><!-- MASONRY  -->
<script src="{{ get_imported_asset('js/imagesloaded.pkgd.min.js') }}"></script><!-- MASONRY  -->
<script src="{{ get_imported_asset('js/owl.carousel.min.js') }}"></script><!-- OWL  SLIDER  -->
<script src="{{ get_imported_asset('js/scrolla.min.js') }}"></script><!-- ON SCROLL CONTENT ANIMTE   -->
<script src="{{ get_imported_asset('js/custom.js') }}"></script><!-- CUSTOM FUCTIONS  -->
<script src="{{ get_imported_asset('js/shortcode.js') }}"></script><!-- SHORTCODE FUCTIONS  -->
<script src="{{ get_imported_asset('js/switcher.js') }}"></script><!-- SWITCHER FUCTIONS  -->
<script src="{{ get_imported_asset('js/jquery.bgscroll.js') }}"></script><!-- BACKGROUND SCROLL -->
<script src="{{ get_imported_asset('js/tickerNews.min.js') }}"></script><!-- TICKERNEWS-->


</body>

</html>
