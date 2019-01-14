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

                        @if (count($orders) > 0)
                            <!-- Order history table -->
                            <div class="card no-border mt-4">
                                <div>
                                    <table class="table table-sm table-hover">
                                        <thead>
                                            <tr>
                                                <th>#</th>
                                                <th>Order Code</th>
                                                <th>Num. of Products</th>
                                                <th>Customer</th>
                                                <th>Amount</th>
                                                <th>Delivery Status</th>
                                                <th>Payment Status</th>
                                                <th>Options</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            @foreach ($orders as $key => $order_id)
                                                @php
                                                    $order = \App\Order::find($order_id->id);
                                                @endphp
                                                @if($order != null)
                                                    <tr>
                                                        <td>
                                                            {{ $key+1 }}
                                                        </td>
                                                        <td>
                                                            {{ $order->code }}
                                                        </td>
                                                        <td>
                                                            {{ count($order->orderDetails->where('seller_id', Auth::user()->id)) }}
                                                        </td>
                                                        <td>
                                                            @if ($order->user_id != null)
                                                                {{ $order->user->name }}
                                                            @else
                                                                Guest ({{ $order->guest_id }})
                                                            @endif
                                                        </td>
                                                        <td>
                                                            {{ single_price($order->orderDetails->where('seller_id', Auth::user()->id)->sum('price')) }}
                                                        </td>
                                                        <td>
                                                            @php
                                                                $status = 'Delivered';
                                                                foreach ($order->orderDetails->where('seller_id', Auth::user()->id) as $key => $orderDetail) {
                                                                    if($orderDetail->delivery_status != 'Delivered'){
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
                                                        <td>
                                                            <div class="dropdown">
                                                                <button class="btn" type="button" id="" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                                    <i class="fa fa-ellipsis-v"></i>
                                                                </button>

                                                                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="">
                                                                    <button onclick="show_order_details({{ $order->id }})" class="dropdown-item">Order Details</button>
                                                                    {{-- <button onclick="" class="dropdown-item">Cancel Order</button> --}}
                                                                </div>
                                                            </div>
                                                        </td>
                                                    </tr>
                                                @endif
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

    <div class="modal fade" id="order_details" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-lg modal-dialog-centered modal-dialog-zoom product-modal" id="modal-size" role="document">
            <div class="modal-content position-relative">
                <div class="c-preloader">
                    <i class="fa fa-spin fa-spinner"></i>
                </div>
                <div id="order-details-modal-body">

                </div>
            </div>
        </div>
    </div>

@endsection


@section('script')
    <script type="text/javascript">
        function show_order_details(order_id)
        {
            $('#order-details-modal-body').html(null);

            if(!$('#modal-size').hasClass('modal-lg')){
                $('#modal-size').addClass('modal-lg');
            }

            $.post('{{ route('orders.details') }}', { _token : '{{ @csrf_token() }}', order_id : order_id}, function(data){
                $('#order-details-modal-body').html(data);
                $('#order_details').modal();
                $('.c-preloader').hide();
            });
        }
    </script>
@endsection
