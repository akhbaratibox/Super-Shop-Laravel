<div class="header">
    <!-- Top Bar -->
    <div class="top-navbar">
        <div class="container">
            <div class="row">
                <div class="col-lg-7 col">
                    <ul class="inline-links d-lg-inline-block d-flex justify-content-between">
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

                <div class="col-5 text-right d-none d-lg-block">
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

    <!-- mobile menu -->
    <div class="mobile-side-menu d-lg-none">
        <div class="side-menu-overlay opacity-0" onclick="sideMenuClose()"></div>
        <div class="side-menu-wrap opacity-0">
            <div class="side-menu closed">
                <div class="side-menu-header ">
                    <div class="side-menu-close" onclick="sideMenuClose()">
                        <i class="la la-close"></i>
                    </div>

                    <div class="widget-profile-box px-3 py-4 d-flex align-items-center">
                        <div class="image " style="background-image:url('{{ asset('frontend/images/icons/user-placeholder.jpg') }}')"></div>
                        <!-- <div class="name">John Doe</div> -->
                    </div>
                    <div class="side-login px-3 pb-3">
                        <a href="">Sign In</a>
                        <a href="">Registration</a>
                        <!-- <a href="">Sign Out</a> -->
                    </div>

                </div>
                <div class="side-menu-list px-3">
                    <ul class="side-user-menu">
                        <li>
                            <a href="">
                                <i class="la la-home"></i>
                                <span>Home</span>
                            </a>
                        </li>

                        <li>
                            <a href="">
                                <i class="la la-dashboard"></i>
                                <span>Dashboard</span>
                            </a>
                        </li>

                        <li>
                            <a href="">
                                <i class="la la-file-text"></i>
                                <span>Purchase History</span>
                            </a>
                        </li>

                        <li>
                            <a href="">
                                <i class="la la-refresh"></i>
                                <span>Compare</span>
                                <span class="badge">3</span>
                            </a>
                        </li>
                        <li>
                            <a href="">
                                <i class="la la-shopping-cart"></i>
                                <span>Cart</span>
                                <span class="badge">25</span>
                            </a>
                        </li>
                        <li>
                            <a href="">
                                <i class="la la-heart-o"></i>
                                <span>Wishlist</span>
                            </a>
                        </li>

                        <li>
                            <a href="">
                                <i class="la la-user"></i>
                                <span>Manage Profile</span>
                            </a>
                        </li>

                    </ul>
                    <div class="sidebar-widget-title py-0">
                        <span>Shop Options</span>
                    </div>
                    <ul class="side-seller-menu">
                        <li>
                            <a href="">
                                <i class="la la-diamond"></i>
                                <span>Products</span>
                            </a>
                        </li>

                        <li>
                            <a href="">
                                <i class="la la-file-text"></i>
                                <span>Orders</span>
                            </a>
                        </li>

                        <li>
                            <a href="">
                                <i class="la la-cog"></i>
                                <span>Shop Setting</span>
                            </a>
                        </li>

                        <li>
                            <a href="">
                                <i class="la la-cc-mastercard"></i>
                                <span>Payment History</span>
                            </a>
                        </li>
                    </ul>
                    <div class="sidebar-widget-title py-0">
                        <span>Earinngs</span>
                    </div>
                    <div class="widget-balance py-3">
                        <div class="text-center">
                            <div class="heading-4 strong-700 mb-4">
                                <small class="d-block text-sm alpha-5 mb-2">your earnings</small>
                                <span class="p-2 bg-base-1 rounded">$526.51</span>
                            </div>
                            <table class="text-left mb-0 table w-75 m-auto">
                                <tbody><tr>
                                    <td class="p-1 text-sm">
                                        Total earnings:
                                    </td>
                                    <td class="p-1">
                                        $1500.26
                                    </td>
                                </tr>
                                <tr>
                                    <td class="p-1 text-sm">
                                        Last Month earnings:
                                    </td>
                                    <td class="p-1">
                                        $756.75
                                    </td>
                                </tr>
                            </tbody></table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- end mobile menu -->

    <div class="position-relative logo-bar-area">
        <div class="">
            <div class="container">
                <div class="row no-gutters align-items-center">
                    <div class="col-lg-3 col-9">
                        <div class="d-flex">
                            <div class="d-block d-lg-none mobile-menu-icon-box">
                                <!-- Navbar toggler  -->
                                <a href="" onclick="sideMenuOpen(this)">
                                    <div class="hamburger-icon">
                                        <span></span>
                                        <span></span>
                                        <span></span>
                                        <span></span>
                                    </div>
                                </a>
                            </div>

                            <!-- Brand/Logo -->
                            <a class="navbar-brand w-100" href="{{ route('home') }}">
                                <img src="{{ asset('frontend/images/logo/logo.png') }}" class="" alt="active shop">
                            </a>

                            @if(Route::currentRouteName() != 'home' && Route::currentRouteName() != 'categories.all')
                                <div class="d-none d-xl-block category-menu-icon-box">
                                    <div class="dropdown-toggle navbar-light category-menu-icon" id="category-menu-icon">
                                        <span class="navbar-toggler-icon"></span>
                                    </div>
                                </div>
                            @endif
                        </div>
                    </div>
                    <div class="col-lg-9 col-3 position-static">
                        <div class="d-flex w-100">
                            <div class="search-box flex-grow-1 px-4">
                                <form action="{{ route('search') }}" method="GET">
                                    <div class="d-flex position-relative">
                                        <div class="d-lg-none search-box-back">
                                            <button class="" type="button"><i class="la la-long-arrow-left"></i></button>
                                        </div>
                                        <div class="w-100">
                                            <input type="text" aria-label="Search" id="search" name="q" class="w-100" placeholder="I'm shopping for..." autocomplete="off">
                                        </div>
                                        <div class="form-group category-select d-none d-xl-block">
                                            <select class="form-control selectpicker" name="category">
                                                <option value="">All Categories</option>
                                                @foreach (\App\Category::all() as $key => $category)
                                                <option value="{{ $category->id }}">{{ $category->name }}</option>
                                                @endforeach
                                            </select>
                                        </div>
                                        <button class="d-none d-lg-block" type="submit">
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

                            <div class="logo-bar-icons d-inline-block ml-auto">
                                <div class="d-inline-block d-lg-none">
                                    <div class="nav-search-box">
                                        <a href="#" class="nav-box-link">
                                            <i class="la la-search la-flip-horizontal d-inline-block nav-box-icon"></i>
                                        </a>
                                    </div>
                                </div>
                                <div class="d-none d-lg-inline-block">
                                    <div class="nav-compare-box" id="compare">
                                        <a href="{{ route('compare') }}" class="nav-box-link">
                                            <i class="la la-refresh d-inline-block nav-box-icon"></i>
                                            <span class="nav-box-text d-none d-xl-inline-block">Compare</span>
                                            @if(Session::has('compare'))
                                                <span class="nav-box-number">{{ count(Session::get('compare'))}}</span>
                                            @else
                                                <span class="nav-box-number">0</span>
                                            @endif
                                        </a>
                                    </div>
                                </div>
                                <div class="d-none d-lg-inline-block">
                                    <div class="nav-wishlist-box" id="wishlist">
                                        <a href="{{ route('wishlists.index') }}" class="nav-box-link">
                                            <i class="la la-heart-o d-inline-block nav-box-icon"></i>
                                            <span class="nav-box-text d-none d-xl-inline-block">Wishlist</span>
                                            @if(Auth::check())
                                                <span class="nav-box-number">{{ count(Auth::user()->wishlists)}}</span>
                                            @else
                                                <span class="nav-box-number">0</span>
                                            @endif
                                        </a>
                                    </div>
                                </div>
                                <div class="d-none d-lg-inline-block" data-hover="dropdown">
                                    <div class="nav-cart-box dropdown" id="cart_items">
                                        <a href="" class="nav-box-link" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                            <i class="la la-shopping-cart d-inline-block nav-box-icon"></i>
                                            <span class="nav-box-text d-none d-xl-inline-block">Cart</span>
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
                                                                                    <i class="la la-close"></i>
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
                                                                            <i class="la la-shopping-cart"></i> View cart
                                                                        </a>
                                                                    </li>
                                                                    <li>
                                                                        <a href="{{ route('checkout.shipping_info') }}" class="link link--style-1 text-capitalize btn btn-base-1 px-3 py-1 light-text">
                                                                            <i class="la la-mail-forward"></i> Checkout
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
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="hover-category-menu" id="hover-category-menu">
            <div class="container">
                <div class="row no-gutters position-relative">
                    <div class="col-lg-3 position-static">
                        <div class="category-sidebar" id="category-sidebar">
                            <div class="all-category">
                                <span>CATEGORIES</span>
                                <a href="{{ route('categories.all') }}">See All ></a>
                            </div>
                            <ul class="categories">
                                @foreach (\App\Category::all()->take(11) as $key => $category)
                                    @php
                                        $brands = array();
                                    @endphp
                                    <li>
                                        <a href="{{ route('products.category', $category->id) }}">
                                            <img class="cat-image" src="{{ asset($category->icon) }}" width="30">
                                            <span class="cat-name">{{ $category->name }}</span>
                                        </a>
                                        @if(count($category->subcategories)>0)
                                            <div class="sub-cat-menu c-scrollbar">
                                                <div class="sub-cat-main row no-gutters">
                                                    <div class="col-9">
                                                        <div class="sub-cat-content">
                                                            <div class="sub-cat-list">
                                                                <div class="card-columns">
                                                                    @foreach ($category->subcategories as $subcategory)
                                                                        <div class="card">
                                                                            <ul class="sub-cat-items">
                                                                                <li class="sub-cat-name"><a href="{{ route('products.subcategory', $subcategory->id) }}">{{ $subcategory->name }}</a></li>
                                                                                @foreach ($subcategory->subsubcategories as $subsubcategory)
                                                                                    @php
                                                                                        foreach (json_decode($subsubcategory->brands) as $brand) {
                                                                                            if(!in_array($brand, $brands)){
                                                                                                array_push($brands, $brand);
                                                                                            }
                                                                                        }
                                                                                    @endphp
                                                                                    <li><a href="{{ route('products.subsubcategory', $subsubcategory->id) }}">{{ $subsubcategory->name }}</a></li>
                                                                                @endforeach
                                                                            </ul>
                                                                        </div>
                                                                    @endforeach
                                                                </div>
                                                            </div>
                                                            <div class="sub-cat-featured">
                                                                {{-- <ul class="sub-cat-featured-list inline-links d-flex">
                                                                    <li class="col">
                                                                        <a href="" >
                                                                            <span class="featured-name">New arrival plus size</span>
                                                                            <span class="featured-img">
                                                                                <img src="{{ asset('frontend/images/girls/1.png') }}" class="img-fluid">
                                                                            </span>
                                                                        </a>
                                                                    </li>
                                                                    <li class="col">
                                                                        <a href="" >
                                                                            <span class="featured-name">Sweater Collection</span>
                                                                            <span class="featured-img">
                                                                                <img src="{{ asset('frontend/images/girls/2.png') }}" class="img-fluid">
                                                                            </span>
                                                                        </a>
                                                                    </li>
                                                                    <li class="col">
                                                                        <a href="" >
                                                                            <span class="featured-name">High Quality Formal Dresses</span>
                                                                            <span class="featured-img">
                                                                                <img src="{{ asset('frontend/images/girls/3.png') }}" class="img-fluid">
                                                                            </span>
                                                                        </a>
                                                                    </li>
                                                                </ul> --}}
                                                            </div>
                                                        </div>
                                                    </div>

                                                    <div class="col-3">
                                                        <div class="sub-cat-brand">
                                                            <ul class="sub-brand-list">
                                                                @foreach ($brands as $brand_id)
                                                                    <li class="sub-brand-item">
                                                                        <a href="{{ route('products.brand', $brand_id) }}" ><img src="{{ asset(\App\Brand::find($brand_id)->logo) }}" class="img-fluid"></a>
                                                                    </li>
                                                                @endforeach
                                                            </ul>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        @endif
                                    </li>
                                @endforeach
                            </ul>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>
    <!-- Navbar -->

    <div class="main-nav-area d-none d-lg-block">
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
