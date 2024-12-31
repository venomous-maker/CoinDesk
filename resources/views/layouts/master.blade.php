<?php
$user = auth()->user();
?>
    <!DOCTYPE html>

<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

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

        @include('components.core.header')

        <!-- CONTENT START -->
        <div class="page-content">
            @yield('content')
        </div>
        <!-- CONTENT END -->

        <!-- FOOTER START -->
        @include('components.core.footer')
        <!-- FOOTER END -->

        <!-- BUTTON TOP START -->
        <coin-desk-button-to-top></coin-desk-button-to-top>


        @include('components.core.modals')

    </div>
    <coin-desk-standard-loader></coin-desk-standard-loader>
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


<!-- TICKERNEWS FUNCTiON -->
<script>
    jQuery(function(){
        var timer = !1;
        _Ticker = jQuery("#T1").newsTicker();
        _Ticker.on("mouseenter",function(){
            var __self = this;
            timer = setTimeout(function(){
                __self.pauseTicker();
            },200);
        });
        _Ticker.on("mouseleave",function(){
            clearTimeout(timer);
            if(!timer) return !1;
            this.startTicker();
        });
    });
</script>
<!-- REVOLUTION JS FILES -->
<script  src="{{get_imported_asset("plugins/revolution/revolution/js/jquery.themepunch.tools.min.js") }}"></script>
<script  src="{{get_imported_asset("plugins/revolution/revolution/js/jquery.themepunch.revolution.min.js") }}"></script>
<script  src="{{get_imported_asset("plugins/revolution/revolution/js/extensions/revolution-plugin.js") }}"></script>
<!-- REVOLUTION SLIDER FUNCTION  ===== -->
<script   src="{{get_imported_asset("js/rev-script-1.js")}}"></script>
</body>

</html>
