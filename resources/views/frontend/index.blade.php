@extends('frontend.layouts.app')

@section('content')

    <section class="home-banner-area">
        <div class="container">
            <div class="row no-gutters position-relative">
                <div class="col-lg-3 position-static">
                    <div class="category-sidebar">
                        <div class="all-category">
                            <span>CATEGORIES</span>
                            <a href="{{ route('products') }}">See All ></a>
                        </div>
                        <ul class="categories">
                            @foreach (\App\Category::all() as $key => $category)
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
                            <li class="active">
                                <div class="trend-category-single">
                                    <a href="" class="d-block">
                                        <div class="name">Vehicles</div>
                                        <img class="d-block w-100" src="http://via.placeholder.com/200x300" alt="">
                                    </a>
                                </div>
                            </li>
                            <li>
                                <div class="trend-category-single">
                                    <a href="" class="d-block">
                                        <div class="name">Vehicles</div>
                                        <img class="d-block w-100" src="http://via.placeholder.com/200x300" alt="">
                                    </a>
                                </div>
                            </li>
                            <li>
                                <div class="trend-category-single">
                                    <a href="" class="d-block">
                                        <div class="name">Vehicles</div>
                                        <img class="d-block w-100" src="http://via.placeholder.com/200x300" alt="">
                                    </a>
                                </div>
                            </li>
                            <li>
                                <div class="trend-category-single">
                                    <a href="" class="d-block">
                                        <div class="name">Vehicles</div>
                                        <img class="d-block w-100" src="http://via.placeholder.com/200x300" alt="">
                                    </a>
                                </div>
                            </li>
                            <li>
                                <div class="trend-category-single">
                                    <a href="" class="d-block">
                                        <div class="name">Vehicles</div>
                                        <img class="d-block w-100" src="http://via.placeholder.com/200x300" alt="">
                                    </a>
                                </div>
                            </li>
                            <li>
                                <div class="trend-category-single">
                                    <a href="" class="d-block">
                                        <div class="name">Vehicles</div>
                                        <img class="d-block w-100" src="http://via.placeholder.com/200x300" alt="">
                                    </a>
                                </div>
                            </li>
                        </ul>
                    </div>
                </div>

                <div class="col-lg-2">
                    <div class="flash-deal-box bg-white h-100">
                        <div class="title text-center p-2 gry-bg">
                            <h3 class="heading-6 mb-0">
                                Flash Deal
                                <span class="badge badge-danger">Hot</span>
                            </h3>
                            <div class="countdown countdown--style-1 countdown--style-1-v1" data-countdown-date="07/10/2019" data-countdown-label="show"></div>
                        </div>
                        <div class="flash-content c-scrollbar">
                            <a href="" class="d-block flash-deal-item">
                                <div class="row no-gutters align-items-center">
                                    <div class="col-7">
                                        <img class="d-block w-100" src="http://via.placeholder.com/400x300" alt="">
                                    </div>
                                    <div class="col-5">
                                        <div class="price">
                                            <span class="d-block">$49.99</span>
                                            <del class="d-block">$59.99</del>
                                        </div>
                                    </div>
                                </div>
                            </a>
                            <a href="" class="d-block flash-deal-item">
                                <div class="row no-gutters align-items-center">
                                    <div class="col-7">
                                        <img class="d-block w-100" src="http://via.placeholder.com/400x300" alt="">
                                    </div>
                                    <div class="col-5">
                                        <div class="price">
                                            <span class="d-block">$49.99</span>
                                            <del class="d-block">$59.99</del>
                                        </div>
                                    </div>
                                </div>
                            </a>
                            <a href="" class="d-block flash-deal-item">
                                <div class="row no-gutters align-items-center">
                                    <div class="col-7">
                                        <img class="d-block w-100" src="http://via.placeholder.com/400x300" alt="">
                                    </div>
                                    <div class="col-5">
                                        <div class="price">
                                            <span class="d-block">$49.99</span>
                                            <del class="d-block">$59.99</del>
                                        </div>
                                    </div>
                                </div>
                            </a>
                            <a href="" class="d-block flash-deal-item">
                                <div class="row no-gutters align-items-center">
                                    <div class="col-7">
                                        <img class="d-block w-100" src="http://via.placeholder.com/400x300" alt="">
                                    </div>
                                    <div class="col-5">
                                        <div class="price">
                                            <span class="d-block">$49.99</span>
                                            <del class="d-block">$59.99</del>
                                        </div>
                                    </div>
                                </div>
                            </a>
                            <a href="" class="d-block flash-deal-item">
                                <div class="row no-gutters align-items-center">
                                    <div class="col-7">
                                        <img class="d-block w-100" src="http://via.placeholder.com/400x300" alt="">
                                    </div>
                                    <div class="col-5">
                                        <div class="price">
                                            <span class="d-block">$49.99</span>
                                            <del class="d-block">$59.99</del>
                                        </div>
                                    </div>
                                </div>
                            </a>
                            <a href="" class="d-block flash-deal-item">
                                <div class="row no-gutters align-items-center">
                                    <div class="col-7">
                                        <img class="d-block w-100" src="http://via.placeholder.com/400x300" alt="">
                                    </div>
                                    <div class="col-5">
                                        <div class="price">
                                            <span class="d-block">$49.99</span>
                                            <del class="d-block">$59.99</del>
                                        </div>
                                    </div>
                                </div>
                            </a>
                        </div>
                    </div>
                </div>


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


    <section class="slice gry-bg">
        <div class="container">
            <div class="section-title section-title--style-1">
                <h3 class="section-title-inner heading-4 strong-700 text-capitalize">
                    <span class="mr-4">Flash Deal</span>
                    <small class="countdown countdown-sm d-inline-block" data-countdown-date="10/30/2019" data-countdown-label="hide"></small>
                </h3>
            </div>
            <div class="caorusel-box">
                <div class="slick-carousel" data-slick-items="5" data-slick-lg-items="3"  data-slick-md-items="2" data-slick-sm-items="2" data-slick-xs-items="1">
                    <div class="product-card-2 card card-product m-2 shop-cards shop-tech">
                        <div class="card-body p-0">

                            <div class="card-image">
                                <a href="" class="d-block" style="background-image:url('http://via.placeholder.com/440x500');">
                                </a>
                            </div>

                            <div class="p-3">
                                <div class="price-box">
                                    <del class="old-product-price strong-400">$49.99</del>
                                    <span class="product-price strong-600">$35.99</span>
                                </div>
                                <h2 class="product-title p-0 mt-2">
                                    <a href="">HANQIU 2018 Parka Autumn Winter Warm Outwear Slim Coats Casual Windbreak Jackets Men</a>
                                </h2>
                            </div>
                        </div>
                    </div>
                    <div class="product-card-2 card card-product m-2 shop-cards shop-tech">
                        <div class="card-body p-0">

                            <div class="card-image">
                                <a href="" class="d-block" style="background-image:url('http://via.placeholder.com/440x500');">
                                </a>
                            </div>

                            <div class="p-3">
                                <div class="price-box">
                                    <del class="old-product-price strong-400">$49.99</del>
                                    <span class="product-price strong-600">$35.99</span>
                                </div>
                                <h2 class="product-title p-0 mt-2">
                                    <a href="">HANQIU 2018 Parka Autumn Winter Warm Outwear Slim Coats Casual Windbreak Jackets Men</a>
                                </h2>
                            </div>
                        </div>
                    </div>
                    <div class="product-card-2 card card-product m-2 shop-cards shop-tech">
                        <div class="card-body p-0">

                            <div class="card-image">
                                <a href="" class="d-block" style="background-image:url('http://via.placeholder.com/440x500');">
                                </a>
                            </div>

                            <div class="p-3">
                                <div class="price-box">
                                    <del class="old-product-price strong-400">$49.99</del>
                                    <span class="product-price strong-600">$35.99</span>
                                </div>
                                <h2 class="product-title p-0 mt-2">
                                    <a href="">HANQIU 2018 Parka Autumn Winter Warm Outwear Slim Coats Casual Windbreak Jackets Men</a>
                                </h2>
                            </div>
                        </div>
                    </div>
                    <div class="product-card-2 card card-product m-2 shop-cards shop-tech">
                        <div class="card-body p-0">

                            <div class="card-image">
                                <a href="" class="d-block" style="background-image:url('http://via.placeholder.com/440x500');">
                                </a>
                            </div>

                            <div class="p-3">
                                <div class="price-box">
                                    <del class="old-product-price strong-400">$49.99</del>
                                    <span class="product-price strong-600">$35.99</span>
                                </div>
                                <h2 class="product-title p-0 mt-2">
                                    <a href="">HANQIU 2018 Parka Autumn Winter Warm Outwear Slim Coats Casual Windbreak Jackets Men</a>
                                </h2>
                            </div>
                        </div>
                    </div>
                    <div class="product-card-2 card card-product m-2 shop-cards shop-tech">
                        <div class="card-body p-0">

                            <div class="card-image">
                                <a href="" class="d-block" style="background-image:url('http://via.placeholder.com/440x500');">
                                </a>
                            </div>

                            <div class="p-3">
                                <div class="price-box">
                                    <del class="old-product-price strong-400">$49.99</del>
                                    <span class="product-price strong-600">$35.99</span>
                                </div>
                                <h2 class="product-title p-0 mt-2">
                                    <a href="">HANQIU 2018 Parka Autumn Winter Warm Outwear Slim Coats Casual Windbreak Jackets Men</a>
                                </h2>
                            </div>
                        </div>
                    </div>
                    <div class="product-card-2 card card-product m-2 shop-cards shop-tech">
                        <div class="card-body p-0">

                            <div class="card-image">
                                <a href="" class="d-block" style="background-image:url('http://via.placeholder.com/440x500');">
                                </a>
                            </div>

                            <div class="p-3">
                                <div class="price-box">
                                    <del class="old-product-price strong-400">$49.99</del>
                                    <span class="product-price strong-600">$35.99</span>
                                </div>
                                <h2 class="product-title p-0 mt-2">
                                    <a href="">HANQIU 2018 Parka Autumn Winter Warm Outwear Slim Coats Casual Windbreak Jackets Men</a>
                                </h2>
                            </div>
                        </div>
                    </div>
                    <div class="product-card-2 card card-product m-2 shop-cards shop-tech">
                        <div class="card-body p-0">

                            <div class="card-image">
                                <a href="" class="d-block" style="background-image:url('http://via.placeholder.com/440x500');">
                                </a>
                            </div>

                            <div class="p-3">
                                <div class="price-box">
                                    <del class="old-product-price strong-400">$49.99</del>
                                    <span class="product-price strong-600">$35.99</span>
                                </div>
                                <h2 class="product-title p-0 mt-2">
                                    <a href="">HANQIU 2018 Parka Autumn Winter Warm Outwear Slim Coats Casual Windbreak Jackets Men</a>
                                </h2>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="bg-white py-5">
        <div class="container">
            <div class="section-title-1 clearfix">
                <h3 class="heading-5 strong-700 mb-0 float-left">
                    <span class="mr-4">Best Selling</span>
                </h3>
                <ul class="inline-links float-right">
                    <li class="active"><a target="_blank" rel="">Top 20</a></li>
                    <li><a href="" target="_blank" rel="">Category name</a></li>
                    <li><a href="" target="_blank" rel="">Category name</a></li>
                    <li><a href="" target="_blank" rel="">Category name</a></li>
                </ul>
            </div>
            <div class="caorusel-box">
                <div class="slick-carousel" data-slick-items="3" data-slick-lg-items="3"  data-slick-md-items="2" data-slick-sm-items="2" data-slick-xs-items="1" data-slick-dots="true" data-slick-rows="2">
                    <div class="p-2">
                        <div class="row no-gutters product-box-2">
                            <div class="col-4">
                                <div class="position-relative overflow-hidden h-100">
                                    <a href="" class="d-block product-image h-100" style="background-image:url('http://via.placeholder.com/440x500');">
                                    </a>
                                    <div class="product-btns">
                                        <button class="btn add-wishlist" title="Add to Wishlist" onclick="">
                                            <i class="ion-ios-heart-outline"></i>
                                        </button>
                                        <button class="btn add-compare" title="Add to Compare" onclick="">
                                            <i class="ion-ios-browsers-outline"></i>
                                        </button>
                                        <button class="btn quick-view" title="Quick view" onclick="">
                                            <i class="ion-ios-eye"></i>
                                        </button>
                                    </div>
                                </div>
                            </div>
                            <div class="col-8">
                                <div class="p-3">
                                    <h2 class="product-title mb-3 p-0">
                                        <a href="">HANQIU 2018 Parka Autumn Winter Warm Outwear Slim Coats Casual Windbreak Jackets Men </a>
                                    </h2>
                                    <div class="clearfix">
                                        <div class="price-box float-left">
                                            <del class="old-product-price strong-400">$49.99</del>
                                            <span class="product-price strong-600">$35.99</span>
                                        </div>
                                        <div class="float-right">
                                            <button class="add-to-cart btn" title="Add to Cart" onclick="">
                                                <i class="icon ion-android-cart"></i>
                                            </button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="p-2">
                        <div class="row no-gutters product-box-2">
                            <div class="col-4">
                                <div class="position-relative overflow-hidden h-100">
                                    <a href="" class="d-block product-image h-100" style="background-image:url('http://via.placeholder.com/440x500');">
                                    </a>
                                    <div class="product-btns">
                                        <button class="btn add-wishlist" title="Add to Wishlist" onclick="">
                                            <i class="ion-ios-heart-outline"></i>
                                        </button>
                                        <button class="btn add-compare" title="Add to Compare" onclick="">
                                            <i class="ion-ios-browsers-outline"></i>
                                        </button>
                                        <button class="btn quick-view" title="Quick view" onclick="">
                                            <i class="ion-ios-eye"></i>
                                        </button>
                                    </div>
                                </div>
                            </div>
                            <div class="col-8">
                                <div class="p-3">
                                    <h2 class="product-title mb-3 p-0">
                                        <a href="">HANQIU 2018 Parka Autumn Winter Warm Outwear Slim Coats Casual Windbreak Jackets Men </a>
                                    </h2>
                                    <div class="clearfix">
                                        <div class="price-box float-left">
                                            <del class="old-product-price strong-400">$49.99</del>
                                            <span class="product-price strong-600">$35.99</span>
                                        </div>
                                        <div class="float-right">
                                            <button class="add-to-cart btn" title="Add to Cart" onclick="">
                                                <i class="icon ion-android-cart"></i>
                                            </button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="p-2">
                        <div class="row no-gutters product-box-2">
                            <div class="col-4">
                                <div class="position-relative overflow-hidden h-100">
                                    <a href="" class="d-block product-image h-100" style="background-image:url('http://via.placeholder.com/440x500');">
                                    </a>
                                    <div class="product-btns">
                                        <button class="btn add-wishlist" title="Add to Wishlist" onclick="">
                                            <i class="ion-ios-heart-outline"></i>
                                        </button>
                                        <button class="btn add-compare" title="Add to Compare" onclick="">
                                            <i class="ion-ios-browsers-outline"></i>
                                        </button>
                                        <button class="btn quick-view" title="Quick view" onclick="">
                                            <i class="ion-ios-eye"></i>
                                        </button>
                                    </div>
                                </div>
                            </div>
                            <div class="col-8">
                                <div class="p-3">
                                    <h2 class="product-title mb-3 p-0">
                                        <a href="">HANQIU 2018 Parka Autumn Winter Warm Outwear Slim Coats Casual Windbreak Jackets Men </a>
                                    </h2>
                                    <div class="clearfix">
                                        <div class="price-box float-left">
                                            <del class="old-product-price strong-400">$49.99</del>
                                            <span class="product-price strong-600">$35.99</span>
                                        </div>
                                        <div class="float-right">
                                            <button class="add-to-cart btn" title="Add to Cart" onclick="">
                                                <i class="icon ion-android-cart"></i>
                                            </button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="p-2">
                        <div class="row no-gutters product-box-2">
                            <div class="col-4">
                                <div class="position-relative overflow-hidden h-100">
                                    <a href="" class="d-block product-image h-100" style="background-image:url('http://via.placeholder.com/440x500');">
                                    </a>
                                    <div class="product-btns">
                                        <button class="btn add-wishlist" title="Add to Wishlist" onclick="">
                                            <i class="ion-ios-heart-outline"></i>
                                        </button>
                                        <button class="btn add-compare" title="Add to Compare" onclick="">
                                            <i class="ion-ios-browsers-outline"></i>
                                        </button>
                                        <button class="btn quick-view" title="Quick view" onclick="">
                                            <i class="ion-ios-eye"></i>
                                        </button>
                                    </div>
                                </div>
                            </div>
                            <div class="col-8">
                                <div class="p-3">
                                    <h2 class="product-title mb-3 p-0">
                                        <a href="">HANQIU 2018 Parka Autumn Winter Warm Outwear Slim Coats Casual Windbreak Jackets Men </a>
                                    </h2>
                                    <div class="clearfix">
                                        <div class="price-box float-left">
                                            <del class="old-product-price strong-400">$49.99</del>
                                            <span class="product-price strong-600">$35.99</span>
                                        </div>
                                        <div class="float-right">
                                            <button class="add-to-cart btn" title="Add to Cart" onclick="">
                                                <i class="icon ion-android-cart"></i>
                                            </button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="p-2">
                        <div class="row no-gutters product-box-2">
                            <div class="col-4">
                                <div class="position-relative overflow-hidden h-100">
                                    <a href="" class="d-block product-image h-100" style="background-image:url('http://via.placeholder.com/440x500');">
                                    </a>
                                    <div class="product-btns">
                                        <button class="btn add-wishlist" title="Add to Wishlist" onclick="">
                                            <i class="ion-ios-heart-outline"></i>
                                        </button>
                                        <button class="btn add-compare" title="Add to Compare" onclick="">
                                            <i class="ion-ios-browsers-outline"></i>
                                        </button>
                                        <button class="btn quick-view" title="Quick view" onclick="">
                                            <i class="ion-ios-eye"></i>
                                        </button>
                                    </div>
                                </div>
                            </div>
                            <div class="col-8">
                                <div class="p-3">
                                    <h2 class="product-title mb-3 p-0">
                                        <a href="">HANQIU 2018 Parka Autumn Winter Warm Outwear Slim Coats Casual Windbreak Jackets Men </a>
                                    </h2>
                                    <div class="clearfix">
                                        <div class="price-box float-left">
                                            <del class="old-product-price strong-400">$49.99</del>
                                            <span class="product-price strong-600">$35.99</span>
                                        </div>
                                        <div class="float-right">
                                            <button class="add-to-cart btn" title="Add to Cart" onclick="">
                                                <i class="icon ion-android-cart"></i>
                                            </button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="p-2">
                        <div class="row no-gutters product-box-2">
                            <div class="col-4">
                                <div class="position-relative overflow-hidden h-100">
                                    <a href="" class="d-block product-image h-100" style="background-image:url('http://via.placeholder.com/440x500');">
                                    </a>
                                    <div class="product-btns">
                                        <button class="btn add-wishlist" title="Add to Wishlist" onclick="">
                                            <i class="ion-ios-heart-outline"></i>
                                        </button>
                                        <button class="btn add-compare" title="Add to Compare" onclick="">
                                            <i class="ion-ios-browsers-outline"></i>
                                        </button>
                                        <button class="btn quick-view" title="Quick view" onclick="">
                                            <i class="ion-ios-eye"></i>
                                        </button>
                                    </div>
                                </div>
                            </div>
                            <div class="col-8">
                                <div class="p-3">
                                    <h2 class="product-title mb-3 p-0">
                                        <a href="">HANQIU 2018 Parka Autumn Winter Warm Outwear Slim Coats Casual Windbreak Jackets Men </a>
                                    </h2>
                                    <div class="clearfix">
                                        <div class="price-box float-left">
                                            <del class="old-product-price strong-400">$49.99</del>
                                            <span class="product-price strong-600">$35.99</span>
                                        </div>
                                        <div class="float-right">
                                            <button class="add-to-cart btn" title="Add to Cart" onclick="">
                                                <i class="icon ion-android-cart"></i>
                                            </button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="p-2">
                        <div class="row no-gutters product-box-2">
                            <div class="col-4">
                                <div class="position-relative overflow-hidden h-100">
                                    <a href="" class="d-block product-image h-100" style="background-image:url('http://via.placeholder.com/440x500');">
                                    </a>
                                    <div class="product-btns">
                                        <button class="btn add-wishlist" title="Add to Wishlist" onclick="">
                                            <i class="ion-ios-heart-outline"></i>
                                        </button>
                                        <button class="btn add-compare" title="Add to Compare" onclick="">
                                            <i class="ion-ios-browsers-outline"></i>
                                        </button>
                                        <button class="btn quick-view" title="Quick view" onclick="">
                                            <i class="ion-ios-eye"></i>
                                        </button>
                                    </div>
                                </div>
                            </div>
                            <div class="col-8">
                                <div class="p-3">
                                    <h2 class="product-title mb-3 p-0">
                                        <a href="">HANQIU 2018 Parka Autumn Winter Warm Outwear Slim Coats Casual Windbreak Jackets Men </a>
                                    </h2>
                                    <div class="clearfix">
                                        <div class="price-box float-left">
                                            <del class="old-product-price strong-400">$49.99</del>
                                            <span class="product-price strong-600">$35.99</span>
                                        </div>
                                        <div class="float-right">
                                            <button class="add-to-cart btn" title="Add to Cart" onclick="">
                                                <i class="icon ion-android-cart"></i>
                                            </button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="p-2">
                        <div class="row no-gutters product-box-2">
                            <div class="col-4">
                                <div class="position-relative overflow-hidden h-100">
                                    <a href="" class="d-block product-image h-100" style="background-image:url('http://via.placeholder.com/440x500');">
                                    </a>
                                    <div class="product-btns">
                                        <button class="btn add-wishlist" title="Add to Wishlist" onclick="">
                                            <i class="ion-ios-heart-outline"></i>
                                        </button>
                                        <button class="btn add-compare" title="Add to Compare" onclick="">
                                            <i class="ion-ios-browsers-outline"></i>
                                        </button>
                                        <button class="btn quick-view" title="Quick view" onclick="">
                                            <i class="ion-ios-eye"></i>
                                        </button>
                                    </div>
                                </div>
                            </div>
                            <div class="col-8">
                                <div class="p-3">
                                    <h2 class="product-title mb-3 p-0">
                                        <a href="">HANQIU 2018 Parka Autumn Winter Warm Outwear Slim Coats Casual Windbreak Jackets Men </a>
                                    </h2>
                                    <div class="clearfix">
                                        <div class="price-box float-left">
                                            <del class="old-product-price strong-400">$49.99</del>
                                            <span class="product-price strong-600">$35.99</span>
                                        </div>
                                        <div class="float-right">
                                            <button class="add-to-cart btn" title="Add to Cart" onclick="">
                                                <i class="icon ion-android-cart"></i>
                                            </button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div>

    </section>
    

@endsection
