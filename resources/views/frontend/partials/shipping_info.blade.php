@extends('frontend.layouts.app')

@section('content')

    <div id="page-content">
        <section class="slice-xs sct-color-2 border-bottom">
            <div class="container container-sm">
                <div class="row cols-delimited">
                    <div class="col-4">
                        <div class="icon-block icon-block--style-1-v5 text-center">
                            <div class="block-icon mb-0">
                                <i class="icon-hotel-restaurant-105"></i>
                            </div>
                            <div class="block-content d-none d-md-block">
                                <h3 class="heading heading-sm strong-300 c-gray-light text-capitalize">1. My Cart</h3>
                            </div>
                        </div>
                    </div>

                    <div class="col-4">
                        <div class="icon-block icon-block--style-1-v5 text-center active">
                            <div class="block-icon mb-0">
                                <i class="icon-finance-067"></i>
                            </div>
                            <div class="block-content d-none d-md-block">
                                <h3 class="heading heading-sm strong-300 c-gray-light text-capitalize">2. Shipping info</h3>
                            </div>
                        </div>
                    </div>

                    <div class="col-4">
                        <div class="icon-block icon-block--style-1-v5 text-center">
                            <div class="block-icon c-gray-light mb-0">
                                <i class="icon-finance-059"></i>
                            </div>
                            <div class="block-content d-none d-md-block">
                                <h3 class="heading heading-sm strong-300 c-gray-light text-capitalize">3. Payment</h3>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <section class="py-4 gry-bg">
            <div class="container">
                <div class="row cols-xs-space cols-sm-space cols-md-space">
                    <div class="col-lg-8">
                        <form class="form-default" data-toggle="validator" role="form" id="shipping_form">
                            @csrf
                            <div class="card">
                                @if(Auth::check())
                                    @php
                                    $user = Auth::user();
                                    @endphp
                                    <div class="card-body">
                                        <div class="row">
                                            <div class="col-md-12">
                                                <div class="form-group">
                                                    <label class="control-label">Name</label>
                                                    <input type="text" class="form-control" name="name" value="{{ $user->name }}" required>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="row">
                                            <div class="col-md-12">
                                                <div class="form-group">
                                                    <label class="control-label">Address</label>
                                                    <input type="text" class="form-control" name="address" value="{{ $user->address }}" required>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="row">
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label class="control-label">Select your country</label>
                                                    <select class="form-control custome-control" data-live-search="true" name="country">
                                                        <option value="United States">United States</option>
                                                        <option value="Bangladesh">Bangladesh</option>
                                                    </select>
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="form-group has-feedback">
                                                    <label class="control-label">City</label>
                                                    <input type="text" class="form-control" value="{{ $user->city }}" name="city" required>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="row">
                                            <div class="col-md-6">
                                                <div class="form-group has-feedback">
                                                    <label class="control-label">Postal code</label>
                                                    <input type="text" class="form-control" value="{{ $user->postal_code }}" name="postal_code" required>
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="form-group has-feedback">
                                                    <label class="control-label">Phone</label>
                                                    <input type="text" class="form-control" value="{{ $user->phone }}" name="phone" required>
                                                </div>
                                            </div>
                                        </div>

                                        <input type="hidden" name="checkout_type" value="logged">
                                    </form>
                                </div>
                            @else
                                <div class="card-body">
                                    <div class="row">
                                        <div class="col-md-12">
                                            <div class="form-group">
                                                <label class="control-label">Name</label>
                                                <input type="text" class="form-control" name="name" placeholder="Name" required>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="row">
                                        <div class="col-md-12">
                                            <div class="form-group">
                                                <label class="control-label">Address</label>
                                                <input type="text" class="form-control" name="address" placeholder="Address" required>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="row">
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label class="control-label">Select your country</label>
                                                <select class="form-control custome-control" data-live-search="true" name="country">
                                                    <option value="United States">United States</option>
                                                    <option value="Bangladesh">Bangladesh</option>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group has-feedback">
                                                <label class="control-label">City</label>
                                                <input type="text" class="form-control" placeholder="City" name="city" required>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="row">
                                        <div class="col-md-6">
                                            <div class="form-group has-feedback">
                                                <label class="control-label">Postal code</label>
                                                <input type="text" class="form-control" placeholder="Postal Code" name="postal_code" required>
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group has-feedback">
                                                <label class="control-label">Phone</label>
                                                <input type="text" class="form-control" placeholder="Phone" name="phone" required>
                                            </div>
                                        </div>
                                    </div>

                                    <input type="hidden" name="checkout_type" value="guest">
                                </div>
                            @endif
                        </div>

                        <div class="row align-items-center pt-4">
                            <div class="col-6">
                                <a href="{{ route('home') }}" class="link link--style-3">
                                    <i class="ion-android-arrow-back"></i>
                                    Return to shop
                                </a>
                            </div>
                            <div class="col-6 text-right">
                                <button type="button" class="btn btn-styled btn-base-1" onclick="getPaymentInfo()">Continue to Payment</button>
                            </div>
                        </div>
                    </form>
                </div>

                <div class="col-lg-4 ml-lg-auto">
                    <div class="card sticky-top">
                        <div class="card-title">
                            <div class="row align-items-center">
                                <div class="col-6">
                                    <h3 class="heading heading-3 strong-400 mb-0">
                                        <span>Summary</span>
                                    </h3>
                                </div>

                                <div class="col-6 text-right">
                                    <span class="badge badge-md badge-success">{{ count(Session::get('cart')) }} items</span>
                                </div>
                            </div>
                        </div>

                        <div class="card-body">
                            <table class="table-cart table-cart-review">
                                <thead>
                                    <tr>
                                        <th class="product-name">Product</th>
                                        <th class="product-total text-right">Total</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @php
                                    $total = 0;
                                    @endphp
                                    @foreach (Session::get('cart') as $key => $cartItem)
                                        @php
                                        $product = \App\Product::find($cartItem['id']);
                                        $total = $total + $cartItem['price']*$cartItem['quantity'];
                                        $product_name_with_choice = $product->name;
                                        if(isset($cartItem['color'])){
                                            $product_name_with_choice .= ' - '.\App\Color::where('code', $cartItem['color'])->first()->name;
                                        }
                                        foreach (json_decode($product->choice_options) as $choice){
                                            $str = $choice->name; // example $str =  choice_0
                                            $product_name_with_choice .= ' - '.$cartItem[$str];
                                        }
                                        @endphp
                                        <tr class="cart_item">
                                            <td class="product-name">
                                                {{ $product_name_with_choice }}
                                                <strong class="product-quantity">× {{ $cartItem['quantity'] }}</strong>
                                            </td>
                                            <td class="product-total text-right">
                                                <span>{{ single_price($cartItem['price']*$cartItem['quantity']) }}</span>
                                            </td>
                                        </tr>
                                    @endforeach
                                </tbody>

                                <tfoot>
                                    <tr class="cart-subtotal no-border">
                                        <th>Subtotal</th>
                                        <td class="text-right">
                                            <span class="strong-600">{{ single_price($total) }}</span>
                                        </td>
                                    </tr>

                                    <tr class="cart-shipping">
                                        <th>Shipping</th>
                                        <td class="text-right">
                                            <span class="text-italic">Not selected</span>
                                        </td>
                                    </tr>

                                    <tr class="cart-total">
                                        <th><span class="strong-600">Total</span></th>
                                        <td class="text-right">
                                            <strong><span>{{ single_price($total) }}</span></strong>
                                        </td>
                                    </tr>
                                </tfoot>
                            </table>

                        </div>
                    </div>

                </div>
            </div>
        </div>
    </section>
</div>

@endsection

@section('script')
    <script type="text/javascript">
    function getPaymentInfo(){
        var isValid = true;
        $('.card-body input').each(function() {
            if ( this.value == '' ){
                isValid = false;
            }
        });

        if(isValid){
            //console.log($('#shipping_form').serialize());
             $.ajax({
                type:"POST",
                url:'{{ route('checkout.payment_info') }}',
                data: $('#shipping_form').serialize(),
                success: function(data){
                    $('#page-content').html(data);
                }
            });
        }
        else{
            alert('Please fill all the fileds');
        }
    }
    </script>
@endsection