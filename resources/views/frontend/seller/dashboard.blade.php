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
                                <div class="dashboard-widget text-center green-widget mt-4">
                                    <a href="" class="d-block">
                                        <i class="fa fa-upload"></i>
                                        <span class="d-block title heading-3 strong-400">100</span>
                                        <span class="d-block sub-title">Products</span>
                                    </a>
                                </div>
                            </div>
                            <div class="col-md-3">
                                <div class="dashboard-widget text-center red-widget mt-4">
                                    <a href="" class="d-block">
                                        <i class="fa fa-cart-plus"></i>
                                        <span class="d-block title heading-3 strong-400">130</span>
                                        <span class="d-block sub-title">Total sale</span>
                                    </a>
                                </div>
                            </div>
                            <div class="col-md-3">
                                <div class="dashboard-widget text-center blue-widget mt-4">
                                    <a href="" class="d-block">
                                        <i class="fa fa-dollar"></i>
                                        <span class="d-block title heading-3 strong-400">$1500</span>
                                        <span class="d-block sub-title">Total earnings</span>
                                    </a>
                                </div>
                            </div>
                            <div class="col-md-3">
                                <div class="dashboard-widget text-center yellow-widget mt-4">
                                    <a href="" class="d-block">
                                        <i class="fa fa-check-square-o"></i>
                                        <span class="d-block title heading-3 strong-400">$1200</span>
                                        <span class="d-block sub-title">Successful orders</span>
                                    </a>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-7">
                                <div class="form-box bg-white mt-4">
                                    <div class="form-box-title px-3 py-2 text-center">
                                        Orders
                                    </div>
                                    <div class="form-box-content p-3">
                                        <table class="table mb-0 table-bordered" style="font-size:14px;">
                                            <tr>
                                                <td>Total orders:</td>
                                                <td><strong class="heading-6">60</strong></td>
                                            </tr>
                                            <tr >
                                                <td>Pending orders:</td>
                                                <td><strong class="heading-6">60</strong></td>
                                            </tr>
                                            <tr >
                                                <td>Cancelled orders:</td>
                                                <td><strong class="heading-6">60</strong></td>
                                            </tr>
                                            <tr >
                                                <td>Successful orders:</td>
                                                <td><strong class="heading-6">60</strong></td>
                                            </tr>
                                        </table>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-5">
                                
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

@endsection
