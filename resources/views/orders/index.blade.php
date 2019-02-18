@extends('layouts.app')

@section('content')

<!-- Basic Data Tables -->
<!--===================================================-->
<div class="panel">
    <div class="panel-heading">
        <h3 class="panel-title">{{__('orders')}}</h3>
    </div>
    <div class="panel-body">
        <table class="table table-striped table-bordered demo-dt-basic" cellspacing="0" width="100%">
            <thead>
                <tr>
                    <th>#</th>
                    <th>Order Code</th>
                    <th>Num. of Products</th>
                    <th>Customer</th>
                    <th>Amount</th>
                    <th>Delivery Status</th>
                    <th>Payment Method</th>
                    <th>Payment Status</th>
                    <th width="10%">{{__('options')}}</th>
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
                                {{ $order->code }} @if($order->viewed == 0) <span class="pull-right badge badge-info">{{ __('New') }}</span> @endif
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
                                {{ single_price($order->orderDetails->where('seller_id', Auth::user()->id)->sum('price') + $order->orderDetails->where('seller_id', Auth::user()->id)->sum('tax')) }}
                            </td>
                            <td>
                                @php
                                    $status = $order->orderDetails->first()->delivery_status;
                                @endphp
                                {{ ucfirst(str_replace('_', ' ', $status)) }}
                            </td>
                            <td>
                                {{ ucfirst(str_replace('_', ' ', $order->payment_type)) }}
                            </td>
                            <td>
                                <span class="badge badge--2 mr-4">
                                    @if ($order->orderDetails->where('seller_id',  Auth::user()->id)->first()->payment_status == 'paid')
                                        <i class="bg-green"></i> Paid
                                    @else
                                        <i class="bg-red"></i> Unpaid
                                    @endif
                                </span>
                            </td>
                            <td>
                                <div class="btn-group dropdown">
                                    <button class="btn btn-primary dropdown-toggle dropdown-toggle-icon" data-toggle="dropdown" type="button">
                                        Actions <i class="dropdown-caret"></i>
                                    </button>
                                    <ul class="dropdown-menu dropdown-menu-right">
                                        <li><a href="{{ route('orders.show', $order->id) }}">View</a></li>
                                        <li><a href="{{ route('seller.invoice.download', $order->id) }}">{{__('Download Invoice')}}</a></li>
                                        <li><a onclick="confirm_modal('{{route('orders.destroy', $order->id)}}');">Delete</a></li>
                                    </ul>
                                </div>
                            </td>
                        </tr>
                    @endif
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
