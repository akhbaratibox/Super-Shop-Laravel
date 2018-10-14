<!DOCTYPE html>
<html>
<head>

<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">

<meta name="robots" content="index, follow">
<meta name="description" content="Boomerang is a responsive website template based on the well known Bootstrap framework. It's very well structured with lots of features and demos ready to be used.">
<meta name="keywords" content="bootstrap, responsive, template, website, html, theme, ux, ui, web, design, developer, support, business, corporate, real estate, education, medical, school, education, demo, css, framework">
<meta name="author" content="Webpixels">

<title>Active Shop</title>

<!-- Bootstrap -->
<link rel="stylesheet" href="{{ asset('frontend/vendor/bootstrap/css/bootstrap.min.css') }}" type="text/css">

<!-- Fonts -->
<link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i,800,800i" rel="stylesheet">

<!-- Plugins -->
<link rel="stylesheet" href="{{ asset('frontend/vendor/swiper/css/swiper.min.css') }}">
<link rel="stylesheet" href="{{ asset('frontend/vendor/hamburgers/hamburgers.min.css') }}" type="text/css">
<link rel="stylesheet" href="{{ asset('frontend/vendor/animate/animate.min.css') }}" type="text/css">
<link rel="stylesheet" href="{{ asset('frontend/vendor/fancybox/css/jquery.fancybox.min.css') }}">

<!-- Icons -->
<link rel="stylesheet" href="{{ asset('frontend/fonts/font-awesome/css/font-awesome.min.css') }}" type="text/css">
<link rel="stylesheet" href="{{ asset('frontend/fonts/ionicons/css/ionicons.min.css') }}" type="text/css">
<link rel="stylesheet" href="{{ asset('frontend/fonts/line-icons/line-icons.css') }}" type="text/css">
<link rel="stylesheet" href="{{ asset('frontend/fonts/line-icons-pro/line-icons-pro.css') }}" type="text/css">

<!-- Linea Icons -->
<link rel="stylesheet" href="{{ asset('frontend/fonts/linea/arrows/linea-icons.css') }}" type="text/css">
<link rel="stylesheet" href="{{ asset('frontend/fonts/linea/basic/linea-icons.css') }}" type="text/css">
<link rel="stylesheet" href="{{ asset('frontend/fonts/linea/ecommerce/linea-icons.css') }}" type="text/css">
<link rel="stylesheet" href="{{ asset('frontend/fonts/linea/software/linea-icons.css') }}" type="text/css">

<!-- Global style (main) -->
<link id="stylesheet" type="text/css" href="{{ asset('frontend/css/boomerang.min.css') }}" rel="stylesheet" media="screen">

<!-- Custom style - Remove if not necessary -->
<link type="text/css" href="{{ asset('frontend/css/custom-style.css') }}" rel="stylesheet">

<!-- Favicon -->
<link href="{{ asset('frontend/images/favicon.png') }}" rel="icon" type="image/png">
<!-- jQuery -->
<script src="{{ asset('frontend/vendor/jquery/jquery.min.js') }}"></script>

</head>
<body>


