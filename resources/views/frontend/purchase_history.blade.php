@extends('frontend.layouts.app')

@section('content')

    <section class="gry-bg py-4 profile">
        <div class="container">
            <div class="row cols-xs-space cols-sm-space cols-md-space">
                <div class="col-lg-3">
                    @if(Auth::user()->user_type == 'seller')
                        @include('frontend.inc.seller_side_nav')
                    @elseif(Auth::user()->user_type == 'customer')
                        @include('frontend.inc.customer_side_nav')
                    @endif
                </div>

                <div class="col-lg-9">
                    <div class="main-content">
                        <!-- Page title -->
                        <div class="page-title">
                            <div class="row align-items-center">
                                <div class="col-lg-6 col-12">
                                    <h2 class="heading heading-6 text-capitalize strong-600 mb-0">
                                        Purchase History
                                    </h2>
                                </div>
                                <div class="col-lg-6 col-12">
                                    <div class="float-right">
                                        <ul class="breadcrumb">
                                            <li><a href="{{ route('home') }}">Home</a></li>
                                            <li><a href="{{ route('dashboard') }}">Dashboard</a></li>
                                            <li class="active"><a href="{{ route('purchase_history.index') }}">Purchase History</a></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>

                        @if (count($orders) > 0)
                            <!-- Order history table -->
                            <div class="card no-border mt-4">
                                <div>
                                    <table class="table table-sm table-hover">
                                        <thead>
                                            <tr>
                                                <th>Code</th>
                                                <th>Date</th>
                                                <th>Amount</th>
                                                <th>Delivery Status</th>
                                                <th>Payment Status</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            @foreach ($orders as $key => $order)
                                                <tr>
                                                    <td>
                                                        <a href="{{ route('orders.show', $order->id) }}">{{ $order->code }}</a>
                                                    </td>
                                                    <td>{{ date('d-m-Y', $order->date) }}</td>
                                                    <td>
                                                        {{ single_price($order->grand_total) }}
                                                    </td>
                                                    <td>
                                                        @php
                                                            $status = "Delivered";
                                                            foreach ($order->orderDetails as $key => $orderDetail) {
                                                                if($orderDetail->delivery_status == 'pending'){
                                                                    $status = 'Pending';
                                                                }
                                                            }
                                                        @endphp
                                                        {{ $status }}
                                                    </td>
                                                    <td>
                                                        <span class="badge badge--2 mr-4">
                                                            @if ($order->payment_status == 'paid')
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
                                {{ $orders->links() }}
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

@endsection
