<section class="slice-xs sct-color-2 border-bottom">
    <div class="container container-sm">
        <div class="row cols-delimited">
            <div class="col-4">
                <div class="icon-block icon-block--style-1-v5 text-center">
                    <div class="block-icon mb-0">
                        <i class="icon-hotel-restaurant-105"></i>
                    </div>
                    <div class="block-content d-none d-md-block">
                        <h3 class="heading heading-sm strong-300 c-gray-light text-capitalize">1. {{__('My Cart')}}</h3>
                    </div>
                </div>
            </div>

            <div class="col-4">
                <div class="icon-block icon-block--style-1-v5 text-center">
                    <div class="block-icon mb-0">
                        <i class="icon-finance-067"></i>
                    </div>
                    <div class="block-content d-none d-md-block">
                        <h3 class="heading heading-sm strong-300 c-gray-light text-capitalize">2. {{__('Shipping info')}}</h3>
                    </div>
                </div>
            </div>

            <div class="col-4">
                <div class="icon-block icon-block--style-1-v5 text-center active">
                    <div class="block-icon c-gray-light mb-0">
                        <i class="icon-finance-059"></i>
                    </div>
                    <div class="block-content d-none d-md-block">
                        <h3 class="heading heading-sm strong-300 c-gray-light text-capitalize">3. {{__('Payment')}}</h3>
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
                <form action="{{ route('payment.checkout') }}" class="form-default" data-toggle="validator" role="form" method="POST">
                    @csrf
                    <div class="card">
                        <div class="card-title px-4">
                            <h3 class="heading heading-5 strong-500">
                                {{__('Select a payment option')}}
                            </h3>
                        </div>
                        <div class="card-body text-center">
                            <ul class="inline-links">
                                @if (\App\BusinessSetting::where('type', 'paypal_payment')->first()->value == 1)
                                    <li>
                                        <label class="payment_option">
                                            <input type="radio" id="" name="payment_option" value="paypal" checked>
                                            <span>
                                                <img src="{{ asset('frontend/images/icons/cards/paypal-256x160.png')}}" class="img-fluid">
                                            </span>
                                        </label>
                                    </li>
                                @endif
                                @if(\App\BusinessSetting::where('type', 'stripe_payment')->first()->value == 1)
                                    <li>
                                        <label class="payment_option">
                                            <input type="radio" id="" name="payment_option" value="stripe" checked>
                                            <span>
                                                <img src="{{ asset('frontend/images/icons/cards/stripe.png')}}" class="img-fluid">
                                            </span>
                                        </label>
                                    </li>
                                @endif
                                @if(\App\BusinessSetting::where('type', 'sslcommerz_payment')->first()->value == 1)
                                    <li>
                                        <label class="payment_option">
                                            <input type="radio" id="" name="payment_option" value="sslcommerz" checked>
                                            <span>
                                                <img src="{{ asset('frontend/images/icons/cards/sslcommerz.png')}}" class="img-fluid">
                                            </span>
                                        </label>
                                    </li>
                                @endif
                                @if(\App\BusinessSetting::where('type', 'cash_payment')->first()->value == 1)
                                    <li>
                                        <label class="payment_option">
                                            <input type="radio" id="" name="payment_option" value="cash_on_delivery" checked>
                                            <span>
                                                <img src="{{ asset('frontend/images/icons/cards/cod.png')}}" class="img-fluid">
                                            </span>
                                        </label>
                                    </li>
                                @endif
                            </ul>
                        </div>
                    </div>

                    <div class="row align-items-center pt-4">
                        <div class="col-6">
                            <a href="{{ route('home') }}" class="link link--style-3">
                                <i class="ion-android-arrow-back"></i>
                                {{__('Return to shop')}}
                            </a>
                        </div>
                        <div class="col-6 text-right">
                            <button type="submit" class="btn btn-styled btn-base-1">{{__('Complete Order')}}</button>
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
                                    <span>{{__('Summary')}}</span>
                                </h3>
                            </div>

                            <div class="col-6 text-right">
                                <span class="badge badge-md badge-success">{{ count(Session::get('cart')) }} {{__('items')}}</span>
                            </div>
                        </div>
                    </div>

                    <div class="card-body">
                        <table class="table-cart table-cart-review">
                            <thead>
                                <tr>
                                    <th class="product-name">{{__('product')}}</th>
                                    <th class="product-total text-right">{{__('Total')}}</th>
                                </tr>
                            </thead>
                            <tbody>
                                @php
                                    $subtotal = 0;
                                    $tax = 0;
                                @endphp
                                @foreach (Session::get('cart') as $key => $cartItem)
                                    @php
                                    $product = \App\Product::find($cartItem['id']);
                                    $subtotal += $cartItem['price']*$cartItem['quantity'];
                                    $tax += $cartItem['tax']*$cartItem['quantity'];
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
                                        <span class="strong-600">{{ single_price($subtotal) }}</span>
                                    </td>
                                </tr>

                                <tr class="cart-shipping">
                                    <th>Tax</th>
                                    <td class="text-right">
                                        <span class="text-italic">{{ single_price($tax) }}</span>
                                    </td>
                                </tr>

                                {{-- <tr class="cart-shipping">
                                    <th>Shipping</th>
                                    <td class="text-right">
                                        <span class="text-italic">Not selected</span>
                                    </td>
                                </tr> --}}

                                <tr class="cart-total">
                                    <th><span class="strong-600">Total</span></th>
                                    <td class="text-right">
                                        <strong><span>{{ single_price($subtotal+$tax) }}</span></strong>
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
