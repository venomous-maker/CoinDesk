@extends('layouts.page')
@section('content')

    <!-- SECTION CONTENT -->
    <div class="section-full p-t80 p-b50">

        <div class="container">
            <div class="section-content">
                <div class="row">

                    <div class="col-lg-8 col-md-6 col-sm-6">
                        <div class="page-notfound text-center">
                            <form method="post">
                                <strong class="text-uppercase">Error</strong>
                                <strong>5<i class="fa fa-frown-oopen site-text-primary"></i><i class="fa fa-frown-o site-text-primary"></i></strong>
                                <span>Internal Error</span>
                                <a href="{{ route('home') }}" class="site-button ">GO TO HOME  <i class="fa fa-angle-double-right"></i></a>
                            </form>
                        </div>
                    </div>

                    <div class="col-lg-4 col-md-6 col-sm-6">
                        <div class="page-notfound-left text-center ">
                            <img src="{{get_imported_asset('images/error.png')}}" alt="">
                        </div>
                    </div>

                </div>
            </div>
        </div>

    </div>
@endsection
