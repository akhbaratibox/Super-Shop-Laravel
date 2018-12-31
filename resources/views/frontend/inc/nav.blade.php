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
                        <!-- <a href="{{ route('dashboard') }}" class="top-bar-item">{{ Auth::user()->name }}</a> -->
                        <a href="{{ route('dashboard') }}" class="top-bar-item">My Profile</a>
                    </li>
                    <li>
                        <a href="{{ route('logout') }}" class="top-bar-item">Logout</a>
                    </li>
                    @else
                    <li>
                        <a href="{{ route('user.login') }}" class="top-bar-item">Login</a>
                    </li>
                    <li>
                        <a href="{{ route('user.login') }}" class="top-bar-item">Registration</a>
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

            <div class="d-inlin-block">
                <div class="dropdown-toggle navbar-light category-menu-icon" id="category-menu-icon">
                    <span class="navbar-toggler-icon"></span>
                </div>
            </div>

            <div class="search-box flex-grow-1">
                <form action="{{ route('search') }}" method="GET">
                    <div class="d-flex position-relative">
                        <div class="w-100">
                            <input type="text" aria-label="Search" id="search" name="q" class="w-100" placeholder="I'm shopping for..." autocomplete="off">
                        </div>
                        <div class="form-group category-select">
                            <select class="form-control selectpicker" name="category">
                                <option value="">All Categories</option>
                                @foreach (\App\Category::all() as $key => $category)
                                <option value="{{ $category->id }}">{{ $category->name }}</option>
                                @endforeach
                            </select>
                        </div>
                        <button class="" type="submit">
                            <i class="la la-search la-flip-horizontal"></i>
                        </button>
                        <div class="typed-search-box d-none">
                            <div class="search-preloader">
                                <div class="loader"><div></div><div></div><div></div></div>
                            </div>
                            <div class="search-nothing d-none">

                            </div>
                            <div id="search-content">

                            </div>
                        </div>
                    </div>
                </form>

            </div>

            <div class="logo-bar-icons d-inline-block">
                <div class="d-inline-block">
                    <div class="nav-compare-box" id="compare">
                        <a href="{{ route('compare') }}" class="nav-box-link">
                            <i class="la la-refresh d-inline-block nav-box-icon"></i>
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
                        <a href="{{ route('wishlists.index') }}" class="nav-box-link">
                            <i class="la la-heart-o d-inline-block nav-box-icon"></i>
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
                            <i class="la la-shopping-cart d-inline-block nav-box-icon"></i>
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
                                                @php
                                                    $total = 0;
                                                @endphp
                                                @foreach($cart as $key => $cartItem)
                                                    @php
                                                        $product = \App\Product::find($cartItem['id']);
                                                        $total = $total + $cartItem['price']*$cartItem['quantity'];
                                                    @endphp
                                                    <div class="dc-item">
                                                        <div class="d-flex align-items-center">
                                                            <div class="dc-image">
                                                                <a href="{{ route('product', $product->slug) }}">
                                                                    <img src="{{ asset(json_decode($product->photos)[0]) }}" class="img-fluid" alt="">
                                                                </a>
                                                            </div>
                                                            <div class="dc-content">
                                                                <span class="d-block dc-product-name text-capitalize strong-600 mb-1">
                                                                    <a href="{{ route('product', $product->slug) }}">
                                                                        {{ $product->name }}
                                                                    </a>
                                                                </span>

                                                                <span class="dc-quantity">x{{ $cartItem['quantity'] }}</span>
                                                                <span class="dc-price">{{ single_price($cartItem['price']*$cartItem['quantity']) }}</span>
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
                                                <span class="subtotal-amount">{{ single_price($total) }}</span>
                                            </div>
                                            <div class="py-2 text-center dc-btn">
                                                <ul class="inline-links inline-links--style-3">
                                                    <li class="pr-3">
                                                        <a href="{{ route('cart') }}" class="link link--style-1 text-capitalize btn btn-outline btn-base-1 px-3 py-1">
                                                            <i class="ion-bag"></i> View cart
                                                        </a>
                                                    </li>
                                                    <li>
                                                        <a href="{{ route('checkout.shipping_info') }}" class="link link--style-1 text-capitalize btn btn-base-1 px-3 py-1 light-text">
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
    <div class="hover-category-menu" id="hover-category-menu">
        <div class="container">
            <div class="row no-gutters position-relative">
                <div class="col-lg-3 position-static">
                    <div class="category-sidebar" id="category-sidebar">
                        <div style="height:4px;"></div>
                        <div class="all-category">
                            <span>CATEGORIES</span>
                            <a href="">See All ></a>
                        </div>
                        <ul class="categories">
                            <li>
                                <a href="#">
                                    <i class="icon-electronics-001 cat-icon"></i>
                                    <span class="cat-name">TV & Video</span>
                                </a>
                                <div class="sub-cat-menu c-scrollbar">
                                    <div class="sub-cat-main row no-gutters">
                                        <div class="col-9">
                                            <div class="sub-cat-content">
                                                <div class="sub-cat-list">
                                                    <div class="card-columns">
                                                        <div class="card">
                                                            <ul class="sub-cat-items">
                                                                <li class="sub-cat-name"><a href="">Hot Categories</a></li>
                                                                <li><a href="">Dresses</a></li>
                                                                <li><a href="">Jackets</a></li>
                                                                <li><a href="">Sweaters</a></li>
                                                                <li><a href="">Jeans</a></li>
                                                                <li><a href="">Suits</a></li>
                                                                <li><a href="">Blouses & Shirts</a></li>
                                                            </ul>
                                                        </div>
                                                        <div class="card">
                                                            <ul class="sub-cat-items">
                                                                <li class="sub-cat-name"><a href="">Hot Categories</a></li>
                                                                <li><a href="">Dresses</a></li>
                                                                <li><a href="">Jackets</a></li>
                                                                <li><a href="">Sweaters</a></li>
                                                                <li><a href="">Jeans</a></li>
                                                                <li><a href="">Jeans</a></li>
                                                                <li><a href="">Jeans</a></li>
                                                                <li><a href="">Jeans</a></li>
                                                                <li><a href="">Suits</a></li>
                                                                <li><a href="">Blouses & Shirts</a></li>
                                                            </ul>
                                                        </div>
                                                        <div class="card">
                                                            <ul class="sub-cat-items">
                                                                <li class="sub-cat-name"><a href="">Hot Categories</a></li>
                                                                <li><a href="">Dresses</a></li>
                                                                <li><a href="">Jackets</a></li>
                                                                <li><a href="">Sweaters</a></li>
                                                                <li><a href="">Sweaters</a></li>
                                                                <li><a href="">Sweaters</a></li>
                                                                <li><a href="">Sweaters</a></li>
                                                                <li><a href="">Jeans</a></li>
                                                                <li><a href="">Suits</a></li>
                                                                <li><a href="">Blouses & Shirts</a></li>
                                                            </ul>
                                                        </div>
                                                        <div class="card">
                                                            <ul class="sub-cat-items">
                                                                <li class="sub-cat-name"><a href="">Hot Categories</a></li>
                                                                <li><a href="">Dresses</a></li>
                                                                <li><a href="">Jackets</a></li>
                                                                <li><a href="">Sweaters</a></li>
                                                                <li><a href="">Jeans</a></li>
                                                                <li><a href="">Suits</a></li>
                                                                <li><a href="">Blouses & Shirts</a></li>
                                                            </ul>
                                                        </div>
                                                        <div class="card">
                                                            <ul class="sub-cat-items">
                                                                <li class="sub-cat-name"><a href="">Hot Categories</a></li>
                                                                <li><a href="">Dresses</a></li>
                                                                <li><a href="">Jackets</a></li>
                                                                <li><a href="">Sweaters</a></li>
                                                                <li><a href="">Jeans</a></li>
                                                                <li><a href="">Suits</a></li>
                                                                <li><a href="">Blouses & Shirts</a></li>
                                                            </ul>
                                                        </div>
                                                        <div class="card">
                                                            <ul class="sub-cat-items">
                                                                <li class="sub-cat-name"><a href="">Hot Categories</a></li>
                                                                <li><a href="">Dresses</a></li>
                                                                <li><a href="">Jackets</a></li>
                                                                <li><a href="">Sweaters</a></li>
                                                                <li><a href="">Sweaters</a></li>
                                                                <li><a href="">Sweaters</a></li>
                                                                <li><a href="">Jeans</a></li>
                                                                <li><a href="">Suits</a></li>
                                                                <li><a href="">Blouses & Shirts</a></li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="sub-cat-featured">
                                                    <ul class="sub-cat-featured-list inline-links d-flex">
                                                        <li class="col">
                                                            <a href="" >
                                                                <span class="featured-name">New arrival plus size</span>
                                                                <span class="featured-img">
                                                                    <img src="assets/images/girls/1.png" class="img-fluid">
                                                                </span>
                                                            </a>
                                                        </li>
                                                        <li class="col">
                                                            <a href="" >
                                                                <span class="featured-name">Sweater Collection</span>
                                                                <span class="featured-img">
                                                                    <img src="assets/images/girls/2.png" class="img-fluid">
                                                                </span>
                                                            </a>
                                                        </li>
                                                        <li class="col">
                                                            <a href="" >
                                                                <span class="featured-name">High Quality Formal Dresses</span>
                                                                <span class="featured-img">
                                                                    <img src="assets/images/girls/3.png" class="img-fluid">
                                                                </span>
                                                            </a>
                                                        </li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="col-3">
                                            <div class="sub-cat-brand">
                                                <ul class="sub-brand-list">
                                                    <li class="sub-brand-item">
                                                        <a href="" ><img src="assets/images/brands/1.jpg" class="img-fluid"></a>
                                                    </li>
                                                    <li class="sub-brand-item">
                                                        <a href="" ><img src="assets/images/brands/2.jpg" class="img-fluid"></a>
                                                    </li>
                                                    <li class="sub-brand-item">
                                                        <a href="" ><img src="assets/images/brands/3.jpg" class="img-fluid"></a>
                                                    </li>
                                                    <li class="sub-brand-item">
                                                        <a href="" ><img src="assets/images/brands/4.jpg" class="img-fluid"></a>
                                                    </li>
                                                    <li class="sub-brand-item">
                                                        <a href="" ><img src="assets/images/brands/1.jpg" class="img-fluid"></a>
                                                    </li>
                                                    <li class="sub-brand-item">
                                                        <a href="" ><img src="assets/images/brands/2.jpg" class="img-fluid"></a>
                                                    </li>
                                                    <li class="sub-brand-item">
                                                        <a href="" ><img src="assets/images/brands/3.jpg" class="img-fluid"></a>
                                                    </li>
                                                    <li class="sub-brand-item">
                                                        <a href="" ><img src="assets/images/brands/4.jpg" class="img-fluid"></a>
                                                    </li>
                                                    <li class="sub-brand-item">
                                                        <a href="" ><img src="assets/images/brands/1.jpg" class="img-fluid"></a>
                                                    </li>
                                                    <li class="sub-brand-item">
                                                        <a href="" ><img src="assets/images/brands/2.jpg" class="img-fluid"></a>
                                                    </li>
                                                    <li class="sub-brand-item">
                                                        <a href="" ><img src="assets/images/brands/3.jpg" class="img-fluid"></a>
                                                    </li>
                                                    <li class="sub-brand-item">
                                                        <a href="" ><img src="assets/images/brands/4.jpg" class="img-fluid"></a>
                                                    </li>
                                                    <li class="sub-brand-item">
                                                        <a href="" ><img src="assets/images/brands/1.jpg" class="img-fluid"></a>
                                                    </li>
                                                    <li class="sub-brand-item">
                                                        <a href="" ><img src="assets/images/brands/2.jpg" class="img-fluid"></a>
                                                    </li>
                                                    <li class="sub-brand-item">
                                                        <a href="" ><img src="assets/images/brands/3.jpg" class="img-fluid"></a>
                                                    </li>
                                                    <li class="sub-brand-item">
                                                        <a href="" ><img src="assets/images/brands/4.jpg" class="img-fluid"></a>
                                                    </li>
                                                    <li class="sub-brand-item">
                                                        <a href="" ><img src="assets/images/brands/1.jpg" class="img-fluid"></a>
                                                    </li>
                                                    <li class="sub-brand-item">
                                                        <a href="" ><img src="assets/images/brands/2.jpg" class="img-fluid"></a>
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </li>
                            <li>
                                <a href="#" class="active">
                                    <i class="icon-electronics-005 cat-icon"></i>
                                    <span class="cat-name">Smartphones</span>
                                </a>
                            </li>
                            <li>
                                <a href="#">
                                    <i class="icon-electronics-097 cat-icon"></i>
                                    <span class="cat-name">Photo cameras</span>
                                </a>
                            </li>
                            <li>
                                <a href="#">
                                    <i class="icon-electronics-033 cat-icon"></i>
                                    <span class="cat-name">Laptops</span>
                                </a>
                            </li>
                            <li>
                                <a href="#">
                                    <i class="icon-electronics-021 cat-icon"></i>
                                    <span class="cat-name">Home electronics</span>
                                </a>
                                <div class="sub-cat-menu c-scrollbar">
                                    <div class="sub-cat-main row no-gutters">
                                        <div class="col-9">
                                            <div class="sub-cat-content">
                                                <div class="sub-cat-list">
                                                    <div class="card-columns">
                                                        <div class="card">
                                                            <ul class="sub-cat-items">
                                                                <li class="sub-cat-name"><a href="">Hot Categories</a></li>
                                                                <li><a href="">Dresses</a></li>
                                                                <li><a href="">Jackets</a></li>
                                                                <li><a href="">Sweaters</a></li>
                                                                <li><a href="">Jeans</a></li>
                                                                <li><a href="">Suits</a></li>
                                                                <li><a href="">Blouses & Shirts</a></li>
                                                            </ul>
                                                        </div>
                                                        <div class="card">
                                                            <ul class="sub-cat-items">
                                                                <li class="sub-cat-name"><a href="">Hot Categories</a></li>
                                                                <li><a href="">Dresses</a></li>
                                                                <li><a href="">Jackets</a></li>
                                                                <li><a href="">Sweaters</a></li>
                                                                <li><a href="">Jeans</a></li>
                                                                <li><a href="">Jeans</a></li>
                                                                <li><a href="">Jeans</a></li>
                                                                <li><a href="">Jeans</a></li>
                                                                <li><a href="">Suits</a></li>
                                                                <li><a href="">Blouses & Shirts</a></li>
                                                            </ul>
                                                        </div>
                                                        <div class="card">
                                                            <ul class="sub-cat-items">
                                                                <li class="sub-cat-name"><a href="">Hot Categories</a></li>
                                                                <li><a href="">Dresses</a></li>
                                                                <li><a href="">Jackets</a></li>
                                                                <li><a href="">Sweaters</a></li>
                                                                <li><a href="">Sweaters</a></li>
                                                                <li><a href="">Sweaters</a></li>
                                                                <li><a href="">Sweaters</a></li>
                                                                <li><a href="">Jeans</a></li>
                                                                <li><a href="">Suits</a></li>
                                                                <li><a href="">Blouses & Shirts</a></li>
                                                            </ul>
                                                        </div>
                                                        <div class="card">
                                                            <ul class="sub-cat-items">
                                                                <li class="sub-cat-name"><a href="">Hot Categories</a></li>
                                                                <li><a href="">Dresses</a></li>
                                                                <li><a href="">Jackets</a></li>
                                                                <li><a href="">Sweaters</a></li>
                                                                <li><a href="">Jeans</a></li>
                                                                <li><a href="">Suits</a></li>
                                                                <li><a href="">Blouses & Shirts</a></li>
                                                            </ul>
                                                        </div>
                                                        <div class="card">
                                                            <ul class="sub-cat-items">
                                                                <li class="sub-cat-name"><a href="">Hot Categories</a></li>
                                                                <li><a href="">Dresses</a></li>
                                                                <li><a href="">Jackets</a></li>
                                                                <li><a href="">Sweaters</a></li>
                                                                <li><a href="">Jeans</a></li>
                                                                <li><a href="">Suits</a></li>
                                                                <li><a href="">Blouses & Shirts</a></li>
                                                            </ul>
                                                        </div>
                                                        <div class="card">
                                                            <ul class="sub-cat-items">
                                                                <li class="sub-cat-name"><a href="">Hot Categories</a></li>
                                                                <li><a href="">Dresses</a></li>
                                                                <li><a href="">Jackets</a></li>
                                                                <li><a href="">Sweaters</a></li>
                                                                <li><a href="">Sweaters</a></li>
                                                                <li><a href="">Sweaters</a></li>
                                                                <li><a href="">Jeans</a></li>
                                                                <li><a href="">Suits</a></li>
                                                                <li><a href="">Blouses & Shirts</a></li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="sub-cat-featured">
                                                    <ul class="sub-cat-featured-list inline-links d-flex">
                                                        <li class="col">
                                                            <a href="" >
                                                                <span class="featured-name">New arrival plus size</span>
                                                                <span class="featured-img">
                                                                    <img src="assets/images/girls/1.png" class="img-fluid">
                                                                </span>
                                                            </a>
                                                        </li>
                                                        <li class="col">
                                                            <a href="" >
                                                                <span class="featured-name">Sweater Collection</span>
                                                                <span class="featured-img">
                                                                    <img src="assets/images/girls/2.png" class="img-fluid">
                                                                </span>
                                                            </a>
                                                        </li>
                                                        <li class="col">
                                                            <a href="" >
                                                                <span class="featured-name">High Quality Formal Dresses</span>
                                                                <span class="featured-img">
                                                                    <img src="assets/images/girls/3.png" class="img-fluid">
                                                                </span>
                                                            </a>
                                                        </li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="col-3">
                                            <div class="sub-cat-brand">
                                                <ul class="sub-brand-list">
                                                    <li class="sub-brand-item">
                                                        <a href="" ><img src="assets/images/brands/1.jpg" class="img-fluid"></a>
                                                    </li>
                                                    <li class="sub-brand-item">
                                                        <a href="" ><img src="assets/images/brands/2.jpg" class="img-fluid"></a>
                                                    </li>
                                                    <li class="sub-brand-item">
                                                        <a href="" ><img src="assets/images/brands/3.jpg" class="img-fluid"></a>
                                                    </li>
                                                    <li class="sub-brand-item">
                                                        <a href="" ><img src="assets/images/brands/4.jpg" class="img-fluid"></a>
                                                    </li>
                                                    <li class="sub-brand-item">
                                                        <a href="" ><img src="assets/images/brands/1.jpg" class="img-fluid"></a>
                                                    </li>
                                                    <li class="sub-brand-item">
                                                        <a href="" ><img src="assets/images/brands/2.jpg" class="img-fluid"></a>
                                                    </li>
                                                    <li class="sub-brand-item">
                                                        <a href="" ><img src="assets/images/brands/3.jpg" class="img-fluid"></a>
                                                    </li>
                                                    <li class="sub-brand-item">
                                                        <a href="" ><img src="assets/images/brands/4.jpg" class="img-fluid"></a>
                                                    </li>
                                                    <li class="sub-brand-item">
                                                        <a href="" ><img src="assets/images/brands/1.jpg" class="img-fluid"></a>
                                                    </li>
                                                    <li class="sub-brand-item">
                                                        <a href="" ><img src="assets/images/brands/2.jpg" class="img-fluid"></a>
                                                    </li>
                                                    <li class="sub-brand-item">
                                                        <a href="" ><img src="assets/images/brands/3.jpg" class="img-fluid"></a>
                                                    </li>
                                                    <li class="sub-brand-item">
                                                        <a href="" ><img src="assets/images/brands/4.jpg" class="img-fluid"></a>
                                                    </li>
                                                    <li class="sub-brand-item">
                                                        <a href="" ><img src="assets/images/brands/1.jpg" class="img-fluid"></a>
                                                    </li>
                                                    <li class="sub-brand-item">
                                                        <a href="" ><img src="assets/images/brands/2.jpg" class="img-fluid"></a>
                                                    </li>
                                                    <li class="sub-brand-item">
                                                        <a href="" ><img src="assets/images/brands/3.jpg" class="img-fluid"></a>
                                                    </li>
                                                    <li class="sub-brand-item">
                                                        <a href="" ><img src="assets/images/brands/4.jpg" class="img-fluid"></a>
                                                    </li>
                                                    <li class="sub-brand-item">
                                                        <a href="" ><img src="assets/images/brands/1.jpg" class="img-fluid"></a>
                                                    </li>
                                                    <li class="sub-brand-item">
                                                        <a href="" ><img src="assets/images/brands/2.jpg" class="img-fluid"></a>
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </li>
                            <li>
                                <a href="#">
                                    <i class="icon-electronics-024 cat-icon"></i>
                                    <span class="cat-name">Headphones & Audio</span>
                                </a>
                            </li>
                            <li>
                                <a href="#">
                                    <i class="icon-electronics-145 cat-icon"></i>
                                    <span class="cat-name">Gaming & Consoles</span>
                                </a>
                            </li>
                            <li>
                                <a href="#">
                                    <i class="icon-electronics-014 cat-icon"></i>
                                    <span class="cat-name">PC Accessories</span>
                                </a>
                            </li>
                            <li>
                                <a href="#">
                                    <i class="icon-electronics-001 cat-icon"></i>
                                    <span class="cat-name">TV & Video</span>
                                </a>
                            </li>
                            <li>
                                <a href="#">
                                    <i class="icon-electronics-005 cat-icon"></i>
                                    <span class="cat-name">Smartphones</span>
                                </a>
                            </li>
                            <li>
                                <a href="#">
                                    <i class="icon-electronics-097 cat-icon"></i>
                                    <span class="cat-name">Photo cameras</span>
                                </a>
                            </li>
                        </ul>
                    </div>
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
                        @foreach (\App\Search::orderBy('count', 'desc')->get()->take(5) as $key => $search)
                            <li class="nav-item">
                                <a class="nav-link" href="{{ route('suggestion.search', $search->query) }}">{{ $search->query }}</a>
                            </li>
                        @endforeach
                    </ul>
                </div>
            </div>
        </nav>
    </div>
</div>