<!-- MAIN WRAPPER -->
<div class="body-wrap shop-default shop-cards shop-tech">

    <!-- Header -->
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
                                    <a href="#">{{ Auth::user()->name }}</a>
                                </li>
                                <li>
                                    <a href="{{ route('logout') }}">Logout</a>
                                </li>
                            @else
                                <li>
                                    <a href="{{ route('login') }}" class="top-bar-item">Login</a>
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
                    <a class="navbar-brand" href="index.html">
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
                            <div class="nav-compare-box">
                                <a href="" class="nav-box-link">
                                    <i class="ion-ios-loop d-inline-block nav-box-icon"></i>
                                    <span class="nav-box-text d-none d-lg-inline-block">Compare</span>
                                    <span class="nav-box-number">3</span>
                                </a>
                            </div>
                        </div>
                        <div class="d-inline-block">
                            <div class="nav-wishlist-box">
                                <a href="" class="nav-box-link">
                                    <i class="ion-ios-heart-outline d-inline-block nav-box-icon"></i>
                                    <span class="nav-box-text d-none d-lg-inline-block">Wishlist</span>
                                    <span class="nav-box-number">0</span>
                                </a>
                            </div>
                        </div>
                        <div class="d-inline-block" data-hover="dropdown">
                            <div class="nav-cart-box dropdown">
                                <a href="" class="nav-box-link" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                    <i class="ion-ios-cart-outline d-inline-block nav-box-icon"></i>
                                    <span class="nav-box-text d-none d-lg-inline-block">Cart</span>
                                    <span class="nav-box-number">15</span>
                                </a>
                                <ul class="dropdown-menu dropdown-menu-right px-0">
                                    <li>
                                        <div class="dropdown-cart px-0">
                                            <div class="dc-header">
                                                <h3 class="heading heading-6 strong-700">Cart</h3>
                                            </div>
                                            <div class="dropdown-cart-items c-scrollbar">
                                                <div class="dc-item">
                                                    <div class="d-flex align-items-center">
                                                        <div class="dc-image">
                                                            <a href="#">
                                                                <img src="{{ asset('frontend/images/prv/shop/accessories/img-1a.png') }}" class="img-fluid" alt="">
                                                            </a>
                                                        </div>
                                                        <div class="dc-content">
                                                            <span class="d-block dc-product-name text-capitalize strong-600 mb-1">
                                                                <a href="#">
                                                                    Wood phone case
                                                                </a>
                                                            </span>

                                                            <span class="dc-quantity">x2</span>
                                                            <span class="dc-price">$50.00</span>
                                                        </div>
                                                        <div class="dc-actions">
                                                            <button>
                                                                <i class="ion-close"></i>
                                                            </button>
                                                        </div>
                                                    </div>
                                                </div>

                                                <div class="dc-item">
                                                    <div class="d-flex align-items-center">
                                                        <div class="dc-image">
                                                            <a href="#">
                                                                <img src="{{ asset('frontend/images/prv/shop/accessories/img-2a.png') }}" class="img-fluid" alt="">
                                                            </a>
                                                        </div>
                                                        <div class="dc-content">
                                                            <span class="d-block dc-product-name text-capitalize strong-600 mb-1">
                                                                <a href="#">
                                                                    Leather bag
                                                                </a>
                                                            </span>

                                                            <span class="dc-quantity">x1</span>
                                                            <span class="dc-price">$250.00</span>
                                                        </div>
                                                        <div class="dc-actions">
                                                            <button>
                                                                <i class="ion-close"></i>
                                                            </button>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="dc-item">
                                                    <div class="d-flex align-items-center">
                                                        <div class="dc-image">
                                                            <a href="#">
                                                                <img src="{{ asset('frontend/images/prv/shop/accessories/img-2a.png') }}" class="img-fluid" alt="">
                                                            </a>
                                                        </div>
                                                        <div class="dc-content">
                                                            <span class="d-block dc-product-name text-capitalize strong-600 mb-1">
                                                                <a href="#">
                                                                    Leather bag
                                                                </a>
                                                            </span>

                                                            <span class="dc-quantity">x1</span>
                                                            <span class="dc-price">$250.00</span>
                                                        </div>
                                                        <div class="dc-actions">
                                                            <button>
                                                                <i class="ion-close"></i>
                                                            </button>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="dc-item">
                                                    <div class="d-flex align-items-center">
                                                        <div class="dc-image">
                                                            <a href="#">
                                                                <img src="{{ asset('frontend/images/prv/shop/accessories/img-2a.png') }}" class="img-fluid" alt="">
                                                            </a>
                                                        </div>
                                                        <div class="dc-content">
                                                            <span class="d-block dc-product-name text-capitalize strong-600 mb-1">
                                                                <a href="#">
                                                                    Leather bag
                                                                </a>
                                                            </span>

                                                            <span class="dc-quantity">x1</span>
                                                            <span class="dc-price">$250.00</span>
                                                        </div>
                                                        <div class="dc-actions">
                                                            <button>
                                                                <i class="ion-close"></i>
                                                            </button>
                                                        </div>
                                                    </div>
                                                </div>
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

    <section class="home-banner-area">
        <div class="container">
            <div class="row no-gutters position-relative">
                <div class="col-lg-3 position-static">
                    <div class="category-sidebar">
                        <div class="all-category">
                            <span>CATEGORIES</span>
                            <a href="">See All ></a>
                        </div>
                        <ul class="categories">
                            @foreach ($categories as $key => $category)
                            <li>
                                <a href="#">
                                    <i class="icon-electronics-001 cat-icon"></i>
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
                                                    				<li class="sub-cat-name"><a href="">{{ $subcategory->name }}</a></li>
                                                                    @foreach ($subcategory->subsubcategories as $subsubcategory)
                                                                        <li><a href="">{{ $subsubcategory->name }}</a></li>
                                                                    @endforeach
                                                    			</ul>
                                                            </div>
                                                        @endforeach
                                                    </div>
                                                </div>
                                                <div class="sub-cat-featured">
                                            		<ul class="sub-cat-featured-list inline-links d-flex">
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
                                            		</ul>
                                                </div>
                                        	</div>
                                    	</div>

                                        <div class="col-3">
                                        	<div class="sub-cat-brand">
                                        		<ul class="sub-brand-list">
                                        			<li class="sub-brand-item">
                                                        <a href="" ><img src="{{ asset('frontend/images/brands/1.jpg') }}" class="img-fluid"></a>
                                                    </li>
                                        		</ul>
                                        	</div>
                                    	</div>
                                    </div>
                                </div>
                                @endif
                            </li>
                            @endforeach
                            <li>
                                <a href="#" class="active">
                                    <i class="icon-electronics-005 cat-icon"></i>
                                    <span class="cat-name">Smartphones</span>
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>

                <div class="col-lg-7">
                    <div class="swiper-js-container">
                        <div class="swiper-container" data-swiper-items="1" data-swiper-space-between="0">
                            <div class="swiper-wrapper">
                                <div class="swiper-item">
                                    <div class="py-5 px-4">
                                    <div class="">
                                        <div class="row align-items-center cols-xs-space cols-sm-space cols-md-space">
                                            <div class="col-md-5">
                                                <div class="">
                                                    <h3 class="heading heading-3 strong-600">Need productivity?</h3>

                                                    <p class=" c-gray-light mt-2">
                                                        Macbook Pro Touch Bar and Touch ID 3.1GHz Processor 256GB Storage
                                                    </p>

                                                    <div class="btn-container mt-4">
                                                        <a href="#" class="link link-sm link--style-1 text-uppercase strong-600">
                                                            <i class="icon-lg ion-android-cart"></i> Shop Macbook Pro
                                                        </a>
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="col-md-7">
                                                <img src="{{ asset('frontend/images/prv/shop/electronics/img-product-lg-1.jpg') }}" class="img-fluid">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-lg-2">fvdhfj thr hr rhyth yjyr rjhrv</div>
        </div>
        </div>
    </section>

                    <section class="slice sct-color-2">
                        <div class="container swiper-js-container">
                            <div class="swiper-container" data-swiper-items="6" data-swiper-space-between="20" data-swiper-md-items="4" data-swiper-md-space-between="20" data-swiper-sm-items="3" data-swiper-sm-space-between="20" data-swiper-xs-items="2" data-swiper-xs-space-between="20">
                                <div class="swiper-wrapper">
                                    <div class="swiper-slide">
                                        <div class="block">
                                            <div class="block-image">
                                                <div class="view view-first">
                                                    <a href="#">
                                                        <img src="{{ asset('frontend/images/prv/shop/electronics/img-5.png') }}" class="img-fluid img-center img-primary">
                                                    </a>
                                                </div>
                                            </div>
                                            <div class="text-center">
                                                <h2 class="heading heading-6 product-title text-normal strong-500">
                                                    <a href="#">Tablets</a>
                                                </h2>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="swiper-slide">
                                        <div class="block">
                                            <div class="block-image">
                                                <div class="view view-first">
                                                    <a href="#">
                                                        <img src="{{ asset('frontend/images/prv/shop/electronics/img-6.png') }}" class="img-fluid img-center img-primary">
                                                    </a>
                                                </div>
                                            </div>
                                            <div class="text-center">
                                                <h2 class="heading heading-6 product-title text-normal strong-500">
                                                    <a href="#">Smart watches</a>
                                                </h2>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="swiper-slide">
                                        <div class="block">
                                            <div class="block-image">
                                                <div class="view view-first">
                                                    <a href="#">
                                                        <img src="{{ asset('frontend/images/prv/shop/electronics/img-8.png') }}" class="img-fluid img-center img-primary">
                                                    </a>
                                                </div>
                                            </div>
                                            <div class="text-center">
                                                <h2 class="heading heading-6 product-title text-normal strong-500">
                                                    <a href="#">Headphones</a>
                                                </h2>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="swiper-slide">
                                        <div class="block">
                                            <div class="block-image">
                                                <div class="view view-first">
                                                    <a href="#">
                                                        <img src="{{ asset('frontend/images/prv/shop/electronics/img-2.png') }}" class="img-fluid img-center img-primary">
                                                    </a>
                                                </div>
                                            </div>
                                            <div class="text-center">
                                                <h2 class="heading heading-6 product-title text-normal strong-500">
                                                    <a href="#">In-Earh Heads</a>
                                                </h2>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="swiper-slide">
                                        <div class="block">
                                            <div class="block-image">
                                                <div class="view view-first">
                                                    <a href="#">
                                                        <img src="{{ asset('frontend/images/prv/shop/electronics/img-1.png') }}" class="img-fluid img-center img-primary">
                                                    </a>
                                                </div>
                                            </div>
                                            <div class="text-center">
                                                <h2 class="heading heading-6 product-title text-normal strong-500">
                                                    <a href="#">Desktops</a>
                                                </h2>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="swiper-slide">
                                        <div class="block">
                                            <div class="block-image">
                                                <div class="view view-first">
                                                    <a href="#">
                                                        <img src="{{ asset('frontend/images/prv/shop/electronics/img-3.png') }}" class="img-fluid img-center img-primary">
                                                    </a>
                                                </div>
                                            </div>
                                            <div class="text-center">
                                                <h2 class="heading heading-6 product-title text-normal strong-500">
                                                    <a href="#">Laptops</a>
                                                </h2>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="swiper-slide">
                                        <div class="block">
                                            <div class="block-image">
                                                <div class="view view-first">
                                                    <a href="#">
                                                        <img src="{{ asset('frontend/images/prv/shop/electronics/img-4.png') }}" class="img-fluid img-center img-primary">
                                                    </a>
                                                </div>
                                            </div>
                                            <div class="text-center">
                                                <h2 class="heading heading-6 product-title text-normal strong-500">
                                                    <a href="#">Phones</a>
                                                </h2>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </section>

                    <section class="slice pt-0 sct-color-2">
                        <div class="container">
                            <div class="row">
                                <div class="col-lg-3">
                                    <div class="sidebar sidebar--style-4 z-depth-1-top">
    <div class="sidebar-object">
        <h5 class="heading heading-sm strong-600 mb-4">Categories</h5>

        <div class="filter-checkbox">
            <div class="checkbox">
                <input type="checkbox" id="chkCategory-1b">
                <label class="text-sm" for="chkCategory-1b">Phones</label>
            </div>

            <div class="checkbox">
                <input type="checkbox" id="chkCategory-2b">
                <label class="text-sm" for="chkCategory-2b">Home &amp; Entertainment</label>
            </div>

            <div class="checkbox">
                <input type="checkbox" id="chkCategory-3b">
                <label class="text-sm" for="chkCategory-3b">Laptops</label>
            </div>

            <div class="checkbox">
                <input type="checkbox" id="chkCategory-4b">
                <label class="text-sm" for="chkCategory-4b">Tablets</label>
            </div>

            <div class="checkbox">
                <input type="checkbox" id="chkCategory-5b">
                <label class="text-sm" for="chkCategory-5b">Accessories</label>
            </div>
        </div>
    </div>

    <div class="sidebar-object">
        <h5 class="heading heading-sm strong-600 mb-4">Brand</h5>

        <div class="filter-checkbox">
            <div class="checkbox">
                <input type="checkbox" id="chkCategory-1b">
                <label class="text-sm" for="chkCategory-1b">Apple</label>
            </div>

            <div class="checkbox">
                <input type="checkbox" id="chkCategory-2b">
                <label class="text-sm" for="chkCategory-2b">Asus</label>
            </div>

            <div class="checkbox">
                <input type="checkbox" id="chkCategory-3b">
                <label class="text-sm" for="chkCategory-3b">Dell</label>
            </div>

            <div class="checkbox">
                <input type="checkbox" id="chkCategory-4b">
                <label class="text-sm" for="chkCategory-4b">Lenovo</label>
            </div>

            <div class="checkbox">
                <input type="checkbox" id="chkCategory-5b">
                <label class="text-sm" for="chkCategory-5b">Google</label>
            </div>
        </div>
    </div>

    <div class="sidebar-object">
        <h5 class="heading heading-sm strong-600 mb-4">Color</h5>

        <ul class="list-inline checkbox-color mb-0 text-xs-center">
            <li>
                <input type="radio" id="color-1" name="color" checked="">
                <label style="background: #38393d;" for="color-1" onclick="galleryTop.slideTo(0)" data-toggle="tooltip" data-original-title="Black"></label>
            </li>
            <li>
                <input type="radio" id="color-2" name="color">
                <label style="background: #bfc0c2;" for="color-2" onclick="galleryTop.slideTo(1)" data-toggle="tooltip" data-original-title="Silver"></label>
            </li>
            <li>
                <input type="radio" id="color-3" name="color">
                <label style="background: #eabfb9;" for="color-3" onclick="galleryTop.slideTo(2)" data-toggle="tooltip" data-original-title="Rose"></label>
            </li>
            <li>
                <input type="radio" id="color-4" name="color">
                <label style="background: #000000;" for="color-4" onclick="galleryTop.slideTo(3)" data-toggle="tooltip" data-original-title="Jet Black"></label>
            </li>
            <li>
                <input type="radio" id="color-5" name="color">
                <label style="background: #dcc4ac;" for="color-5" data-toggle="tooltip" data-original-title="Gold"></label>
            </li>
            <li>
                <input type="radio" id="color-6" name="color">
                <label style="background: #2189db;" for="color-6" data-toggle="tooltip" data-original-title="Blue"></label>
            </li>
            <li>
                <input type="radio" id="color-7" name="color">
                <label style="background: #ac92d9;" for="color-7" data-toggle="tooltip" data-original-title="Purple"></label>
            </li>
            <li>
                <input type="radio" id="color-8" name="color">
                <label style="background: #ef574a;" for="color-8" data-toggle="tooltip" data-original-title="Red"></label>
            </li>
        </ul>
    </div>

    <div class="sidebar-object mt-2">
        <div class="sidebar-object">
            <h5 class="heading heading-sm strong-600 mb-4">Price range</h5>

            <div class="range-slider-wrapper mt-3">
                <!-- Range slider container -->
                <div id="input-slider-range" data-range-value-min="1000" data-range-value-max="5000"></div>

                <!-- Range slider values -->
                <div class="row">
                    <div class="col-6">
                        <span class="range-slider-value value-low" data-range-value-low="1500" id="input-slider-range-value-low">
                    </div>

                    <div class="col-6 text-right">
                        <span class="range-slider-value value-high" data-range-value-high="5000" id="input-slider-range-value-high">
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
                                </div>

                                <div class="col-lg-9">
                                    <div class="row-wrapper">
                                        <div class="row cols-xs-space cols-sm-space cols-md-space">
                                            <div class="col-lg-4">
                                                <div class="card card-product z-depth-1-top z-depth-2--hover">
                                                    <div class="card-body">
                                                        <h2 class="heading heading-6 strong-600 mt-2 mb-3">
                                                            <a href="#">Google Home Base</a>
                                                        </h2>

                                                        <div class="card-image swiper-js-container">
                                                            <div class="">
                                                                <div class="swiper-container" data-swiper-items="1" data-swiper-space-between="0">
                                                                    <div class="swiper-wrapper">
                                                                        <div class="swiper-slide">
                                                                            <img src="{{ asset('frontend/images/prv/shop/electronics/img-1.png') }}" class="img-fluid img-center img-primary">
                                                                        </div>
                                                                        <div class="swiper-slide">
                                                                            <img src="{{ asset('frontend/images/prv/shop/electronics/img-1.png') }}" class="img-fluid img-center img-primary">
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>

                                                        <div class="mt-3">
                                                            <div class="price-wrapper">
                                                                <span class="price price-sm c-gray-dark">
                                                                    <span class="strong-300">$</span><span class="price-value strong-600">65.</span><small class="strong-300">00</small>
                                                                </span>
                                                                <span class="clearfix"></span>
                                                            </div>
                                                            <h6 class="heading heading-sm strong-400 c-red">Save 10%</h6>
                                                            <p class="product-description mt-3 mb-0">
                                                                Customize your Google Home to fit into your space.
                                                            </p>
                                                        </div>
                                                    </div>
                                                    <div class="card-footer">
                                                        <div class="product-buttons">
                                                            <div class="row align-items-center">
                                                                <div class="col-2">
                                                                    <button type="button" class="btn-icon" data-toggle="tooltip" data-placement="top" title="Favorite">
                                                                        <i class="ion-ios-heart"></i>
                                                                    </button>
                                                                </div>
                                                                <div class="col-2">
                                                                    <button type="button" class="btn-icon" data-toggle="tooltip" data-placement="top" title="Compare">
                                                                        <i class="ion-ios-browsers-outline"></i>
                                                                    </button>
                                                                </div>
                                                                <div class="col-8">
                                                                    <button type="button" class="btn btn-block btn-base-1 btn-circle btn-icon-left">
                                                                        <i class="icon ion-android-cart"></i>Add to cart
                                                                    </button>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="col-lg-4">
                                                <div class="card card-product z-depth-1-top z-depth-2--hover">
                                                    <div class="card-body">
                                                        <h2 class="heading heading-6 strong-600 mt-2 mb-3">
                                                            <a href="#">Google Home</a>
                                                        </h2>

                                                        <div class="card-image swiper-js-container">
                                                            <div class="">
                                                                <div class="swiper-container" data-swiper-items="1" data-swiper-space-between="0">
                                                                    <div class="swiper-wrapper">
                                                                        <div class="swiper-slide">
                                                                            <img src="{{ asset('frontend/images/prv/shop/electronics/img-2.png') }}" class="img-fluid img-center img-primary">
                                                                        </div>
                                                                        <div class="swiper-slide">
                                                                            <img src="{{ asset('frontend/images/prv/shop/electronics/img-2.png') }}" class="img-fluid img-center img-primary">
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>

                                                        <div class="mt-3">
                                                            <div class="price-wrapper">
                                                                <span class="price price-sm c-gray-dark">
                                                                    <span class="strong-300">$</span><span class="price-value strong-600">129.</span><small class="strong-300">00</small>
                                                                </span>
                                                                <span class="clearfix"></span>
                                                            </div>
                                                            <h6 class="heading heading-sm strong-400 c-green">In stock</h6>
                                                            <p class="product-description mt-3 mb-0">
                                                                Customize your Google Home to fit into your space.
                                                            </p>
                                                        </div>
                                                    </div>
                                                    <div class="card-footer">
                                                        <div class="product-buttons">
                                                            <div class="row align-items-center">
                                                                <div class="col-2">
                                                                    <button type="button" class="btn-icon" data-toggle="tooltip" data-placement="top" title="Favorite">
                                                                        <i class="ion-ios-heart"></i>
                                                                    </button>
                                                                </div>
                                                                <div class="col-2">
                                                                    <button type="button" class="btn-icon" data-toggle="tooltip" data-placement="top" title="Compare">
                                                                        <i class="ion-ios-browsers-outline"></i>
                                                                    </button>
                                                                </div>
                                                                <div class="col-8">
                                                                    <button type="button" class="btn btn-block btn-base-1 btn-circle btn-icon-left">
                                                                        <i class="icon ion-android-cart"></i>Add to cart
                                                                    </button>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="col-lg-4">
                                                <div class="card card-product z-depth-1-top z-depth-2--hover">
                                                    <div class="card-body">
                                                        <h2 class="heading heading-6 strong-600 mt-2 mb-3">
                                                            <a href="#">Libratone Q Adapt</a>
                                                        </h2>

                                                        <div class="card-image swiper-js-container">
                                                            <div class="">
                                                                <div class="swiper-container" data-swiper-items="1" data-swiper-space-between="0">
                                                                    <div class="swiper-wrapper">
                                                                        <div class="swiper-slide">
                                                                            <img src="{{ asset('frontend/images/prv/shop/electronics/img-3.png') }}" class="img-fluid img-center img-primary">
                                                                        </div>
                                                                        <div class="swiper-slide">
                                                                            <img src="{{ asset('frontend/images/prv/shop/electronics/img-3.png') }}" class="img-fluid img-center img-primary">
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>

                                                        <div class="mt-3">
                                                            <div class="price-wrapper">
                                                                <span class="price price-sm c-gray-dark">
                                                                    <span class="strong-300">$</span><span class="price-value strong-600">245.</span><small class="strong-300">00</small>
                                                                </span>
                                                                <span class="clearfix"></span>
                                                            </div>
                                                            <h6 class="heading heading-sm strong-400 c-gray-light">Limited stock</h6>
                                                            <p class="product-description mt-3 mb-0">
                                                                Customize your Google Home to fit into your space.
                                                            </p>
                                                        </div>
                                                    </div>
                                                    <div class="card-footer">
                                                        <div class="product-buttons">
                                                            <div class="row align-items-center">
                                                                <div class="col-2">
                                                                    <button type="button" class="btn-icon" data-toggle="tooltip" data-placement="top" title="Favorite">
                                                                        <i class="ion-ios-heart"></i>
                                                                    </button>
                                                                </div>
                                                                <div class="col-2">
                                                                    <button type="button" class="btn-icon" data-toggle="tooltip" data-placement="top" title="Compare">
                                                                        <i class="ion-ios-browsers-outline"></i>
                                                                    </button>
                                                                </div>
                                                                <div class="col-8">
                                                                    <button type="button" class="btn btn-block btn-base-1 btn-circle btn-icon-left">
                                                                        <i class="icon ion-android-cart"></i>Add to cart
                                                                    </button>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="row cols-xs-space cols-sm-space cols-md-space">
                                            <div class="col-lg-4">
                                                <div class="card card-product z-depth-1-top z-depth-2--hover">
                                                    <div class="card-body">
                                                        <h2 class="heading heading-6 strong-600 mt-2 mb-3">
                                                            <a href="#">Google Pixel 2</a>
                                                        </h2>

                                                        <div class="card-image swiper-js-container">
                                                            <div class="">
                                                                <div class="swiper-container" data-swiper-items="1" data-swiper-space-between="0">
                                                                    <div class="swiper-wrapper">
                                                                        <div class="swiper-slide">
                                                                            <img src="{{ asset('frontend/images/prv/shop/electronics/img-5.png') }}" class="img-fluid img-center img-primary">
                                                                        </div>
                                                                        <div class="swiper-slide">
                                                                            <img src="{{ asset('frontend/images/prv/shop/electronics/img-5.png') }}" class="img-fluid img-center img-primary">
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>

                                                        <div class="mt-3">
                                                            <div class="price-wrapper">
                                                                <span class="price price-sm c-gray-dark">
                                                                    <span class="strong-300">$</span><span class="price-value strong-600">699.</span><small class="strong-300">00</small>
                                                                </span>
                                                                <span class="clearfix"></span>
                                                            </div>
                                                            <h6 class="heading heading-sm strong-400 c-red">Save 10%</h6>
                                                            <p class="product-description mt-3 mb-0">
                                                                Customize your Google Home to fit into your space.
                                                            </p>
                                                        </div>
                                                    </div>
                                                    <div class="card-footer">
                                                        <div class="product-buttons">
                                                            <div class="row align-items-center">
                                                                <div class="col-2">
                                                                    <button type="button" class="btn-icon" data-toggle="tooltip" data-placement="top" title="Favorite">
                                                                        <i class="ion-ios-heart"></i>
                                                                    </button>
                                                                </div>
                                                                <div class="col-2">
                                                                    <button type="button" class="btn-icon" data-toggle="tooltip" data-placement="top" title="Compare">
                                                                        <i class="ion-ios-browsers-outline"></i>
                                                                    </button>
                                                                </div>
                                                                <div class="col-8">
                                                                    <button type="button" class="btn btn-block btn-base-1 btn-circle btn-icon-left">
                                                                        <i class="icon ion-android-cart"></i>Add to cart
                                                                    </button>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="col-lg-4">
                                                <div class="card card-product z-depth-1-top z-depth-2--hover">
                                                    <div class="card-body">
                                                        <h2 class="heading heading-6 strong-600 mt-2 mb-3">
                                                            <a href="#">Google Chromecast</a>
                                                        </h2>

                                                        <div class="card-image swiper-js-container">
                                                            <div class="">
                                                                <div class="swiper-container" data-swiper-items="1" data-swiper-space-between="0">
                                                                    <div class="swiper-wrapper">
                                                                        <div class="swiper-slide">
                                                                            <img src="{{ asset('frontend/images/prv/shop/electronics/img-6.png') }}" class="img-fluid img-center img-primary">
                                                                        </div>
                                                                        <div class="swiper-slide">
                                                                            <img src="{{ asset('frontend/images/prv/shop/electronics/img-6.png') }}" class="img-fluid img-center img-primary">
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>

                                                        <div class="mt-3">
                                                            <div class="price-wrapper">
                                                                <span class="price price-sm c-gray-dark">
                                                                    <span class="strong-300">$</span><span class="price-value strong-600">59.</span><small class="strong-300">00</small>
                                                                </span>
                                                                <span class="clearfix"></span>
                                                            </div>
                                                            <h6 class="heading heading-sm strong-400 c-green">In stock</h6>
                                                            <p class="product-description mt-3 mb-0">
                                                                Customize your Google Home to fit into your space.
                                                            </p>
                                                        </div>
                                                    </div>
                                                    <div class="card-footer">
                                                        <div class="product-buttons">
                                                            <div class="row align-items-center">
                                                                <div class="col-2">
                                                                    <button type="button" class="btn-icon" data-toggle="tooltip" data-placement="top" title="Favorite">
                                                                        <i class="ion-ios-heart"></i>
                                                                    </button>
                                                                </div>
                                                                <div class="col-2">
                                                                    <button type="button" class="btn-icon" data-toggle="tooltip" data-placement="top" title="Compare">
                                                                        <i class="ion-ios-browsers-outline"></i>
                                                                    </button>
                                                                </div>
                                                                <div class="col-8">
                                                                    <button type="button" class="btn btn-block btn-base-1 btn-circle btn-icon-left">
                                                                        <i class="icon ion-android-cart"></i>Add to cart
                                                                    </button>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="col-lg-4">
                                                <div class="card card-product z-depth-1-top z-depth-2--hover">
                                                    <div class="card-body">
                                                        <h2 class="heading heading-6 strong-600 mt-2 mb-3">
                                                            <a href="#">Google Pixel Bud</a>
                                                        </h2>

                                                        <div class="card-image swiper-js-container">
                                                            <div class="">
                                                                <div class="swiper-container" data-swiper-items="1" data-swiper-space-between="0">
                                                                    <div class="swiper-wrapper">
                                                                        <div class="swiper-slide">
                                                                            <img src="{{ asset('frontend/images/prv/shop/electronics/img-7.png') }}" class="img-fluid img-center img-primary">
                                                                        </div>
                                                                        <div class="swiper-slide">
                                                                            <img src="{{ asset('frontend/images/prv/shop/electronics/img-7.png') }}" class="img-fluid img-center img-primary">
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>

                                                        <div class="mt-3">
                                                            <div class="price-wrapper">
                                                                <span class="price price-sm c-gray-dark">
                                                                    <span class="strong-300">$</span><span class="price-value strong-600">245.</span><small class="strong-300">00</small>
                                                                </span>
                                                                <span class="clearfix"></span>
                                                            </div>
                                                            <h6 class="heading heading-sm strong-400 c-gray-light">Limited stock</h6>
                                                            <p class="product-description mt-3 mb-0">
                                                                Customize your Google Home to fit into your space.
                                                            </p>
                                                        </div>
                                                    </div>
                                                    <div class="card-footer">
                                                        <div class="product-buttons">
                                                            <div class="row align-items-center">
                                                                <div class="col-2">
                                                                    <button type="button" class="btn-icon" data-toggle="tooltip" data-placement="top" title="Favorite">
                                                                        <i class="ion-ios-heart"></i>
                                                                    </button>
                                                                </div>
                                                                <div class="col-2">
                                                                    <button type="button" class="btn-icon" data-toggle="tooltip" data-placement="top" title="Compare">
                                                                        <i class="ion-ios-browsers-outline"></i>
                                                                    </button>
                                                                </div>
                                                                <div class="col-8">
                                                                    <button type="button" class="btn btn-block btn-base-1 btn-circle btn-icon-left">
                                                                        <i class="icon ion-android-cart"></i>Add to cart
                                                                    </button>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="pt-5">
                                        <nav aria-label="Product pagination">
                                            <ul class="pagination pagination--style-2 justify-content-end">
                                                <li class="page-item disabled">
                                                    <a class="page-link" href="#" tabindex="-1">Previous</a>
                                                </li>
                                                <li class="page-item"><a class="page-link" href="#">1</a></li>
                                                <li class="page-item"><a class="page-link" href="#">2</a></li>
                                                <li class="page-item"><a class="page-link" href="#">3</a></li>
                                                <li class="page-item">
                                                <a class="page-link" href="#">Next</a>
                                                </li>
                                            </ul>
                                        </nav>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </section>

                    <section class="slice-lg has-bg-cover bg-size-cover" style="background-image: url({{ asset('frontend/images/prv/architecture/img-slider-1.jpg') }});">
                        <div class="mask mask-base-1--style-1"></div>
                        <div class="container">
                            <div class="row justify-content-center">
                                <div class="col-6 text-center">
                                    <h2 class="heading heading-1 strong-600 c-white">
                                        Join the biggest sales of the year
                                    </h2>
                                    <p class="c-white trong-300 mt-4">
                                        Lorem ipsum dolor sit amet adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna. There is only that moment, and the incredible certainty that everything under the sun has been written by one hand only.
                                    </p>

                                    <div class="btn-container mt-5">
                                        <a href="#" class="btn btn-styled btn-white btn-outline btn-circle px-5">Learn more</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </section>

                    <section class="slice sct-color-1">
                        <div class="container">
                            <div class="row align-items-center">
                                <div class="col-lg-6 ml-lg-auto order-lg-2">
                                    <img src="{{ asset('frontend/images/prv/shop/electronics/img-product-lg-1.jpg') }}" class="img-fluid">
                                </div>

                                <div class="col-lg-5 order-lg-1">
                                    <div class="">
                                        <h3 class="heading heading-2 strong-600">The most beautiful colors you've ever seen</h3>

                                        <p class=" c-gray-light mt-4">
                                            There is only that moment, and the incredible certainty that everything under the sun has been written by one hand only.
                                        </p>

                                        <div class="btn-container mt-5">
                                            <a href="#" class="btn btn-base-1 btn-circle btn-icon-left px-4" data-scroll-to="#scrollToSection">
                                                <i class="icon ion-android-cart"></i> Add to cart
                                            </a>
                                            <a href="#" class="btn btn-base-3 btn-circle btn-icon-left px-4" data-scroll-to="#scrollToSection">
                                                Learn more
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </section>

                    <section class="slice sct-color-2">
                        <div class="container">
                            <div class="section-title section-title--style-1 text-center">
                                <h3 class="section-title-inner heading-3 strong-600 text-capitalize">
                                    <span>Suggested products</span>
                                </h3>
                            </div>

                            <div class="row cols-xs-space cols-sm-space cols-md-space">
                                <div class="col-lg-3">
                                    <div class="block product no-border z-depth-2-top z-depth-2--hover">
                                        <div class="block-image">
                                            <a href="#">
                                                <img src="{{ asset('frontend/images/prv/shop/electronics/img-1.png') }}" class="img-center">
                                            </a>
                                            <span class="product-ribbon product-ribbon-right product-ribbon--style-1 bg-blue text-uppercase">New</span>
                                        </div>

                                        <div class="block-body text-center">
                                            <h3 class="heading heading-5 strong-600 text-capitalize">
                                                <a href="#">
                                                    Google Home Base
                                                </a>
                                            </h3>
                                            <p class="product-description">
                                                2.8GHz Processor 1TB Storage 16GB DDR
                                            </p>
                                            <div class="product-colors mt-2">
                                                <div class="color-switch float-wrapper">
                                                    <a href="#" class="bg-purple"></a>
                                                    <a href="#" class="bg-pink"></a>
                                                    <a href="#" class="bg-blue"></a>
                                                </div>
                                            </div>
                                            <div class="product-buttons mt-4">
                                                <div class="row align-items-center">
                                                    <div class="col-2">
                                                        <button type="button" class="btn-icon" data-toggle="tooltip" data-placement="top" title="" data-original-title="Favorite">
                                                            <i class="ion-ios-heart"></i>
                                                        </button>
                                                    </div>
                                                    <div class="col-2">
                                                        <button type="button" class="btn-icon" data-toggle="tooltip" data-placement="top" title="" data-original-title="Compare">
                                                            <i class="ion-ios-browsers-outline"></i>
                                                        </button>
                                                    </div>
                                                    <div class="col-8">
                                                        <button type="button" class="btn btn-block btn-base-1 btn-circle btn-icon-left">
                                                            <i class="icon ion-android-cart"></i>Add to cart
                                                        </button>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="col-lg-3">
                                    <div class="block product no-border z-depth-2-top z-depth-2--hover">
                                        <div class="block-image">
                                            <a href="#">
                                                <img src="{{ asset('frontend/images/prv/shop/electronics/img-2.png') }}" class="img-center">
                                            </a>
                                            <span class="product-ribbon product-ribbon-right product-ribbon--style-1 bg-blue text-uppercase">New</span>
                                        </div>

                                        <div class="block-body text-center">
                                            <h3 class="heading heading-5 strong-600 text-capitalize">
                                                <a href="#">
                                                    Google Home
                                                </a>
                                            </h3>
                                            <p class="product-description">
                                                2.8GHz Processor 1TB Storage 16GB DDR
                                            </p>
                                            <div class="product-colors mt-2">
                                                <div class="color-switch float-wrapper">
                                                    <a href="#" class="bg-purple"></a>
                                                    <a href="#" class="bg-pink"></a>
                                                    <a href="#" class="bg-blue"></a>
                                                </div>
                                            </div>
                                            <div class="product-buttons mt-4">
                                                <div class="row align-items-center">
                                                    <div class="col-2">
                                                        <button type="button" class="btn-icon" data-toggle="tooltip" data-placement="top" title="" data-original-title="Favorite">
                                                            <i class="ion-ios-heart"></i>
                                                        </button>
                                                    </div>
                                                    <div class="col-2">
                                                        <button type="button" class="btn-icon" data-toggle="tooltip" data-placement="top" title="" data-original-title="Compare">
                                                            <i class="ion-ios-browsers-outline"></i>
                                                        </button>
                                                    </div>
                                                    <div class="col-8">
                                                        <button type="button" class="btn btn-block btn-base-1 btn-circle btn-icon-left">
                                                            <i class="icon ion-android-cart"></i>Add to cart
                                                        </button>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="col-lg-3">
                                    <div class="block product no-border z-depth-2-top z-depth-2--hover">
                                        <div class="block-image">
                                            <a href="#">
                                                <img src="{{ asset('frontend/images/prv/shop/electronics/img-3.png') }}" class="img-center">
                                            </a>
                                            <span class="product-ribbon product-ribbon-right product-ribbon--style-1 bg-blue text-uppercase">New</span>
                                        </div>

                                        <div class="block-body text-center">
                                            <h3 class="heading heading-5 strong-600 text-capitalize">
                                                <a href="#">
                                                    Libratone Q Adapt
                                                </a>
                                            </h3>
                                            <p class="product-description">
                                                2.8GHz Processor 1TB Storage 16GB DDR
                                            </p>
                                            <div class="product-colors mt-2">
                                                <div class="color-switch float-wrapper">
                                                    <a href="#" class="bg-purple"></a>
                                                    <a href="#" class="bg-pink"></a>
                                                    <a href="#" class="bg-blue"></a>
                                                </div>
                                            </div>
                                            <div class="product-buttons mt-4">
                                                <div class="row align-items-center">
                                                    <div class="col-2">
                                                        <button type="button" class="btn-icon" data-toggle="tooltip" data-placement="top" title="" data-original-title="Favorite">
                                                            <i class="ion-ios-heart"></i>
                                                        </button>
                                                    </div>
                                                    <div class="col-2">
                                                        <button type="button" class="btn-icon" data-toggle="tooltip" data-placement="top" title="" data-original-title="Compare">
                                                            <i class="ion-ios-browsers-outline"></i>
                                                        </button>
                                                    </div>
                                                    <div class="col-8">
                                                        <button type="button" class="btn btn-block btn-base-1 btn-circle btn-icon-left">
                                                            <i class="icon ion-android-cart"></i>Add to cart
                                                        </button>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="col-lg-3">
                                    <div class="block product no-border z-depth-2-top z-depth-2--hover">
                                        <div class="block-image">
                                            <a href="#">
                                                <img src="{{ asset('frontend/images/prv/shop/electronics/img-3.png') }}" class="img-center">
                                            </a>
                                            <span class="product-ribbon product-ribbon-right product-ribbon--style-1 bg-blue text-uppercase">New</span>
                                        </div>

                                        <div class="block-body text-center">
                                            <h3 class="heading heading-5 strong-600 text-capitalize">
                                                <a href="#">
                                                    Libratone Q Adapt
                                                </a>
                                            </h3>
                                            <p class="product-description">
                                                2.8GHz Processor 1TB Storage 16GB DDR
                                            </p>
                                            <div class="product-colors mt-2">
                                                <div class="color-switch float-wrapper">
                                                    <a href="#" class="bg-purple"></a>
                                                    <a href="#" class="bg-pink"></a>
                                                    <a href="#" class="bg-blue"></a>
                                                </div>
                                            </div>
                                            <div class="product-buttons mt-4">
                                                <div class="row align-items-center">
                                                    <div class="col-2">
                                                        <button type="button" class="btn-icon" data-toggle="tooltip" data-placement="top" title="" data-original-title="Favorite">
                                                            <i class="ion-ios-heart"></i>
                                                        </button>
                                                    </div>
                                                    <div class="col-2">
                                                        <button type="button" class="btn-icon" data-toggle="tooltip" data-placement="top" title="" data-original-title="Compare">
                                                            <i class="ion-ios-browsers-outline"></i>
                                                        </button>
                                                    </div>
                                                    <div class="col-8">
                                                        <button type="button" class="btn btn-block btn-base-1 btn-circle btn-icon-left">
                                                            <i class="icon ion-android-cart"></i>Add to cart
                                                        </button>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </section>

                    <section class="slice-sm bg-base-1">
                        <div class="container sct-inner">
                            <div class="row cols-xs-space cols-sm-space cols-md-space">
                                <div class="col-lg-4 b-lg-right b-inverse">
                                    <div class="px-3 py-3 text-lg-center">
                                        <h3 class="heading heading-sm c-base-text-1 strong-600 text-uppercase ls-1">Free shipping in 48/72H</h3>
                                        <p class="c-white alpha-8 line-height-1_6">
                                            Lorem ipsum dolor sit amet consectetur adipiscing elit sed do eiusmod
                                        </p>
                                    </div>
                                </div>

                                <div class="col-lg-4 b-lg-right b-inverse">
                                    <div class="px-3 py-3 text-lg-center">
                                        <h3 class="heading heading-sm c-base-text-1 strong-600 text-uppercase ls-1">Free returns</h3>
                                        <p class="c-white alpha-8 line-height-1_6">
                                            Lorem ipsum dolor sit amet consectetur adipiscing elit sed do eiusmod
                                        </p>
                                    </div>
                                </div>

                                <div class="col-lg-4">
                                    <div class="px-3 py-3 text-lg-center">
                                        <h3 class="heading heading-sm c-base-text-1 strong-600 text-uppercase ls-1">Secure payment</h3>
                                        <ul class="inline-links mt-2">
                                            <li>
                                                <img src="{{ asset('frontend/images/icons/cards/visa.png') }}" width="30" class="img-grayscale">
                                            </li>
                                            <li>
                                                <img src="{{ asset('frontend/images/icons/cards/mastercard.png') }}" width="30" class="img-grayscale">
                                            </li>
                                            <li>
                                                <img src="{{ asset('frontend/images/icons/cards/maestro.png') }}" width="30" class="img-grayscale">
                                            </li>
                                            <li>
                                                <img src="{{ asset('frontend/images/icons/cards/paypal.png') }}" width="30" class="img-grayscale">
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </section>

