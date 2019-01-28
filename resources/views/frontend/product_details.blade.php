@extends('frontend.layouts.app')

@section('content')
    <!-- SHOP GRID WRAPPER -->
    <section class="product-details-area">
        <div class="container">

            <div class="bg-white">

                <!-- Product gallery and Description -->
                <div class="row no-gutters cols-xs-space cols-sm-space cols-md-space">
                    <div class="col-lg-6">
                        <div class="product-gal sticky-top d-flex flex-row-reverse">
                            <div class="product-gal-img">
                                <img class="xzoom img-fluid" src="{{ asset(json_decode($product->photos)[0]) }}" xoriginal="{{ asset(json_decode($product->photos)[0]) }}" />
                            </div>
                            <div class="product-gal-thumb">
                                <div class="xzoom-thumbs">
                                    @foreach (json_decode($product->photos) as $key => $photo)
                                        <a href="{{ asset($photo) }}">
                                            <img class="xzoom-gallery" width="80" src="{{ asset($photo) }}"  @if($key == 0) xpreview="{{ asset($photo) }}" @endif>
                                        </a>
                                    @endforeach
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
                                <li><a href="{{ route('home') }}">{{__('Home')}}</a></li>
                                <li><a href="{{ route('categories.all') }}">{{__('All Categories')}}</a></li>
                                <li><a href="{{ route('products.category', $product->category_id) }}">{{ $product->category->name }}</a></li>
                                <li><a href="{{ route('products.subcategory', $product->subcategory_id) }}">{{ $product->subcategory->name }}</a></li>
                                <li class="active"><a href="{{ route('products.subsubcategory', $product->subsubcategory_id) }}">{{ $product->subsubcategory->name }}</a></li>
                            </ul>

                            <div class="row align-items-center">
                                <div class="col-6">
                                    <div class="sold-by">
                                        <small class="mr-2">{{__('Sold by')}}: </small>
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
                                        @php
                                            $qty = 0;
                                            foreach (json_decode($product->variations) as $key => $variation) {
                                                $qty += $variation->qty;
                                            }
                                        @endphp
                                        @if(count(json_decode($product->variations, true)) >= 1)
                                            @if ($qty > 0)
                                                <li>
                                                    <span class="badge badge-md badge-pill bg-green">{{__('In stock')}}</span>
                                                </li>
                                            @else
                                                <li>
                                                    <span class="badge badge-md badge-pill bg-red">{{__('Out of stock')}}</span>
                                                </li>
                                            @endif
                                        @endif
                                    </ul>
                                </div>
                            </div>

                            @if(home_price($product->id) != home_discounted_price($product->id))

                                <div class="row no-gutters mt-4">
                                    <div class="col-2">
                                        <div class="product-description-label">{{__('Price')}}:</div>
                                    </div>
                                    <div class="col-10">
                                        <div class="product-price-old">
                                            <del>
                                                {{ home_price($product->id) }}
                                                <span>/{{ $product->unit }}</span>
                                            </del>
                                        </div>
                                    </div>
                                </div>

                                <div class="row no-gutters mt-3">
                                    <div class="col-2">
                                        <div class="product-description-label mt-1">{{__('Discount Price')}}:</div>
                                    </div>
                                    <div class="col-10">
                                        <div class="product-price">
                                            <strong>
                                                {{ home_discounted_price($product->id) }}
                                            </strong>
                                            <span class="piece">/{{ $product->unit }}</span>
                                        </div>
                                    </div>
                                </div>
                            @else
                                <div class="row no-gutters mt-3">
                                    <div class="col-2">
                                        <div class="product-description-label">{{__('Price')}}:</div>
                                    </div>
                                    <div class="col-10">
                                        <div class="product-price">
                                            <strong>
                                                {{ home_discounted_price($product->id) }}
                                            </strong>
                                            <span class="piece">/{{ $product->unit }}</span>
                                        </div>
                                    </div>
                                </div>
                            @endif

                            <hr>

                            <form id="option-choice-form">
                                @csrf
                                <input type="hidden" name="id" value="{{ $product->id }}">

                                @foreach (json_decode($product->choice_options) as $key => $choice)

                                <div class="row no-gutters">
                                    <div class="col-2">
                                        <div class="product-description-label mt-2 ">{{ $choice->title }}:</div>
                                    </div>
                                    <div class="col-10">
                                        <ul class="list-inline checkbox-alphanumeric checkbox-alphanumeric--style-1 mb-2">
                                            @foreach ($choice->options as $key => $option)
                                                <li>
                                                    <input type="radio" id="{{ $choice->name }}-{{ $option }}" name="{{ $choice->name }}" value="{{ $option }}">
                                                    <label for="{{ $choice->name }}-{{ $option }}">{{ $option }}</label>
                                                </li>
                                            @endforeach
                                        </ul>
                                    </div>
                                </div>

                                @endforeach

                                @if (count(json_decode($product->colors)) > 0)
                                    <div class="row no-gutters">
                                        <div class="col-2">
                                            <div class="product-description-label mt-2">{{__('Color')}}:</div>
                                        </div>
                                        <div class="col-10">
                                            <ul class="list-inline checkbox-color mb-1">
                                                @foreach (json_decode($product->colors) as $key => $color)
                                                    <li>
                                                        <input type="radio" id="{{ $product->id }}-color-{{ $key }}" name="color" value="{{ $color }}">
                                                        <label style="background: {{ $color }};" for="{{ $product->id }}-color-{{ $key }}" data-toggle="tooltip"></label>
                                                    </li>
                                                @endforeach
                                            </ul>
                                        </div>
                                    </div>

                                    <hr>
                                @endif

                                <!-- Quantity + Add to cart -->
                                <div class="row no-gutters">
                                    <div class="col-2">
                                        <div class="product-description-label mt-2">{{__('Quantity')}}:</div>
                                    </div>
                                    <div class="col-10">
                                        <div class="product-quantity d-flex align-items-center">
                                            <div class="input-group input-group--style-2 pr-3" style="width: 160px;">
                                                <span class="input-group-btn">
                                                    <button class="btn btn-number" type="button" data-type="minus" data-field="quantity" disabled="disabled">
                                                        <i class="la la-minus"></i>
                                                    </button>
                                                </span>
                                                <input type="text" name="quantity" class="form-control input-number text-center" placeholder="1" value="1" min="1" max="10">
                                                <span class="input-group-btn">
                                                    <button class="btn btn-number" type="button" data-type="plus" data-field="quantity">
                                                        <i class="la la-plus"></i>
                                                    </button>
                                                </span>
                                            </div>
                                            @if(count(json_decode($product->variations, true)) >= 1)
                                                <div class="avialable-amount">({{ $qty }} pc available)</div>
                                            @endif
                                        </div>
                                    </div>
                                </div>

                                <hr>

                                <div class="row no-gutters pb-3 d-none" id="chosen_price_div">
                                    <div class="col-2">
                                        <div class="product-description-label">{{__('Total Price')}}:</div>
                                    </div>
                                    <div class="col-10">
                                        <div class="product-price">
                                            <strong id="chosen_price">

                                            </strong>
                                        </div>
                                    </div>
                                </div>

                            </form>

                            <div class="d-table width-100 mt-3">
                                <div class="d-table-cell">
                                    <!-- Add to cart button -->
                                    <button type="button" class="btn btn-base-1 btn-icon-left" onclick="addToCart()">
                                        <i class="icon ion-bag"></i> Add to cart
                                    </button>
                                    <!-- Add to wishlist button -->
                                    <button type="button" class="btn btn-outline btn-base-1 btn-icon-left" onclick="addToWishList({{ $product->id }})">
                                        <i class="icon ion-ios-heart-outline"></i> Add to wishlist
                                    </button>
                                    <!-- Add to compare button -->
                                    <button type="button" class="btn btn-outline btn-base-1 btn-icon-left" onclick="addToCompare({{ $product->id }})">
                                        <i class="icon ion-ios-loop"></i> Add to compare
                                    </button>
                                </div>
                            </div>

                            <hr class="mt-4">
                            <div class="row no-gutters mt-3">
                                <div class="col-2">
                                    <div class="product-description-label alpha-6">Return Policy:</div>
                                </div>
                                <div class="col-10">
                                    Returns accepted if product not as described, buyer pays return shipping fee; or keep the product & agree refund with seller. <a href="{{ route('returnpolicy') }}" class="ml-2">View details</a>
                                </div>
                            </div>
                            <div class="row no-gutters mt-3">
                                <div class="col-2">
                                    <div class="product-description-label alpha-6">Seller Guarantees:</div>
                                </div>
                                <div class="col-10">
                                    On-time Delivery <a href="" class="ml-2">{{__('View details')}}</a>
                                </div>
                            </div>
                            <div class="row no-gutters mt-3">
                                <div class="col-2">
                                    <div class="product-description-label alpha-6">Payment:</div>
                                </div>
                                <div class="col-10">
                                    <ul class="inline-links">
                                        <li>
                                            <img src="{{ asset('frontend/images/icons/cards/visa.png') }}" width="30" class="">
                                        </li>
                                        <li>
                                            <img src="{{ asset('frontend/images/icons/cards/mastercard.png') }}" width="30" class="">
                                        </li>
                                        <li>
                                            <img src="{{ asset('frontend/images/icons/cards/maestro.png') }}" width="30" class="">
                                        </li>
                                        <li>
                                            <img src="{{ asset('frontend/images/icons/cards/paypal.png') }}" width="30" class="">
                                        </li>
                                    </ul>
                                </div>
                            </div>
                            <div class="row no-gutters mt-3">
                                <div class="col-2">
                                    <img src="{{ asset('frontend/images/icons/buyer-protection.png') }}" width="40" class="">
                                </div>
                                <div class="col-10">
                                    <div class="heading-6 strong-700 text-info d-inline-block">Buyer protection</div><a href="" class="ml-2">View details</a>
                                    <ul class="list-symbol--1 pl-4 mb-0 mt-2">
                                        <li><strong>Full Refund</strong> if you don't receive your order</li>
                                        <li><strong>Full or Partial Refund</strong>, if the item is not as described</li>
                                    </ul>
                                </div>
                            </div>

                            <hr class="mt-4">
                            <div class="row no-gutters mt-4">
                                <div class="col-2">
                                    <div class="product-description-label mt-2">Share:</div>
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
                <div class="col-xl-3 order-2 order-xl-0 d-none d-xl-block">
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
                            @if($product->added_by == 'seller')
                                <a href="{{ route('shop.visit', $product->user->shop->slug) }}" class="name d-block">{{ $product->user->shop->name }}</a>
                                <div class="location">{{ $product->user->shop->address }}</div>
                            @else
                                <a class="name d-block">{{ $product->user->name }}</a>
                            @endif
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
                        <div class="row no-gutters align-items-center">
                            @if($product->added_by == 'seller')
                                <div class="col">
                                    <a href="{{ route('shop.visit', $product->user->shop->slug) }}" class="d-block store-btn">Visit Store</a>
                                </div>
                                <div class="col">
                                    <ul class="social-media social-media--style-1-v4 text-center">
                                        <li>
                                            <a href="{{ $product->user->shop->facebook }}" class="facebook" target="_blank" data-toggle="tooltip" data-original-title="Facebook">
                                                <i class="fa fa-facebook"></i>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="{{ $product->user->shop->google }}" class="google" target="_blank" data-toggle="tooltip" data-original-title="Google">
                                                <i class="fa fa-google"></i>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="{{ $product->user->shop->twitter }}" class="twitter" target="_blank" data-toggle="tooltip" data-original-title="Twitter">
                                                <i class="fa fa-twitter"></i>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="{{ $product->user->shop->youtube }}" class="youtube" target="_blank" data-toggle="tooltip" data-original-title="Youtube">
                                                <i class="fa fa-youtube"></i>
                                            </a>
                                        </li>
                                    </ul>
                                </div>
                            @endif
                        </div>
                    </div>
                    <div class="seller-category-box bg-white sidebar-box mb-3">
                        <div class="box-title">
                            This Seller's Categories
                        </div>
                        <div class="box-content">
                            <div class="category-accordion">
                                @foreach (\App\Product::where('user_id', $product->user_id)->select('category_id')->distinct()->get() as $key => $category)
                                    <div class="single-category">
                                        <button class="btn w-100 category-name" type="button" data-toggle="collapse" data-target="#category-{{ $key }}" aria-expanded="true">
                                        {{ App\Category::findOrFail($category->category_id)->name }}
                                        </button>

                                        <div id="category-{{ $key }}" class="collapse show">
                                            @foreach (\App\Product::where('user_id', $product->user_id)->where('category_id', $category->category_id)->select('subcategory_id')->distinct()->get() as $subcategory)
                                                <div class="single-sub-category">
                                                    <button class="btn w-100 sub-category-name" type="button" data-toggle="collapse" data-target="#subCategory-{{ $subcategory->subcategory_id }}" aria-expanded="true">
                                                    {{ App\SubCategory::findOrFail($subcategory->subcategory_id)->name }}
                                                    </button>
                                                    <div id="subCategory-{{ $subcategory->subcategory_id }}" class="collapse show">
                                                        <ul class="sub-sub-category-list">
                                                            @foreach (\App\Product::where('user_id', $product->user_id)->where('category_id',            $category->category_id)->where('subcategory_id', $subcategory->subcategory_id)->select('subsubcategory_id')->distinct()->get() as $subsubcategory)
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
                    <div class="seller-top-products-box bg-white sidebar-box mb-3">
                        <div class="box-title">
                            {{__('Top Selling Products From This Seller')}}
                        </div>
                        <div class="box-content">
                            @foreach (\App\Product::where('user_id', $product->user_id)->orderBy('num_of_sale', 'desc')->limit(4)->get() as $key => $top_product)
                            <div class="product-box-1 mb-3">
                                <div class="block product">
                                    <div class="block-image">
                                        <div class="view view-first">
                                            <a href="{{ route('product', $top_product->slug) }}">
                                                <img src="{{ asset(json_decode($top_product->photos)[0]) }}" class="img-fluid img-center img-primary">
                                            </a>
                                        </div>
                                    </div>
                                    <div class="text-center pb-2">
                                        <h2 class="heading heading-6 product-title text-normal strong-500 text-truncate-2">
                                            <a href="{{ route('product', $top_product->slug) }}">{{ $top_product->name }}</a>
                                        </h2>
                                        <div class="price-wrapper">
                                            <span class="product-price strong-600">{{ home_discounted_base_price($top_product->id) }}</span></span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            @endforeach
                        </div>
                    </div>
                </div>
                <div class="col-xl-9 order-1 order-xl-0">
                    <div class="product-desc-tab bg-white">
                        <div class="tabs tabs--style-2">
                            <ul class="nav nav-tabs justify-content-center sticky-top bg-white">
                                <li class="nav-item">
                                    <a href="#tab_default_1" data-toggle="tab" class="nav-link text-uppercase strong-600 active show">{{__('Description')}}</a>
                                </li>
                                <li class="nav-item">
                                    <a href="#tab_default_2" data-toggle="tab" class="nav-link text-uppercase strong-600">{{__('Videos')}}</a>
                                </li>
                                <li class="nav-item">
                                    <a href="#tab_default_3" data-toggle="tab" class="nav-link text-uppercase strong-600">{{__('Reviews')}}</a>
                                </li>
                            </ul>

                            <div class="tab-content pt-0">
                                <div class="tab-pane active show" id="tab_default_1">
                                    <div class="py-2 px-4">
                                        <div class="row">
                                            <div class="col-md-12">
                                                <?php echo $product->description; ?>
                                            </div>
                                        </div>
                                        <span class="space-md-md"></span>
                                    </div>
                                </div>

                                <div class="tab-pane" id="tab_default_2">
                                    <div class="fluid-paragraph py-2">
                                        <!-- 16:9 aspect ratio -->
                                        <div class="embed-responsive embed-responsive-16by9 mb-5">
                                            @if ($product->video_provider == 'youtube' && $product->video_link != null)
                                                <iframe class="embed-responsive-item" src="https://www.youtube.com/embed/{{ explode('=', $product->video_link)[1] }}"></iframe>
                                            @elseif ($product->video_provider == 'dailymotion' && $product->video_link != null)
                                                <iframe class="embed-responsive-item" src="https://www.dailymotion.com/embed/video/{{ explode('video/', $product->video_link)[1] }}"></iframe>
                                            @elseif ($product->video_provider == 'vimeo' && $product->video_link != null)
                                                <iframe src="https://player.vimeo.com/video/{{ explode('vimeo.com/', $product->video_link)[1] }}" width="500" height="281" frameborder="0" webkitallowfullscreen mozallowfullscreen allowfullscreen></iframe>
                                            @endif
                                        </div>
                                    </div>
                                </div>

                                <div class="tab-pane" id="tab_default_3">
                                    <div class="fluid-paragraph py-4">
                                        <div class="block block-comment">
                                            <div class="block-image">
                                                <img src="{{ asset('frontend/images/prv/people/person-1.jpg') }}" class="rounded-circle">
                                            </div>
                                            <div class="block-body">
                                                <div class="block-body-inner">
                                                    <div class="row no-gutters">
                                                        <div class="col">
                                                            <h3 class="heading heading-6">
                                                                <a href="#">David Wally</a>
                                                            </h3>
                                                            <span class="comment-date">
                                                                2 hours ago
                                                            </span>
                                                        </div>
                                                        <div class="col">
                                                            <div class="rating text-right clearfix d-block">
                                                                <span class="star-rating float-right">
                                                                    <i class="fa fa-star"></i>
                                                                    <i class="fa fa-star"></i>
                                                                    <i class="fa fa-star"></i>
                                                                    <i class="fa fa-star-o"></i>
                                                                    <i class="fa fa-star-o"></i>
                                                                </span>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <p class="comment-text">
                                                        Gathered, fourth wherein air, is void gathering very image fruit under brought Bearing fill created fourth she'd appear days you unto light day under i face they're god spirit.
                                                    </p>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="block block-comment">
                                            <div class="block-image">
                                                <img src="{{ asset('frontend/images/prv/people/person-1.jpg') }}" class="rounded-circle">
                                            </div>
                                            <div class="block-body">
                                                <div class="block-body-inner">
                                                    <div class="row no-gutters">
                                                        <div class="col">
                                                            <h3 class="heading heading-6">
                                                                <a href="#">David Wally</a>
                                                            </h3>
                                                            <span class="comment-date">
                                                                2 hours ago
                                                            </span>
                                                        </div>
                                                        <div class="col">
                                                            <div class="rating text-right clearfix d-block">
                                                                <span class="star-rating float-right">
                                                                    <i class="fa fa-star"></i>
                                                                    <i class="fa fa-star"></i>
                                                                    <i class="fa fa-star"></i>
                                                                    <i class="fa fa-star-o"></i>
                                                                    <i class="fa fa-star-o"></i>
                                                                </span>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <p class="comment-text">
                                                        Gathered, fourth wherein air, is void gathering very image fruit under brought Bearing fill created fourth she'd appear days you unto light day under i face they're god spirit.
                                                    </p>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="leave-review">
                                            <div class="section-title section-title--style-1">
                                                <h3 class="section-title-inner heading-6 strong-600 text-uppercase">
                                                    {{__('Write a review')}}
                                                </h3>
                                            </div>
                                            <form class="form-default" role="form">
                                                <div class="row">
                                                    <div class="col-md-6">
                                                        <div class="form-group">
                                                            <label for="" class="text-uppercase c-gray-light">{{__('Your name')}}</label>
                                                            <input type="text" name="name" class="form-control" required="">
                                                        </div>
                                                    </div>
                                                    <div class="col-md-6">
                                                        <div class="form-group">
                                                            <label for="" class="text-uppercase c-gray-light">{{__('Email')}}</label>
                                                            <input type="text" name="name" class="form-control" required="">
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="row">
                                                    <div class="col-sm-12">
                                                        <div class="rating mt-1 mb-1">
                                                            <span class="star voted" rel="1"></span>
                                                            <span class="star voted" rel="2"></span>
                                                            <span class="star voted" rel="3"></span>
                                                            <span class="star voted" rel="4"></span>
                                                            <span class="star voted" rel="5"></span>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="row mt-3">
                                                    <div class="col-sm-12">
                                                        <textarea class="form-control" rows="4" placeholder="Your review"></textarea>
                                                    </div>
                                                </div>

                                                <div class="text-right">
                                                    <button type="submit" class="btn btn-styled btn-base-1 btn-circle mt-4">
                                                        {{__('Send review')}}
                                                    </button>
                                                </div>
                                            </form>
                                        </div>

                                    </div>
                                </div>

                            </div>
                        </div>
                    </div>
                    <div class="my-4 bg-white p-3">
                        <div class="section-title-1">
                            <h3 class="heading-5 strong-700 mb-0">
                                <span class="mr-4">{{__('Related products')}}</span>
                            </h3>
                        </div>
                        <div class="caorusel-box">
                            <div class="slick-carousel" data-slick-items="3" data-slick-lg-items="3"  data-slick-md-items="2" data-slick-sm-items="2" data-slick-xs-items="1">
                                @foreach (\App\Product::where('subcategory_id', $product->subcategory_id)->where('id', '!=', $product->id)->limit(10)->get() as $key => $related_product)
                                    <div class="product-card-2 card card-product m-2 shop-cards shop-tech">
                                        <div class="card-body p-0">
                                            <div class="card-image">
                                                <a href="{{ route('product', $related_product->slug) }}" class="d-block" style="background-image:url('{{ asset(json_decode($related_product->photos)[0]) }}');">
                                                </a>
                                            </div>

                                            <div class="p-3">
                                                <div class="price-box">
                                                    @if(home_base_price($related_product->id) != home_discounted_base_price($related_product->id))
                                                        <del class="old-product-price strong-400">{{ home_base_price($related_product->id) }}</del>
                                                    @endif
                                                    <span class="product-price strong-600">{{ home_discounted_base_price($related_product->id) }}</span>
                                                </div>
                                                <h2 class="product-title p-0 mt-2 text-truncate-2">
                                                    <a href="{{ route('product', $related_product->slug) }}">{{ $related_product->name }}</a>
                                                </h2>
                                            </div>
                                        </div>
                                    </div>
                                @endforeach
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

@endsection
