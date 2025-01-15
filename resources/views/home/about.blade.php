@extends('layouts.page')
@section('content')
    <!-- INNER PAGE BANNER -->
    <div class="wt-bnr-inr overlay-wraper" style="background-image:url({{ get_logo() }});">
        <div class="overlay-main bg-black opacity-07"></div>
        <div class="container">
            <div class="wt-bnr-inr-entry">
                <h1 class="text-white">About</h1>
            </div>
        </div>
    </div>
    <!-- INNER PAGE BANNER END -->

    <!-- ABOUT COMPANY SECTION START -->
    <div class="section-full p-t80 p-b50">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 col-md-6 m-b30">
                    <div class="section-head text-left">
                        <span class="wt-title-subline text-gray-dark font-16 m-b15">What is mavex crypt</span>

                        <h2 class="text-uppercase">MavexCrypt: Redefining Crypto Trading</h2>
                        <div class="wt-separator-outer">
                            <div class="wt-separator site-bg-primary"></div>
                        </div>
                        <p><strong>MavexCrypt is a cutting-edge trading platform designed to simplify and enhance the
                                experience of buying, selling, and managing cryptocurrencies like Bitcoin, Ethereum, and
                                beyond. With its user-friendly interface and robust features, MavexCrypt empowers both
                                novice and seasoned traders to navigate the dynamic world of digital assets
                                effortlessly.</strong></p>
                        <p>
                            Built on the principles of transparency, security, and efficiency, MavexCrypt offers a
                            decentralized approach to trading, minimizing the reliance on traditional financial
                            intermediaries. The platform leverages advanced technologies such as real-time analytics,
                            AI-driven insights, and secure blockchain protocols to ensure seamless and secure transactions.
                            <br />
                            MavexCrypt’s mission is to revolutionize cryptocurrency trading by providing users with a
                            powerful yet intuitive platform that adapts to their needs. Whether you're an investor seeking
                            long-term gains or a trader looking to capitalize on market fluctuations, MavexCrypt offers the
                            tools and resources to help you achieve your financial goals in the rapidly evolving crypto
                            landscape.
                        </p>
                    </div>
                </div>
                <div class="col-lg-6 col-md-6 m-b30">
                    <div class="wt-media">
                        <img src="https://m.media-amazon.com/images/I/61Iw4aixZ1L._AC_UF1000,1000_QL80_.jpg" alt=""
                            class="img-responsive" />
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- ABOUT COMPANY SECTION END -->

    <!-- WHY CHOOSE US SECTION START  -->
    {{-- <coin-desk-why-choose-us></coin-desk-why-choose-us> --}}
    <!-- WHY CHOOSE US SECTION END -->

    <!-- SECTION CONTENT -->
    <div class="section-full site-bg-primary p-t50 p-b30">
        <div class="container">
            <div class="section-content">
                <div class="row">

                    <div class="col-md-3 col-sm-6">
                        <div class="text-black wt-icon-box-wraper center">
                            <div class="counter font-70 font-weight-800 m-b5">35</div>
                            <span class="font-18">Support Countries</span>
                        </div>
                    </div>

                    <div class="col-md-3 col-sm-6">
                        <div class="m-b30 text-black wt-icon-box-wraper center">
                            <div class="font-70 font-weight-800 m-b5"><span class="counter">700</span></div>
                            <span class="font-18">BitCoin ATMs</span>
                        </div>
                    </div>

                    <div class="col-md-3 col-sm-6">
                        <div class="m-b30 text-black wt-icon-box-wraper center">
                            <div class="counter font-70 font-weight-800 m-b5">300</div>
                            <span class="font-18">Producers</span>
                        </div>
                    </div>

                    <div class="col-md-3 col-sm-6">
                        <div class="m-b30 wt-icon-box-wraper center text-black">
                            <div class="counter font-70 font-weight-800 m-b5">55</div>
                            <span class="font-18">Operators</span>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>
    <!-- SECTION CONTENT END -->


    <!-- OUR TEAM MEMBER SECTION START -->
    {{-- <coin-desk-our-team-member></coin-desk-our-team-member> --}}
    <!-- OUR TEAM MEMBER SECTION END -->
@endsection