<!-- FOOTER -->
<footer id="footer" class="footer footer-inverse">
    <div class="footer-top">
        <div class="container">
            <div class="row cols-xs-space cols-sm-space cols-md-space">
                <div class="col-md-4 col-lg-2">
                    <div class="col">
                       <h4 class="heading heading-xs strong-600 text-uppercase mb-1">
                          Main menu
                       </h4>

                       <ul class="footer-links">
                            <li>
                                <a href="#" title="Home">
                                    Home
                                </a>
                            </li>
                            <li>
                                <a href="#" title="About us">
                                    About us
                                </a>
                            </li>
                            <li>
                                <a href="#" title="Services">
                                    Services
                                </a>
                            </li>
                            <li>
                                <a href="#" title="Blog">
                                    Blog
                                </a>
                            </li>
                            <li>
                                <a href="#" title="Contact">
                                    Contact
                                </a>
                            </li>
                        </ul>
                     </div>
                </div>

                <div class="col-md-4 col-lg-2">
                    <div class="col">
                       <h4 class="heading heading-xs strong-600 text-uppercase mb-1">
                           Help and support
                       </h4>

                       <ul class="footer-links">
                            <li>
                                <a href="#" title="Help center">
                                    Help center
                                </a>
                            </li>
                            <li>
                                <a href="#" title="Discussions">
                                    Discussions
                                </a>
                            </li>
                            <li>
                                <a href="#" title="Contact support">
                                    Contact support
                                </a>
                            </li>
                            <li>
                                <a href="#" title="Knowledge center">
                                    Knowledge center
                                </a>
                            </li>
                            <li>
                                <a href="#" title="Jobs">
                                    FAQ
                                </a>
                            </li>
                        </ul>
                     </div>
                </div>

                <div class="col-md-4 col-lg-2">
                    <div class="col">
                       <h4 class="heading heading-xs strong-600 text-uppercase mb-1">
                           Our services
                       </h4>

                       <ul class="footer-links">
                            <li>
                                <a href="#" title="Help center">
                                    Concept
                                </a>
                            </li>
                            <li>
                                <a href="#" title="Discussions">
                                    UI/UX design
                                </a>
                            </li>
                            <li>
                                <a href="#" title="Contact support">
                                    Web developement
                                </a>
                            </li>
                            <li>
                                <a href="#" title="Knowledge center">
                                    Custom solutions
                                </a>
                            </li>
                            <li>
                                <a href="#" title="Jobs">
                                    Branding
                                </a>
                            </li>
                        </ul>
                     </div>
                </div>

                <span class="space-sm-only-3"></span>

                <div class="col-md-4 col-lg-3">
                    <div class="col">
                        <h4 class="heading heading-xs strong-600 text-uppercase mb-1">
                            From the blog
                        </h4>

                        <ul class="footer-links">
                            <li>
                                <a href="#" title="">Clamtown weekly news</a>
                                <small class="footer-link-date">June 20, 2018</small>
                            </li>
                            <li class="">
                                <a href="#" title="">Fall in love with Boomerang</a>
                                <small class="footer-link-date">June 18, 2018</small>
                            </li>
                            <li class="">
                                <a href="#" title="">Cracking the Boomerang code</a>
                                <small class="footer-link-date">March 30, 2018</small>
                            </li>
                        </ul>
                    </div>
                </div>

                <div class="col-md-4 col-lg-3">
                    <div class="col">
                        <h4 class="heading heading-xs strong-600 text-uppercase mb-1">
                            Check our feed
                        </h4>

                        <div class="photostream">
                            <span class="photo-wrapper">
                                <a href="{{ asset('frontend/images/prv/blog/img-1-200x200.jpg') }}" data-fancybox>
                                    <img src="{{ asset('frontend/images/prv/blog/img-1-200x200.jpg') }}">
                                </a>
                            </span>
                            <span class="photo-wrapper">
                                <a href="{{ asset('frontend/images/prv/blog/img-2-200x200.jpg') }}" data-fancybox>
                                    <img src="{{ asset('frontend/images/prv/blog/img-2-200x200.jpg') }}">
                                </a>
                            </span>
                            <span class="photo-wrapper">
                                <a href="{{ asset('frontend/images/prv/blog/img-3-200x200.jpg') }}" data-fancybox>
                                    <img src="{{ asset('frontend/images/prv/blog/img-3-200x200.jpg') }}">
                                </a>
                            </span>
                            <span class="photo-wrapper">
                                <a href="{{ asset('frontend/images/prv/blog/img-4-200x200.jpg') }}" data-fancybox>
                                    <img src="{{ asset('frontend/images/prv/blog/img-4-200x200.jpg') }}">
                                </a>
                            </span>
                            <span class="photo-wrapper">
                                <a href="{{ asset('frontend/images/prv/blog/img-5-200x200.jpg') }}" data-fancybox>
                                    <img src="{{ asset('frontend/images/prv/blog/img-5-200x200.jpg') }}">
                                </a>
                            </span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="footer-bottom">
        <div class="container">
            <div class="row row-cols-xs-spaced flex flex-items-xs-middle">
                <div class="col col-sm-7 col-xs-12">
                    <div class="copyright text-xs-center text-sm-left">
                        Copyright &copy; 2018                        <a href="http://webpixels.io" target="_blank" title="Webpixels - Official Website">
                            <strong class="strong-400">Webpixels</strong>
                        </a> -
                        All rights reserved
                    </div>
                </div>
                <div class="col col-sm-5 col-xs-12">
                    <div class="text-xs-center text-sm-right">
                        <ul class="social-media social-media--style-1-v4">
                            <li>
                                <a href="#" class="facebook" target="_blank" data-toggle="tooltip" data-original-title="Facebook">
                                    <i class="fa fa-facebook"></i>
                                </a>
                            </li>
                            <li>
                                <a href="#" class="instagram" target="_blank" data-toggle="tooltip" data-original-title="Instagram">
                                    <i class="fa fa-instagram"></i>
                                </a>
                            </li>
                            <li>
                                <a href="#" class="dribbble" target="_blank" data-toggle="tooltip" data-original-title="Dribbble">
                                    <i class="fa fa-dribbble"></i>
                                </a>
                            </li>
                            <li>
                                <a href="#" class="dribbble" target="_blank" data-toggle="tooltip" data-original-title="Github">
                                    <i class="fa fa-github"></i>
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
</footer>


