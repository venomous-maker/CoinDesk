@extends('layouts.page')
@section('content')
    <!-- BREADCRUMB ROW -->
    <div class="bg-gray-light p-tb20">
        <div class="container">
            <ul class="wt-breadcrumb breadcrumb-style-2">
                <li><a href="javascript:void(0);"><i class="fa fa-home"></i> Home</a></li>
                <li>Error 403</li>
            </ul>
        </div>
    </div>
    <!-- BREADCRUMB ROW END -->

    <!-- SECTION CONTENT START -->
    <div class="section-full p-t80 p-b50">
        <div class="container">
            <div class="section-content">
                <div class="row">
                    <div class="col-lg-8 col-md-6 col-sm-6">
                        <div class="page-notfound text-center">
                            <form method="post">
                                <strong class="text-uppercase">Error</strong>
                                <strong>4<i class="fa fa-frown-o site-text-primary"></i>3</strong>
                                <span>Access Forbidden</span>
                                <a href="{{route('home')}}" class="site-button ">GO TO HOME  <i class="fa fa-angle-double-right"></i></a>
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