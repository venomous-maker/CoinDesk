<?php
    // Define patterns to exempt all auth-related routes
    $exemptPatterns = [
        '/^auth\./',      // Matches routes like 'auth.*'
        '/^login$/',      // Matches 'login' route
        '/^register$/',   // Matches 'register' route
        '/^password\./'   // Matches routes like 'password.*'
        ,
        '/^verification\./',
        '/^storage\./',
        '/^sanctum\./'
    ];
    // Fetch all routes and pass them to the menu builder
    $routes = Route::getRoutes()->getRoutesByName();
    $menuHtml = buildDynamicMenu($routes, $exemptPatterns);
?>
<!-- MAIN Vav -->
<div class="header-nav navbar-collapse collapse ">
    <ul class=" nav navbar-nav">
{{--        {!! $menuHtml !!}--}}
        <li class="active">
            <a href="{{route('home')}}">Home<i class="fa "></i></a>
        </li>

        <li>
            <a href="{{route('home.about')}}">About Us<i class="fa "></i></a>
        </li>

        <li>
        @if($user)
            <a href="{{route('market.index')}}">Market<i class="fa "></i></a>
            @else
 <a href="#" data-bs-toggle="modal" data-bs-target="#Login-form">Market<i class="fa "></i></a>

            @endif
        </li>

        <li>
    @if($user)
        <a href="javascript:;">Trade<i class="fa fa-chevron-down"></i></a>
        <ul class="sub-menu">
            <li><a href="{{ route('trade.trading') }}">Trading</a></li>
            <li><a href="{{ route('trade.perpetual') }}">Perpetual</a></li>
            <li><a href="{{ route('trade.spot') }}">Spot</a></li>
        </ul>
    @else
        <a href="#" data-bs-toggle="modal" data-bs-target="#Login-form">Trade<i class="fa fa-chevron-down"></i></a>
    @endif
</li>

<li>
    @if($user)
        <a href="javascript:;">Finance<i class="fa fa-chevron-down"></i></a>
        <ul class="sub-menu">
            <li><a href="{{ route('finance.assets') }}">Assets</a></li>
            <li><a href="{{ route('finance.ai-quantization') }}">Ai Quantization</a></li>
        </ul>
    @else
        <a href="#" data-bs-toggle="modal" data-bs-target="#Login-form">Finance<i class="fa fa-chevron-down"></i></a>
    @endif
</li>
{{--        <li>--}}
{{--            <a href="javascript:;">Pages<i class="fa fa-chevron-down"></i></a>--}}
{{--            <ul class="sub-menu">--}}
{{--                <li>--}}
{{--                    <a href="javascript:;">About us</a>--}}
{{--                    <ul class="sub-menu">--}}
{{--                        <li><a href="about-1.html">About us 1</a></li>--}}
{{--                    </ul>--}}
{{--                </li>--}}
{{--                <li>--}}
{{--                    <a href="javascript:;">Contact us</a>--}}
{{--                    <ul class="sub-menu">--}}
{{--                        <li><a href="contact-1.html">Contact us 1</a></li>--}}
{{--                        <li><a href="contact-2.html">Contact us 2</a></li>--}}
{{--                    </ul>--}}
{{--                </li>--}}
{{--                <li>--}}
{{--                    <a href="javascript:;">Error</a>--}}
{{--                    <ul class="sub-menu">--}}
{{--                        <li><a href="error-403.html">Error 403</a></li>--}}
{{--                        <li><a href="error-404.html">Error 404</a></li>--}}
{{--                        <li><a href="error-500.html">Error 500</a></li>--}}
{{--                    </ul>--}}
{{--                </li>--}}
{{--                <li>--}}
{{--                    <a href="javascript:;">FAQ</a>--}}
{{--                    <ul class="sub-menu">--}}
{{--                        <li><a href="faq-1.html">FAQ 1</a></li>--}}
{{--                    </ul>--}}
{{--                </li>--}}
{{--                <li>--}}
{{--                    <a href="javascript:;">Our Team</a>--}}
{{--                    <ul class="sub-menu">--}}
{{--                        <li><a href="our-team.html">Our Team 1</a></li>--}}
{{--                        <li><a href="our-team-detail.html">Our Team Detail</a></li>--}}
{{--                    </ul>--}}
{{--                </li>--}}
{{--                <li>--}}
{{--                    <a href="javascript:;">Services</a>--}}
{{--                    <ul class="sub-menu">--}}
{{--                        <li><a href="services-1.html">Services 1</a></li>--}}
{{--                        <li><a href="services-2.html">Services 2</a></li>--}}
{{--                        <li><a href="services-detail.html">Services Detail</a></li>--}}
{{--                    </ul>--}}
{{--                </li>--}}


