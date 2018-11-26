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
                                        <span class="d-block title heading-3 strong-400">{{ count(\App\Product::where('user_id', Auth::user()->id)->get()) }}</span>
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
                                <div class="bg-white mt-4 p-5 text-center">
                                    <div class="mb-3">
                                        <img src="{{ asset('frontend/images/icons/approved.svg') }}" alt="" width="130"
                                            @if(Auth::user()->seller->verification_status == 0)
                                                class="img-grayscale alpha-4"
                                            @endif
                                        >
                                    </div>
                                    <a href="" class="btn btn-styled btn-base-1">Verify Now</a>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-8">
                                <div class="form-box bg-white mt-4">
                                    <div class="form-box-title px-3 py-2 text-center">
                                        Products
                                    </div>
                                    <div class="form-box-content p-3 category-widget">
                                        <ul class="clearfix">
                                            @foreach (\App\Category::all() as $key => $category)
                                                @if(count($category->products->where('user_id', Auth::user()->id))>0)
                                                    <li><a>{{ $category->name }}<span>({{ count($category->products->where('user_id', Auth::user()->id)) }})</span></a></li>
                                                @endif
                                            @endforeach
                                        </ul>
                                        <div class="text-center">
                                            <a href="{{ route('seller.products.upload')}}" class="btn pt-3 pb-1">Add New Product</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="bg-white mt-4 p-4 text-center">
                                    <div class="heading-4 strong-700">Shop</div>
                                    <p>Manage & organize your shop</p>
                                    <a href="" class="btn btn-styled btn-base-1 btn-outline btn-sm">Go to setting</a>
                                </div>
                                <div class="bg-white mt-4 p-4 text-center">
                                    <div class="heading-4 strong-700">Payment</div>
                                    <p>Configure your payment method</p>
                                    <a href="" class="btn btn-styled btn-base-1 btn-outline btn-sm">Configure Now</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

@endsection
