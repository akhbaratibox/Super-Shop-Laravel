@extends('frontend.layouts.app')

@section('content')

<section class="gry-bg py-4">
        <div class="container">
            <div class="row">
                <div class="col">
                    <div class="text-center">
                        <img height="100" src="{{ asset($shop->logo) }}" alt="Shop Logo">
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="seller-shop-menu-bar">
        <div class="container">
            <div class="row">
                <div class="col">
                    <div class="seller-shop-menu text-center">
                        <ul class="inline-links">
                            <li class="active"><a href="">Store Home</a></li>
                            <li><a href="">New Arrival</a></li>
                            <li><a href="">Top Selling</a></li>
                            <li><a href="">All Products</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="gry-bg">
        <div class="home-slide">
            <div class="slick-carousel" data-slick-arrows="true" data-slick-dots="true">
                @foreach (json_decode($shop->sliders) as $key => $slide)
                    <div class="">
                        <img class="d-block w-100" src="{{ asset($slide) }}" alt="{{ $key }} slide" style="max-height:300px;">
                    </div>
                @endforeach
            </div>
        </div>
    </section>
    <section class="slice sct-color-1">
        <div class="container">
            <div class="section-title section-title--style-1 text-center mb-5">
                <h3 class="section-title-inner heading-3 strong-600">
                    Featured Products
                </h3>
            </div>
            <div class="row">
                <div class="col-10 offset-1 col-lg-8 offset-lg-2">
                    <div class="caorusel-box">
                        <div class="slick-carousel center-mode" data-slick-items="3" data-slick-lg-items="3"  data-slick-md-items="3" data-slick-sm-items="1" data-slick-xs-items="1" data-slick-center="true">
                            @foreach ($shop->user->products->where('featured', 1) as $key => $product)
                                <div class="">
                                    <div class="product-card-2 card card-product m-3 shop-cards shop-tech">
                                        <div class="card-body p-0">

                                            <div class="card-image">
                                                <a href="{{ route('product', $product->slug) }}" class="d-block" style="background-image:url('{{ asset(json_decode($product->photos)[0]) }}');">
                                                </a>
                                            </div>

                                            <div class="p-3">
                                                <div class="price-box">
                                                    <del class="old-product-price strong-400">{{ home_base_price($product->id) }}</del>
                                                    <span class="product-price strong-600">{{ home_discounted_base_price($product->id) }}</span>
                                                </div>
                                                <h2 class="product-title p-0 mt-2">
                                                    <a href="{{ route('product', $product->slug) }}">{{ $product->name }}</a>
                                                </h2>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            @endforeach
                        </div>
                    </div>
                </div>
            </div>


        </div>
    </section>


    <section class="gry-bg pt-4">
        <div class="container">
            <div class="row">
                <div class="col-lg-3">
                    <div class="seller-info-box mb-3">
                        <div class="sold-by position-relative">
                            <div class="position-absolute medal-badge">
                                <svg version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" xml:space="preserve" viewBox="0 0 287.5 442.2">
                                    <polygon style="fill:#F8B517;" points="223.4,442.2 143.8,376.7 64.1,442.2 64.1,215.3 223.4,215.3 "/>
                                    <circle style="fill:#FBD303;" cx="143.8" cy="143.8" r="143.8"/>
                                    <circle style="fill:#F8B517;" cx="143.8" cy="143.8" r="93.6"/>
                                    <polygon style="fill:#FCFCFD;" points="143.8,55.9 163.4,116.6 227.5,116.6 175.6,154.3 195.6,215.3 143.8,177.7 91.9,215.3 111.9,154.3
                                    60,116.6 124.1,116.6 "/>
                                </svg>
                            </div>
                            <div class="title">Seller Info</div>
                            <a href="" class="name d-block">{{ $shop->name }}</a>
                            <div class="location">{{ $shop->address }}</div>
                            <div class="rating text-center d-block">
                                <span class="star-rating star-rating-sm d-block">
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star-o"></i>
                                    <i class="fa fa-star-o"></i>
                                </span>
                                <span class="rating-count d-block ml-0">(2 customer reviews)</span>
                            </div>
                        </div>
                        <div class="row no-gutters">
                            <div class="col">
                                <ul class="social-media social-media--style-1-v4 text-center">
                                    <li>
                                        <a href="{{ $shop->facebook }}" class="facebook" target="_blank" data-toggle="tooltip" data-original-title="Facebook">
                                            <i class="fa fa-facebook"></i>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="{{ $shop->google }}" class="google" target="_blank" data-toggle="tooltip" data-original-title="Google">
                                            <i class="fa fa-google"></i>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="{{ $shop->twitter }}" class="twitter" target="_blank" data-toggle="tooltip" data-original-title="Twitter">
                                            <i class="fa fa-twitter"></i>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="{{ $shop->youtube }}" class="youtube" target="_blank" data-toggle="tooltip" data-original-title="Youtube">
                                            <i class="fa fa-youtube"></i>
                                        </a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="seller-category-box bg-white sidebar-box mb-3">
                        <div class="box-title">
                            This Seller's Categories
                        </div>
                        <div class="box-content">
                            <div class="category-accordion">
                                @foreach (\App\Product::where('user_id', $shop->user->id)->select('category_id')->distinct()->get() as $key => $category)
                                    <div class="single-category">
                                        <button class="btn w-100 category-name" type="button" data-toggle="collapse" data-target="#category-{{ $key }}" aria-expanded="true">
                                        {{ App\Category::findOrFail($category->category_id)->name }}
                                        </button>

                                        <div id="category-{{ $key }}" class="collapse show">
                                            @foreach (\App\Product::where('user_id', $shop->user->id)->where('category_id', $category->category_id)->select('subcategory_id')->distinct()->get() as $subcategory)
                                                <div class="single-sub-category">
                                                    <button class="btn w-100 sub-category-name" type="button" data-toggle="collapse" data-target="#subCategory-{{ $subcategory->subcategory_id }}" aria-expanded="true">
                                                    {{ App\SubCategory::findOrFail($subcategory->subcategory_id)->name }}
                                                    </button>
                                                    <div id="subCategory-{{ $subcategory->subcategory_id }}" class="collapse show">
                                                        <ul class="sub-sub-category-list">
                                                            @foreach (\App\Product::where('user_id', $shop->user->id)->where('category_id',            $category->category_id)->where('subcategory_id', $subcategory->subcategory_id)->select('subsubcategory_id')->distinct()->get() as $subsubcategory)
                                                                <li><a href="{{ route('products.subsubcategory', $subsubcategory->subsubcategory_id) }}">{{ App\SubSubCategory::findOrFail($subsubcategory->subsubcategory_id)->name }}</a></li>
                                                            @endforeach
                                                    </div>
                                                </div>
                                            @endforeach
                                        </div>
                                    </div>
                                @endforeach
                            </div>
                        </div>
                    </div>
                    <div class="seller-top-products-box bg-white sidebar-box mb-4">
                        <div class="box-title">
                            Brands
                        </div>
                        <div class="box-content">
                            <div class="seller-brands">
                        		<ul class="seller-brand-list">
                        			<li class="brand-item">
                                        <a href=""><img src="assets/images/brands/1.jpg" class="img-fluid"></a>
                                    </li>
                        			<li class="brand-item">
                                        <a href=""><img src="assets/images/brands/2.jpg" class="img-fluid"></a>
                                    </li>
                        			<li class="brand-item">
                                        <a href=""><img src="assets/images/brands/3.jpg" class="img-fluid"></a>
                                    </li>
                        			<li class="brand-item">
                                        <a href=""><img src="assets/images/brands/4.jpg" class="img-fluid"></a>
                                    </li>
                        			<li class="brand-item">
                                        <a href=""><img src="assets/images/brands/1.jpg" class="img-fluid"></a>
                                    </li>
                        			<li class="brand-item">
                                        <a href=""><img src="assets/images/brands/2.jpg" class="img-fluid"></a>
                                    </li>
                        			<li class="brand-item">
                                        <a href=""><img src="assets/images/brands/3.jpg" class="img-fluid"></a>
                                    </li>
                        			<li class="brand-item">
                                        <a href=""><img src="assets/images/brands/4.jpg" class="img-fluid"></a>
                                    </li>
                        			<li class="brand-item">
                                        <a href=""><img src="assets/images/brands/1.jpg" class="img-fluid"></a>
                                    </li>
                        			<li class="brand-item">
                                        <a href=""><img src="assets/images/brands/2.jpg" class="img-fluid"></a>
                                    </li>
                        			<li class="brand-item">
                                        <a href=""><img src="assets/images/brands/3.jpg" class="img-fluid"></a>
                                    </li>
                        			<li class="brand-item">
                                        <a href=""><img src="assets/images/brands/4.jpg" class="img-fluid"></a>
                                    </li>
                        		</ul>
                        	</div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-9">
                    <h4 class="heading-5 strong-600 border-bottom pb-3 mb-4">New Arrival Products</h4>
                    <div class="product-list row">
                        @php
                            $products = \App\Product::where('user_id', $shop->user->id)->where('created_at', '>=' , date('Y-m-d', strtotime('-10days')))->paginate(6);
                        @endphp
                        @foreach ($products as $key => $product)
                            <div class="col-lg-4">
                                <div class="card product-box-1 mb-3">
                                    <div class="card-image">
                                        <a href="" class="d-block" style="background-image:url('{{ asset(json_decode($product->photos)[0]) }}');" tabindex="0">
                                        </a>
                                    </div>
                                    <div class="card-body p-0">
                                        <div class="title p-3">
                                            <a href="{{ route('product', $product->slug) }}">{{ $product->name }}</a>
                                        </div>
                                        <div class="price-bar row no-gutters">
                                            <div class="price col-8">
                                                <del class="old-product-price strong-600">{{ home_base_price($product->id) }}</del>
                                                <span class="product-price strong-600">{{ home_discounted_base_price($product->id) }}</span>
                                            </div>
                                            <div class="col-4">
                                                <button class="add-wishlist" title="Add to Wishlist" onclick="addToWishList({{ $product->id }})">
                                                    <i class="ion-ios-heart-outline"></i>
                                                </button>
                                                <button class="add-compare" title="Add to Compare" onclick="addToCompare({{ $product->id }})">
                                                    <i class="ion-ios-browsers-outline"></i>
                                                </button>
                                            </div>
                                        </div>
                                        <div class="cart-add">
                                            <button type="button" class=" btn btn-block btn-icon-left" onclick="showAddToCartModal({{ $product->id }})">
                                                <i class="icon ion-android-cart"></i>Add to cart
                                            </button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        @endforeach
                    </div>
                    <div class="row">
                        <div class="col">
                            <div class="products-pagination my-5">
                                <nav aria-label="Center aligned pagination">
                                    <ul class="pagination justify-content-center">
                                        {{ $products->links() }}
                                    </ul>
                                </nav>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>


@endsection
