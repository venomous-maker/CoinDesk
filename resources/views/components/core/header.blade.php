<!-- HEADER START -->
<header class="site-header header-style-3 topbar-transparent mobile-sider-drawer-menu">

    <div class="top-bar">
        @include('components.core.top-bar')
    </div>

    <div class="sticky-header main-bar-wraper">
        <div class="main-bar">
            <div class="container">

                <div class="logo-header mostion">
                    <a href="{{ route('home') }}">
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




            </div>
        </div>
    </div>

</header>
<!-- HEADER END -->
