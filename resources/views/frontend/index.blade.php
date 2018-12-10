@extends('frontend.layouts.app')

@section('content')

    <section class="home-banner-area">
        <div class="container">
            <div class="row no-gutters position-relative">
                <div class="col-lg-3 position-static">
                    <div class="category-sidebar">
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

                <div class="col-lg-7">
                    <div class="home-slide">
                        <div class="home-slide">
                            <div class="slick-carousel" data-slick-arrows="true" data-slick-dots="true">
                                @foreach (\App\Slider::where('published', 1)->get() as $key => $slider)
                                    <div class="">
                                        <img class="d-block w-100" style="height:330px; width:850px;" src="{{ asset($slider->photo) }}" alt="Slider Image">
                                    </div>
                                @endforeach
                            </div>
                        </div>
                    </div>
                    <div class="trending-category">
                        <ul>
                            @foreach (\App\Category::where('featured', 1)->get()->take(6) as $key => $category)
                                <li @if ($key == 0) class="active" @endif>
                                    <div class="trend-category-single">
                                        <a href="{{ route('products.category', $category->id) }}" class="d-block">
                                            <div class="name">{{ $category->name }}</div>
                                            <div class="img" style="background-image:url('{{ asset($category->banner) }}')">
                                            </div>
                                        </a>
                                    </div>
                                </li>
                            @endforeach
                        </ul>
                    </div>
                </div>

                @php
                    $flash_deal = \App\FlashDeal::where('status', 1)->first();
                @endphp
                @if($flash_deal != null && strtotime(date('d-m-Y')) >= $flash_deal->start_date && strtotime(date('d-m-Y')) <= $flash_deal->end_date)
                    <div class="col-lg-2">
                        <div class="flash-deal-box bg-white h-100">
                            <div class="title text-center p-2 gry-bg">
                                <h3 class="heading-6 mb-0">
                                    Flash Deal
                                    <span class="badge badge-danger">Hot</span>
                                </h3>
                                <div class="countdown countdown--style-1 countdown--style-1-v1" data-countdown-date="{{ date('m/d/Y', $flash_deal->end_date) }}" data-countdown-label="show"></div>
                            </div>
                            <div class="flash-content c-scrollbar">
                                @foreach ($flash_deal->flash_deal_products as $key => $flash_deal_product)
                                    @php
                                        $product = \App\Product::find($flash_deal_product->product_id);
                                    @endphp
                                    <a href="{{ route('product', $product->slug) }}" class="d-block flash-deal-item">
                                        <div class="row no-gutters align-items-center">
                                            <div class="col">
                                                <div class="img" style="background-image:url('{{ asset(json_decode($product->photos)[0]) }}')">
                                                </div>
                                            </div>
                                            <div class="col">
                                                <div class="price">
                                                    <span class="d-block">{{ home_discounted_base_price($product->id) }}</span>
                                                    @if(home_base_price($product->id) != home_discounted_base_price($product->id))
                                                        <del class="d-block">{{ home_base_price($product->id) }}</del>
                                                    @endif
                                                </div>
                                            </div>
                                        </div>
                                    </a>
                                @endforeach
                            </div>
                        </div>
                    </div>
                @endif

            </div>
        </div>
    </section>



    <section class="py-5">
        <div class="container">
            <div class="row">
                <div class="col-md-4">
                    <div class="media-banner">
                        <a href="" class="banner-container" style="background-image:url('http://via.placeholder.com/850x420');"></a>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="media-banner">
                        <a href="" class="banner-container" style="background-image:url('http://via.placeholder.com/850x420');"></a>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="media-banner">
                        <a href="" class="banner-container" style="background-image:url('http://via.placeholder.com/850x420');"></a>
                    </div>
                </div>
            </div>
        </div>
    </section>

    @php
        $flash_deal = \App\FlashDeal::where('status', 1)->first();
    @endphp
    @if($flash_deal != null && strtotime(date('d-m-Y')) >= $flash_deal->start_date && strtotime(date('d-m-Y')) <= $flash_deal->end_date)
        <section class="slice gry-bg">
            <div class="container">
                <div class="section-title section-title--style-1">
                    <h3 class="section-title-inner heading-4 strong-700 text-capitalize">
                        <span class="mr-4">Flash Deal</span>
                        <small class="countdown countdown-sm d-inline-block" data-countdown-date="{{ date('m/d/Y', $flash_deal->end_date) }}" data-countdown-label="hide"></small>
                    </h3>
                </div>
                <div class="caorusel-box">
                    <div class="slick-carousel" data-slick-items="5" data-slick-lg-items="3"  data-slick-md-items="2" data-slick-sm-items="2" data-slick-xs-items="1">
                        @foreach ($flash_deal->flash_deal_products as $key => $flash_deal_product)
                            @php
                                $product = \App\Product::find($flash_deal_product->product_id);
                            @endphp
                            <div class="product-card-2 card card-product m-2 shop-cards shop-tech">
                                <div class="card-body p-0">

                                    <div class="card-image">
                                        <a href="{{ route('product', $product->slug) }}" class="d-block" style="background-image:url('{{ asset(json_decode($product->photos)[0]) }}');">
                                        </a>
                                    </div>

                                    <div class="p-3">
                                        <div class="price-box">
                                            @if(home_base_price($product->id) != home_discounted_base_price($product->id))
                                                <del class="old-product-price strong-400">{{ home_base_price($product->id) }}</del>
                                            @endif
                                            <span class="product-price strong-600">{{ home_discounted_base_price($product->id) }}</span>
                                        </div>
                                        <h2 class="product-title p-0 mt-2">
                                            <a href="{{ route('product', $product->slug) }}">{{ $product->name }}</a>
                                        </h2>
                                    </div>
                                </div>
                            </div>
                        @endforeach
                    </div>
                </div>
            </div>
        </section>
    @endif

    <section class="bg-white py-5">
        <div class="container">
            <div class="section-title-1 clearfix">
                <h3 class="heading-5 strong-700 mb-0 float-left">
                    <span class="mr-4">Best Selling</span>
                </h3>
                <ul class="inline-links float-right">
                    <li><a  class="active">Top 20</a></li>
                    {{-- <li><a href="" >Category name</a></li>
                    <li><a href="" >Category name</a></li>
                    <li><a href="" >Category name</a></li> --}}
                </ul>
            </div>
            <div class="caorusel-box">
                <div class="slick-carousel" data-slick-items="3" data-slick-lg-items="3"  data-slick-md-items="2" data-slick-sm-items="2" data-slick-xs-items="1" data-slick-dots="true" data-slick-rows="2">
                    @foreach (\App\Product::orderBy('num_of_sale', 'desc')->limit(20)->get() as $key => $product)
                        <div class="p-2">
                            <div class="row no-gutters product-box-2">
                                <div class="col-4">
                                    <div class="position-relative overflow-hidden h-100">
                                        <a href="{{ route('product', $product->slug) }}" class="d-block product-image h-100" style="background-image:url('{{ asset(json_decode($product->photos)[0]) }}');">
                                        </a>
                                        <div class="product-btns">
                                            <button class="btn add-wishlist" title="Add to Wishlist" onclick="addToWishList({{ $product->id }})">
                                                <i class="ion-ios-heart-outline"></i>
                                            </button>
                                            <button class="btn add-compare" title="Add to Compare" onclick="addToCompare({{ $product->id }})">
                                                <i class="ion-ios-browsers-outline"></i>
                                            </button>
                                            <button class="btn quick-view" title="Quick view" onclick="showAddToCartModal({{ $product->id }})">
                                                <i class="ion-ios-eye"></i>
                                            </button>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-8">
                                    <div class="p-3">
                                        <h2 class="product-title mb-3 p-0">
                                            <a href="{{ route('product', $product->slug) }}">{{ $product->name }}</a>
                                        </h2>
                                        <div class="clearfix">
                                            <div class="price-box float-left">
                                                @if(home_base_price($product->id) != home_discounted_base_price($product->id))
                                                    <del class="old-product-price strong-400">{{ home_base_price($product->id) }}</del>
                                                @endif
                                                <span class="product-price strong-600">{{ home_discounted_base_price($product->id) }}</span>
                                            </div>
                                            <div class="float-right">
                                                <button class="add-to-cart btn" title="Add to Cart" onclick="showAddToCartModal({{ $product->id }})">
                                                    <i class="icon ion-android-cart"></i>
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

        </div>

    </section>

    @foreach (\App\HomeCategory::where('status', 1)->get() as $key => $homeCategory)
        <section class="gry-bg py-5">
            <div class="container">
                <div class="section-title-1 clearfix">
                    <h3 class="heading-5 strong-700 mb-0 float-left">
                        <span class="mr-4">{{ $homeCategory->category->name }}</span>
                    </h3>
                    <ul class="inline-links float-right nav">
                        @foreach (json_decode($homeCategory->subsubcategories) as $key => $subsubcategory)
                            <li class="@php if($key == 0) echo 'active'; @endphp"><a href="#subsubcat-{{ $subsubcategory }}" data-toggle="tab" class="@php if($key == 0) echo 'active'; @endphp">{{ \App\SubSubCategory::find($subsubcategory)->name }}</a></li>
                        @endforeach
                    </ul>
                </div>
                <div class="tab-content">
                    @foreach (json_decode($homeCategory->subsubcategories) as $key => $subsubcategory)
                        <div class="tab-pane fade @php if($key == 0) echo 'show active'; @endphp" id="subsubcat-{{ $subsubcategory }}">
                            <div class="row">
                                @php
                                    $products = \App\Product::where('subsubcategory_id', $subsubcategory)->limit(4)->get();
                                @endphp
                                @foreach ($products as $key => $product)
                                    <div class="col-lg-3">
                                        <div class="product-box-2 bg-white alt-box">
                                            <div class="position-relative overflow-hidden">
                                                <a href="" class="d-block product-image h-100" style="background-image:url('{{ asset(json_decode($product->photos)[0]) }}');" tabindex="0">
                                                </a>
                                                <div class="product-btns clearfix">
                                                    <button class="btn add-wishlist" title="Add to Wishlist" onclick="addToWishList({{ $product->id }})" tabindex="0">
                                                        <i class="ion-ios-heart-outline"></i>
                                                    </button>
                                                    <button class="btn add-compare" title="Add to Compare" onclick="addToCompare({{ $product->id }})" tabindex="0">
                                                        <i class="ion-ios-browsers-outline"></i>
                                                    </button>
                                                    <button class="btn quick-view" title="Quick view" onclick="showAddToCartModal({{ $product->id }})" tabindex="0">
                                                        <i class="ion-ios-eye"></i>
                                                    </button>
                                                </div>
                                            </div>
                                            <div class="p-3">
                                                <h2 class="product-title mb-3 p-0">
                                                    <a href="" tabindex="0">{{ $product->name }}</a>
                                                </h2>
                                                <div class="clearfix">
                                                    <div class="price-box float-left">
                                                        @if(home_base_price($product->id) != home_discounted_base_price($product->id))
                                                            <del class="old-product-price strong-400">{{ home_base_price($product->id) }}</del>
                                                        @endif
                                                        <span class="product-price strong-600">{{ home_discounted_base_price($product->id) }}</span>
                                                    </div>
                                                    <div class="float-right">
                                                        <button class="add-to-cart btn" title="Add to Cart" onclick="showAddToCartModal({{ $product->id }})" tabindex="0">
                                                            <i class="icon ion-android-cart"></i>
                                                        </button>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                @endforeach
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>
        </section>
    @endforeach

    <section class="py-5">
        <div class="container">
            <div class="row">
                <div class="col-lg-4">
                    <div class="section-title-1 clearfix">
                        <h3 class="heading-5 strong-700 mb-0 float-left">
                            <span class="mr-4">Top Selling Products</span>
                        </h3>
                    </div>
                    <div class="pt-3">
                        <div class="mb-4 product-box-3">
                            <div class="clearfix">
                                <div class="product-image float-left">
                                    <a href="" style="background-image:url('http://localhost/shop/public/uploads/jckV7yL9FWHi3kV33RdMNlfOcpibmwWMqNsQck0N.jpeg');"></a>
                                </div>
                                <div class="product-details float-left">
                                    <h4 class="title text-truncate-2">
                                        <a href="" class="d-block">Apple iMac 4K Retina 21.5 Inch (2017) Quads Core Intel Core i5 (3.4-3.8GHz, 8GB 2400MHz DDR4 Onboard</a>
                                    </h4>
                                    <div class="price-box">
                                        <del class="old-product-price strong-400">16000$</del>
                                        <span class="product-price strong-600">15500$</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="mb-4 product-box-3">
                            <div class="clearfix">
                                <div class="product-image float-left">
                                    <a href="" style="background-image:url('http://localhost/shop/public/uploads/jckV7yL9FWHi3kV33RdMNlfOcpibmwWMqNsQck0N.jpeg');"></a>
                                </div>
                                <div class="product-details float-left">
                                    <h4 class="title text-truncate-2">
                                        <a href="" class="d-block">Apple iMac 4K Retina 21.5 Inch (2017) Quads Core Intel Core i5 (3.4-3.8GHz, 8GB 2400MHz DDR4 Onboard</a>
                                    </h4>
                                    <div class="price-box">
                                        <del class="old-product-price strong-400">16000$</del>
                                        <span class="product-price strong-600">15500$</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="mb-4 product-box-3">
                            <div class="clearfix">
                                <div class="product-image float-left">
                                    <a href="" style="background-image:url('http://localhost/shop/public/uploads/jckV7yL9FWHi3kV33RdMNlfOcpibmwWMqNsQck0N.jpeg');"></a>
                                </div>
                                <div class="product-details float-left">
                                    <h4 class="title text-truncate-2">
                                        <a href="" class="d-block">Apple iMac 4K Retina 21.5 Inch (2017) Quads Core Intel Core i5 (3.4-3.8GHz, 8GB 2400MHz DDR4 Onboard</a>
                                    </h4>
                                    <div class="price-box">
                                        <del class="old-product-price strong-400">16000$</del>
                                        <span class="product-price strong-600">15500$</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="mb-4 product-box-3">
                            <div class="clearfix">
                                <div class="product-image float-left">
                                    <a href="" style="background-image:url('http://localhost/shop/public/uploads/jckV7yL9FWHi3kV33RdMNlfOcpibmwWMqNsQck0N.jpeg');"></a>
                                </div>
                                <div class="product-details float-left">
                                    <h4 class="title text-truncate-2">
                                        <a href="" class="d-block">Apple iMac 4K Retina 21.5 Inch (2017) Quads Core Intel Core i5 (3.4-3.8GHz, 8GB 2400MHz DDR4 Onboard</a>
                                    </h4>
                                    <div class="price-box">
                                        <del class="old-product-price strong-400">16000$</del>
                                        <span class="product-price strong-600">15500$</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="section-title-1 clearfix">
                        <h3 class="heading-5 strong-700 mb-0 float-left">
                            <span class="mr-4">Featured Products</span>
                        </h3>
                    </div>
                    <div class="pt-3">
                        <div class="mb-4 product-box-3">
                            <div class="clearfix">
                                <div class="product-image float-left">
                                    <a href="" style="background-image:url('http://localhost/shop/public/uploads/jckV7yL9FWHi3kV33RdMNlfOcpibmwWMqNsQck0N.jpeg');"></a>
                                </div>
                                <div class="product-details float-left">
                                    <h4 class="title text-truncate-2">
                                        <a href="" class="d-block">Apple iMac 4K Retina 21.5 Inch (2017) Quads Core Intel Core i5 (3.4-3.8GHz, 8GB 2400MHz DDR4 Onboard</a>
                                    </h4>
                                    <div class="price-box">
                                        <del class="old-product-price strong-400">16000$</del>
                                        <span class="product-price strong-600">15500$</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="mb-4 product-box-3">
                            <div class="clearfix">
                                <div class="product-image float-left">
                                    <a href="" style="background-image:url('http://localhost/shop/public/uploads/jckV7yL9FWHi3kV33RdMNlfOcpibmwWMqNsQck0N.jpeg');"></a>
                                </div>
                                <div class="product-details float-left">
                                    <h4 class="title text-truncate-2">
                                        <a href="" class="d-block">Apple iMac 4K Retina 21.5 Inch (2017) Quads Core Intel Core i5 (3.4-3.8GHz, 8GB 2400MHz DDR4 Onboard</a>
                                    </h4>
                                    <div class="price-box">
                                        <del class="old-product-price strong-400">16000$</del>
                                        <span class="product-price strong-600">15500$</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="mb-4 product-box-3">
                            <div class="clearfix">
                                <div class="product-image float-left">
                                    <a href="" style="background-image:url('http://localhost/shop/public/uploads/jckV7yL9FWHi3kV33RdMNlfOcpibmwWMqNsQck0N.jpeg');"></a>
                                </div>
                                <div class="product-details float-left">
                                    <h4 class="title text-truncate-2">
                                        <a href="" class="d-block">Apple iMac 4K Retina 21.5 Inch (2017) Quads Core Intel Core i5 (3.4-3.8GHz, 8GB 2400MHz DDR4 Onboard</a>
                                    </h4>
                                    <div class="price-box">
                                        <del class="old-product-price strong-400">16000$</del>
                                        <span class="product-price strong-600">15500$</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="mb-4 product-box-3">
                            <div class="clearfix">
                                <div class="product-image float-left">
                                    <a href="" style="background-image:url('http://localhost/shop/public/uploads/jckV7yL9FWHi3kV33RdMNlfOcpibmwWMqNsQck0N.jpeg');"></a>
                                </div>
                                <div class="product-details float-left">
                                    <h4 class="title text-truncate-2">
                                        <a href="" class="d-block">Apple iMac 4K Retina 21.5 Inch (2017) Quads Core Intel Core i5 (3.4-3.8GHz, 8GB 2400MHz DDR4 Onboard</a>
                                    </h4>
                                    <div class="price-box">
                                        <del class="old-product-price strong-400">16000$</del>
                                        <span class="product-price strong-600">15500$</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="section-title-1 clearfix">
                        <h3 class="heading-5 strong-700 mb-0 float-left">
                            <span class="mr-4">On-sale Products</span>
                        </h3>
                    </div>
                    <div class="pt-3">
                        <div class="mb-4 product-box-3">
                            <div class="clearfix">
                                <div class="product-image float-left">
                                    <a href="" style="background-image:url('http://localhost/shop/public/uploads/jckV7yL9FWHi3kV33RdMNlfOcpibmwWMqNsQck0N.jpeg');"></a>
                                </div>
                                <div class="product-details float-left">
                                    <h4 class="title text-truncate-2">
                                        <a href="" class="d-block">Apple iMac 4K Retina 21.5 Inch (2017) Quads Core Intel Core i5 (3.4-3.8GHz, 8GB 2400MHz DDR4 Onboard</a>
                                    </h4>
                                    <div class="price-box">
                                        <del class="old-product-price strong-400">16000$</del>
                                        <span class="product-price strong-600">15500$</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="mb-4 product-box-3">
                            <div class="clearfix">
                                <div class="product-image float-left">
                                    <a href="" style="background-image:url('http://localhost/shop/public/uploads/jckV7yL9FWHi3kV33RdMNlfOcpibmwWMqNsQck0N.jpeg');"></a>
                                </div>
                                <div class="product-details float-left">
                                    <h4 class="title text-truncate-2">
                                        <a href="" class="d-block">Apple iMac 4K Retina 21.5 Inch (2017) Quads Core Intel Core i5 (3.4-3.8GHz, 8GB 2400MHz DDR4 Onboard</a>
                                    </h4>
                                    <div class="price-box">
                                        <del class="old-product-price strong-400">16000$</del>
                                        <span class="product-price strong-600">15500$</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="mb-4 product-box-3">
                            <div class="clearfix">
                                <div class="product-image float-left">
                                    <a href="" style="background-image:url('http://localhost/shop/public/uploads/jckV7yL9FWHi3kV33RdMNlfOcpibmwWMqNsQck0N.jpeg');"></a>
                                </div>
                                <div class="product-details float-left">
                                    <h4 class="title text-truncate-2">
                                        <a href="" class="d-block">Apple iMac 4K Retina 21.5 Inch (2017) Quads Core Intel Core i5 (3.4-3.8GHz, 8GB 2400MHz DDR4 Onboard</a>
                                    </h4>
                                    <div class="price-box">
                                        <del class="old-product-price strong-400">16000$</del>
                                        <span class="product-price strong-600">15500$</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="mb-4 product-box-3">
                            <div class="clearfix">
                                <div class="product-image float-left">
                                    <a href="" style="background-image:url('http://localhost/shop/public/uploads/jckV7yL9FWHi3kV33RdMNlfOcpibmwWMqNsQck0N.jpeg');"></a>
                                </div>
                                <div class="product-details float-left">
                                    <h4 class="title text-truncate-2">
                                        <a href="" class="d-block">Apple iMac 4K Retina 21.5 Inch (2017) Quads Core Intel Core i5 (3.4-3.8GHz, 8GB 2400MHz DDR4 Onboard</a>
                                    </h4>
                                    <div class="price-box">
                                        <del class="old-product-price strong-400">16000$</del>
                                        <span class="product-price strong-600">15500$</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

    </section>


@endsection