</div><!-- END: body-wrap -->

<!-- SCRIPTS -->
<a href="#" class="back-to-top btn-back-to-top"></a>

<!-- Core -->
<script src="{{ asset('frontend/vendor/popper/popper.min.js') }}"></script>
<script src="{{ asset('frontend/vendor/bootstrap/js/bootstrap.min.js') }}"></script>
<script src="{{ asset('frontend/js/slidebar/slidebar.js') }}"></script>
<script src="{{ asset('frontend/js/classie.js') }}"></script>

<!-- Bootstrap Extensions -->
<script src="{{ asset('frontend/vendor/bootstrap-notify/bootstrap-growl.min.js') }}"></script>
<script src="{{ asset('frontend/vendor/scrollpos-styler/scrollpos-styler.js') }}"></script>

<!-- Plugins: Sorted A-Z -->
<script src="{{ asset('frontend/vendor/adaptive-backgrounds/adaptive-backgrounds.js') }}"></script>
<script src="{{ asset('frontend/vendor/countdown/js/jquery.countdown.min.js') }}"></script>
<script src="{{ asset('frontend/vendor/dropzone/dropzone.min.js') }}"></script>
<script src="{{ asset('frontend/vendor/easy-pie-chart/jquery.easypiechart.min.js') }}"></script>
<script src="{{ asset('frontend/vendor/fancybox/js/jquery.fancybox.min.js') }}"></script>
<script src="{{ asset('frontend/vendor/flatpickr/flatpickr.min.js') }}"></script>
<script src="{{ asset('frontend/vendor/flip/flip.min.js') }}"></script>
<script src="{{ asset('frontend/vendor/footer-reveal/footer-reveal.min.js') }}"></script>
<script src="{{ asset('frontend/vendor/gradientify/jquery.gradientify.min.js') }}"></script>
<script src="{{ asset('frontend/vendor/headroom/headroom.min.js') }}"></script>
<script src="{{ asset('frontend/vendor/headroom/jquery.headroom.min.js') }}"></script>
<script src="{{ asset('frontend/vendor/input-mask/input-mask.min.js') }}"></script>
<script src="{{ asset('frontend/vendor/instafeed/instafeed.js') }}"></script>
<script src="{{ asset('frontend/vendor/milestone-counter/jquery.countTo.js') }}"></script>
<script src="{{ asset('frontend/vendor/nouislider/js/nouislider.min.js') }}"></script>
<script src="{{ asset('frontend/vendor/paraxify/paraxify.min.js') }}"></script>
<script src="{{ asset('frontend/vendor/select2/js/select2.min.js') }}"></script>
<script src="{{ asset('frontend/vendor/sticky-kit/sticky-kit.min.js') }}"></script>
<script src="{{ asset('frontend/vendor/swiper/js/swiper.min.js') }}"></script>
<script src="{{ asset('frontend/vendor/textarea-autosize/autosize.min.js') }}"></script>
<script src="{{ asset('frontend/vendor/typeahead/typeahead.bundle.min.js') }}"></script>
<script src="{{ asset('frontend/vendor/typed/typed.min.js') }}"></script>
<script src="{{ asset('frontend/vendor/vide/vide.min.js') }}"></script>
<script src="{{ asset('frontend/vendor/viewport-checker/viewportchecker.min.js') }}"></script>
<script src="{{ asset('frontend/vendor/wow/wow.min.js') }}"></script>

<!-- Isotope -->
<script src="{{ asset('frontend/vendor/isotope/isotope.min.js') }}"></script>
<script src="{{ asset('frontend/vendor/imagesloaded/imagesloaded.pkgd.min.js') }}"></script>



<!-- App JS -->
<script src="{{ asset('frontend/js/boomerang.min.js') }}"></script>
<script src="{{ asset('frontend/js/main.js') }}"></script>

</body>
</html>
