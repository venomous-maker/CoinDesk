<!-- HEADER START -->
<header class="site-header header-style-3 topbar-transparent mobile-sider-drawer-menu">

    <div class="top-bar">
        @include('components.core.top-bar')
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

                @include('components.core.main-nav')

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
