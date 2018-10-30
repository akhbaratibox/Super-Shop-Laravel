<div class="header">
    <!-- Top Bar -->
    <div class="top-navbar">
       <div class="container">
        <div class="row">
            <div class="col-6">
                <ul class="inline-links">
                    <li class="dropdown">
                        <a href="" class="dropdown-toggle top-bar-item" data-toggle="dropdown">
                            <img src="{{ asset('frontend/images/icons/flags/ro.png') }}" class="flag"><span class="language">English</span>
                        </a>
                        <ul class="dropdown-menu">
                            <li class="dropdown-item">
                                <a href=""><img src="{{ asset('frontend/images/icons/flags/gn.png') }}" class="flag"><span class="language">German</span></a>
                            </li>
                            <li class="dropdown-item active">
                                <a><img src="{{ asset('frontend/images/icons/flags/gn.png') }}" class="flag"><span class="language">English</span></a>
                            </li>
                            <li class="dropdown-item">
                                <a href=""><img src="{{ asset('frontend/images/icons/flags/gn.png') }}" class="flag"><span class="language">Greek</span></a>
                            </li>
                            <li class="dropdown-item">
                                <a href=""><img src="{{ asset('frontend/images/icons/flags/gn.png') }}" class="flag"><span class="language">Spanish</span></a>
                            </li>
                        </ul>
                    </li>
                    <li class="dropdown">
                        <a href="" class="dropdown-toggle top-bar-item" data-toggle="dropdown">
                            U.S. Dollar ($)
                        </a>
                        <ul class="dropdown-menu">
                            <li class="dropdown-item">
                                <a href="">Australian Dollar ($)</a>
                            </li>
                            <li class="dropdown-item active">
                                <a>U.S. Dollar ($)</a>
                            </li>
                            <li class="dropdown-item">
                                <a href="">Australian Dollar ($)</a>
                            </li>
                            <li class="dropdown-item">
                                <a href="">Australian Dollar ($)</a>
                            </li>
                        </ul>
                    </li>
                </ul>
            </div>

            <div class="col-6 text-right">
                <ul class="inline-links">
                    @auth
                    <li>
                        <a href="#" class="top-bar-item">{{ Auth::user()->name }}</a>
                    </li>
                    <li>
                        <a href="{{ route('logout') }}" class="top-bar-item">Logout</a>
                    </li>
                    @else
                    <li>
                        <a href="{{ route('user.login') }}" class="top-bar-item">Login</a>
                    </li>
                    <li>
                        <a href="" class="top-bar-item">Registration</a>
                    </li>
                    @endauth
                </ul>
            </div>
        </div>
    </div>
</div>
<!-- END Top Bar -->


<div class="logo-bar-area navbar-expand-lg navbar">
    <div class="container">
        <div class="d-flex w-100">

            <!-- Brand/Logo -->
            <a class="navbar-brand" href="{{ route('home') }}">
                <img src="{{ asset('frontend/images/logo/logo.svg') }}" class="" alt="active shop" height="40">
            </a>

            <div class="search-box flex-grow-1">
                <div class="d-flex">
                    <div class="w-100">
                        <input type="text" aria-label="Search" value="" class="w-100" placeholder="I'm shopping for...">
                    </div>
                    <div class="form-group category-select">
                        <select class="form-control selectpicker">
                            <option value="">All Categories</option>
                            @foreach ($categories as $key => $category)
                            <option value="{{ $category->id }}">{{ $category->name }}</option>
                            @endforeach
                        </select>
                    </div>
                    <button class="" aria-label="Submit search">
                        <i class="ion-ios-search"></i>
                    </button>
                </div>
            </div>

            <div class="logo-bar-icons d-inline-block">
                <div class="d-inline-block">
                    <div class="nav-compare-box" id="compare">
                        <a href="" class="nav-box-link">
                            <i class="ion-ios-loop d-inline-block nav-box-icon"></i>
                            <span class="nav-box-text d-none d-lg-inline-block">Compare</span>
                            @if(Session::has('compare'))
                                <span class="nav-box-number">{{ count(Session::get('compare'))}}</span>
                            @else
                                <span class="nav-box-number">0</span>
                            @endif
                        </a>
                    </div>
                </div>
                <div class="d-inline-block">
                    <div class="nav-wishlist-box" id="wishlist">
                        <a href="{{ route('wishlist') }}" class="nav-box-link">
                            <i class="ion-ios-heart-outline d-inline-block nav-box-icon"></i>
                            <span class="nav-box-text d-none d-lg-inline-block">Wishlist</span>
                            @if(Auth::check())
                                <span class="nav-box-number">{{ count(Auth::user()->wishlists)}}</span>
                            @else
                                <span class="nav-box-number">0</span>
                            @endif
                        </a>
                    </div>
                </div>
                <div class="d-inline-block" data-hover="dropdown">
                    <div class="nav-cart-box dropdown" id="cart_items">
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
                                                @foreach($cart as $key => $cartItem)
                                                    @php
                                                        $product = \App\Product::find(json_decode($cartItem)->id);
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
                                                                <span class="dc-price">{{ currency_symbol()}}{{ $product->unit_price }}</span>
                                                            </div>
                                                            <div class="dc-actions">
                                                                <button onclick="removeFromCart({{ $key }})">
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
                                    @else
                                        <div class="dc-header">
                                            <h3 class="heading heading-6 strong-700">Your Cart is empty</h3>
                                        </div>
                                    @endif
                                </div>
                            </li>
                        </ul>
                    </div>
                </div>

                <div class="d-inline-block">
                    <!-- Navbar toggler  -->
                    <button class="navbar-toggler hamburger hamburger-js hamburger--spring" type="button" data-toggle="collapse" data-target="#navbar_main" aria-controls="navbarsExampleDefault" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="hamburger-box">
                            <span class="hamburger-inner"></span>
                        </span>
                    </button>
                </div>
            </div>
        </div>

    </div>
</div>
<!-- Navbar -->

<div class="main-nav-area">
    <nav class="navbar navbar-expand-lg navbar--bold navbar--style-2 navbar-light bg-default">
        <div class="container">
            <div class="collapse navbar-collapse align-items-center justify-content-center" id="navbar_main">

                <!-- Navbar links -->
                <ul class="navbar-nav">
                            <!-- <li class="nav-item active">
                                <a class="nav-link" href="">Overview</a>
                            </li> -->
                            <li class="nav-item">
                                <a class="nav-link" href="">Overview</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="">Demos</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="">Demos</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="">Demos</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="">Demos</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="">Demos</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="">Demos</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="">Demos</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="">Demos</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="">Demos</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="">Demos</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="">Demos</a>
                            </li>
                        </ul>

                    </div>
                </div>

            </nav>
        </div>
    </div>