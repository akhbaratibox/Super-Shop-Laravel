@extends('frontend.layouts.app')

@section('content')

    <section class="gry-bg py-4 profile">
        <div class="container">
            <div class="row cols-xs-space cols-sm-space cols-md-space">
                <div class="col-lg-3">
                    @include('frontend.inc.seller_side_nav')
                </div>

                <div class="col-lg-9">
                    <div class="main-content">
                        <!-- Page title -->
                        <div class="page-title">
                            <div class="row align-items-center">
                                <div class="col-lg-6 col-12">
                                    <h2 class="heading heading-6 text-capitalize strong-600 mb-0">
                                        Orders
                                    </h2>
                                </div>
                                <div class="col-lg-6 col-12">
                                    <div class="float-right">
                                        <ul class="breadcrumb">
                                            <li><a href="{{ route('home') }}">Home</a></li>
                                            <li><a href="{{ route('dashboard') }}">Dashboard</a></li>
                                            <li class="active"><a href="{{ route('orders.index') }}">Orders</a></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>

                        @if (count($orderDetails) > 0)
                            <!-- Order history table -->
                            <div class="card no-border mt-4">
                                <div>
                                    <table class="table table-sm table-hover">
                                        <thead>
                                            <tr>
                                                <th>#</th>
                                                <th>Order Code</th>
                                                <th>Product</th>
                                                <th>Quantity</th>
                                                <th>Amount</th>
                                                <th>Delivery Status</th>
                                                <th>Payment Status</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            @foreach ($orderDetails as $key => $orderDetail)
                                                <tr>
                                                    <td>
                                                        {{ $key+1 }}
                                                    </td>
                                                    <td>
                                                        {{ $orderDetail->order->code }}
                                                    </td>
                                                    <td>
                                                        {{ $orderDetail->product->name }}   ({{ $orderDetail->variation }})
                                                    </td>
                                                    <td>
                                                        {{ $orderDetail->quantity }}
                                                    </td>
                                                    <td>
                                                        {{ single_price($orderDetail->price) }}
                                                    </td>
                                                    <td>
                                                        @php
                                                            if($orderDetail->delivery_status == 'pending'){
                                                                $status = 'Pending';
                                                            }
                                                        @endphp
                                                        {{ $status }}
                                                    </td>
                                                    <td>
                                                        <span class="badge badge--2 mr-4">
                                                            @if ($orderDetail->order->payment_status == 'paid')
                                                                <i class="bg-green"></i> Paid
                                                            @else
                                                                <i class="bg-red"></i> Unpaid
                                                            @endif
                                                        </span>
                                                    </td>
                                                </tr>
                                            @endforeach
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        @endif

                        <div class="pagination-wrapper py-4">
                            <ul class="pagination justify-content-end">
                                {{ $orderDetails->links() }}
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

@endsection
