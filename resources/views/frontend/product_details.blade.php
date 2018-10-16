@extends('frontend.layouts.app')

@section('content')
    <!-- SHOP GRID WRAPPER -->
    <section class="product-details-area">
        <div class="container">

            <div class="bg-white">

                <!-- Product gallery and Description -->
                <div class="row no-gutters cols-xs-space cols-sm-space cols-md-space">
                    <div class="col-lg-6">
                        <div class="gallery-container product-gallery sticky-top">
                            <div id="slideshow" class="gallery-top no-padding bg-transparent"></div>
                            <div id="slideshow_thumbs" class="swiper-js-container gallery-thumbs gallery-thumbs--style-1 mt-4">
                                <div class="swiper-container" data-swiper-items="7" data-swiper-space-between="10" data-swiper-xs-items="3" data-swiper-xs-space-between="10" data-swiper-sm-items="4" data-swiper-sm-space-between="10">
                                    <div class="swiper-wrapper">
                                        @foreach (json_decode($product->photos) as $key => $photo)
                                            <div class="swiper-slide">
                                                <a href="{{ asset($photo) }}" data-desoslide-index="{{ $key }}">
                                                    <img src="{{ asset($photo) }}" alt="Image">
                                                </a>
                                            </div>
                                        @endforeach
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-6">
                        <!-- Product description -->
                        <div class="product-description-wrapper">
                            <!-- Product title -->
                            <h2 class="product-title">
                                {{ $product->name }}
                            </h2>
                            <ul class="breadcrumb">
                                <li><a href="">Home</a></li>
                                <li><a href="">All Categories</a></li>
                                <li><a href="">{{ $product->category->name }}</a></li>
                                <li><a href="">{{ $product->subcategory->name }}</a></li>
                                <li class="active"><a href="">{{ $product->subsubcategory->name }}</a></li>
                            </ul>

                            <div class="row align-items-center">
                                <div class="col-6">
                                    <div class="sold-by">
                                        <small class="mr-2">Sold by: </small>
                                        <a href="">{{ $product->user->name }}</a>
                                    </div>
                                    <!-- Rating stars -->
                                    <!-- <div class="rating">
                                        <span class="star-rating star-rating-sm">
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star-o"></i>
                                            <i class="fa fa-star-o"></i>
                                        </span>
                                        <span class="rating-count">(2 customer reviews)</span>
                                    </div> -->
                                </div>
                                <div class="col-6 text-right">
                                    <ul class="inline-links inline-links--style-1">
                                        <li class="">
                							<span class="badge badge-md badge-pill bg-blue">SKU: #548970</span>
                                        </li>
                                        <li>
                                            <span class="badge badge-md badge-pill bg-green">In stock</span>
                                        </li>
                                    </ul>
                                </div>
                            </div>

                            <div class="row no-gutters mt-4">
                                <div class="col-2">
                                    <div class="product-description-label">Price:</div>
                                </div>
                                <div class="col-10">
                                    <div class="product-price"><small>{{ currency_symbol() }}</small><strong>{{ home_discounted_price($product->unit_price, $product->discount, $product->discount_type) }}</strong><span class="piece">/{{$product->unit}}</span></div>
                                    <div class="product-price-old"><small>{{ currency_symbol() }}</small><strong>{{ home_price($product->unit_price) }}</strong></div>
                                </div>
                            </div>

                            <hr>
                            @foreach (json_decode($product->subsubcategory->options) as $key => $option)

                            @endforeach
                            <div class="row no-gutters">
                                <div class="col-2">
                                    <div class="product-description-label">{{ $option->title }}:</div>
                                </div>
                                <div class="col-10">
                                    <ul class="list-inline checkbox-alphanumeric checkbox-alphanumeric--style-1 mb-2">
                                        @foreach ($option->options as $key => $options)
                                            <li>
                                                <input type="radio" id="{{ $option->name }}-{{ $options }}" name="{{ $option->name }}">
                                                <label for="{{ $option->name }}-{{ $options }}">{{ $options }}</label>
                                            </li>
                                        @endforeach
                                    </ul>
                                </div>
                            </div>

                            <div class="row no-gutters">
                                <div class="col-2">
                                    <div class="product-description-label">Color:</div>
                                </div>
                                <div class="col-10">
                                    <ul class="list-inline checkbox-color mb-1">
                                        @foreach (json_decode($product->colors) as $key => $color)
                                            <li>
                                                <input type="radio" id="color-{{ $key }}" name="color">
                                                <label style="background: {{ $color }};" for="color-{{ $key }}" data-toggle="tooltip"></label>
                                            </li>
                                        @endforeach
                                    </ul>
                                </div>
                            </div>

                            <hr>

                            <!-- Quantity + Add to cart -->
                            <div class="row no-gutters pb-3">
                                <div class="col-2">
                                    <div class="product-description-label">Quantity:</div>
                                </div>
                                <div class="col-10">
                                    <div class="product-quantity d-flex align-items-center">
                                        <div class="input-group input-group--style-2 pr-3" style="width: 160px;">
                                            <span class="input-group-btn">
                                                <button class="btn btn-number" type="button" data-type="minus" data-field="quantity[1]" disabled="disabled">
                                                    <i class="ion-minus"></i>
                                                </button>
                                            </span>
                                            <input type="text" name="quantity[1]" class="form-control input-number text-center" placeholder="3" value="1" min="1" max="10">
                                            <span class="input-group-btn">
                                                <button class="btn btn-number" type="button" data-type="plus" data-field="quantity[1]">
                                                     <i class="ion-plus"></i>
                                                </button>
                                            </span>
                                        </div>
                                        <div class="avialable-amount">(1298 pc available)</div>
                                    </div>
                                </div>
                            </div>



                            <div class="d-table width-100 mt-3">
                                <div class="d-table-cell">
                                    <!-- Add to cart button -->
                                    <button type="button" class="btn btn-base-1 btn-icon-left">
                                        <i class="icon ion-bag"></i> Add to cart
                                    </button>
                                    <!-- Add to wishlist button -->
                                    <button type="button" class="btn btn-outline btn-base-1 btn-icon-left">
                                        <i class="icon ion-ios-heart-outline"></i> Add to wishlist
                                    </button>
                                    <!-- Add to compare button -->
                                    <button type="button" class="btn btn-outline btn-base-1 btn-icon-left">
                                        <i class="icon ion-ios-loop"></i> Add to compare
                                    </button>
                                </div>
                            </div>
                            <div class="row no-gutters mt-4">
                                <div class="col-2">
                                    <div class="product-description-label">Share:</div>
                                </div>
                                <div class="col-10">
                                    <ul class="social-media social-media--style-1-v4">
                                        <li>
                                            <a href="#" class="facebook" target="_blank" data-toggle="tooltip" data-original-title="Share this page on facebook">
                                                <i class="fa fa-facebook"></i>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="#" class="twitter" target="_blank" data-toggle="tooltip" data-original-title="Share this page on twitter">
                                                <i class="fa fa-twitter"></i>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="#" class="google-plus" target="_blank" data-toggle="tooltip" data-original-title="Share this page on google-plus">
                                                <i class="fa fa-google-plus"></i>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="#" class="instagram" target="_blank" data-toggle="tooltip" data-original-title="Share this page on instagram">
                                                <i class="fa fa-instagram"></i>
                                            </a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="gry-bg">
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
                            <div class="title">Sold By</div>
                            <a href="" class="name d-block">{{ $product->user->name }}</a>
                            <div class="location">China (Guangdong)</div>
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
                                <a href="" class="d-block store-btn">Visit Store</a>
                            </div>
                            <div class="col">
                                <button type="button" name="button" class="follow-btn">Follow</button>
                            </div>
                        </div>
                    </div>
                    <div class="seller-category-box bg-white seller-side-box mb-3">
                        <div class="box-title">
                            This Seller's Categories
                        </div>
                        <div class="box-content">
                            <div class="category-accordion">
                                @foreach (\App\Product::where('user_id', $product->user_id)->select('category_id')->distinct()->get() as $key => $category)
                                    <div class="single-category">
                                        <button class="btn w-100 category-name" type="button" data-toggle="collapse" data-target="#categoryOne" aria-expanded="true">
                                        {{ App\Category::findOrFail($category->category_id)->name }}
                                        </button>

                                        <div id="categoryOne" class="collapse show">
                                            @foreach (\App\Product::where('user_id', $product->user_id)->where('category_id', $category->category_id)->select('subcategory_id')->distinct()->get() as $key => $subcategory)
                                                <div class="single-sub-category">
                                                    <button class="btn w-100 sub-category-name" type="button" data-toggle="collapse" data-target="#subCategoryOne" aria-expanded="true">
                                                    {{ App\SubCategory::findOrFail($subcategory->subcategory_id)->name }}
                                                    </button>
                                                    <div id="subCategoryOne" class="collapse show">
                                                        <ul class="sub-sub-category-list">
                                                            @foreach (\App\Product::where('user_id', $product->user_id)->where('category_id',            $category->category_id)->where('subcategory_id', $subcategory->subcategory_id)->select('subsubcategory_id')->distinct()->get() as $key => $subsubcategory)
                                                                <li><a href="">{{ App\SubSubCategory::findOrFail($subsubcategory->subsubcategory_id)->name }}</a></li>
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
                    <div class="seller-top-products-box bg-white seller-side-box">
                        <div class="box-title">
                            Top Selling Products From This Seller
                        </div>
                        <div class="box-content">
                            <div class="product-box-1 mb-3">
                                <div class="block product">
                                    <div class="block-image">
                                        <div class="view view-first">
                                            <a href="#">
                                                <img src="assets/images/prv/shop/electronics/img-8.png" class="img-fluid img-center img-primary">
                                            </a>
                                        </div>
                                    </div>
                                    <div class="text-center pb-2">
                                        <h2 class="heading heading-6 product-title text-normal strong-500">
                                            <a href="#">Headphones</a>
                                        </h2>
                                        <div class="price-wrapper">
                                            <span class="price heading-6 c-gray-light strong-400">$<span class="price-value">500.00</span></span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="product-box-1 mb-3">
                                <div class="block product">
                                    <div class="block-image">
                                        <div class="view view-first">
                                            <a href="#">
                                                <img src="assets/images/prv/shop/electronics/img-8.png" class="img-fluid img-center img-primary">
                                            </a>
                                        </div>
                                    </div>
                                    <div class="text-center pb-2">
                                        <h2 class="heading heading-6 product-title text-normal strong-500">
                                            <a href="#">Headphones</a>
                                        </h2>
                                        <div class="price-wrapper">
                                            <span class="price heading-6 c-gray-light strong-400">$<span class="price-value">500.00</span></span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-9">
                    <div class="product-desc-tab bg-white">
                        <div class="tabs tabs--style-2">
                            <ul class="nav nav-tabs justify-content-center sticky-top bg-white">
                                <li class="nav-item">
                                    <a href="#tab_default_1" data-toggle="tab" class="nav-link text-uppercase strong-600 active show">Description</a>
                                </li>
                                <li class="nav-item">
                                    <a href="#tab_default_2" data-toggle="tab" class="nav-link text-uppercase strong-600">Videos</a>
                                </li>
                            </ul>

                            <div class="tab-content pt-0">
                                <div class="tab-pane active show" id="tab_default_1">
                                    <div class="py-2 px-4">
                                        <div class="row">
                                            <div class="col-md-6">
                                                <table class="table table-bordered">
                                                    <tbody>
                                                        <tr>
                                                            <td><strong>Sizes</strong></td>
                                                            <td>M, L, XL, XXL</td>
                                                        </tr>
                                                        <tr>
                                                            <td><strong>Prodused in</strong></td>
                                                            <td>USA</td>
                                                        </tr>
                                                        <tr>
                                                            <td><strong>Material</strong></td>
                                                            <td>plastic, textile</td>
                                                        </tr>
                                                        <tr>
                                                            <td><strong>Colors</strong></td>
                                                            <td>red, black, grey</td>
                                                        </tr>
                                                        <tr>
                                                            <td><strong>Dimension</strong></td>
                                                            <td>20x40x33</td>
                                                        </tr>
                                                    </tbody>
                                                </table>
                                            </div>

                                            <div class="col-md-6">
                                                <table class="table table-no-border">
                                                    <tbody>
                                                        <tr>
                                                            <td><strong>Sizes</strong></td>
                                                            <td>M, L, XL, XXL</td>
                                                        </tr>
                                                        <tr>
                                                            <td><strong>Prodused in</strong></td>
                                                            <td>USA</td>
                                                        </tr>
                                                        <tr>
                                                            <td><strong>Material</strong></td>
                                                            <td>plastic, textile</td>
                                                        </tr>
                                                        <tr>
                                                            <td><strong>Colors</strong></td>
                                                            <td>red, black, grey</td>
                                                        </tr>
                                                        <tr>
                                                            <td><strong>Dimension</strong></td>
                                                            <td>20x40x33</td>
                                                        </tr>
                                                    </tbody>
                                                </table>
                                            </div>
                                        </div>

                                        <span class="space-md-md"></span>

                                        <h3 class="heading heading-6 strong-600 text-uppercase">
                                            Strength
                                        </h3>
                                        <p>
                                            Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur pellentesque neque eget diam posuere porta. Quisque ut nulla at nunc vehicula lacinia. Proin adipiscing porta tellus, ut feugiat nibh adipiscing sit amet.
                                        </p>

                                        <span class="space-md-md"></span>

                                        <h3 class="heading heading-6 strong-600 text-uppercase">
                                            Flexibility
                                        </h3>
                                        <p>
                                            Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur pellentesque neque eget diam posuere porta. Quisque ut nulla at nunc vehicula lacinia. Proin adipiscing porta tellus, ut feugiat nibh adipiscing sit amet.
                                        </p>

                                        <span class="space-md-md"></span>

                                        <h3 class="heading heading-6 strong-600 text-uppercase">
                                            Emotion
                                        </h3>
                                        <p>
                                            Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur pellentesque neque eget diam posuere porta. Quisque ut nulla at nunc vehicula lacinia. Proin adipiscing porta tellus, ut feugiat nibh adipiscing sit amet.
                                        </p>
                                    </div>

                                </div>

                                <div class="tab-pane" id="tab_default_2">
                                    <div class="fluid-paragraph py-2">
                                        <!-- 16:9 aspect ratio -->
                                        <div class="embed-responsive embed-responsive-16by9 mb-5">
                                            <iframe class="embed-responsive-item" src="https://www.youtube.com/embed/4nMz2mDBd-0?rel=0&amp;controls=0&amp;showinfo=0"></iframe>
                                        </div>

                                        <!-- 16:9 aspect ratio -->
                                        <div class="embed-responsive embed-responsive-16by9">
                                            <iframe class="embed-responsive-item" src="https://www.youtube.com/embed/4nMz2mDBd-0?rel=0&amp;controls=0&amp;showinfo=0"></iframe>
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
