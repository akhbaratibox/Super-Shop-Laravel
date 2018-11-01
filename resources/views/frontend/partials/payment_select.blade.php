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
                <div class="icon-block icon-block--style-1-v5 text-center">
                    <div class="block-icon mb-0">
                        <i class="icon-finance-067"></i>
                    </div>
                    <div class="block-content d-none d-md-block">
                        <h3 class="heading heading-sm strong-300 c-gray-light text-capitalize">2. Shipping info</h3>
                    </div>
                </div>
            </div>

            <div class="col-4">
                <div class="icon-block icon-block--style-1-v5 text-center active">
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
                <form class="form-default" data-toggle="validator" role="form">
                    <div class="card">
                        <div class="card-title px-4">
                            <h3 class="heading heading-5 strong-500">
                                Select a payment option
                            </h3>
                        </div>
                        <div class="card-body text-center">
                            <ul class="inline-links">
                                <li>
                                    <label class="payment_option">
                                        <input type="radio" id="" name="payment_option" checked>
                                        <span>
                                            <img src="{{ asset('frontend/images/icons/cards/paypal-256x160.png')}}" class="img-fluid">
                                        </span>
                                    </label>
                                </li>
                                <li>
                                    <label class="payment_option">
                                        <input type="radio" id="" name="payment_option" checked>
                                        <span>
                                            <img src="{{ asset('frontend/images/icons/cards/paypal-256x160.png')}}" class="img-fluid">
                                        </span>
                                    </label>
                                </li>
                                <li>
                                    <label class="payment_option">
                                        <input type="radio" id="" name="payment_option" checked>
                                        <span>
                                            <img src="{{ asset('frontend/images/icons/cards/paypal-256x160.png')}}" class="img-fluid">
                                        </span>
                                    </label>
                                </li>
                                <li>
                                    <label class="payment_option">
                                        <input type="radio" id="" name="payment_option" checked>
                                        <span>
                                            <img src="{{ asset('frontend/images/icons/cards/paypal-256x160.png')}}" class="img-fluid">
                                        </span>
                                    </label>
                                </li>
                            </ul>
                        </div>
                    </div>

                    <div class="row align-items-center pt-4">
                        <div class="col-6">
                            <a href="{{ route('home') }}" class="link link--style-3">
                                <i class="ion-android-arrow-back"></i>
                                Return to shop
                            </a>
                        </div>
                        <div class="col-6 text-right">
                            <button type="submit" class="btn btn-styled btn-base-1">Complete Order</button>
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
                                    foreach (json_decode($product->subsubcategory->options) as $option){
                                        $str = $option->name; // example $str =  choice_0
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
