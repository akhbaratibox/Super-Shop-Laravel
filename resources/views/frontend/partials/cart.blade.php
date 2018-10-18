<a href="" class="nav-box-link" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
    <i class="ion-ios-cart-outline d-inline-block nav-box-icon"></i>
    <span class="nav-box-text d-none d-lg-inline-block">Cart</span>
    @if(Session::has('cart'))
        <span class="nav-box-number">{{ count(Session::get('cart'))}}</span>
    @else
        <span class="nav-box-number">0</span>
    @endif
</a>
<ul class="dropdown-menu dropdown-menu-right px-0">
    <li>
        <div class="dropdown-cart px-0">
            @if(Session::has('cart'))
                @if(count($cart = Session::get('cart')) > 0)
                    <div class="dc-header">
                        <h3 class="heading heading-6 strong-700">Cart Items</h3>
                    </div>
                    <div class="dropdown-cart-items c-scrollbar">
                        @foreach($cart as $id)
                            @php
                                $product = \App\Product::find($id);
                            @endphp
                            <div class="dc-item">
                                <div class="d-flex align-items-center">
                                    <div class="dc-image">
                                        <a href="#">
                                            <img src="{{ asset(json_decode($product->photos)[0]) }}" class="img-fluid" alt="">
                                        </a>
                                    </div>
                                    <div class="dc-content">
                                        <span class="d-block dc-product-name text-capitalize strong-600 mb-1">
                                            <a href="#">
                                                {{ $product->name }}
                                            </a>
                                        </span>

                                        <span class="dc-quantity">x1</span>
                                        <span class="dc-price">{{ currency_symbol()}}{{ home_price($product->unit_price) }}</span>
                                    </div>
                                    <div class="dc-actions">
                                        <button onclick="removeFromCart({{ $product->id }})">
                                            <i class="ion-close"></i>
                                        </button>
                                    </div>
                                </div>
                            </div>
                        @endforeach
                    </div>
                    <div class="dc-item py-3">
                        <span class="subtotal-text">Subtotal</span>
                        <span class="subtotal-amount">$450.00</span>
                    </div>
                    <div class="py-2 text-center dc-btn">
                        <ul class="inline-links inline-links--style-3">
                            <li class="pr-3">
                                <a href="#" class="link link--style-1 text-capitalize btn btn-outline btn-base-1 px-3 py-1">
                                    <i class="ion-bag"></i> View cart
                                </a>
                            </li>
                            <li>
                                <a href="#" class="link link--style-1 text-capitalize btn btn-base-1 px-3 py-1 light-text">
                                    <i class="ion-forward"></i> Checkout
                                </a>
                            </li>
                        </ul>
                    </div>
                @else
                    <div class="dc-header">
                        <h3 class="heading heading-6 strong-700">Your Cart is empty</h3>
                    </div>
                @endif
            @endif
        </div>
    </li>
</ul>
