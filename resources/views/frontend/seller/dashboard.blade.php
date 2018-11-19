@extends('frontend.layouts.app')

@section('content')

    <section class="gry-bg py-4 profile">
        <div class="container">
            <div class="row cols-xs-space cols-sm-space cols-md-space">
                <div class="col-lg-3">
                    @include('frontend.inc.seller_side_nav')
                </div>

                <div class="col-lg-9">
                    <!-- Page title -->
                    <div class="page-title">
                        <div class="row align-items-center">
                            <div class="col-lg-6 col-12">
                                <h2 class="heading heading-6 text-capitalize strong-600 mb-0">
                                    Dashboard
                                </h2>
                            </div>
                            <div class="col-lg-6 col-12">
                                <div class="float-right">
                                    <ul class="breadcrumb">
                                        <li><a href="{{ route('home') }}">Home</a></li>
                                        <li class="active"><a href="{{ route('dashboard') }}">Dashboard</a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- dashboard content -->
                    <div class="">
                        <div class="row">
                            <div class="col-md-3">
                                <div class="dashboard-widget text-center cart-widget mt-4">
                                    <a href="" class="d-block">
                                        <i class="fa fa-shopping-cart"></i>
                                        <span class="d-block title">0 Product</span>
                                        <span class="d-block sub-title">in your cart</span>
                                    </a>
                                </div>
                            </div>
                            <div class="col-md-3">
                                <div class="dashboard-widget text-center wishlist-widget mt-4">
                                    <a href="" class="d-block">
                                        <i class="fa fa-heart"></i>
                                        <span class="d-block title">0 Product</span>
                                        <span class="d-block sub-title">in your wishlist</span>
                                    </a>
                                </div>
                            </div>
                            <div class="col-md-3">
                                <div class="dashboard-widget text-center order-widget mt-4">
                                    <a href="" class="d-block">
                                        <i class="fa fa-building"></i>
                                        <span class="d-block title">0 Product</span>
                                        <span class="d-block sub-title">you ordered</span>
                                    </a>
                                </div>
                            </div>
                            <div class="col-md-3">
                                <div class="dashboard-widget text-center order-widget mt-4">
                                    <a href="" class="d-block">
                                        <i class="fa fa-building"></i>
                                        <span class="d-block title">0 Product</span>
                                        <span class="d-block sub-title">you ordered</span>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

@endsection
