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

    <!-- FAVICONS ICON -->
    <link rel="icon" href="{{asset("assets/images/favicon.ico")}}" type="image/x-icon" />
    <link rel="shortcut icon" type="image/x-icon" href="{{get_imported_asset("images/favicon.png")}}" />

    <!-- PAGE TITLE HERE -->
    <title>Bit-invest Template | Home Page 1</title>

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
    @inertiaHead

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
                            <img src="{{ get_imported_asset("images/logo-light.png")}}" width="230" height="67" alt="" />
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

        <!-- SLIDER START -->
        <div class="main-slider style-two default-banner">
            <div class="tp-banner-container">
                <div class="tp-banner" >
                    <!-- START REVOLUTION SLIDER 5.4.1 -->
                    <div id="rev_slider_1014_1_wrapper" class="rev_slider_wrapper fullscreen-container" data-alias="typewriter-effect" data-source="gallery">
                        <div id="rev_slider_1014_1" class="rev_slider fullscreenbanner" style="display:none;" data-version="5.4.1">
                            <ul>
                                <!-- SLIDE 1 -->
                                <li data-index="rs-1000" data-transition="slidingoverlayhorizontal" data-slotamount="default" data-hideafterloop="0" data-hideslideonmobile="off"  data-easein="default" data-easeout="default" data-masterspeed="default"  data-thumb="{{ get_imported_asset("images/main-slider/slider2/slide1.jpg")}}"  data-rotate="0"  data-saveperformance="off"  data-title="Slide" data-param1="" data-param2="" data-param3="" data-param4="" data-param5="" data-param6="" data-param7="" data-param8="" data-param9="" data-param10="" data-description="">
                                    <!-- MAIN IMAGE -->
                                    <img src="{{ get_imported_asset("images/main-slider/slider2/slide1.jpg")}}"  alt=""  data-bgposition="center bottom" data-bgfit="cover" data-bgrepeat="no-repeat" class="rev-slidebg" data-no-retina/>
                                    <!-- LAYERS -->

                                    <!-- LAYER NR. 1 [ for overlay ] -->
                                    <div class="tp-caption tp-shape tp-shapewrapper "
                                         id="slide-100-layer-1"
                                         data-x="['center','center','center','center']" data-hoffset="['0','0','0','0']"
                                         data-y="['middle','middle','middle','middle']" data-voffset="['0','0','0','0']"
                                         data-width="full"
                                         data-height="full"
                                         data-whitespace="nowrap"
                                         data-type="shape"
                                         data-basealign="slide"
                                         data-responsive_offset="off"
                                         data-responsive="off"
                                         data-frames='[
                                    {"from":"opacity:0;","speed":1000,"to":"o:1;","delay":0,"ease":"Power4.easeOut"},
                                    {"delay":"wait","speed":1000,"to":"opacity:0;","ease":"Power4.easeOut"}
                                    ]'
                                         data-textAlign="['left','left','left','left']"
                                         data-paddingtop="[0,0,0,0]"
                                         data-paddingright="[0,0,0,0]"
                                         data-paddingbottom="[0,0,0,0]"
                                         data-paddingleft="[0,0,0,0]"

                                         style="z-index: 12;background-color:rgba(0, 0, 0, 0.3);border-color:rgba(0, 0, 0, 0);border-width:0px;">
                                    </div>
                                    <!-- LAYER NR. 2 [ for title ] -->
                                    <div class="tp-caption   tp-resizeme"
                                         id="slide-100-layer-2"
                                         data-x="['left','left','left','left']" data-hoffset="['30','30','30','30']"
                                         data-y="['top','top','top','top']" data-voffset="['308','308','308','308']"
                                         data-fontsize="['60','60','60','60']"
                                         data-lineheight="['110','110','110','110']"
                                         data-width="['6','6','6','6']"
                                         data-height="['110,'110','110','110']"
                                         data-whitespace="['normal','normal','normal','normal']"

                                         data-type="text"
                                         data-responsive_offset="on"
                                         data-frames='[
                                    {"from":"y:100px(R);opacity:0;","speed":2000,"to":"o:1;","delay":500,"ease":"Power4.easeOut"},
                                    {"delay":"wait","speed":1000,"to":"y:-50px;opacity:0;","ease":"Power2.easeInOut"}
                                    ]'
                                         data-textAlign="['left','left','left','left']"
                                         data-paddingtop="[0,0,0,0]"
                                         data-paddingright="[0,0,0,0]"
                                         data-paddingbottom="[0,0,0,0]"
                                         data-paddingleft="[0,0,0,0]"

                                         style="z-index: 13;
                                    white-space: normal;
                                    ">

                                        <div class="site-bg-primary">&nbsp;</div>

                                    </div>

                                    <!-- LAYER NR. 3 [ for title ] -->
                                    <div class="tp-caption   tp-resizeme"
                                         id="slide-100-layer-3"
                                         data-x="['left','left','left','left']" data-hoffset="['60','60','60','100']"
                                         data-y="['top','top','top','top']" data-voffset="['300','300','300','300']"
                                         data-fontsize="['55','55','55','45']"
                                         data-lineheight="['60','60','60','65']"
                                         data-width="['700','700','700','700']"
                                         data-height="['none','none','none','none']"
                                         data-whitespace="['normal','normal','normal','normal']"

                                         data-type="text"
                                         data-responsive_offset="on"
                                         data-frames='[
                                    {"from":"y:100px(R);opacity:0;","speed":2000,"to":"o:1;","delay":500,"ease":"Power4.easeOut"},
                                    {"delay":"wait","speed":1000,"to":"y:-50px;opacity:0;","ease":"Power2.easeInOut"}
                                    ]'
                                         data-textAlign="['left','left','left','left']"
                                         data-paddingtop="[0,0,0,0]"
                                         data-paddingright="[0,0,0,0]"
                                         data-paddingbottom="[0,0,0,0]"
                                         data-paddingleft="[0,0,0,0]"

                                         style="z-index: 13;
                                    white-space: normal;
                                    font-weight: 700;
                                    color: rgb(75, 57, 65);
                                    border-width:0px;">

                                        <div style="font-family: 'Poppins', sans-serif; text-transform:uppercase;">
                                            <span class="text-white" style="padding-right:10px;">The most</span><span class="site-text-primary">Secure</span>
                                        </div>

                                    </div>

                                    <!-- LAYER NR. 4 [ for title ] -->
                                    <div class="tp-caption   tp-resizeme"
                                         id="slide-100-layer-4"
                                         data-x="['left','left','left','left']" data-hoffset="['60','60','60','100']"
                                         data-y="['top','top','top','top']" data-voffset="['360','360','360','360']"
                                         data-fontsize="['53','53','53','45']"
                                         data-lineheight="['70','70','70','75']"
                                         data-width="['700','700','700','700']"
                                         data-height="['none','none','none','none']"
                                         data-whitespace="['normal','normal','normal','normal']"

                                         data-type="text"
                                         data-responsive_offset="on"
                                         data-frames='[
                                    {"from":"y:100px(R);opacity:0;","speed":2000,"to":"o:1;","delay":1000,"ease":"Power4.easeOut"},
                                    {"delay":"wait","speed":1000,"to":"y:-50px;opacity:0;","ease":"Power2.easeInOut"}
                                    ]'
                                         data-textAlign="['left','left','left','left']"
                                         data-paddingtop="[0,0,0,0]"
                                         data-paddingright="[0,0,0,0]"
                                         data-paddingbottom="[0,0,0,0]"
                                         data-paddingleft="[0,0,0,0]"

                                         style="z-index: 13;
                                    white-space: normal;
                                    font-weight: 700;
                                    border-width:0px;">
                                        <div style="font-family: 'Poppins', sans-serif; text-transform:uppercase ;">
                                            <span class="site-text-primary" style="padding-right:10px;">Crypto</span><span class="text-white">Currency</span>
                                        </div>

                                    </div>

                                    <!-- LAYER NR. 5 [ for paragraph] -->
                                    <div class="tp-caption  tp-resizeme"
                                         id="slide-100-layer-5"
                                         data-x="['left','left','left','left']" data-hoffset="['30','30','30','100']"
                                         data-y="['top','top','top','top']" data-voffset="['440','440','440','440']"
                                         data-fontsize="['16','16','16','30']"
                                         data-lineheight="['30','30','30','40']"
                                         data-width="['600','600','600','600']"
                                         data-height="['none','none','none','none']"
                                         data-whitespace="['normal','normal','normal','normal']"

                                         data-type="text"
                                         data-responsive_offset="on"
                                         data-frames='[
                                    {"from":"y:100px(R);opacity:0;","speed":2000,"to":"o:1;","delay":1500,"ease":"Power4.easeOut"},
                                    {"delay":"wait","speed":1000,"to":"y:-50px;opacity:0;","ease":"Power2.easeInOut"}
                                    ]'
                                         data-textAlign="['left','left','left','left']"
                                         data-paddingtop="[0,0,0,0]"
                                         data-paddingright="[0,0,0,0]"
                                         data-paddingbottom="[0,0,0,0]"
                                         data-paddingleft="[0,0,0,0]"

                                         style="z-index: 13;
                                    font-weight: 500;
                                    color:#fff;
                                    border-width:0px;">
                                        <span style="font-family: 'Poppins', sans-serif;">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been end</span>
                                    </div>

                                    <!-- LAYER NR. 6 [ for see all service botton ] -->
                                    <div class="tp-caption tp-resizeme"
                                         id="slide-100-layer-6"
                                         data-x="['left','left','left','left']" data-hoffset="['30','30','30','100']"

                                         data-y="['top','top','top','top']" data-voffset="['530','530','530','600']"
                                         data-lineheight="['none','none','none','none']"
                                         data-width="['300','300','300','300']"
                                         data-height="['none','none','none','none']"
                                         data-whitespace="['normal','normal','normal','normal']"

                                         data-type="text"
                                         data-responsive_offset="on"
                                         data-frames='[
                                    {"from":"y:100px(R);opacity:0;","speed":2000,"to":"o:1;","delay":2000,"ease":"Power4.easeOut"},
                                    {"delay":"wait","speed":1000,"to":"y:-50px;opacity:0;","ease":"Power2.easeInOut"}
                                    ]'
                                         data-textAlign="['left','left','left','left']"
                                         data-paddingtop="[0,0,0,0]"
                                         data-paddingright="[0,0,0,0]"
                                         data-paddingbottom="[0,0,0,0]"
                                         data-paddingleft="[0,0,0,0]"

                                         style="z-index:13; text-transform:uppercase;">
                                        <a href="javascript:;" class="site-button slider-btn-left">Contact Us</a>
                                    </div>

                                    <!-- LAYER NR. 7 [ for more detail botton ] -->
                                    <div class="tp-caption tp-resizeme"
                                         id="slide-100-layer-7"
                                         data-x="['left','left','left','left']" data-hoffset="['220','220','220','320']"
                                         data-y="['top','top','top','top']" data-voffset="['530','530','530','600']"
                                         data-lineheight="['none','none','none','none']"
                                         data-width="['300','300','300','300']"
                                         data-height="['none','none','none','none']"
                                         data-whitespace="['normal','normal','normal','normal']"

                                         data-type="text"
                                         data-responsive_offset="on"
                                         data-frames='[
                                    {"from":"y:100px(R);opacity:0;","speed":2000,"to":"o:1;","delay":2000,"ease":"Power4.easeOut"},
                                    {"delay":"wait","speed":1000,"to":"y:-50px;opacity:0;","ease":"Power2.easeInOut"}
                                    ]'
                                         data-textAlign="['left','left','left','left']"
                                         data-paddingtop="[0,0,0,0]"
                                         data-paddingright="[0,0,0,0]"
                                         data-paddingbottom="[0,0,0,0]"
                                         data-paddingleft="[0,0,0,0]"

                                         style="z-index:13;
                                    text-transform:uppercase;
                                    font-weight:500;
                                    ">
                                        <a href="javascript:;" class=" site-button white slider-btn-right">Join Us</a>
                                    </div>

                                    <!-- LAYER NR. 8 [ for more detail botton ] -->
                                    <div class="tp-caption tp-resizeme"
                                         id="slide-100-layer-8"
                                         data-x="['right','right','right','right']" data-hoffset="['0','0','0','0']"
                                         data-y="['bottom','bottom','bottom','bottom']" data-voffset="['100','100','100','100']"

                                         data-frames='[
                                    {"from":"y:200px(R);opacity:0;","speed":2000,"to":"o:1;","delay":2000,"ease":"Power4.easeOut"},
                                    {"delay":"wait","speed":1000,"to":"y:-50px;opacity:0;","ease":"Power2.easeInOut"}
                                    ]'

                                         style="z-index: 13;">
                                        <img src="{{ get_imported_asset("images/main-slider/slider2/earth.png")}}" alt="" class="spin-city">
                                    </div>

                                    <!-- LAYER NR. 9 [ for more detail botton ] -->
                                    <div class="tp-caption tp-resizeme"
                                         id="slide-100-layer-9"

                                         data-x="['right','right','right','right']" data-hoffset="['120','120','120','120']"
                                         data-y="['bottom','bottom','bottom','bottom']" data-voffset="['180','180','180','180']"

                                         data-height="none"
                                         data-whitespace="nowrap"

                                         data-type="image"
                                         data-responsive_offset="on"

                                         data-frames='[{"from":"x:0;y:0;z:0;rX:0;rY:0;rZ:0;sX:0.75;sY:0.75;skX:0;skY:0;opacity:0;","speed":1500,"to":"o:1;","delay":3000,"ease":"Power3.easeOut"},
                                    {"delay":"wait","speed":300,"to":"opacity:0;","ease":"nothing"}]'

                                         data-textAlign="['left','left','left','left']"
                                         data-paddingtop="[0,0,0,0]"
                                         data-paddingright="[0,0,0,0]"
                                         data-paddingbottom="[0,0,0,0]"
                                         data-paddingleft="[0,0,0,0]"


                                         style="z-index: 13;">
                                        <img src="{{ get_imported_asset("images/main-slider/slider2/bitcoin.png")}}" alt="">
                                    </div>


                                </li>

                                <!-- SLIDE 2 -->
                                <li data-index="rs-1001" data-transition="slidingoverlayhorizontal" data-slotamount="default" data-hideafterloop="0" data-hideslideonmobile="off"  data-easein="default" data-easeout="default" data-masterspeed="default"  data-thumb="{{ get_imported_asset("images/main-slider/slider2/slide1.jpg")}}"  data-rotate="0"  data-saveperformance="off"  data-title="Slide" data-param1="" data-param2="" data-param3="" data-param4="" data-param5="" data-param6="" data-param7="" data-param8="" data-param9="" data-param10="" data-description="">
                                    <!-- MAIN IMAGE -->
                                    <img src="{{ get_imported_asset("images/main-slider/slider2/slide1.jpg")}}"  alt=""  data-bgposition="center bottom" data-bgfit="cover" data-bgrepeat="no-repeat" class="rev-slidebg" data-no-retina/>
                                    <!-- LAYERS -->

                                    <!-- LAYER NR. 1 [ for overlay ] -->
                                    <div class="tp-caption tp-shape tp-shapewrapper "
                                         id="slide-101-layer-1"
                                         data-x="['center','center','center','center']" data-hoffset="['0','0','0','0']"
                                         data-y="['middle','middle','middle','middle']" data-voffset="['0','0','0','0']"
                                         data-width="full"
                                         data-height="full"
                                         data-whitespace="nowrap"
                                         data-type="shape"
                                         data-basealign="slide"
                                         data-responsive_offset="off"
                                         data-responsive="off"
                                         data-frames='[
                                    {"from":"opacity:0;","speed":1000,"to":"o:1;","delay":0,"ease":"Power4.easeOut"},
                                    {"delay":"wait","speed":1000,"to":"opacity:0;","ease":"Power4.easeOut"}
                                    ]'
                                         data-textAlign="['left','left','left','left']"
                                         data-paddingtop="[0,0,0,0]"
                                         data-paddingright="[0,0,0,0]"
                                         data-paddingbottom="[0,0,0,0]"
                                         data-paddingleft="[0,0,0,0]"

                                         style="z-index: 12;background-color:rgba(0, 0, 0, 0.3);border-color:rgba(0, 0, 0, 0);border-width:0px;">
                                    </div>

                                    <!-- LAYER NR. 2 [ for title ] -->
                                    <div class="tp-caption   tp-resizeme"
                                         id="slide-101-layer-2"
                                         data-x="['left','left','left','left']" data-hoffset="['30','30','30','30']"
                                         data-y="['top','top','top','top']" data-voffset="['308','308','308','308']"
                                         data-fontsize="['60','60','60','60']"
                                         data-lineheight="['110','110','110','110']"
                                         data-width="['6','6','6','6']"
                                         data-height="['110,'110','110','110']"
                                         data-whitespace="['normal','normal','normal','normal']"

                                         data-type="text"
                                         data-responsive_offset="on"
                                         data-frames='[
                                    {"from":"y:100px(R);opacity:0;","speed":2000,"to":"o:1;","delay":500,"ease":"Power4.easeOut"},
                                    {"delay":"wait","speed":1000,"to":"y:-50px;opacity:0;","ease":"Power2.easeInOut"}
                                    ]'
                                         data-textAlign="['left','left','left','left']"
                                         data-paddingtop="[0,0,0,0]"
                                         data-paddingright="[0,0,0,0]"
                                         data-paddingbottom="[0,0,0,0]"
                                         data-paddingleft="[0,0,0,0]"

                                         style="z-index: 13;
                                    white-space: normal;
                                    ">

                                        <div class="site-bg-primary">&nbsp;</div>

                                    </div>

                                    <!-- LAYER NR. 3 [ for title ] -->
                                    <div class="tp-caption   tp-resizeme"
                                         id="slide-101-layer-3"
                                         data-x="['left','left','left','left']" data-hoffset="['60','60','60','100']"
                                         data-y="['top','top','top','top']" data-voffset="['300','300','300','300']"
                                         data-fontsize="['55','55','55','45']"
                                         data-lineheight="['60','60','60','65']"
                                         data-width="['700','700','700','700']"
                                         data-height="['none','none','none','none']"
                                         data-whitespace="['normal','normal','normal','normal']"

                                         data-type="text"
                                         data-responsive_offset="on"
                                         data-frames='[
                                    {"from":"y:100px(R);opacity:0;","speed":2000,"to":"o:1;","delay":500,"ease":"Power4.easeOut"},
                                    {"delay":"wait","speed":1000,"to":"y:-50px;opacity:0;","ease":"Power2.easeInOut"}
                                    ]'
                                         data-textAlign="['left','left','left','left']"
                                         data-paddingtop="[0,0,0,0]"
                                         data-paddingright="[0,0,0,0]"
                                         data-paddingbottom="[0,0,0,0]"
                                         data-paddingleft="[0,0,0,0]"

                                         style="z-index: 13;
                                    white-space: normal;
                                    font-weight: 700;
                                    color: rgb(75, 57, 65);
                                    border-width:0px;">

                                        <div style="font-family: 'Poppins', sans-serif; text-transform:uppercase; ">
                                            <span class="text-white" style="padding-right:10px;">Bitcoin</span><span class="site-text-primary">Invest</span>
                                        </div>

                                    </div>

                                    <!-- LAYER NR. 4 [ for title ] -->
                                    <div class="tp-caption   tp-resizeme"
                                         id="slide-101-layer-4"
                                         data-x="['left','left','left','left']" data-hoffset="['60','60','60','100']"
                                         data-y="['top','top','top','top']" data-voffset="['360','360','360','360']"
                                         data-fontsize="['53','53','53','45']"
                                         data-lineheight="['70','70','70','70']"
                                         data-width="['700','700','700','700']"
                                         data-height="['none','none','none','none']"
                                         data-whitespace="['normal','normal','normal','normal']"

                                         data-type="text"
                                         data-responsive_offset="on"
                                         data-frames='[
                                    {"from":"y:100px(R);opacity:0;","speed":2000,"to":"o:1;","delay":1000,"ease":"Power4.easeOut"},
                                    {"delay":"wait","speed":1000,"to":"y:-50px;opacity:0;","ease":"Power2.easeInOut"}
                                    ]'
                                         data-textAlign="['left','left','left','left']"
                                         data-paddingtop="[0,0,0,0]"
                                         data-paddingright="[0,0,0,0]"
                                         data-paddingbottom="[0,0,0,0]"
                                         data-paddingleft="[0,0,0,0]"

                                         style="z-index: 13;
                                    white-space: normal;
                                    font-weight: 700;
                                    border-width:0px;">
                                        <div style="font-family: 'Poppins', sans-serif; text-transform:uppercase ;">
                                            <span class="site-text-primary" style="padding-right:10px;">Easy & </span><span class="text-white">Secure way</span>
                                        </div>

                                    </div>

                                    <!-- LAYER NR. 5 [ for paragraph] -->
                                    <div class="tp-caption  tp-resizeme"
                                         id="slide-101-layer-5"
                                         data-x="['left','left','left','left']" data-hoffset="['30','30','30','100']"
                                         data-y="['top','top','top','top']" data-voffset="['440','440','440','440']"
                                         data-fontsize="['16','16','16','30']"
                                         data-lineheight="['30','30','30','40']"
                                         data-width="['600','600','600','600']"
                                         data-height="['none','none','none','none']"
                                         data-whitespace="['normal','normal','normal','normal']"

                                         data-type="text"
                                         data-responsive_offset="on"
                                         data-frames='[
                                    {"from":"y:100px(R);opacity:0;","speed":2000,"to":"o:1;","delay":1500,"ease":"Power4.easeOut"},
                                    {"delay":"wait","speed":1000,"to":"y:-50px;opacity:0;","ease":"Power2.easeInOut"}
                                    ]'
                                         data-textAlign="['left','left','left','left']"
                                         data-paddingtop="[0,0,0,0]"
                                         data-paddingright="[0,0,0,0]"
                                         data-paddingbottom="[0,0,0,0]"
                                         data-paddingleft="[0,0,0,0]"

                                         style="z-index: 13;
                                    font-weight: 500;
                                    color:#fff;
                                    border-width:0px;">
                                        <span style="font-family: 'Poppins', sans-serif;">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been end</span>
                                    </div>

                                    <!-- LAYER NR. 6 [ for see all service botton ] -->
                                    <div class="tp-caption tp-resizeme"
                                         id="slide-101-layer-6"
                                         data-x="['left','left','left','left']" data-hoffset="['30','30','30','100']"
                                         data-y="['top','top','top','top']" data-voffset="['530','530','530','600']"
                                         data-lineheight="['none','none','none','none']"
                                         data-width="['300','300','300','300']"
                                         data-height="['none','none','none','none']"
                                         data-whitespace="['normal','normal','normal','normal']"

                                         data-type="text"
                                         data-responsive_offset="on"
                                         data-frames='[
                                    {"from":"y:100px(R);opacity:0;","speed":2000,"to":"o:1;","delay":2000,"ease":"Power4.easeOut"},
                                    {"delay":"wait","speed":1000,"to":"y:-50px;opacity:0;","ease":"Power2.easeInOut"}
                                    ]'
                                         data-textAlign="['left','left','left','left']"
                                         data-paddingtop="[0,0,0,0]"
                                         data-paddingright="[0,0,0,0]"
                                         data-paddingbottom="[0,0,0,0]"
                                         data-paddingleft="[0,0,0,0]"

                                         style="z-index:13; text-transform:uppercase;">
                                        <a href="javascript:;" class="site-button slider-btn-left">Contact Us</a>
                                    </div>

                                    <!-- LAYER NR. 7 [ for more detail botton ] -->
                                    <div class="tp-caption tp-resizeme"
                                         id="slide-101-layer-7"
                                         data-x="['left','left','left','left']" data-hoffset="['220','220','220','320']"
                                         data-y="['top','top','top','top']" data-voffset="['530','530','530','600']"
                                         data-lineheight="['none','none','none','none']"
                                         data-width="['300','300','300','300']"
                                         data-height="['none','none','none','none']"
                                         data-whitespace="['normal','normal','normal','normal']"

                                         data-type="text"
                                         data-responsive_offset="on"
                                         data-frames='[
                                    {"from":"y:100px(R);opacity:0;","speed":2000,"to":"o:1;","delay":2000,"ease":"Power4.easeOut"},
                                    {"delay":"wait","speed":1000,"to":"y:-50px;opacity:0;","ease":"Power2.easeInOut"}
                                    ]'
                                         data-textAlign="['left','left','left','left']"
                                         data-paddingtop="[0,0,0,0]"
                                         data-paddingright="[0,0,0,0]"
                                         data-paddingbottom="[0,0,0,0]"
                                         data-paddingleft="[0,0,0,0]"

                                         style="z-index:13;
                                    text-transform:uppercase;
                                    font-weight:500;
                                    ">
                                        <a href="javascript:;" class=" site-button white slider-btn-right">Join Us</a>
                                    </div>

                                    <!-- LAYER NR. 8 [ for more detail botton ] -->
                                    <div class="tp-caption tp-resizeme"
                                         id="slide-101-layer-8"
                                         data-x="['right','right','right','right']" data-hoffset="['-100','-100','-100','-100']"
                                         data-y="['bottom','bottom','bottom','bottom']" data-voffset="['-650','-650','-650','-650']"

                                         data-frames='[{"from":"x:0;y:0;z:0;rX:0;rY:0;rZ:0;sX:0.75;sY:0.75;skX:0;skY:0;opacity:0;","speed":1500,"to":"o:1;","delay":3000,"ease":"Power3.easeOut"},
                                    {"delay":"wait","speed":300,"to":"opacity:0;","ease":"nothing"}]'

                                         style="z-index: 13;">
                                        <img src="{{ get_imported_asset("images/main-slider/slider2/earth2.png")}}" alt="" class="spin-city">
                                    </div>

                                    <!-- LAYER NR. 9 [ for more detail botton ] -->
                                    <div class="tp-caption tp-resizeme"
                                         id="slide-101-layer-9"
                                         data-x="['right','right','right','right']" data-hoffset="['-300','-100','-100','-100']"
                                         data-y="['bottom','bottom','bottom','bottom']" data-voffset="['-200','-200','-200','-200']"

                                         data-frames='[{"from":"x:0;y:0;z:0;rX:0;rY:0;rZ:0;sX:0.75;sY:0.75;skX:0;skY:0;opacity:0;","speed":1500,"to":"o:1;","delay":3000,"ease":"Power3.easeOut"},
                                    {"delay":"wait","speed":300,"to":"opacity:0;","ease":"nothing"}]'

                                         style="z-index: 13;">
                                        <img src="{{ get_imported_asset("images/main-slider/slider2/earth2-shadow.png")}}" alt="">
                                    </div>

                                    <!-- LAYER NR. 10 [ for more detail botton ] -->
                                    <div class="tp-caption tp-resizeme"
                                         id="slide-101-layer-10"

                                         data-x="['right','right','right','right']" data-hoffset="['200','200','200','200']"
                                         data-y="['top','bottom','bottom','bottom']" data-voffset="['150','150','150','150']"

                                         data-height="none"
                                         data-whitespace="nowrap"

                                         data-type="image"
                                         data-responsive_offset="on"

                                         data-frames='[{"from":"x:0;y:0;z:0;rX:0;rY:0;rZ:0;sX:0.75;sY:0.75;skX:0;skY:0;opacity:0;","speed":1500,"to":"o:1;","delay":3000,"ease":"Power3.easeOut"},
                                    {"delay":"wait","speed":300,"to":"opacity:0;","ease":"nothing"}]'
                                         data-textAlign="['left','left','left','left']"
                                         data-paddingtop="[0,0,0,0]"
                                         data-paddingright="[0,0,0,0]"
                                         data-paddingbottom="[0,0,0,0]"
                                         data-paddingleft="[0,0,0,0]"


                                         style="z-index: 16;">
                                        <img src="{{ get_imported_asset("images/main-slider/slider2/rocket.png")}}" alt="" class="floating">
                                    </div>

                                    <!-- LAYER NR. 11 [ for more detail botton ] -->
                                    <div class="tp-caption tp-resizeme"
                                         id="slide-101-layer-11"

                                         data-x="['right','right','right','right']" data-hoffset="['278','278','278','278']"
                                         data-y="['bottom','bottom','bottom','bottom']" data-voffset="['180','100','100','100']"

                                         data-height="none"
                                         data-whitespace="nowrap"

                                         data-type="image"
                                         data-responsive_offset="on"

                                         data-frames='[{"from":"x:0;y:0;z:0;rX:0;rY:0;rZ:0;sX:0.75;sY:0.75;skX:0;skY:0;opacity:0;","speed":1500,"to":"o:1;","delay":4000,"ease":"Power3.easeOut"},
                                    {"delay":"wait","speed":300,"to":"opacity:0;","ease":"nothing"}]'
                                         data-textAlign="['left','left','left','left']"
                                         data-paddingtop="[0,0,0,0]"
                                         data-paddingright="[0,0,0,0]"
                                         data-paddingbottom="[0,0,0,0]"
                                         data-paddingleft="[0,0,0,0]"


                                         style="z-index: 15;">
                                        <img src="{{ get_imported_asset("images/main-slider/slider2/fire.gif")}}" alt="" class="floating">
                                    </div>

                                    <!-- LAYER NR. 12 [ for more detail botton ] -->
                                    <div class="tp-caption tp-resizeme"
                                         id="slide-101-layer-12"

                                         data-x="['right','right','right','right']" data-hoffset="['100','100','100','100']"
                                         data-y="['top','bottom','bottom','bottom']" data-voffset="['0','0','0','0']"
                                         data-lineheight="['none','none','none','none']"
                                         data-width="['500','500','500','500']"
                                         data-height="['none','none','none','none']"
                                         data-whitespace="nowrap"
                                         data-type="image"
                                         data-responsive_offset="on"

                                         data-frames='[
                                    {"from":"y:0px(R);opacity:0;","speed":2000,"to":"o:1;","delay":4000,"ease":"Power4.easeOut"},
                                    {"delay":"wait","speed":1000,"to":"y:-50px;opacity:0;","ease":"Power2.easeInOut"}
                                    ]'
                                         data-textAlign="['left','left','left','left']"
                                         data-paddingtop="[0,0,0,0]"
                                         data-paddingright="[0,0,0,0]"
                                         data-paddingbottom="[0,0,0,0]"
                                         data-paddingleft="[0,0,0,0]"


                                         style="z-index: 12;">
                                        <div class="coin-slide bg-full-width bg-repeat-y coin-slide-rotate" style="background-image:url({{ get_imported_asset("images/main-slider/slider2/coin-sky.png")}});height:100vh;"></div>
                                    </div>

                                </li>

                                <!-- SLIDE  3 -->
                                <li data-index="rs-1002" data-transition="slidingoverlayhorizontal" data-slotamount="default" data-hideafterloop="0" data-hideslideonmobile="off"  data-easein="default" data-easeout="default" data-masterspeed="default"  data-thumb="{{get_imported_asset("images/main-slider/slider2/slide1.jpg")}}"  data-rotate="0"  data-saveperformance="off"  data-title="Slide" data-param1="" data-param2="" data-param3="" data-param4="" data-param5="" data-param6="" data-param7="" data-param8="" data-param9="" data-param10="" data-description="">
                                    <!-- MAIN IMAGE -->
                                    <img src="{{ get_imported_asset("images/main-slider/slider2/slide1.jpg")}}"  alt=""  data-bgposition="center bottom" data-bgfit="cover" data-bgrepeat="no-repeat" class="rev-slidebg" data-no-retina/>
                                    <!-- LAYERS -->

                                    <!-- LAYER NR. 1 [ for overlay ] -->
                                    <div class="tp-caption tp-shape tp-shapewrapper "
                                         id="slide-102-layer-1"
                                         data-x="['center','center','center','center']" data-hoffset="['0','0','0','0']"
                                         data-y="['middle','middle','middle','middle']" data-voffset="['0','0','0','0']"
                                         data-width="full"
                                         data-height="full"
                                         data-whitespace="nowrap"
                                         data-type="shape"
                                         data-basealign="slide"
                                         data-responsive_offset="off"
                                         data-responsive="off"
                                         data-frames='[
                                    {"from":"opacity:0;","speed":1000,"to":"o:1;","delay":0,"ease":"Power4.easeOut"},
                                    {"delay":"wait","speed":1000,"to":"opacity:0;","ease":"Power4.easeOut"}
                                    ]'
                                         data-textAlign="['left','left','left','left']"
                                         data-paddingtop="[0,0,0,0]"
                                         data-paddingright="[0,0,0,0]"
                                         data-paddingbottom="[0,0,0,0]"
                                         data-paddingleft="[0,0,0,0]"

                                         style="z-index: 12;background-color:rgba(0, 0, 0, 0.3);border-color:rgba(0, 0, 0, 0);border-width:0px;">
                                    </div>

                                    <!-- LAYER NR. 2 [ for title ] -->
                                    <div class="tp-caption   tp-resizeme"
                                         id="slide-102-layer-2"
                                         data-x="['left','left','left','left']" data-hoffset="['30','30','30','30']"
                                         data-y="['top','top','top','top']" data-voffset="['308','308','308','308']"
                                         data-fontsize="['60','60','60','60']"
                                         data-lineheight="['110','110','110','110']"
                                         data-width="['6','6','6','6']"
                                         data-height="['110,'110','110','110']"
                                         data-whitespace="['normal','normal','normal','normal']"

                                         data-type="text"
                                         data-responsive_offset="on"
                                         data-frames='[
                                    {"from":"y:100px(R);opacity:0;","speed":2000,"to":"o:1;","delay":500,"ease":"Power4.easeOut"},
                                    {"delay":"wait","speed":1000,"to":"y:-50px;opacity:0;","ease":"Power2.easeInOut"}
                                    ]'
                                         data-textAlign="['left','left','left','left']"
                                         data-paddingtop="[0,0,0,0]"
                                         data-paddingright="[0,0,0,0]"
                                         data-paddingbottom="[0,0,0,0]"
                                         data-paddingleft="[0,0,0,0]"

                                         style="z-index: 13;
                                    white-space: normal;
                                    ">

                                        <div class="site-bg-primary">&nbsp;</div>

                                    </div>

                                    <!-- LAYER NR. 3 [ for title ] -->
                                    <div class="tp-caption   tp-resizeme"
                                         id="slide-102-layer-3"
                                         data-x="['left','left','left','left']" data-hoffset="['60','60','60','100']"
                                         data-y="['top','top','top','top']" data-voffset="['300','300','300','300']"
                                         data-fontsize="['55','55','55','45']"
                                         data-lineheight="['60','60','60','65']"
                                         data-width="['700','700','700','700']"
                                         data-height="['none','none','none','none']"
                                         data-whitespace="['normal','normal','normal','normal']"

                                         data-type="text"
                                         data-responsive_offset="on"
                                         data-frames='[
                                    {"from":"y:100px(R);opacity:0;","speed":2000,"to":"o:1;","delay":500,"ease":"Power4.easeOut"},
                                    {"delay":"wait","speed":1000,"to":"y:-50px;opacity:0;","ease":"Power2.easeInOut"}
                                    ]'
                                         data-textAlign="['left','left','left','left']"
                                         data-paddingtop="[0,0,0,0]"
                                         data-paddingright="[0,0,0,0]"
                                         data-paddingbottom="[0,0,0,0]"
                                         data-paddingleft="[0,0,0,0]"

                                         style="z-index: 13;
                                    white-space: normal;
                                    font-weight: 700;
                                    color: rgb(75, 57, 65);
                                    border-width:0px;">

                                        <div style="font-family: 'Poppins', sans-serif; text-transform:uppercase; ">
                                            <span class="site-text-primary" style="padding-right:10px;">Bitcoin</span><span class="text-white">Currency</span>
                                        </div>

                                    </div>

                                    <!-- LAYER NR. 4 [ for title ] -->
                                    <div class="tp-caption   tp-resizeme"
                                         id="slide-102-layer-4"
                                         data-x="['left','left','left','left']" data-hoffset="['60','60','60','100']"
                                         data-y="['top','top','top','top']" data-voffset="['360','360','360','360']"
                                         data-fontsize="['53','53','53','45']"
                                         data-lineheight="['70','70','70','70']"
                                         data-width="['700','700','700','700']"
                                         data-height="['none','none','none','none']"
                                         data-whitespace="['normal','normal','normal','normal']"

                                         data-type="text"
                                         data-responsive_offset="on"
                                         data-frames='[
                                    {"from":"y:100px(R);opacity:0;","speed":2000,"to":"o:1;","delay":1000,"ease":"Power4.easeOut"},
                                    {"delay":"wait","speed":1000,"to":"y:-50px;opacity:0;","ease":"Power2.easeInOut"}
                                    ]'
                                         data-textAlign="['left','left','left','left']"
                                         data-paddingtop="[0,0,0,0]"
                                         data-paddingright="[0,0,0,0]"
                                         data-paddingbottom="[0,0,0,0]"
                                         data-paddingleft="[0,0,0,0]"

                                         style="z-index: 13;
                                    white-space: normal;
                                    font-weight: 700;
                                    border-width:0px;">
                                        <div style="font-family: 'Poppins', sans-serif; text-transform:uppercase ;">
                                            <span class="text-white" style="padding-right:10px;">Easy Way</span><span class="site-text-primary">to Trade</span>
                                        </div>

                                    </div>

                                    <!-- LAYER NR. 5 [ for paragraph] -->
                                    <div class="tp-caption  tp-resizeme"
                                         id="slide-102-layer-5"
                                         data-x="['left','left','left','left']" data-hoffset="['30','30','30','100']"
                                         data-y="['top','top','top','top']" data-voffset="['440','440','440','440']"
                                         data-fontsize="['16','16','16','30']"
                                         data-lineheight="['30','30','30','40']"
                                         data-width="['600','600','600','600']"
                                         data-height="['none','none','none','none']"
                                         data-whitespace="['normal','normal','normal','normal']"

                                         data-type="text"
                                         data-responsive_offset="on"
                                         data-frames='[
                                    {"from":"y:100px(R);opacity:0;","speed":2000,"to":"o:1;","delay":1500,"ease":"Power4.easeOut"},
                                    {"delay":"wait","speed":1000,"to":"y:-50px;opacity:0;","ease":"Power2.easeInOut"}
                                    ]'
                                         data-textAlign="['left','left','left','left']"
                                         data-paddingtop="[0,0,0,0]"
                                         data-paddingright="[0,0,0,0]"
                                         data-paddingbottom="[0,0,0,0]"
                                         data-paddingleft="[0,0,0,0]"

                                         style="z-index: 13;
                                    font-weight: 500;
                                    color:#fff;
                                    border-width:0px;">
                                        <span style="font-family: 'Poppins', sans-serif;">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been end</span>
                                    </div>

                                    <!-- LAYER NR. 6 [ for see all service botton ] -->
                                    <div class="tp-caption tp-resizeme"
                                         id="slide-102-layer-6"
                                         data-x="['left','left','left','left']" data-hoffset="['30','30','30','100']"
                                         data-y="['top','top','top','top']" data-voffset="['530','530','530','600']"
                                         data-lineheight="['none','none','none','none']"
                                         data-width="['300','300','300','300']"
                                         data-height="['none','none','none','none']"
                                         data-whitespace="['normal','normal','normal','normal']"

                                         data-type="text"
                                         data-responsive_offset="on"
                                         data-frames='[
                                    {"from":"y:100px(R);opacity:0;","speed":2000,"to":"o:1;","delay":2000,"ease":"Power4.easeOut"},
                                    {"delay":"wait","speed":1000,"to":"y:-50px;opacity:0;","ease":"Power2.easeInOut"}
                                    ]'
                                         data-textAlign="['left','left','left','left']"
                                         data-paddingtop="[0,0,0,0]"
                                         data-paddingright="[0,0,0,0]"
                                         data-paddingbottom="[0,0,0,0]"
                                         data-paddingleft="[0,0,0,0]"

                                         style="z-index:13; text-transform:uppercase;">
                                        <a href="javascript:;" class="site-button slider-btn-left">Contact Us</a>
                                    </div>

                                    <!-- LAYER NR. 7 [ for more detail botton ] -->
                                    <div class="tp-caption tp-resizeme"
                                         id="slide-102-layer-7"
                                         data-x="['left','left','left','left']" data-hoffset="['220','220','220','320']"
                                         data-y="['top','top','top','top']" data-voffset="['530','530','530','600']"
                                         data-lineheight="['none','none','none','none']"
                                         data-width="['300','300','300','300']"
                                         data-height="['none','none','none','none']"
                                         data-whitespace="['normal','normal','normal','normal']"

                                         data-type="text"
                                         data-responsive_offset="on"
                                         data-frames='[
                                    {"from":"y:100px(R);opacity:0;","speed":2000,"to":"o:1;","delay":2000,"ease":"Power4.easeOut"},
                                    {"delay":"wait","speed":1000,"to":"y:-50px;opacity:0;","ease":"Power2.easeInOut"}
                                    ]'
                                         data-textAlign="['left','left','left','left']"
                                         data-paddingtop="[0,0,0,0]"
                                         data-paddingright="[0,0,0,0]"
                                         data-paddingbottom="[0,0,0,0]"
                                         data-paddingleft="[0,0,0,0]"

                                         style="z-index:13;
                                    text-transform:uppercase;
                                    font-weight:500;
                                    ">
                                        <a href="javascript:;" class=" site-button white slider-btn-right">Join Us</a>
                                    </div>

                                    <!-- LAYER NR. 8 [ for more detail botton ] -->
                                    <div class="tp-caption tp-resizeme"
                                         id="slide-102-layer-8"
                                         data-x="['right','right','right','right']" data-hoffset="['0','0','0','0']"
                                         data-y="['bottom','bottom','bottom','bottom']" data-voffset="['-20','-20','-20','-20']"

                                         data-frames='[
                                    {"from":"y:200px(R);opacity:0;","speed":2000,"to":"o:1;","delay":2000,"ease":"Power4.easeOut"},
                                    {"delay":"wait","speed":1000,"to":"y:-50px;opacity:0;","ease":"Power2.easeInOut"}
                                    ]'

                                         style="z-index: 13;">
                                        <img src="{{ get_imported_asset("images/main-slider/slider2/rock.png")}}" alt="">
                                    </div>

                                    <!-- LAYER NR. 9 [ for more detail botton ] -->
                                    <div class="tp-caption tp-resizeme"
                                         id="slide-102-layer-9"
                                         data-x="['right','right','right','right']" data-hoffset="['320','320','320','320']"
                                         data-y="['bottom','bottom','bottom','bottom']" data-voffset="['130','130','130','130']"

                                         data-frames='[
                                    {"from":"y:-500px(R);opacity:0;","speed":2000,"to":"o:1;","delay":2000,"ease":"Power4.easeOut"},
                                    {"delay":"wait","speed":1000,"to":"y:-50px;opacity:0;","ease":"Power2.easeInOut"}
                                    ]'

                                         style="z-index: 13;">
                                        <img src="{{ get_imported_asset("images/main-slider/slider2/agent.png")}}" alt="">
                                    </div>

                                    <!-- LAYER NR. 10 [ for more detail botton ] -->
                                    <div class="tp-caption tp-resizeme"
                                         id="slide-102-layer-10"

                                         data-x="['right','right','right','right']" data-hoffset="['20','20','20','20']"
                                         data-y="['bottom','bottom','bottom','bottom']" data-voffset="['80','80','80','80']"

                                         data-height="none"
                                         data-whitespace="nowrap"

                                         data-type="image"
                                         data-responsive_offset="on"

                                         data-frames='[{"from":"x:0;y:0;z:0;rX:0;rY:0;rZ:0;sX:0.75;sY:0.75;skX:0;skY:0;opacity:0;","speed":1500,"to":"o:1;","delay":3000,"ease":"Power3.easeOut"},
                                    {"delay":"wait","speed":300,"to":"opacity:0;","ease":"nothing"}]'
                                         data-textAlign="['left','left','left','left']"
                                         data-paddingtop="[0,0,0,0]"
                                         data-paddingright="[0,0,0,0]"
                                         data-paddingbottom="[0,0,0,0]"
                                         data-paddingleft="[0,0,0,0]"


                                         style="z-index: 13;">
                                        <img src="{{ get_imported_asset("images/main-slider/slider2/plant.png")}}" alt="">
                                    </div>
                                </li>

                            </ul>

                        </div>
                    </div>
                    <!-- END REVOLUTION SLIDER -->
                </div>
            </div>
        </div>
        <!-- SLIDER END -->

        <!-- MARQUEE SCROLL -->
        <div class="bg-black marquee">
            <div class="TickerNews" id="T1">
                <div class="ti_wrapper">
                    <div class="ti_slide">
                        <div class="ti_content">
                            <div class="ti_news"><a href="#"><img src="{{ get_imported_asset("images/coin-icon/bitcoin.png")}}" alt=""><span>BTC: </span><span>$ 10,633.1</span><span class="text-yellow p-lr5">0.97 %</span></a></div>
                            <div class="ti_news"><a href="#"><img src="{{ get_imported_asset("images/coin-icon/bitcoin.png")}}" alt=""><span>BTC: </span><span>¥ 68,008.1</span><span class="text-danger p-lr5">0.00 %</span></a></div>
                            <div class="ti_news"><a href="#"><img src="{{ get_imported_asset("images/coin-icon/bitcoin.png")}}" alt=""><span>BTC: </span><span>€ 8,699.23</span><span class="text-white p-lr5">1.08 %</span></a></div>

                            <div class="ti_news"><a href="#"><img src="{{ get_imported_asset("images/coin-icon/Ethereum.png")}}" alt=""><span>ETH: </span><span>Ƀ 0.08160</span><span class="text-green p-lr5">-0.28 %</span></a></div>
                            <div class="ti_news"><a href="#"><img src="{{ get_imported_asset("images/coin-icon/Ethereum.png")}}" alt=""><span>ETH: </span><span>$ 867.93</span><span class="text-danger p-lr5">-0.60 %</span></a></div>
                            <div class="ti_news"><a href="#"><img src="{{ get_imported_asset("images/coin-icon/Ethereum.png")}}" alt=""><span>ETH: </span><span>¥ 5,549.46</span><span class="text-white p-lr5">-0.28 %</span></a></div>
                            <div class="ti_news"><a href="#"><img src="{{ get_imported_asset("images/coin-icon/Ethereum.png")}}" alt=""><span>ETH: </span><span>€ 709.94</span><span class="text-gray p-lr5">0.26 %</span></a></div>

                            <div class="ti_news"><a href="#"><img src="{{ get_imported_asset("images/coin-icon/monero.png")}}" alt=""><span>XMR: </span><span>Ƀ 0.0276</span><span class="text-green p-lr5">1.25 %</span></a></div>
                            <div class="ti_news"><a href="#"><img src="{{ get_imported_asset("images/coin-icon/monero.png")}}" alt=""><span>XMR: </span><span>$ 295.33</span><span class="text-light-blue p-lr5">0.89 %</span></a></div>
                            <div class="ti_news"><a href="#"><img src="{{ get_imported_asset("images/coin-icon/monero.png")}}" alt=""><span>XMR: </span><span>¥ 1,883.14</span><span class="text-green p-lr5">0.25 %</span></a></div>
                            <div class="ti_news"><a href="#"><img src="{{ get_imported_asset("images/coin-icon/monero.png")}}" alt=""><span>XMR: </span><span>€ 240.56</span><span class="text-red p-lr5">-0.40 %</span></a></div>

                            <div class="ti_news"><a href="#"><img src="{{ get_imported_asset("images/coin-icon/litecoin.png")}}" alt=""><span>LTC: </span><span>Ƀ 0.01956</span><span class="text-danger p-lr5">-0.20 %</span></a></div>
                            <div class="ti_news"><a href="#"><img src="{{ get_imported_asset("images/coin-icon/litecoin.png")}}" alt=""><span>LTC: </span><span>$ 208.06</span><span class="text-green p-lr5">-1.97 %</span></a></div>
                            <div class="ti_news"><a href="#"><img src="{{ get_imported_asset("images/coin-icon/litecoin.png")}}" alt=""><span>LTC: </span><span>¥ 1,330.24</span><span class="text-white p-lr5">-0.20 %</span></a></div>
                            <div class="ti_news"><a href="#"><img src="{{ get_imported_asset("images/coin-icon/litecoin.png")}}" alt=""><span>LTC: </span><span>€ 169.91</span><span class="text-yellow p-lr5">-1.29 %</span></a></div>

                            <div class="ti_news"><a href="#"><img src="{{ get_imported_asset("images/coin-icon/DigitalCash.png")}}" alt=""><span>DASH: </span><span>Ƀ 0.05590</span><span class="text-white p-lr5">0.26 %</span></a></div>
                            <div class="ti_news"><a href="#"><img src="{{ get_imported_asset("images/coin-icon/DigitalCash.png")}}" alt=""><span>DASH: </span><span>$ 594.64</span><span class="text-green p-lr5">0.37 %</span></a></div>
                            <div class="ti_news"><a href="#"><img src="{{ get_imported_asset("images/coin-icon/DigitalCash.png")}}" alt=""><span>DASH: </span><span>¥ 3,801.65</span><span class="text-red p-lr5">0.99 %</span></a></div>
                            <div class="ti_news"><a href="#"><img src="{{ get_imported_asset("images/coin-icon/DigitalCash.png")}}" alt=""><span>DASH: </span><span>€ 486.29</span><span class="text-yellow p-lr5">-10.18 %</span></a></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- MARQUEE SCROLL SECTION  END -->


        <!-- OUR VALUE SECTION START -->
        <div class="section-full site-bg-primary">
            <div class="container">
                <div class="section-content ">
                    <!-- COLL-TO ACTION START -->
                    <div class="wt-subscribe-box">
                        <div class="container">
                            <div class="row call-to-action-wrap">
                                <div class="col-lg-9 col-md-12">
                                    <div class="call-to-action-left ">
                                        <h4 class="text-uppercase m-b10 font-weight-600">Invest in Cryptocurrency Bitcoin Mining & Easy Way to Trade Bitcoin.</h4>
                                        <p>Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore edolore magna aliquyam erat.</p>
                                    </div>
                                </div>

                                <div class="col-lg-3 col-md-12">
                                    <div class="call-to-action-right">
                                        <a href="contact-1.html" class="site-button-secondry text-uppercase font-weight-600">
                                            Read More
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- OUR VALUE SECTION  END -->

        <!-- ABOUT COMPANY SECTION START -->
        <div class="section-full home-about-section p-t80 p-b0 bg-no-repeat bg-bottom-right"  style="background-image:url({{ get_imported_asset("images/background/bg-coin.png")}}">
            <div class="container-fluid ">
                <div class="row d-flex justify-content-center align-items-end">
                    <div class="col-lg-6 col-md-12">
                        <div class="wt-box text-right">
                            <img src="{{ get_imported_asset("images/background/bg-laptop.png")}}" alt="">
                        </div>
                    </div>
                    <div class="col-lg-6 col-md-9 m-b30">
                        <div class="wt-right-part">
                            <!-- TITLE START -->
                            <div class="section-head text-left">
                                <span class="wt-title-subline font-16 text-gray-dark m-b15">What is bitcoin</span>
                                <h2 class="text-uppercase">New Currency Bitcoin</h2>
                                <div class="wt-separator-outer"><div class="wt-separator site-bg-primary"></div></div>
                            </div>
                            <!-- TITLE END -->
                            <div class="section-content m-b60">
                                <div class="wt-box">
                                    <p>
                                        <strong>Lorem Ipsum has been the industry's standard dummy text ever since the when.
                                            it to make a tyLorem Ipsum is simply dummy text of the printing and typesetting indust
                                        </strong>
                                    </p>
                                    <p>when an unknown printer took a galley of type and scrambled it to make a tyLorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled.</p>
                                    <a href="#" class="site-button text-uppercase m-r15">Read More</a>
                                    <a href="#" class="site-button-secondry text-uppercase">Contact us</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- ABOUT COMPANY SECTION  END -->

        <!-- WHY CHOOSE US SECTION START  -->
        <div class="section-full  p-t80 p-b50 bg-gray">
            <div class="container">
                <!-- TITLE START-->
                <div class="section-head text-center">
                    <span class="wt-title-subline font-16 text-gray-dark m-b15">Buy and Sell Bitcoin</span>
                    <h2 class="text-uppercase">Why Choose Bitcoin</h2>
                    <div class="wt-separator-outer">
                        <div class="wt-separator site-bg-primary"></div>
                    </div>
                    <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s.</p>
                </div>
                <!-- TITLE END-->
                <div class="section-content">
                    <div class="row">

                        <!-- COLUMNS 1 -->
                        <div class="col-lg-4 col-md-6 m-b30 animate_line">
                            <div class="wt-icon-box-wraper  p-a30 center bg-white m-a5">
                                <div class="icon-lg site-text-primary m-b20">
                                    <a href="#" class="icon-cell"><img src="{{ get_imported_asset("images/icon/pick-29.png")}}" alt=""></a>
                                </div>
                                <div class="icon-content">
                                    <h4 class="wt-tilte text-uppercase font-weight-500">Instant Trading</h4>
                                    <p>Lorem Ipsum is simply dummy text of the printing and typesg indtrysum has been the Ipsum dummy of the printing indus .</p>
                                </div>
                            </div>
                        </div>
                        <!-- COLUMNS 2 -->
                        <div class="col-lg-4 col-md-6 m-b30 animate_line">
                            <div class="wt-icon-box-wraper  p-a30 center bg-white m-a5">
                                <div class="icon-lg site-text-primary m-b20">
                                    <a href="#" class="icon-cell"><img src="{{ get_imported_asset("images/icon/pick-28.png")}}" alt=""></a>
                                </div>
                                <div class="icon-content ">
                                    <h4 class="wt-tilte text-uppercase font-weight-500">Recurring Buying</h4>
                                    <p>Lorem Ipsum is simply dummy text of the printing and typesg indtrysum has been the Ipsum dummy of the printing indus .</p>
                                </div>
                            </div>
                        </div>
                        <!-- COLUMNS 3 -->
                        <div class="col-lg-4 col-md-6 m-b30 animate_line">
                            <div class="wt-icon-box-wraper  p-a30 center bg-white m-a5">
                                <div class="icon-lg site-text-primary m-b20">
                                    <a href="#" class="icon-cell"><img src="{{ get_imported_asset("images/icon/pick-17.png")}}" alt=""></a>
                                </div>
                                <div class="icon-content">
                                    <h4 class="wt-tilte text-uppercase font-weight-500">Safe and Secure</h4>
                                    <p>Lorem Ipsum is simply dummy text of the printing and typesg indtrysum has been the Ipsum dummy of the printing indus .</p>
                                </div>
                            </div>
                        </div>
                        <!-- COLUMNS 4 -->
                        <div class="col-lg-4 col-md-6 m-b30 animate_line">
                            <div class="wt-icon-box-wraper  p-a30 center bg-white m-a5">
                                <div class="icon-lg site-text-primary m-b20">
                                    <a href="#" class="icon-cell"><img src="{{ get_imported_asset("images/icon/pick-19.png")}}" alt=""></a>
                                </div>
                                <div class="icon-content">
                                    <h4 class="wt-tilte text-uppercase font-weight-500">Investment Planning</h4>
                                    <p>Lorem Ipsum is simply dummy text of the printing and typesg indtrysum has been the Ipsum dummy of the printing indus .</p>
                                </div>
                            </div>
                        </div>
                        <!-- COLUMNS 5 -->
                        <div class="col-lg-4 col-md-6 m-b30 animate_line">
                            <div class="wt-icon-box-wraper  p-a30 center bg-white m-a5">
                                <div class="icon-lg site-text-primary m-b20">
                                    <a href="#" class="icon-cell"><img src="{{ get_imported_asset("images/icon/pick-12.png")}}" alt=""></a>
                                </div>
                                <div class="icon-content">
                                    <h4 class="wt-tilte text-uppercase font-weight-500">Covered By Insurance</h4>
                                    <p>Lorem Ipsum is simply dummy text of the printing and typesg indtrysum has been the Ipsum dummy of the printing indus .</p>
                                </div>
                            </div>
                        </div>
                        <!-- COLUMNS 6 -->
                        <div class="col-lg-4 col-md-6 m-b30 animate_line">
                            <div class="wt-icon-box-wraper  p-a30 center bg-white m-a5">
                                <div class="icon-lg site-text-primary m-b20">
                                    <a href="#" class="icon-cell"><img src="{{ get_imported_asset("images/icon/pick-38.png")}}" alt=""></a>
                                </div>
                                <div class="icon-content">
                                    <h4 class="wt-tilte text-uppercase font-weight-500">Bitcoin Transaction</h4>
                                    <p>Lorem Ipsum is simply dummy text of the printing and typesg indtrysum has been the Ipsum dummy of the printing indus .</p>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>

            </div>
        </div>
        <!-- WHY CHOOSE US SECTION END -->

        <!-- COMPANY DETAIL SECTION START -->
        <div class="section-full p-t80 p-b50 overlay-wraper bg-parallax clouds1 bg-repeat"  data-stellar-background-ratio="0.5" style="background-image:url({{ get_imported_asset("images/background/bg-9.jpg")}});">
            <div class="overlay-main bg-secondry opacity-05"></div>
            <div class="container ">
                <div class="row">
                    <div class="col-lg-4 col-md-12 m-b30">
                        <div class="rocket-pic">
                            <div class="rocket-animation ">
                                <img src="{{ get_imported_asset("images/rocket.png")}}" alt="" class="floating" />
                                <div class="rocket-fire"> <img src="{{ get_imported_asset("images/fire.gif")}}" alt="" class="floating"/></div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-8 col-md-12 m-b30">
                        <div class="awesome-counter text-right text-white">
                            <h3 class="font-24">The Cryptocurrency</h3>
                            <h2 class="font-60 font-weight-600"><span class="site-text-primary"> AWESOME FACTS</span></h2>
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. In a metus pellentesque, scelerisque ex sed, volutpat nisi. Curabitur tortor mi, eleifend ornare lobortis non. Nulla porta purus quis iaculis ultrices. Proin aliquam sem at nibh hendrerit sagittis. Nullam ornare odio eu lacus tincidunt malesuada.</p>

                        </div>
                        <div class="row">
                            <div class="col-md-4 col-sm-4">
                                <div class="status-marks  text-white m-tb10">
                                    <div class="status-value text-right">
                                        <span class="counter">1150</span>
                                        <i class="fa fa-building font-26 m-l15"></i>
                                    </div>
                                    <h6 class="text-uppercase text-right">PROJECT COMPLETED</h6>
                                </div>
                            </div>
                            <div class="col-md-4 col-sm-4">
                                <div class="status-marks  text-white m-tb10">
                                    <div class="status-value text-right">
                                        <span class="counter">5223</span>
                                        <i class="fa fa-users font-26 m-l15"></i>
                                    </div>
                                    <h6 class="text-uppercase text-white text-right">HAPPY CLIENTS</h6>
                                </div>
                            </div>
                            <div class="col-md-4 col-sm-4">
                                <div class="status-marks  text-white m-tb10">
                                    <div class="status-value text-right">
                                        <span class="counter">4522</span>
                                        <i class="fa fa-user-plus font-26 m-l15"></i>
                                    </div>
                                    <h6 class="text-uppercase text-white text-right">WORKERS EMPLOYED</h6>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- COMPANY DETAIL SECTION End -->

        <!-- HOW IT WORK SECTION START  -->
        <div class="section-full  p-t80 p-b50 bg-gray">
            <div class="container">
                <!-- TITLE START-->
                <div class="section-head text-center">
                    <span class="wt-title-subline font-16 text-gray-dark m-b15">Three steps bticoin</span>
                    <h2 class="text-uppercase">How It Work</h2>
                    <div class="wt-separator-outer"><div class="wt-separator site-bg-primary"></div></div>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Fuga eos optio ducimus odit, labore hic fugiat iusto veniam necessitatibus quas doloremque sapiente maiores.</p>
                </div>
                <!-- TITLE END-->
                <div class="section-content">
                    <div class="row d-flex justify-content-center">

                        <!-- COLUMNS 1 -->
                        <div class="col-lg-4 col-md-6 m-b30 step-number-block">
                            <div class="wt-icon-box-wraper  p-a30 center bg-white m-a5">
                                <div class="icon-lg site-text-primary m-b20">
                                    <a href="#" class="icon-cell"><img src="{{ get_imported_asset("images/icon/pick-4.png")}}" alt=""></a>
                                </div>
                                <div class="icon-content">
                                    <div class="step-number">1</div>
                                    <h4 class="wt-tilte text-uppercase font-weight-500">Create your wallet</h4>
                                    <p>Lorem Ipsum is simply dummy text of the printing and typesg indtrysum has been the Ipsum dummy of the printing indus .</p>
                                </div>
                            </div>
                        </div>
                        <!-- COLUMNS 2 -->
                        <div class="col-lg-4 col-md-6 m-b30 step-number-block">
                            <div class="wt-icon-box-wraper  p-a30 center bg-secondry m-a5 ">
                                <div class="icon-lg m-b20">
                                    <a href="#" class="icon-cell"><img src="{{ get_imported_asset("images/icon/pick-28.png")}}" alt=""></a>
                                </div>
                                <div class="icon-content text-white">
                                    <div class="step-number active">2</div>
                                    <h4 class="wt-tilte text-uppercase font-weight-500">Make payments</h4>
                                    <p>Lorem Ipsum is simply dummy text of the printing and typesg indtrysum has been the Ipsum dummy of the printing indus .</p>
                                </div>
                            </div>
                        </div>
                        <!-- COLUMNS 3 -->
                        <div class="col-lg-4 col-md-6 m-b30 step-number-block">
                            <div class="wt-icon-box-wraper  p-a30 center bg-white m-a5">
                                <div class="icon-lg site-text-primary m-b20">
                                    <a href="#" class="icon-cell"><img src="{{ get_imported_asset("images/icon/pick-12.png")}}" alt=""></a>
                                </div>
                                <div class="icon-content">
                                    <div class="step-number">3</div>
                                    <h4 class="wt-tilte text-uppercase font-weight-500">Buy or Sell Orders</h4>
                                    <p>Lorem Ipsum is simply dummy text of the printing and typesg indtrysum has been the Ipsum dummy of the printing indus .</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>
        <!-- HOW IT WORK  SECTION END -->

        <!-- SECTION CONTENT START -->
        <div class="section-full  p-t80 p-b50 bg-full-height bg-repeat-x graph-slide-image" style="background-image:url({{ get_imported_asset("images/background/bg-1.jpg")}});">

            <div class="container">

                <div class="row">
                    <div class="col-lg-6 col-md-12 m-b30 clearfix">
                        <div class="bit-converter p-a40 bg-white">
                            <div class="wt-box">
                                <h2 class="text-uppercase m-t0 site-text-primary">Currency convertor</h2>
                                <p>Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took.</p>
                            </div>
                            <div class="currency-calculator sp-one">
                                <div style="width: 100%;">
                                    <crypto-converter-widget
                                        live
                                        shadow
                                        symbol
                                        fiat="united-states-dollar"
                                        crypto="bitcoin"
                                        amount="1"
                                        border-radius="0.60rem"
                                        background-color="#171f2c"
                                        decimal-places="2"><a
                                            href="https://cr.today/"
                                            rel="noopener">Converter Widget</a></crypto-converter-widget>
                                    <!-- <a href="https://co-w.io/">co-w.io</a> -->
                                    <script src="https://cdn.jsdelivr.net/gh/dejurin/crypto-converter-widget/dist/latest.min.js" async></script>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6 col-md-12 m-b30">
                        <div class="wt-box graph-part-right text-white">
                            <strong class="text-uppercase title-first">cryptocurrency</strong>
                            <span class="text-uppercase site-text-primary display-block title-second">Start selling, buying and trading</span>
                            <p><strong>Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of
                                    type and scrambled it to make a type specimen book.</strong></p>
                            <ul class="list-check-circle primary">
                                <li>Simply dummy text of the Lorem Ipsum is printing and type setting. </li>
                                <li>Dummy text of the printing and typesetting industry. Text of the printing</li>
                                <li>And typesetting industry Lorem Ipsum has been. Ipsum has been the </li>
                                <li>Industry's standard dummy since the 1500s, </li>
                            </ul>
                        </div>
                    </div>
                </div>

            </div>
        </div>
        <!-- SECTION CONTENT  END -->

        <!-- OUR TEAM MEMBER SECTION START -->
        <div class="section-full text-center wt-our-team bg-gray p-t80 p-b50">
            <div class="container">

                <!-- TITTLE START -->
                <div class="section-head text-center">
                    <span class="wt-title-subline font-16 text-gray-dark m-b15">Three steps bticoin</span>
                    <h2 class="text-uppercase">Our Consultants</h2>
                    <div class="wt-separator-outer">
                        <div class="wt-separator site-bg-primary"></div>
                    </div>
                    <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s.</p>
                </div>
                <!-- TITLE END -->

                <div class="section-content">
                    <div class="row d-flex justify-content-center">

                        <!-- COLUMNS 1 -->
                        <div class="col-lg-4 col-md-6 col-sm-6 m-b30">
                            <div class="wt-team-one bg-white">
                                <div class="wt-team-media">
                                    <a href="javascript:void(0);"><img src="{{ get_imported_asset("images/our-team/pic1.jpg")}}"  class="" alt=""></a>
                                </div>
                                <div class="wt-team-info text-center bg-white p-a20">
                                    <h4 class="wt-team-title"><a href="javascript:void(0);">Richard Wagner</a></h4>
                                    <p>Consultant</p>
                                    <ul class="social-icons social-square social-dark m-b0">
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
                        <!-- COLUMNS 2 -->
                        <div class="col-lg-4 col-md-6 col-sm-6 m-b30">
                            <div class="wt-team-one bg-white">
                                <div class="wt-team-media ">
                                    <a href="javascript:void(0);"><img src="{{ get_imported_asset("images/our-team/pic2.jpg")}}" alt=""></a>
                                </div>
                                <div class="wt-team-info text-center bg-white p-a20">
                                    <h4 class="wt-team-title"><a href="javascript:void(0);">Lisa Anderson</a></h4>
                                    <p>Ceo & Founder</p>
                                    <ul class="social-icons social-square social-dark m-b0">
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
                        <!-- COLUMNS 3 -->
                        <div class="col-lg-4 col-md-6 col-sm-6 m-b30">
                            <div class="wt-team-one  bg-white">
                                <div class="wt-team-media">
                                    <a href="javascript:void(0);"><img src="{{ get_imported_asset("images/our-team/pic3.jpg")}}" alt=""></a>
                                </div>
                                <div class="wt-team-info text-center bg-white p-a20">
                                    <h4 class="wt-team-title"><a href="javascript:void(0);">Tommy Atkins</a></h4>
                                    <p>Manager</p>
                                    <ul class="social-icons social-square social-dark m-b0">
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

                    </div>
                </div>


            </div>
        </div>
        <!-- OUR TEAM MEMBER SECTION END -->

        <!-- ANY QUERY SECTION CONTENT START -->
        <div class="section-full no-col-gap bg-repeat">
            <div class="container-fluid">

                <div class="row">
                    <div class="col-md-6 col-sm-6 bg-secondry">
                        <div class="section-content p-tb60 p-r30 clearfix">
                            <div class="wt-left-part any-query">
                                <img src="{{ get_imported_asset("images/any-query.png")}}" alt="">
                                <div class="text-center">
                                    <h3 class="text-uppercase font-weight-500 text-white">Any Query?</h3>
                                    <p class="text-white">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the.</p>
                                    <h4 class="site-text-primary m-b0">0 321 576 444</h4>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 col-sm-6 site-bg-primary">
                        <div class="section-content p-tb60 p-l30 clearfix">
                            <div class="wt-right-part any-query-contact">
                                <img src="{{ get_imported_asset("images/any-query-contact.png")}}" alt="">
                                <div class="text-center">
                                    <h3 class="text-uppercase font-weight-500 text-white">Contact Us</h3>
                                    <p class="text-white">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the.</p>
                                    <h4 class="text-secondry m-b0">support@bitinvest.com</h4>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>
        <!-- ANY QUERY SECTION CONTENT END -->

        <!-- LATEST BLOG SECTION START -->
        <div class="section-full latest-blog tw-lt-blog-1 bg-gray p-t80 p-b50">
            <div class="container">
                <!-- TITLE -->
                <div class="section-head text-center">
                    <span class="wt-title-subline font-26 text-gray-dark m-b15">Our blog</span>
                    <h2 class="text-uppercase">Latest News</h2>
                    <div class="wt-separator-outer">
                        <div class="wt-separator site-bg-primary"></div>
                    </div>
                    <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been tahe industry.</p>
                </div>
                <!-- TITLE -->

                <div class="section-content ">
                    <div class="row equal-wraper">
                        <!-- COLUMNS 1 -->
                        <div class="col-lg-6 col-md-12 m-b30">
                            <div class="blog-post latest-blog-3 overlay-wraper post-overlay date-style-2 bg-cover bg-no-repeat bg-top-center"  style="background-image:url({{ get_imported_asset("images/blog/default/thum3.jpg")}});">
                                <div class="overlay-main opacity-03 bg-secondry"></div>
                                <div class="wt-post-info p-a30 p-b20 text-white">
                                    <div class="post-overlay-position">
                                        <div class="wt-post-title ">
                                            <h3 class="post-title"><a href="javascript:;" class="text-white text-capitalize">Bitcoin Price Primed to Test </a></h3>
                                        </div>
                                        <div class="wt-post-meta ">
                                            <ul>
                                                <li class="post-date"><i class="fa fa-calendar"></i><strong>6 Jan</strong> <span> 2023</span></li>
                                                <li class="post-author"><i class="fa fa-user"></i>By <a href="javascript:;">Admin</a> </li>
                                                <li class="post-comment"><i class="fa fa-comments"></i> <a href="javascript:;">2 comment</a> </li>
                                            </ul>
                                        </div>
                                        <div class="wt-post-text">
                                            <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry.</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="col-lg-6 col-md-12 m-b30">

                            <div class="blog-post latest-blog-3 blog-md date-style-2 clearfix">
                                <div class="wt-post-media wt-img-effect zoom-slow">
                                    <a href="javascript:void(0);"><img src="{{ get_imported_asset("images/blog/blog-small/pic1.jpg")}}" alt=""></a>
                                </div>
                                <div class="wt-post-info">
                                    <div class="wt-post-title ">
                                        <h4 class="post-title font-weight-800"><a href="javascript:void(0);">Bitcoin and Altcoins.</a></h4>
                                    </div>
                                    <div class="wt-post-meta ">
                                        <ul>
                                            <li class="post-date"> <i class="fa fa-calendar"></i><strong>20 Dec</strong> <span> 2023</span> </li>
                                            <li class="post-author"><i class="fa fa-user"></i><a href="javascript:void(0);">By <span>John</span></a> </li>
                                            <li class="post-comment"><i class="fa fa-comments"></i> <a href="javascript:void(0);">0</a> </li>
                                        </ul>
                                    </div>
                                    <div class="wt-post-text">
                                        <p>Lorem Ipsum is simply dummy text of printing and typesetting Ipsum has been the industry's dummy</p>
                                    </div>

                                </div>
                            </div>

                            <div class="blog-post latest-blog-3 blog-md date-style-2 clearfix">
                                <div class="wt-post-media wt-img-effect zoom-slow">
                                    <a href="javascript:void(0);"><img src="{{ get_imported_asset("images/blog/blog-small/pic4.jpg")}}" alt=""></a>
                                </div>
                                <div class="wt-post-info">
                                    <div class="wt-post-title ">
                                        <h4 class="post-title font-weight-800"><a href="javascript:void(0);">Eight must read tips</a></h4>
                                    </div>
                                    <div class="wt-post-meta ">
                                        <ul>
                                            <li class="post-date"> <i class="fa fa-calendar"></i><strong>20 Dec</strong> <span> 2023</span> </li>
                                            <li class="post-author"><i class="fa fa-user"></i><a href="javascript:void(0);">By <span>John</span></a> </li>
                                            <li class="post-comment"><i class="fa fa-comments"></i> <a href="javascript:void(0);">0</a> </li>
                                        </ul>
                                    </div>
                                    <div class="wt-post-text">
                                        <p>Lorem Ipsum is simply dummy text of printing and typesetting Ipsum has been the industry's dummy</p>
                                    </div>

                                </div>
                            </div>

                            <div class="blog-post latest-blog-3 blog-md date-style-2 clearfix">
                                <div class="wt-post-media wt-img-effect zoom-slow">
                                    <a href="javascript:void(0);"><img src="{{ get_imported_asset("images/blog/blog-small/pic7.jpg")}}" alt=""></a>
                                </div>
                                <div class="wt-post-info">
                                    <div class="wt-post-title ">
                                        <h4 class="post-title font-weight-800"><a href="javascript:void(0);">Analysis for beginners.</a></h4>
                                    </div>
                                    <div class="wt-post-meta ">
                                        <ul>
                                            <li class="post-date"> <i class="fa fa-calendar"></i><strong>20 Dec</strong> <span> 2023</span> </li>
                                            <li class="post-author"><i class="fa fa-user"></i><a href="javascript:void(0);">By <span>John</span></a> </li>
                                            <li class="post-comment"><i class="fa fa-comments"></i> <a href="javascript:void(0);">0</a> </li>
                                        </ul>
                                    </div>
                                    <div class="wt-post-text">
                                        <p>Lorem Ipsum is simply dummy text of printing and typesetting Ipsum has been the industry's dummy</p>
                                    </div>

                                </div>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- LATEST BLOG SECTION END -->

        <!-- CONTACT US SECTION END  -->
        <div class="section-full tw-con-with-img bg-gray">
            <div class="overlay-wraper bg-center bg-cover bg-no-repeat  bg-gray" style="background-image:url({{get_imported_asset("images/background/bg2.jpg")}})">
                <div class="overlay-main bg-black opacity-07"></div>
                <div class="container">

                    <div class="row conntact-home">
                        <div class="col-lg-7 col-md-7 col-sm-12">
                            <div class="section-content p-tb70">
                                <!-- TITLE -->
                                <div class="section-head text-left text-white">
                                    <h2 class="text-uppercase">Request A Call Back</h2>
                                    <div class="wt-separator-outer">
                                        <div class="wt-separator site-bg-primary"></div>
                                    </div>
                                </div>
                                <!-- TITLE -->
                                <div class="contact-home-left">
                                    <form  class="cons-contact-form" method="post" action="form-handler2.php">
                                        <div class="row">

                                            <div class="col-md-6 col-sm-6">
                                                <div class="form-group">
                                                    <input name="username" type="text" required class="form-control" placeholder="Name">
                                                </div>
                                            </div>

                                            <div class="col-md-6 col-sm-6">
                                                <div class="form-group">
                                                    <input name="email" type="text" class="form-control" required placeholder="Email">
                                                </div>
                                            </div>

                                            <div class="col-md-6 col-sm-6">
                                                <div class="form-group">
                                                    <input name="phone" type="text" class="form-control" required placeholder="Phone">
                                                </div>
                                            </div>

                                            <div class="col-md-6 col-sm-6">
                                                <div class="form-group">
                                                    <input name="subject" type="text" class="form-control" required placeholder="Subject">
                                                </div>
                                            </div>

                                            <div class="col-md-12">
                                                <div class="form-group">
                                                    <textarea name="message" class="form-control" rows="4" placeholder="Message"></textarea>
                                                </div>
                                            </div>

                                            <div class="col-md-12">
                                                <button type="submit" class="site-button skew-icon-btn btn-block">
                                                    <span class="font-18 inline-block text-uppercase p-lr15">Submit Now</span>
                                                </button>
                                            </div>

                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                        <div class="contact-home-right">
                            <div>
                                <img src="{{get_imported_asset("images/st-1.png")}}" class="st-1" alt="">
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>
        <!-- CONTACT US OFFER SECTION END  -->

        <!-- SECTION CONTENT START -->
        <div class="section-full p-t80 p-b50 bg-center bg-full-height bg-no-repeat"  style="background-image:url({{get_imported_asset("images/background/bg-testimonial.jpg")}});">
            <div class="container">
                <!-- TITLE START -->
                <div class="section-head text-center">
                    <span class="wt-title-subline font-16 text-gray-dark m-b15">Our Clients</span>
                    <h2 class="text-uppercase">Our Client Say</h2>
                    <div class="wt-separator-outer">
                        <div class="wt-separator site-bg-primary"></div>
                    </div>
                </div>
                <!-- TITLE END -->

                <!-- TESTIMONIAL 4 START ON BACKGROUND -->
                <div class="section-content">
                    <div class="owl-carousel home-carousel-1 m-b30">
                        <div class="item">
                            <div class="testimonial-5">
                                <div class="testimonial-pic-block radius-bx">
                                    <div class="testimonial-pic radius">
                                        <img src="{{get_imported_asset("images/testimonials/pic1.jpg")}}" width="132" height="132" alt="">
                                    </div>
                                </div>
                                <div class="testimonial-text clearfix">
                                    <div class="testimonial-paragraph">
                                        <span class="fa fa-quote-left site-text-primary"></span>
                                        <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry.
                                            Lorem Ipsum has been the industry's standard dummy text ever since the 1500s,
                                            when an unknown printer took a galley of type and specimen book.
                                        </p>
                                    </div>
                                    <div class="testimonial-detail clearfix">
                                        <strong class="testimonial-name">RINDA SMITH</strong>
                                        <span class="testimonial-position site-text-primary p-t10">Founder</span>
                                    </div>
                                </div>

                            </div>
                        </div>
                        <div class="item">
                            <div class="testimonial-5">
                                <div class="testimonial-pic-block radius-bx">
                                    <div class="testimonial-pic radius">
                                        <img src="{{get_imported_asset("images/testimonials/pic2.jpg")}}" width="132" height="132" alt="">
                                    </div>
                                </div>
                                <div class="testimonial-text clearfix">
                                    <div class="testimonial-paragraph">
                                        <span class="fa fa-quote-left site-text-primary"></span>
                                        <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry.
                                            Lorem Ipsum has been the industry's standard dummy text ever since the 1500s,
                                            when an unknown printer took a galley of type and specimen book.
                                        </p>
                                    </div>
                                    <div class="testimonial-detail clearfix">
                                        <strong class="testimonial-name">RINDA SMITH</strong>
                                        <span class="testimonial-position site-text-primary p-t10">Founder</span>
                                    </div>
                                </div>

                            </div>
                        </div>
                        <div class="item">
                            <div class="testimonial-5">
                                <div class="testimonial-pic-block radius-bx">
                                    <div class="testimonial-pic radius">
                                        <img src="{{get_imported_asset("images/testimonials/pic1.jpg")}}" width="132" height="132" alt="">
                                    </div>
                                </div>
                                <div class="testimonial-text clearfix">
                                    <div class="testimonial-paragraph">
                                        <span class="fa fa-quote-left site-text-primary"></span>
                                        <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry.
                                            Lorem Ipsum has been the industry's standard dummy text ever since the 1500s,
                                            when an unknown printer took a galley of type and specimen book.
                                        </p>
                                    </div>
                                    <div class="testimonial-detail clearfix">
                                        <strong class="testimonial-name">RINDA SMITH</strong>
                                        <span class="testimonial-position site-text-primary p-t10">Founder</span>
                                    </div>
                                </div>

                            </div>
                        </div>
                        <div class="item">
                            <div class="testimonial-5">
                                <div class="testimonial-pic-block radius-bx">
                                    <div class="testimonial-pic radius">
                                        <img src="{{get_imported_asset("images/testimonials/pic2.jpg")}}" width="132" height="132" alt="">
                                    </div>
                                </div>
                                <div class="testimonial-text clearfix">
                                    <div class="testimonial-paragraph">
                                        <span class="fa fa-quote-left site-text-primary"></span>
                                        <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry.
                                            Lorem Ipsum has been the industry's standard dummy text ever since the 1500s,
                                            when an unknown printer took a galley of type and specimen book.
                                        </p>
                                    </div>
                                    <div class="testimonial-detail clearfix">
                                        <strong class="testimonial-name">RINDA SMITH</strong>
                                        <span class="testimonial-position site-text-primary p-t10">Founder</span>
                                    </div>
                                </div>

                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>
        <!-- SECTION CONTENT END -->

        <!-- OUR CLIENT SLIDER START -->
        <div class="section-full overlay-wraper bg-cover bg-repeat-x site-bg-primary" style="background-image:url({{get_imported_asset("images/background/bg-7.png")}})">
            <div class="container">

                <!-- IMAGE CAROUSEL START -->
                <div class="section-content">
                    <div class="owl-carousel home-logo-carousel">

                        <!-- COLUMNS 1 -->
                        <div class="item">
                            <div class="ow-client-logo">
                                <div class="client-logo wt-img-effect on-color">
                                    <a href="#"><img src="{{get_imported_asset("images/client-logo/w1.png")}}" alt=""></a>
                                </div>
                            </div>
                        </div>
                        <!-- COLUMNS 2 -->
                        <div class="item">
                            <div class="ow-client-logo">
                                <div class="client-logo wt-img-effect on-color">
                                    <a href="#"><img src="{{get_imported_asset("images/client-logo/w2.png")}}" alt=""></a>
                                </div>
                            </div>
                        </div>
                        <!-- COLUMNS 3 -->
                        <div class="item">
                            <div class="ow-client-logo">
                                <div class="client-logo wt-img-effect on-color">
                                    <a href="#"><img src="{{get_imported_asset("images/client-logo/w3.png")}}" alt=""></a>
                                </div>
                            </div>
                        </div>
                        <!-- COLUMNS 4 -->
                        <div class="item">
                            <div class="ow-client-logo">
                                <div class="client-logo wt-img-effect on-color">
                                    <a href="#"><img src="{{get_imported_asset("images/client-logo/w4.png")}}" alt=""></a>
                                </div>
                            </div>
                        </div>
                        <!-- COLUMNS 5 -->
                        <div class="item">
                            <div class="ow-client-logo">
                                <div class="client-logo wt-img-effect on-color">
                                    <a href="#"><img src="{{get_imported_asset("images/client-logo/w5.png")}}" alt=""></a>
                                </div>
                            </div>
                        </div>
                        <!-- COLUMNS 6 -->
                        <div class="item">
                            <div class="ow-client-logo">
                                <div class="client-logo wt-img-effect on-color">
                                    <a href="#"><img src="{{get_imported_asset("images/client-logo/w6.png")}}" alt=""></a>
                                </div>
                            </div>
                        </div>
                        <!-- COLUMNS 7 -->
                        <div class="item">
                            <div class="ow-client-logo">
                                <div class="client-logo wt-img-effect on-color">
                                    <a href="#"><img src="{{get_imported_asset("images/client-logo/w1.png")}}" alt=""></a>
                                </div>
                            </div>
                        </div>
                        <!-- COLUMNS 8 -->
                        <div class="item">
                            <div class="ow-client-logo">
                                <div class="client-logo wt-img-effect on-color">
                                    <a href="#"><img src="{{get_imported_asset("images/client-logo/w2.png")}}" alt=""></a>
                                </div>
                            </div>
                        </div>
                        <!-- COLUMNS 9 -->
                        <div class="item">
                            <div class="ow-client-logo">
                                <div class="client-logo wt-img-effect on-color">
                                    <a href="#"><img src="{{get_imported_asset("images/client-logo/w3.png")}}" alt=""></a>
                                </div>
                            </div>
                        </div>
                        <!-- COLUMNS 10 -->
                        <div class="item">
                            <div class="ow-client-logo">
                                <div class="client-logo wt-img-effect on-color">
                                    <a href="#"><img src="{{get_imported_asset("images/client-logo/w4.png")}}" alt=""></a>
                                </div>
                            </div>
                        </div>
                        <!-- COLUMNS 11 -->
                        <div class="item">
                            <div class="ow-client-logo">
                                <div class="client-logo wt-img-effect on-color">
                                    <a href="#"><img src="{{get_imported_asset("images/client-logo/w5.png")}}" alt=""></a>
                                </div>
                            </div>
                        </div>
                        <!-- COLUMNS 12 -->
                        <div class="item">
                            <div class="ow-client-logo">
                                <div class="client-logo wt-img-effect on-color">
                                    <a href="#"><img src="{{get_imported_asset("images/client-logo/w6.png")}}" alt=""></a>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
                <!-- IMAGE CAROUSEL START -->
            </div>

        </div>
        <!-- OUR CLIENT SLIDER END -->

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
                                <a href="index.html"><img src="{{get_imported_asset("images/footer-logo.png")}}" width="230" height="67" alt=""/></a>
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
                                <span class="input-group-addon"><i class="fa fa-user"></i></span>
                                <input class="form-control" placeholder="Enter Username" type="text">
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="input-group">
                                <span class="input-group-addon"><i class="fa fa-envelope"></i></span>
                                <input class="form-control" placeholder="Enter email" type="email">
                            </div>
                        </div>
                        <button type="button" class="site-button-secondry text-uppercase btn-block m-b10">Submit</button>
                        <div class="font-12">Don't have an account? <a href="javascript:;" class="site-text-primary">Register Here</a></div>
                    </form>
                </div>
                <div class="modal-footer text-center">
                    <div class="text-center"><img src="{{get_imported_asset("images/logo.png")}}" alt=""></div>
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
                                <input class="form-control" placeholder="Enter Username" type="text">
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="input-group">
                                <span class="input-group-addon"><i class="fa fa-envelope"></i></span>
                                <input class="form-control" placeholder="Enter email" type="email">
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="input-group">
                                <span class="input-group-addon"><i class="fa fa-key"></i></span>
                                <input class="form-control" placeholder="Enter Password" type="email">
                            </div>
                        </div>
                        <button type="button" class="site-button-secondry text-uppercase btn-block m-b10">Submit</button>
                        <div class="font-12">Already Have an Account? <a href="javascript:;" class="site-text-primary">Login</a></div>
                    </form>
                </div>
                <div class="modal-footer text-center">
                    <div class="text-center"><img src="{{get_imported_asset("images/logo.png")}}" alt=""></div>
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
