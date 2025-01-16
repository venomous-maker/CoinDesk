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
    {{--    <title>MAVEX CRYPT</title>--}}
    <title inertia>{{ config('app.name', 'Mavex Crypt') }}</title>
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
                            <img src="{{ get_logo(theme: 'dark') }}" width="216" height="37" alt="" />
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
                                        <span></span>
                                    </div>
                                </div>
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


                    </div>
                </div>
            </div>

        </header>
        <!-- HEADER END -->

        <!-- CONTENT START -->
        <div class="page-content">
            <!-- BREADCRUMB ROW -->
            <!-- <coin-desk-bread-crumb-row page-title="{{isset($pageName) ? $pageName : "Unknown"}}"></coin-desk-bread-crumb-row> -->
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
