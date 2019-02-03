<div class="modal-header">
    <h5 class="modal-title strong-600 heading-5">Order id: {{ $order->code }}</h5>
    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
        <span aria-hidden="true">&times;</span>
    </button>
</div>

@php
    $status = $order->orderDetails->first()->delivery_status;
@endphp

<div class="modal-body gry-bg px-3 pt-0">
    <div class="pt-4">
        <ul class="process-steps clearfix">
            <li class="done">
                <div class="icon">1</div>
                <div class="title">Order placed</div>
            </li>
            <li @if($status == 'pending') class="active" @else class="done" @endif>
                <div class="icon">2</div>
                <div class="title">On review</div>
            </li>
            <li @if($status == 'delivered' || $status == 'on_delivery') class="done" @else class="active" @endif>
                <div class="icon">3</div>
                <div class="title">On delivery</div>
            </li>
            <li @if($status == 'delivered') class="done" @else class="active" @endif>
                <div class="icon">4</div>
                <div class="title">Delivered</div>
            </li>
        </ul>
    </div>
    <div class="row mt-5">
        <div class="offset-lg-2 col-lg-4 col-sm-6">
            <div class="form-inline">
                <select class="form-control selectpicker form-control-sm"  data-minimum-results-for-search="Infinity" id="update_payment_status">
                    <option value="paid" @if ($status == 'pending') selected @endif>Unpaid</option>
                    <option value="unpaid" @if ($status == 'on_review') selected @endif>Paid</option>
                </select>
                <label class="my-2" >Payment Status</label>
            </div>
        </div>
        <div class="col-lg-4 col-sm-6">
            <div class="form-inline">
                <select class="form-control selectpicker form-control-sm"  data-minimum-results-for-search="Infinity" id="update_delivery_status">
                    <option value="pending" @if ($status == 'pending') selected @endif>Pending</option>
                    <option value="on_review" @if ($status == 'on_review') selected @endif>On review</option>
                    <option value="on_delivery" @if ($status == 'on_delivery') selected @endif>On delivery</option>
                    <option value="delivered" @if ($status == 'delivered') selected @endif>Delivered</option>
                </select>
                <label class="my-2" >Delivery Status</label>
            </div>
        </div>
    </div>
    <div class="card mt-3">
        <div class="card-header py-2 px-3 ">
        <div class="heading-6 strong-600">Order Summary</div>
        </div>
        <div class="card-body pb-0">
            <div class="row">
                <div class="col-lg-6">
                    <table class="details-table table">
                        <tr>
                            <td class="w-50 strong-600">Order ID:</td>
                            <td>{{ $order->code }}</td>
                        </tr>
                        <tr>
                            <td class="w-50 strong-600">Customer:</td>
                            <td>{{ json_decode($order->shipping_address)->name }}</td>
                        </tr>
                        <tr>
                            <td class="w-50 strong-600">Email:</td>
                            @if ($order->user_id != null)
                                <td>{{ $order->user->email }}</td>
                            @endif
                        </tr>
                        <tr>
                            <td class="w-50 strong-600">Shipping address:</td>
                            <td>{{ json_decode($order->shipping_address)->address }}, {{ json_decode($order->shipping_address)->city }}, {{ json_decode($order->shipping_address)->country }}</td>
                        </tr>
                    </table>
                </div>
                <div class="col-lg-6">
                    <table class="details-table table">
                        <tr>
                            <td class="w-50 strong-600">Order date:</td>
                            <td>{{ date('d-m-Y H:m A', $order->date) }}</td>
                        </tr>
                        <tr>
                            <td class="w-50 strong-600">Order status:</td>
                            <td>{{ $status }}</td>
                        </tr>
                        <tr>
                            <td class="w-50 strong-600">Total order amount:</td>
                            <td>{{ single_price($order->orderDetails->where('seller_id', Auth::user()->id)->sum('price') + $order->orderDetails->where('seller_id', Auth::user()->id)->sum('tax')) }}</td>
                        </tr>
                        <tr>
                            <td class="w-50 strong-600">Shipping method:</td>
                            <td>Flat shipping rate</td>
                        </tr>
                        <tr>
                            <td class="w-50 strong-600">Payment method:</td>
                            <td>{{ $order->payment_type }}</td>
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
                        <thead>
                            <tr>
                                <th>#</th>
                                <th width="40%">Product</th>
                                <th>Variation</th>
                                <th>Quantity</th>
                                <th>Price</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($order->orderDetails->where('seller_id', Auth::user()->id) as $key => $orderDetail)
                                <tr>
                                    <td>{{ $key+1 }}</td>
                                    <td><a href="{{ route('product', $orderDetail->product->slug) }}" target="_blank">{{ $orderDetail->product->name }}</a></td>
                                    <td>
                                        {{ $orderDetail->variation }}
                                    </td>
                                    <td>
                                        {{ $orderDetail->quantity }}
                                    </td>
                                    <td>{{ $orderDetail->price }}</td>
                                </tr>
                            @endforeach
                        </tbody>
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
                                    <span class="strong-600">{{ single_price($order->orderDetails->where('seller_id', Auth::user()->id)->sum('price')) }}</span>
                                </td>
                            </tr>
                            {{-- <tr>
                                <th>Shipping</th>
                                <td class="text-right">
                                    <span class="text-italic">0.00$</span>
                                </td>
                            </tr> --}}
                            <tr>
                                <th>Tax</th>
                                <td class="text-right">
                                    <span class="text-italic">{{ single_price($order->orderDetails->where('seller_id', Auth::user()->id)->sum('tax')) }}</span>
                                </td>
                            </tr>
                            <tr>
                                <th><span class="strong-600">Total</span></th>
                                <td class="text-right">
                                    <strong><span>{{ single_price($order->orderDetails->where('seller_id', Auth::user()->id)->sum('price') + $order->orderDetails->where('seller_id', Auth::user()->id)->sum('tax')) }}</span></strong>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>

<script type="text/javascript">
    $('#update_delivery_status').on('change', function(){
        var order_id = {{ $order->id }};
        var status = $('#update_delivery_status').val();
        $.post('{{ route('orders.update_delivery_status') }}', {_token:'{{ @csrf_token() }}',order_id:order_id,status:status}, function(data){
            $('#order_details').modal('hide');
            showFrontendAlert('success', 'Order status has been updated');
            location.reload().setTimeOut(500);
        });
    });
</script>
