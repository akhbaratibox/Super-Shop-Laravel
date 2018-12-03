@extends('layouts.app')

@section('content')

<div class="row">
    <div class="col-sm-12">
        <a href="{{ route('flash_deals.create')}}" class="btn btn-info pull-right">{{__('web.add_new')}}</a>
    </div>
</div>

<br>

<!-- Basic Data Tables -->
<!--===================================================-->
<div class="panel">
    <div class="panel-heading">
        <h3 class="panel-title">{{__('web.flash_deal')}}</h3>
    </div>
    <div class="panel-body">
        <table class="table table-striped table-bordered demo-dt-basic" cellspacing="0" width="100%">
            <thead>
                <tr>
                    <th>#</th>
                    <th>Order Code</th>
                    <th>Product</th>
                    <th>Quantity</th>
                    <th>Amount</th>
                    <th>Delivery Status</th>
                    <th>Payment Status</th>
                    <th width="10%">{{__('web.options')}}</th>
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

@endsection


@section('script')
    <script type="text/javascript">

    </script>
@endsection
