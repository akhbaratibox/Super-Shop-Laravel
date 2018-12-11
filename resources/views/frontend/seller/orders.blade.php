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
                                                <th>Options</th>
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
                                                    <td>
                                                        <div class="dropdown">
                                                            <button class="btn" type="button" id="" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                                <i class="fa fa-ellipsis-v"></i>
                                                            </button>

                                                            <div class="dropdown-menu dropdown-menu-right" aria-labelledby="">
                                                                <button onclick="show_order_details()" class="dropdown-item">Order Details</button>
                                                                <button onclick="" class="dropdown-item">Cancel Order</button>
                                                            </div>
                                                        </div>
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

    <div class="modal fade" id="order_details" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-lg modal-dialog-centered modal-dialog-zoom product-modal" id="modal-size" role="document">
            <div class="modal-content position-relative">
                <div class="c-preloader">
                    <i class="fa fa-spin fa-spinner"></i>
                </div>
                <div id="order-details-modal-body">
                    <div class="modal-header">
                        <h5 class="modal-title strong-600 heading-5">Order id: 1651vdfvdfd51</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body gry-bg px-3 pt-0">
                        <div class="pt-4">
                            <ul class="process-steps clearfix">
                                <li class="done">
                                    <div class="icon">1</div>
                                    <div class="title">Order placed</div>
                                </li>
                                <li class="done">
                                    <div class="icon">2</div>
                                    <div class="title">On review</div>
                                </li>
                                <li class="active">
                                    <div class="icon">3</div>
                                    <div class="title">On delivery</div>
                                </li>
                                <li class="">
                                    <div class="icon">4</div>
                                    <div class="title">Delivered</div>
                                </li>
                            </ul>
                        </div>
                        <div class="card mt-4">
                            <div class="card-header py-2 px-3 heading-6 strong-600">Order Summary</div>
                            <div class="card-body pb-0">
                                <div class="row">
                                    <div class="col-lg-6">
                                        <table class="details-table table">
                                            <tr>
                                                <td class="w-50 strong-600">Order ID:</td>
                                                <td>1651vdfvdfd51</td>
                                            </tr>
                                            <tr>
                                                <td class="w-50 strong-600">Customer:</td>
                                                <td>John Doe</td>
                                            </tr>
                                            <tr>
                                                <td class="w-50 strong-600">Email:</td>
                                                <td>john@gmail.com</td>
                                            </tr>
                                            <tr>
                                                <td class="w-50 strong-600">Shipping address:</td>
                                                <td>1234 Street Name, City, England, dfgdf, fgdgfd, gdfgdf</td>
                                            </tr>
                                        </table>
                                    </div>
                                    <div class="col-lg-6">
                                        <table class="details-table table">
                                            <tr>
                                                <td class="w-50 strong-600">Order date:</td>
                                                <td>7-12-2018 8:00 pm</td>
                                            </tr>
                                            <tr>
                                                <td class="w-50 strong-600">Order status:</td>
                                                <td>On delivery</td>
                                            </tr>
                                            <tr>
                                                <td class="w-50 strong-600">Total order amount:</td>
                                                <td>$900.53</td>
                                            </tr>
                                            <tr>
                                                <td class="w-50 strong-600">Shipping method:</td>
                                                <td>Flat shipping rate</td>
                                            </tr>
                                            <tr>
                                                <td class="w-50 strong-600">Payment method:</td>
                                                <td>Cash on delivery</td>
                                            </tr>
                                        </table>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-lg-9">
                                <div class="card mt-4">
                                    <div class="card-header py-2 px-3 heading-6 strong-600">Order Details</div>
                                    <div class="card-body pb-0">
                                        <table class="details-table table">
                                            <tr>
                                                <td class="w-50 strong-600">Order ID:</td>
                                                <td>1651vdfvdfd51</td>
                                            </tr>
                                            <tr>
                                                <td class="w-50 strong-600">Customer:</td>
                                                <td>John Doe</td>
                                            </tr>
                                            <tr>
                                                <td class="w-50 strong-600">Email:</td>
                                                <td>john@gmail.com</td>
                                            </tr>
                                            <tr>
                                                <td class="w-50 strong-600">Shipping address:</td>
                                                <td>1234 Street Name, City, England, dfgdf, fgdgfd, gdfgdf</td>
                                            </tr>
                                        </table>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-3">
                                <div class="card mt-4">
                                    <div class="card-header py-2 px-3 heading-6 strong-600">Order Ammount</div>
                                    <div class="card-body pb-0">
                                        <table class="table details-table">
                                            <tbody>
                                                <tr>
                                                    <th>Subtotal</th>
                                                    <td class="text-right">
                                                        <span class="strong-600">587.14$</span>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <th>Shipping</th>
                                                    <td class="text-right">
                                                        <span class="text-italic">0.00$</span>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <th>Tax</th>
                                                    <td class="text-right">
                                                        <span class="text-italic">0.00$</span>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <th><span class="strong-600">Total</span></th>
                                                    <td class="text-right">
                                                        <strong><span>587.14$</span></strong>
                                                    </td>
                                                </tr>
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection


@section('script')
    <script type="text/javascript">
        function show_order_details()
        {
            if(!$('#modal-size').hasClass('modal-lg')){
                $('#modal-size').addClass('modal-lg');
            }
            $('#order_details').modal();
            $('.c-preloader').hide();
        }
    </script>
@endsection
