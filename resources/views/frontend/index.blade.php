@extends('frontend.layouts.app')

@section('content')

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
                                    @foreach (\App\Product::all() as $key => $product)
                                        <div class="col-lg-4">
                                            <div class="card card-product z-depth-1-top z-depth-2--hover">
                                                <div class="card-body">
                                                    <h2 class="heading heading-6 strong-600 mt-2 mb-3">
                                                        <a href="{{ route('product', $product->slug) }}">{{ $product->name }}</a>
                                                    </h2>

                                                    <div class="card-image swiper-js-container">
                                                        <div class="">
                                                            <div class="swiper-container" data-swiper-items="1" data-swiper-space-between="0">
                                                                <div class="swiper-wrapper">
                                                                    @foreach (json_decode($product->photos) as $key => $photo)
                                                                        <div class="swiper-slide">
                                                                            <img src="{{ asset($photo) }}" class="img-fluid img-center img-primary">
                                                                        </div>
                                                                    @endforeach
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
                                                                <button type="button" class="btn-icon" data-toggle="tooltip" data-placement="top" title="Favorite" onclick="addToWishList({{ $product->id }})">
                                                                    <i class="ion-ios-heart"></i>
                                                                </button>
                                                            </div>
                                                            <div class="col-2">
                                                                <button type="button" class="btn-icon" data-toggle="tooltip" data-placement="top" title="Compare" onclick="addToCompare({{ $product->id }})">
                                                                    <i class="ion-ios-browsers-outline"></i>
                                                                </button>
                                                            </div>
                                                            <div class="col-8">
                                                                <button type="button" class="btn btn-block btn-base-1 btn-circle btn-icon-left" onclick="showAddToCartModal({{ $product->id }})">
                                                                    <i class="icon ion-android-cart"></i>Add to cart
                                                                </button>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    @endforeach
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

            <div class="modal fade" id="addToCart" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                <div class="modal-dialog modal-lg modal-dialog-centered modal-dialog-zoom product-modal" id="modal-size" role="document">
                    <div class="modal-content position-relative">
                        <div class="c-preloader">
                            <i class="fa fa-spin fa-spinner"></i>
                        </div>
                        <button type="button" class="close absolute-close-btn" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                        <div id="addToCart-modal-body">

                        </div>
                    </div>
                </div>
            </div>


        @endsection

        @section('script')
            <script type="text/javascript">

            function showAddToCartModal(id){
                $('#addToCart').modal();
                $.post('{{ route('cart.showCartModal') }}', {_token:'{{ csrf_token() }}', id:id}, function(data){
                    $('.c-preloader').hide();
                    $('#addToCart-modal-body').html(data);
                    $('#slideshow').desoSlide({
                        thumbs: $('#slideshow_thumbs .swiper-slide > a'),
                        thumbEvent: 'click',
                        first: 0,
                        effect: 'none',
                        overlay: 'none',
                        controls: {
                            show: false,
                            keys: false
                        },
                    });
                });
            }

            function addToCart(){
                $('.c-preloader').show();
                $.ajax({
                   type:"POST",
                   url:'{{ route('cart.addToCart') }}',
                   data:$('#option-choice-form').serialize(),
                   success: function(data){
                       $('.c-preloader').hide();
                       $('#modal-size').removeClass('modal-lg');
                       $('#addToCart-modal-body').html(data);
                       updateNavCart();
                   }
               });
            }

            function removeFromCart(key){
                $.post('{{ route('cart.removeFromCart') }}', {_token:'{{ csrf_token() }}', key:key}, function(data){
                    updateNavCart();
                });
            }

            function addToCompare(id){
                $.post('{{ route('products.addToCompare') }}', {_token:'{{ csrf_token() }}', id:id}, function(data){
                    $('#compare').html(data);
                });
            }

            function addToWishList(id){
                if('{{ Auth::check() }}'){
                    $.post('{{ route('wishlists.store') }}', {_token:'{{ csrf_token() }}', id:id}, function(data){
                        $('#wishlist').html(data);
                    });
                }
                else{
                    alert('Please login to continue...');
                    //showAlert('warning', 'Please login to continue...');
                }
            }
            </script>
        @endsection
