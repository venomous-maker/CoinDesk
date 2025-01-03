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
                        <span class="wt-title-subline text-gray-dark font-16 m-b15">What is bitcoin</span>
                        <h2 class="text-uppercase">A New Kind of Money </h2>
                        <div class="wt-separator-outer"><div class="wt-separator site-bg-primary"></div></div>
                        <p><strong>Bitcoin is the world’s first decentralized digital currency, enabling peer-to-peer transactions without the need for intermediaries like banks. It operates on a blockchain network, ensuring transparency, security, and immutability. </strong></p>
                        <p>
                            Unlike traditional currencies issued by governments, Bitcoin is decentralized, meaning it is not controlled by any central authority. Its value is determined by market demand and supply, and it can be used for a wide range of financial activities, including investment, transactions, and even remittances.
                            <br />
                            As the first cryptocurrency, Bitcoin has revolutionized the way we think about money, providing users with greater control over their finances while offering a secure and efficient method of transferring value across borders.
                        </p>
                    </div>
                </div>
                <div class="col-lg-6 col-md-6 m-b30">
                    <div class="wt-media">
                        <img src="{{get_imported_asset('images/gallery/pic3.jpg')}}" alt="" class="img-responsive"/>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- ABOUT COMPANY SECTION END -->

    <!-- WHY CHOOSE US SECTION START  -->
    <coin-desk-why-choose-us></coin-desk-why-choose-us>
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
    <coin-desk-our-team-member></coin-desk-our-team-member>
    <!-- OUR TEAM MEMBER SECTION END -->
@endsection
