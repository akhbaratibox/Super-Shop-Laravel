@extends('frontend.layouts.app')

@section('content')

    <section class="gry-bg py-4 profile">
        <div class="container">
            <div class="row cols-xs-space cols-sm-space cols-md-space">
                <div class="col-lg-3">
                    @include('frontend.inc.customer_side_nav')
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
                            <div class="col-md-4">
                                <div class="dashboard-widget text-center green-widget mt-4">
                                    <a href="" class="d-block">
                                        <i class="fa fa-shopping-cart"></i>
                                        @if(Session::has('cart'))
                                            <span class="d-block title">{{ count(Session::get('cart'))}} Product(s)</span>
                                        @else
                                            <span class="d-block title">0 Product</span>
                                        @endif
                                        <span class="d-block sub-title">in your cart</span>
                                    </a>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="dashboard-widget text-center red-widget mt-4">
                                    <a href="" class="d-block">
                                        <i class="fa fa-heart"></i>
                                        <span class="d-block title">{{ count(Auth::user()->wishlists)}} Product(s)</span>
                                        <span class="d-block sub-title">in your wishlist</span>
                                    </a>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="dashboard-widget text-center yellow-widget mt-4">
                                    <a href="" class="d-block">
                                        <i class="fa fa-building"></i>
                                        <span class="d-block title">0 Product</span>
                                        <span class="d-block sub-title">you ordered</span>
                                    </a>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-5">
                                <div class="form-box bg-white mt-4">
                                    <div class="form-box-title px-3 py-2 clearfix ">
                                        Saved Shipping Info
                                        <div class="float-right">
                                            <a href="{{ route('profile') }}" class="btn btn-link btn-sm">Edit</a>
                                        </div>
                                    </div>
                                    <div class="form-box-content p-3">
                                        <table>
                                            <tr>
                                                <td>Address:</td>
                                                <td class="p-2">{{ Auth::user()->address }}</td>
                                            </tr>
                                            <tr>
                                                <td>Country:</td>
                                                <td class="p-2">{{ \App\Country::where('code', Auth::user()->country)->first()->name }}</td>
                                            </tr>
                                            <tr>
                                                <td>City:</td>
                                                <td class="p-2">{{ Auth::user()->city }}</td>
                                            </tr>
                                            <tr>
                                                <td>Postal Code:</td>
                                                <td class="p-2">{{ Auth::user()->postal_code }}</td>
                                            </tr>
                                            <tr>
                                                <td>Phone:</td>
                                                <td class="p-2">{{ Auth::user()->phone }}</td>
                                            </tr>
                                        </table>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </section>

@endsection