{{--            </ul>--}}
{{--        </li>--}}

{{--        <li>--}}
{{--            <a href="javascript:;">Features<i class="fa fa-chevron-down"></i></a>--}}
{{--            <ul class="sub-menu">--}}
{{--                <li>--}}
{{--                    <a href="javascript:;">Header</a>--}}
{{--                    <ul class="sub-menu">--}}
{{--                        <li><a href="header-style-1.html">Header 1</a></li>--}}
{{--                        <li><a href="header-style-2.html">Header 2</a></li>--}}
{{--                        <li><a href="header-style-3.html">Header 3</a></li>--}}
{{--                        <li><a href="header-style-4.html">Header 4</a></li>--}}
{{--                        <li><a href="header-style-5.html">Header 5</a></li>--}}
{{--                        <li><a href="header-style-6.html">Header 6</a></li>--}}
{{--                        <li><a href="header-style-7.html">Header 7</a></li>--}}
{{--                        <li><a href="header-style-8.html">Header 8</a></li>--}}
{{--                        <li><a href="header-style-9.html">Header 9</a></li>--}}
{{--                        <li><a href="header-style-10.html">Header 10</a></li>--}}
{{--                    </ul>--}}
{{--                </li>--}}
{{--                <li><a href="footer-fixed.html">Footer Fixed</a></li>--}}
{{--                <li><a href="footer-light.html">Footer Light</a></li>--}}
{{--                <li><a href="footer-dark.html">Footer Dark</a></li>--}}
{{--            </ul>--}}
{{--        </li>--}}

{{--        <li>--}}
{{--            <a href="javascript:;">Product<i class="fa fa-chevron-down"></i></a>--}}
{{--            <ul class="sub-menu">--}}
{{--                <li><a href="product.html">Product</a></li>--}}
{{--                <li><a href="product-detail.html">Product Detail</a></li>--}}
{{--                <li><a href="shopping-cart.html">Shopping cart</a></li>--}}
{{--                <li><a href="wish-list.html">Wishlist</a></li>--}}
{{--                <li><a href="checkout.html">Checkout</a></li>--}}
{{--            </ul>--}}
{{--        </li>--}}

{{--        <li class="submenu-direction">--}}
{{--            <a href="javascript:;">Blog<i class="fa fa-chevron-down"></i></a>--}}
{{--            <ul class="sub-menu">--}}
{{--                <li>--}}
{{--                    <a href="javascript:;">Single</a>--}}
{{--                    <ul class="sub-menu">--}}
{{--                        <li><a href="blog-single.html">Single full</a></li>--}}
{{--                        <li><a href="blog-single-left-sidebar.html">Single sidebar left</a></li>--}}
{{--                    </ul>--}}
{{--                </li>--}}
{{--                <li>--}}
{{--                    <a href="javascript:;">list</a>--}}
{{--                    <ul class="sub-menu">--}}
{{--                        <li><a href="blog-half-img.html">Half image</a></li>--}}
{{--                        <li><a href="blog-half-img-left-sidebar.html">Half image sidebar left</a></li>--}}
{{--                        <li><a href="blog-large-img.html">Large image</a></li>--}}
{{--                        <li><a href="blog-large-img-left-sidebar.html">Large image sidebar left</a></li>--}}
{{--                    </ul>--}}
{{--                </li>--}}
{{--                <li>--}}
{{--                    <a href="javascript:;">Grid</a>--}}
{{--                    <ul class="sub-menu">--}}
{{--                        <li><a href="blog-grid-2.html">Grid 2</a></li>--}}
{{--                        <li><a href="blog-grid-2-sidebar-left.html">Grid 2 sidebar left</a></li>--}}
{{--                        <li><a href="blog-grid-3.html">Grid 3</a></li>--}}
{{--                        <li><a href="blog-grid-3-sidebar-left.html">Grid 3 sidebar left</a></li>--}}
{{--                    </ul>--}}
{{--                </li>--}}
{{--                <li>--}}
{{--                    <a href="javascript:;">Media</a>--}}
{{--                    <ul class="sub-menu">--}}
{{--                        <li><a href="blog-media-list.html">Media list</a></li>--}}
{{--                        <li><a href="blog-media-grid.html">Media grid</a></li>--}}
{{--                    </ul>--}}
{{--                </li>--}}
{{--            </ul>--}}
{{--        </li>--}}

