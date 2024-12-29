{{--<!DOCTYPE html>--}}
{{--<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">--}}
{{--    <head>--}}
{{--        <meta charset="utf-8">--}}
{{--        <meta name="viewport" content="width=device-width, initial-scale=1">--}}

{{--        <title inertia>{{ config('app.name', 'Laravel') }}</title>--}}

{{--        <!-- Fonts -->--}}
{{--        <link rel="preconnect" href="https://fonts.bunny.net">--}}
{{--        <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet" />--}}

{{--        <!-- Scripts -->--}}
{{--        @routes--}}
{{--        @vite(['resources/js/app.ts', "resources/js/Pages/{$page['component']}.vue"])--}}
{{--        @inertiaHead--}}
{{--    </head>--}}
{{--    <body class="font-sans antialiased">--}}
{{--        @inertia--}}
{{--    </body>--}}
{{--</html>--}}
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
    @vite(['resources/js/app.ts', "resources/js/Pages/{$page['component']}.vue"])
    @inertiaHead
    <script
        src="https://cdn.jsdelivr.net/gh/dejurin/crypto-converter-widget/dist/latest.min.js"
        async
    ></script>
</head>

<body id="bg">


<div class="page-wraper">

    <!-- HEADER START -->
    <header class="site-header header-style-3 topbar-transparent mobile-sider-drawer-menu">

        <div class="top-bar">
            <div class="container">
                <div class="row">
                    <div class="clearfix">
                        <div class="wt-topbar-left">
                            <ul class="list-unstyled e-p-bx pull-left">
                                <li><i class="fa fa-envelope"></i>mail@bitinvest.com</li>
                                <li><i class="fa fa-phone"></i>(654) 321-7654</li>
                            </ul>
                        </div>

                        <div class="wt-topbar-right">
                            <div class=" language-select pull-right">
                                <div class="dropdown">
                                    <button class="btn dropdown-toggle" type="button" data-bs-toggle="dropdown">Language
                                        <span class="caret"></span></button>
                                    <ul class="dropdown-menu dropdown-menu-right">
                                        <li><a href="#"><img src="{{ get_imported_asset("images/united-states.png")}}" alt="">English</a></li>
                                        <li><a href="#"><img src="{{ get_imported_asset("images/france.png")}}" alt="">French</a></li>
                                        <li><a href="#"><img src="{{ get_imported_asset("images/germany.png")}}" alt="">German</a></li>
                                    </ul>
                                </div>
                            </div>

                            <ul class="list-unstyled e-p-bx pull-right">
                                <li><a href="#" data-bs-toggle="modal" data-bs-target="#Login-form"><i class="fa fa-user"></i>Login</a></li>
                                <li><a href="#" data-bs-toggle="modal" data-bs-target="#Register-form"><i class="fa fa-sign-in"></i>Register</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="sticky-header main-bar-wraper">
            <div class="main-bar">
                <div class="container">

                    <div class="logo-header mostion">
                        <a href="index.html">
                            <img src="{{ get_logo()}}" width="230" height="67" alt="" />
                        </a>
                    </div>

                    <!-- NAV Toggle Button -->
                    <button id="mobile-side-drawer" data-target=".header-nav" data-toggle="collapse" type="button" class="navbar-toggler collapsed">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar icon-bar-first"></span>
                        <span class="icon-bar icon-bar-two"></span>
                        <span class="icon-bar icon-bar-three"></span>
                    </button>
                    <!-- SITE Search -->

                    <!-- MAIN Vav -->
                    <div class="header-nav navbar-collapse collapse ">
                        <ul class=" nav navbar-nav">
                            <li class="active">
                                <a href="javascript:;">Home<i class="fa fa-chevron-down"></i></a>
                                <ul class="sub-menu">
                                    <li><a href="index.html">Home 1</a></li>
                                    <li><a href="index-2.html">Home 2</a></li>
                                    <li><a href="index-3.html">Home 3</a></li>
                                    <li><a href="index-4.html">Home 4</a></li>
                                </ul>
                            </li>

                            <li>
                                <a href="javascript:;">Pages<i class="fa fa-chevron-down"></i></a>
                                <ul class="sub-menu">
                                    <li>
                                        <a href="javascript:;">About us</a>
                                        <ul class="sub-menu">
                                            <li><a href="about-1.html">About us 1</a></li>
                                        </ul>
                                    </li>
                                    <li>
                                        <a href="javascript:;">Contact us</a>
                                        <ul class="sub-menu">
                                            <li><a href="contact-1.html">Contact us 1</a></li>
                                            <li><a href="contact-2.html">Contact us 2</a></li>
                                        </ul>
                                    </li>
                                    <li>
                                        <a href="javascript:;">Error</a>
                                        <ul class="sub-menu">
                                            <li><a href="error-403.html">Error 403</a></li>
                                            <li><a href="error-404.html">Error 404</a></li>
                                            <li><a href="error-500.html">Error 500</a></li>
                                        </ul>
                                    </li>
                                    <li>
                                        <a href="javascript:;">FAQ</a>
                                        <ul class="sub-menu">
                                            <li><a href="faq-1.html">FAQ 1</a></li>
                                        </ul>
                                    </li>
                                    <li>
                                        <a href="javascript:;">Our Team</a>
                                        <ul class="sub-menu">
                                            <li><a href="our-team.html">Our Team 1</a></li>
                                            <li><a href="our-team-detail.html">Our Team Detail</a></li>
                                        </ul>
                                    </li>
                                    <li>
                                        <a href="javascript:;">Services</a>
                                        <ul class="sub-menu">
                                            <li><a href="services-1.html">Services 1</a></li>
                                            <li><a href="services-2.html">Services 2</a></li>
                                            <li><a href="services-detail.html">Services Detail</a></li>
                                        </ul>
                                    </li>


                                </ul>
                            </li>

                            <li>
                                <a href="javascript:;">Features<i class="fa fa-chevron-down"></i></a>
                                <ul class="sub-menu">
                                    <li>
                                        <a href="javascript:;">Header</a>
                                        <ul class="sub-menu">
                                            <li><a href="header-style-1.html">Header 1</a></li>
                                            <li><a href="header-style-2.html">Header 2</a></li>
                                            <li><a href="header-style-3.html">Header 3</a></li>
                                            <li><a href="header-style-4.html">Header 4</a></li>
                                            <li><a href="header-style-5.html">Header 5</a></li>
                                            <li><a href="header-style-6.html">Header 6</a></li>
                                            <li><a href="header-style-7.html">Header 7</a></li>
                                            <li><a href="header-style-8.html">Header 8</a></li>
                                            <li><a href="header-style-9.html">Header 9</a></li>
                                            <li><a href="header-style-10.html">Header 10</a></li>
                                        </ul>
                                    </li>
                                    <li><a href="footer-fixed.html">Footer Fixed</a></li>
                                    <li><a href="footer-light.html">Footer Light</a></li>
                                    <li><a href="footer-dark.html">Footer Dark</a></li>
                                </ul>
                            </li>

                            <li>
                                <a href="javascript:;">Product<i class="fa fa-chevron-down"></i></a>
                                <ul class="sub-menu">
                                    <li><a href="product.html">Product</a></li>
                                    <li><a href="product-detail.html">Product Detail</a></li>
                                    <li><a href="shopping-cart.html">Shopping cart</a></li>
                                    <li><a href="wish-list.html">Wishlist</a></li>
                                    <li><a href="checkout.html">Checkout</a></li>
                                </ul>
                            </li>

                            <li class="submenu-direction">
                                <a href="javascript:;">Blog<i class="fa fa-chevron-down"></i></a>
                                <ul class="sub-menu">
                                    <li>
                                        <a href="javascript:;">Single</a>
                                        <ul class="sub-menu">
                                            <li><a href="blog-single.html">Single full</a></li>
                                            <li><a href="blog-single-left-sidebar.html">Single sidebar left</a></li>
                                        </ul>
                                    </li>
                                    <li>
                                        <a href="javascript:;">list</a>
                                        <ul class="sub-menu">
                                            <li><a href="blog-half-img.html">Half image</a></li>
                                            <li><a href="blog-half-img-left-sidebar.html">Half image sidebar left</a></li>
                                            <li><a href="blog-large-img.html">Large image</a></li>
                                            <li><a href="blog-large-img-left-sidebar.html">Large image sidebar left</a></li>
                                        </ul>
                                    </li>
                                    <li>
                                        <a href="javascript:;">Grid</a>
                                        <ul class="sub-menu">
                                            <li><a href="blog-grid-2.html">Grid 2</a></li>
                                            <li><a href="blog-grid-2-sidebar-left.html">Grid 2 sidebar left</a></li>
                                            <li><a href="blog-grid-3.html">Grid 3</a></li>
                                            <li><a href="blog-grid-3-sidebar-left.html">Grid 3 sidebar left</a></li>
                                        </ul>
                                    </li>
                                    <li>
                                        <a href="javascript:;">Media</a>
                                        <ul class="sub-menu">
                                            <li><a href="blog-media-list.html">Media list</a></li>
                                            <li><a href="blog-media-grid.html">Media grid</a></li>
                                        </ul>
                                    </li>
                                </ul>
                            </li>

                            <li class="has-mega-menu ">
                                <a href="javascript:;">Elements<i class="fa fa-chevron-down"></i></a>
                                <ul class="mega-menu">
                                    <li>

                                        <ul>
                                            <li><a href="shortcode-animations.html"><i class="fa fa-ravelry"></i> Animations</a></li>
                                            <li><a href="shortcode-accordians.html"> <i class="fa fa-bars"></i>Accordians</a></li>
                                            <li><a href="shortcode-alert-box.html"> <i class="fa fa-bell-o"></i>Alert box</a></li>
                                            <li><a href="shortcode-buttons.html"> <i class="fa fa-toggle-on"></i>Buttons</a></li>
                                            <li><a href="shortcode-client.html"> <i class="fa fa-group"></i>Clients</a></li>
                                            <li><a href="shortcode-client-slider.html"> <i class="fa fa-drivers-license-o"></i>Clients slider</a></li>
                                            <li><a href="shortcode-carousel-sliders.html"> <i class="fa fa-sliders"></i>Carousel sliders</a></li>
                                        </ul>
                                    </li>

                                    <li>

                                        <ul>
                                            <li><a href="shortcode-counters.html"> <i class="fa fa-calculator"></i>Counters</a></li>
                                            <li><a href="shortcode-dividers.html"> <i class="fa fa-ellipsis-h"></i>Dividers</a></li>
                                            <li><a href="shortcode-google-map.html"> <i class="fa fa-map-o"></i>Google map</a></li>
                                            <li><a href="shortcode-icons.html"> <i class="fa fa-ellipsis-h"></i>Icons Shortcodes</a></li>
                                            <li><a href="shortcode-icon-box.html"> <i class="fa fa-square-o"></i>Icon-box</a></li>
                                            <li><a href="shortcode-icon-box-styles.html"> <i class="fa fa-square-o"></i>Icon box styles</a></li>
                                            <li><a href="shortcode-image-box-content.html"> <i class="fa fa-address-card-o"></i>Image box content</a></li>
                                        </ul>
                                    </li>

                                    <li>

                                        <ul>
                                            <li><a href="shortcode-images-effects.html"> <i class="fa fa-photo"></i>Images effects</a></li>
                                            <li><a href="shortcode-list-group.html"> <i class="fa fa-list-ol"></i>List group</a></li>
                                            <li><a href="shortcode-modal-popup.html"> <i class="fa fa-window-maximize"></i>Modal popup</a></li>
                                            <li><a href="shortcode-pagination.html"> <i class="fa fa-terminal"></i>Pagination</a></li>
                                            <li><a href="shortcode-pricing-table.html"> <i class="fa fa-dollar"></i>Pricing table</a></li>
                                            <li><a href="shortcode-toggles.html"> <i class="fa fa-plus-square-o"></i>Toggles</a></li>
                                            <li><a href="shortcode-tooltips.html"> <i class="fa fa-window-maximize"></i>Tooltips</a></li>
                                        </ul>
                                    </li>

                                    <li>

                                        <ul>
                                            <li><a href="shortcode-tabs.html"> <i class="fa fa-th-list"></i>Tabs</a></li>
                                            <li><a href="shortcode-table.html"> <i class="fa fa-table"></i>Table</a></li>
                                            <li><a href="shortcode-testimonials.html"> <i class="fa fa-twitch"></i>Testimonials</a></li>
                                            <li><a href="shortcode-testimonials-grid.html"> <i class="fa fa-twitch"></i>Testimonials grid</a></li>
                                            <li><a href="shortcode-title-separators.html"> <i class="fa fa-ellipsis-h"></i>Title-separators</a></li>
                                            <li><a href="shortcode-video.html"> <i class="fa fa-video-camera"></i>Video</a></li>
                                            <li><a href="shortcode-all-widgets.html"> <i class="fa fa-retweet"></i>Widgets</a></li>
                                        </ul>
                                    </li>
                                </ul>
                            </li>
                        </ul>
                    </div>

                    <!-- ETRA Nav -->
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
                                                <a href="#"><img src="{{ get_imported_asset("images/cart/pic-3.jpg")}}" alt="p-1"></a>
                                            </div>
                                            <div class="nav-cart-item-desc">
                                                <a href="#">Product Three</a>
                                                <span class="nav-cart-item-price"><strong>2</strong> x $19.99</span>
                                                <a href="#" class="nav-cart-item-quantity">x</a>
                                            </div>
                                        </div>
                                        <div class="nav-cart-item clearfix">
                                            <div class="nav-cart-item-image">
                                                <a href="#"><img src="{{ get_imported_asset("images/cart/pic-4.jpg")}}" alt="p-2"></a>
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
        @inertia
    </div>
    <!-- CONTENT END -->

    <!-- FOOTER START -->
    <footer class="site-footer footer-dark bg-no-repeat bg-full-height bg-center "  style="background-image:url({{get_imported_asset("images/background/footer-bg.jpg")}});">
        <!-- FOOTER BLOCKES START -->
        <div class="footer-top overlay-wraper">
            <div class="overlay-main bg-black opacity-05"></div>
            <div class="container">
                <div class="row">
                    <!-- ABOUT COMPANY -->
                    <div class="col-lg-3 col-md-6">
                        <div class="widget widget_about">
                            <h4 class="widget-title text-white">About Company</h4>
                            <div class="logo-footer clearfix p-b15">
                                <a href="index.html"><img src="{{get_logo(footer: true)}}" width="230" height="67" alt=""/></a>
                            </div>
                            <p>Thewebmax ipsum dolor sit amet, consectetu adipiscing elit, sed diam nonummy euismod tincidunt ut laoreet dolore agna aliquam erat .
                                wisi enim ad minim veniam, quis tation. siame, consec tetuer. ipsum dolor sitam, consectetuer adipiscing.ipsum dolor sit.
                            </p>
                        </div>
                    </div>
                    <!-- RESENT POST -->
                    <div class="col-lg-3 col-md-6 col-sm-6">
                        <div class="widget recent-posts-entry-date">
                            <h4 class="widget-title text-white">Resent Post</h4>
                            <div class="widget-post-bx">
                                <div class="bdr-light-blue widget-post clearfix  bdr-b-1 m-b10 p-b10">
                                    <div class="wt-post-date text-center text-uppercase text-white p-t5">
                                        <strong>20</strong>
                                        <span>Mar</span>
                                    </div>
                                    <div class="wt-post-info">
                                        <div class="wt-post-header">
                                            <h6 class="post-title"><a href="blog-single.html">Blog title first </a></h6>
                                        </div>
                                        <div class="wt-post-meta">
                                            <ul>
                                                <li class="post-author"><i class="fa fa-user"></i>By Admin</li>
                                                <li class="post-comment"><i class="fa fa-comments"></i> 28</li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                                <div class="bdr-light-blue widget-post clearfix  bdr-b-1 m-b10 p-b10">
                                    <div class="wt-post-date text-center text-uppercase text-white p-t5">
                                        <strong>30</strong>
                                        <span>Mar</span>
                                    </div>
                                    <div class="wt-post-info">
                                        <div class="wt-post-header">
                                            <h6 class="post-title"><a href="blog-single.html">Blog title first </a></h6>
                                        </div>
                                        <div class="wt-post-meta">
                                            <ul>
                                                <li class="post-author"><i class="fa fa-user"></i>By Admin</li>
                                                <li class="post-comment"><i class="fa fa-comments"></i> 29</li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                                <div class="bdr-light-blue widget-post clearfix  bdr-b-1 m-b10 p-b10">
                                    <div class="wt-post-date text-center text-uppercase text-white p-t5">
                                        <strong>31</strong>
                                        <span>Mar</span>
                                    </div>
                                    <div class="wt-post-info">
                                        <div class="wt-post-header">
                                            <h6 class="post-title"><a href="blog-single.html">Blog title first </a></h6>
                                        </div>
                                        <div class="wt-post-meta">
                                            <ul>
                                                <li class="post-author"><i class="fa fa-user"></i>By Admin</li>
                                                <li class="post-comment"><i class="fa fa-comments"></i> 30</li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- USEFUL LINKS -->
                    <div class="col-lg-3 col-md-6 col-sm-6">
                        <div class="widget widget_services">
                            <h4 class="widget-title text-white">Useful links</h4>
                            <ul>
                                <li><a href="about-1.html">About</a></li>
                                <li><a href="faq-1.html">FAQ</a></li>
                                <li><a href="our-team.html">Our Team</a></li>
                                <li><a href="services-1.html">Services</a></li>
                                <li><a href="contact-1.html">Contact Us</a></li>
                            </ul>
                        </div>
                    </div>
                    <!-- NEWSLETTER -->
                    <div class="col-lg-3 col-md-6">
                        <div class="widget widget_newsletter">
                            <h4 class="widget-title text-white">Newsletter</h4>
                            <div class="newsletter-bx">
                                <form role="search" method="post">
                                    <div class="input-group">
                                        <input name="news-letter" class="form-control" placeholder="ENTER YOUR EMAIL" type="text">
                                        <span class="input-group-btn">
                                            <button type="submit" class="site-button"><i class="fa fa-paper-plane-o"></i></button>
                                        </span>
                                    </div>
                                </form>
                            </div>
                        </div>
                        <!-- SOCIAL LINKS -->
                        <div class="widget widget_social_inks">
                            <h4 class="widget-title text-white">Social Links</h4>
                            <ul class="social-icons social-square social-darkest">
                                <li><a href="javascript:void(0);" class="fa fa-facebook"></a></li>
                                <li><a href="javascript:void(0);" class="fa fa-twitter"></a></li>
                                <li><a href="javascript:void(0);" class="fa fa-linkedin"></a></li>
                                <li><a href="javascript:void(0);" class="fa fa-rss"></a></li>
                                <li><a href="javascript:void(0);" class="fa fa-youtube"></a></li>
                                <li><a href="javascript:void(0);" class="fa fa-instagram"></a></li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="row">

                    <div class="col-lg-3 col-md-6 col-sm-6 p-tb20">
                        <div class="wt-icon-box-wraper left  bdr-1 bdr-gray-dark p-tb15 p-lr10 clearfix">
                            <div class="icon-md site-text-primary">
                                <span class="iconmoon-travel"></span>
                            </div>
                            <div class="icon-content text-white">
                                <h5 class="wt-tilte text-uppercase m-b0">Address</h5>
                                <p>No.123 Chalingt Gates, Supper market New York</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6 col-sm-6 p-tb20 ">
                        <div class="wt-icon-box-wraper left  bdr-1 bdr-gray-dark p-tb15 p-lr10 clearfix ">
                            <div class="icon-md site-text-primary">
                                <span class="iconmoon-smartphone-1"></span>
                            </div>
                            <div class="icon-content text-white">
                                <h5 class="wt-tilte text-uppercase m-b0">Phone</h5>
                                <p class="m-b0">+41 555 888 9585</p>
                                <p>+41 555 888 9585</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6 col-sm-6 p-tb20">
                        <div class="wt-icon-box-wraper left  bdr-1 bdr-gray-dark p-tb15 p-lr10 clearfix">
                            <div class="icon-md site-text-primary">
                                <span class="iconmoon-fax"></span>
                            </div>
                            <div class="icon-content text-white">
                                <h5 class="wt-tilte text-uppercase m-b0">Fax</h5>
                                <p class="m-b0">FAX: (123) 123-4567</p>
                                <p>FAX: (123) 123-4567</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6 col-sm-6 p-tb20">
                        <div class="wt-icon-box-wraper left  bdr-1 bdr-gray-dark p-tb15 p-lr10 clearfix">
                            <div class="icon-md site-text-primary">
                                <span class="iconmoon-email"></span>
                            </div>
                            <div class="icon-content text-white">
                                <h5 class="wt-tilte text-uppercase m-b0">Email</h5>
                                <p class="m-b0">info@demo.com</p>
                                <p>info@demo1234.com</p>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>
        <!-- FOOTER COPYRIGHT -->
        <div class="footer-bottom  overlay-wraper">
            <div class="overlay-main"></div>
            <div class="constrot-strip"></div>
            <div class="container p-t30">
                <div class="cpr-ftr-section">
                    <div class="wt-footer-bot-left">
                        <span class="copyrights-text">© 2023 Your Company. All Rights Reserved. Designed By thewebmax.</span>
                    </div>
                    <div class="wt-footer-bot-right">
                        <ul class="copyrights-nav pull-right">
                            <li><a href="services-1.html">Terms  & Condition</a></li>
                            <li><a href="about-1.html">Privacy Policy</a></li>
                            <li><a href="contact-1.html">Contact Us</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </footer>
    <!-- FOOTER END -->

    <!-- BUTTON TOP START -->
    <button class="scroltop"><span class=" iconmoon-house relative" id="btn-vibrate"></span>Top</button>

    <!-- MODAL  LOGIN -->
    <div id="Login-form" class="modal fade " role="dialog">
        <div class="modal-dialog">
            <!-- Modal content-->
            <div class="modal-content">
                <div class="modal-header site-bg-primary">
                    <button type="button" class="close" data-bs-dismiss="modal">&times;</button>
                    <h4 class="modal-title text-white">Login Your Account</h4>
                </div>
                <div class="modal-body p-a30">
                    <form id="log-form">
                        <div class="form-group">
                            <div class="input-group">
                                <span class="input-group-addon"><i class="fa fa-envelope"></i></span>
                                <input class="form-control" placeholder="Enter email" name="email" type="email">
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="input-group">
                                <span class="input-group-addon"><i class="fa fa-key"></i></span>
                                <input class="form-control" placeholder="Enter Password" name="password" type="password">
                            </div>
                        </div>
                        <button type="submit" class="site-button-secondry text-uppercase btn-block m-b10">Submit</button>
                        <div class="font-12">Don't have an account? <a href="javascript:;" class="site-text-primary">Register Here</a></div>
                    </form>
                </div>
                <div class="modal-footer text-center">
                    <div class="text-center"><img src="{{get_logo()}}" alt=""></div>
                </div>
            </div>
        </div>
    </div>

    <!-- MODAL  REGISTER -->
    <div id="Register-form" class="modal fade " role="dialog">
        <div class="modal-dialog">
            <!-- Modal content-->
            <div class="modal-content">
                <div class="modal-header site-bg-primary">
                    <button type="button" class="close" data-bs-dismiss="modal">&times;</button>
                    <h4 class="modal-title text-white">Register here</h4>
                </div>
                <div class="modal-body p-a30">
                    <form id="reg-form">
                        <div class="form-group">
                            <div class="input-group">
                                <span class="input-group-addon"><i class="fa fa-user"></i></span>
                                <input class="form-control" placeholder="Enter Username" name="name" type="text">
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="input-group">
                                <span class="input-group-addon"><i class="fa fa-envelope"></i></span>
                                <input class="form-control" placeholder="Enter email" name="email" type="email">
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="input-group">
                                <span class="input-group-addon"><i class="fa fa-key"></i></span>
                                <input class="form-control" placeholder="Enter Password" name="password" type="password">
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="input-group">
                                <span class="input-group-addon"><i class="fa fa-key"></i></span>
                                <input class="form-control" placeholder="Confirm Password" name="confirm_password" type="password">
                            </div>
                        </div>
                        <button type="submit" class="site-button-secondry text-uppercase btn-block m-b10">Submit</button>
                        <div class="font-12">Already Have an Account? <a href="javascript:;" class="site-text-primary">Login</a></div>
                    </form>
                </div>
                <div class="modal-footer text-center">
                    <div class="text-center"><img src="{{get_logo()}}" alt=""></div>
                </div>
            </div>
        </div>
    </div>

</div>


<!-- LOADING AREA START ===== -->
<div class="loading-area">
    <div class="loading-box"></div>
    <div class="loading-pic">
        <div class="cssload-container">
            <div class="cssload-dot site-bg-primary"><i class="fa fa-bitcoin"></i></div>
            <div class="step" id="cssload-s1"></div>
            <div class="step" id="cssload-s2"></div>
            <div class="step" id="cssload-s3"></div>
        </div>
    </div>
</div>
<!-- LOADING AREA  END ====== -->



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