{{--        <li class="has-mega-menu ">--}}
{{--            <a href="javascript:;">Elements<i class="fa fa-chevron-down"></i></a>--}}
{{--            <ul class="mega-menu">--}}
{{--                <li>--}}

{{--                    <ul>--}}
{{--                        <li><a href="shortcode-animations.html"><i class="fa fa-ravelry"></i> Animations</a></li>--}}
{{--                        <li><a href="shortcode-accordians.html"> <i class="fa fa-bars"></i>Accordians</a></li>--}}
{{--                        <li><a href="shortcode-alert-box.html"> <i class="fa fa-bell-o"></i>Alert box</a></li>--}}
{{--                        <li><a href="shortcode-buttons.html"> <i class="fa fa-toggle-on"></i>Buttons</a></li>--}}
{{--                        <li><a href="shortcode-client.html"> <i class="fa fa-group"></i>Clients</a></li>--}}
{{--                        <li><a href="shortcode-client-slider.html"> <i class="fa fa-drivers-license-o"></i>Clients slider</a></li>--}}
{{--                        <li><a href="shortcode-carousel-sliders.html"> <i class="fa fa-sliders"></i>Carousel sliders</a></li>--}}
{{--                    </ul>--}}
{{--                </li>--}}

{{--                <li>--}}

{{--                    <ul>--}}
{{--                        <li><a href="shortcode-counters.html"> <i class="fa fa-calculator"></i>Counters</a></li>--}}
{{--                        <li><a href="shortcode-dividers.html"> <i class="fa fa-ellipsis-h"></i>Dividers</a></li>--}}
{{--                        <li><a href="shortcode-google-map.html"> <i class="fa fa-map-o"></i>Google map</a></li>--}}
{{--                        <li><a href="shortcode-icons.html"> <i class="fa fa-ellipsis-h"></i>Icons Shortcodes</a></li>--}}
{{--                        <li><a href="shortcode-icon-box.html"> <i class="fa fa-square-o"></i>Icon-box</a></li>--}}
{{--                        <li><a href="shortcode-icon-box-styles.html"> <i class="fa fa-square-o"></i>Icon box styles</a></li>--}}
{{--                        <li><a href="shortcode-image-box-content.html"> <i class="fa fa-address-card-o"></i>Image box content</a></li>--}}
{{--                    </ul>--}}
{{--                </li>--}}

{{--                <li>--}}

{{--                    <ul>--}}
{{--                        <li><a href="shortcode-images-effects.html"> <i class="fa fa-photo"></i>Images effects</a></li>--}}
{{--                        <li><a href="shortcode-list-group.html"> <i class="fa fa-list-ol"></i>List group</a></li>--}}
{{--                        <li><a href="shortcode-modal-popup.html"> <i class="fa fa-window-maximize"></i>Modal popup</a></li>--}}
{{--                        <li><a href="shortcode-pagination.html"> <i class="fa fa-terminal"></i>Pagination</a></li>--}}
{{--                        <li><a href="shortcode-pricing-table.html"> <i class="fa fa-dollar"></i>Pricing table</a></li>--}}
{{--                        <li><a href="shortcode-toggles.html"> <i class="fa fa-plus-square-o"></i>Toggles</a></li>--}}
{{--                        <li><a href="shortcode-tooltips.html"> <i class="fa fa-window-maximize"></i>Tooltips</a></li>--}}
{{--                    </ul>--}}
{{--                </li>--}}

{{--                <li>--}}

{{--                    <ul>--}}
{{--                        <li><a href="shortcode-tabs.html"> <i class="fa fa-th-list"></i>Tabs</a></li>--}}
{{--                        <li><a href="shortcode-table.html"> <i class="fa fa-table"></i>Table</a></li>--}}
{{--                        <li><a href="shortcode-testimonials.html"> <i class="fa fa-twitch"></i>Testimonials</a></li>--}}
{{--                        <li><a href="shortcode-testimonials-grid.html"> <i class="fa fa-twitch"></i>Testimonials grid</a></li>--}}
{{--                        <li><a href="shortcode-title-separators.html"> <i class="fa fa-ellipsis-h"></i>Title-separators</a></li>--}}
{{--                        <li><a href="shortcode-video.html"> <i class="fa fa-video-camera"></i>Video</a></li>--}}
{{--                        <li><a href="shortcode-all-widgets.html"> <i class="fa fa-retweet"></i>Widgets</a></li>--}}
{{--                    </ul>--}}
{{--                </li>--}}
{{--            </ul>--}}
{{--        </li>--}}
{{--    </ul>--}}
</div>
