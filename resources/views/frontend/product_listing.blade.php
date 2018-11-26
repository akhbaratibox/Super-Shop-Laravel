@extends('frontend.layouts.app')

@section('content')

    <div class="breadcrumb-area">
        <div class="container">
            <div class="row">
                <div class="col">
                    <ul class="breadcrumb">
                        <li><a href="{{ route('home') }}">Home</a></li>
                        <li><a href="{{ route('products') }}">All Categories</a></li>
                        @if(isset($category_id))
                            <li class="active"><a href="{{ route('products.category', $category_id) }}">{{ \App\Category::find($category_id)->name }}</a></li>
                        @endif
                        @if(isset($subcategory_id))
                            <li ><a href="{{ route('products.category', \App\SubCategory::find($subcategory_id)->category->id) }}">{{ \App\SubCategory::find($subcategory_id)->category->name }}</a></li>
                            <li class="active"><a href="{{ route('products.subcategory', $subcategory_id) }}">{{ \App\SubCategory::find($subcategory_id)->name }}</a></li>
                        @endif
                        @if(isset($subsubcategory_id))
                            <li ><a href="{{ route('products.category', \App\SubSubCategory::find($subsubcategory_id)->subcategory->category->id) }}">{{ \App\SubSubCategory::find($subsubcategory_id)->subcategory->category->name }}</a></li>
                            <li ><a href="{{ route('products.subcategory', \App\SubsubCategory::find($subsubcategory_id)->subcategory->id) }}">{{ \App\SubsubCategory::find($subsubcategory_id)->subcategory->name }}</a></li>
                            <li class="active"><a href="{{ route('products.subsubcategory', $subsubcategory_id) }}">{{ \App\SubSubCategory::find($subsubcategory_id)->name }}</a></li>
                        @endif
                    </ul>
                </div>
            </div>
        </div>
    </div>


    <section class="gry-bg py-4">
        <div class="container">
            <div class="row">
                <div class="col-lg-3">

                    <div class="bg-white sidebar-box mb-3">
                        <div class="box-title text-center">
                            Categories
                        </div>
                        <div class="box-content">
                            <div class="category-accordion">

                                <div class="single-category">
                                    <button class="btn w-100 category-name" type="button" data-toggle="collapse" data-target="#categoryOne" aria-expanded="true">
                                    Category name
                                    </button>

                                    <div id="categoryOne" class="collapse show">
                                        <div class="single-sub-category">
                                            <button class="btn w-100 sub-category-name" type="button" data-toggle="collapse" data-target="#subCategoryOne" aria-expanded="true">
                                            Sub category name
                                            </button>
                                            <div id="subCategoryOne" class="collapse show">
                                                <ul class="sub-sub-category-list">
                                                    <li><a href="">Sub sub category name</a></li>
                                                    <li><a href="">Sub sub category name</a></li>
                                                    <li><a href="">Sub sub category name</a></li>
                                                    <li><a href="">Sub sub category name</a></li>
                                                    <li><a href="">Sub sub category name</a></li>
                                                </ul>
                                            </div>
                                        </div>
                                        <div class="single-sub-category">
                                            <button class="btn w-100 sub-category-name" type="button" data-toggle="collapse" data-target="#subCategoryTwo" aria-expanded="false">
                                            Sub category name
                                            </button>
                                            <div id="subCategoryTwo" class="collapse ">
                                                <ul class="sub-sub-category-list">
                                                    <li><a href="">Sub sub category name</a></li>
                                                    <li><a href="">Sub sub category name</a></li>
                                                    <li><a href="">Sub sub category name</a></li>
                                                    <li><a href="">Sub sub category name</a></li>
                                                    <li><a href="">Sub sub category name</a></li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="single-category">
                                    <button class="btn w-100 category-name collapsed" type="button" data-toggle="collapse" data-target="#categoryTwo" aria-expanded="false">
                                    Category name
                                    </button>

                                    <div id="categoryTwo" class="collapse">
                                        <div class="single-sub-category">
                                            <button class="btn w-100 sub-category-name" type="button" data-toggle="collapse" data-target="#subCategorythree" aria-expanded="false">
                                            Sub category name
                                            </button>
                                            <div id="subCategorythree" class="collapse">
                                                <ul class="sub-sub-category-list">
                                                    <li><a href="">Sub sub category name</a></li>
                                                    <li><a href="">Sub sub category name</a></li>
                                                    <li><a href="">Sub sub category name</a></li>
                                                    <li><a href="">Sub sub category name</a></li>
                                                    <li><a href="">Sub sub category name</a></li>
                                                </ul>
                                            </div>
                                        </div>
                                        <div class="single-sub-category">
                                            <button class="btn w-100 sub-category-name" type="button" data-toggle="collapse" data-target="#subCategoryfour" aria-expanded="false">
                                            Sub category name
                                            </button>
                                            <div id="subCategoryfour" class="collapse ">
                                                <ul class="sub-sub-category-list">
                                                    <li><a href="">Sub sub category name</a></li>
                                                    <li><a href="">Sub sub category name</a></li>
                                                    <li><a href="">Sub sub category name</a></li>
                                                    <li><a href="">Sub sub category name</a></li>
                                                    <li><a href="">Sub sub category name</a></li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                            </div>
                        </div>
                    </div>
                    <div class="bg-white sidebar-box mb-3">
                        <div class="box-title text-center">
                            Price range
                        </div>
                        <div class="box-content">
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
                <div class="col-lg-9">
                    <!-- <div class="bg-white"> -->
                        <div class="brands-bar row no-gutters pb-3 bg-white p-3">
                            <div class="col-11">
                                <div class="brands-collapse-box" id="brands-collapse-box">
                                    <ul class="inline-links">
                                        @if(isset($subsubcategory_id))
                                            @foreach (json_decode(\App\SubSubCategory::find($subsubcategory_id)->brands) as $key => $brand_id)
                                                <li><a href="{{ route('products.brand', $brand_id) }}"><img src="{{ asset(\App\Brand::find($brand_id)->logo) }}" alt="" class="img-fluid"></a></li>
                                            @endforeach
                                        @else
                                            @foreach (\App\Brand::all() as $key => $brand)
                                                <li><a href="{{ route('products.brand', $brand->id) }}"><img src="{{ asset($brand->logo) }}" alt="" class="img-fluid"></a></li>
                                            @endforeach
                                        @endif
                                    </ul>
                                </div>
                            </div>
                            <div class="col-1">
                                <button type="button" name="button" onclick="morebrands(this)" class="more-brands-btn">
                                    <i class="fa fa-plus"></i>
                                    <span>More</span>
                                </button>
                            </div>
                        </div>
                        <div class="sort-by-bar row no-gutters bg-white mb-3 px-3">
                            <div class="col-4">
                                <div class="sort-by-box">
                                    <div class="form-group">
                                        <label>Search</label>
                                        <form role="form" class="search-widget">
                                            <input class="form-control input-lg" type="text" placeholder="Search products">
                                            <button type="button" class="btn-inner">
                                                <i class="fa fa-search"></i>
                                            </button>
                                        </form>
                                    </div>
                                </div>
                            </div>
                            <div class="col-7 offset-col-1 ml-auto">
                                <div class="row no-gutters">
                                    <div class="col-4">
                                        <div class="sort-by-box px-1">
                                            <div class="form-group">
                                                <label>Sort by</label>
                                                <select class="form-control sortSelect" data-minimum-results-for-search="Infinity">
                                                    <option value="1">Newest</option>
                                                    <option value="2">Oldest</option>
                                                    <option value="3">Price low to high</option>
                                                    <option value="4">Price high to low</option>
                                                    <option value="5">Most viewed</option>
                                                </select>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-4">
                                        <div class="sort-by-box px-1">
                                            <div class="form-group">
                                                <label>Brands</label>
                                                <select class="form-control sortSelect" data-placeholder="This is a placeholder">
                                                    <option>All Brands</option>
                                                    @foreach (\App\Brand::all() as $key => $brand)
                                                        <option value="{{ $brand->id }}">{{ $brand->name }}</option>
                                                    @endforeach
                                                </select>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-4">
                                        <div class="sort-by-box px-1">
                                            <div class="form-group">
                                                <label>Sellers</label>
                                                <select class="form-control sortSelect" data-placeholder="This is a placeholder">
                                                    <option>All Sellers</option>
                                                    <option value="1">Seller Name</option>
                                                    <option value="2">Brand Name</option>
                                                    <option value="3">Seller Name ffdv fd fdvgfdgf </option>
                                                </select>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- <hr class=""> -->
                        <div class="products-box-bar p-3 bg-white">
                            <div class="row">
                                @foreach ($products as $key => $product)
                                    <div class="col-4">
                                        <div class="product-card-1 mb-3">
                                            <figure class="product-image-container">
                                                <a href="{{ route('product', $product->slug) }}" class="product-image d-block" style="background-image:url('{{ asset(json_decode($product->photos)[0]) }}');">
                                                    <!-- <img src="{{ asset(json_decode($product->photos)[0]) }}" alt="product" class="img-center img-fluid"> -->
                                                </a>
                                                <button class="btn-quickview" onclick="showAddToCartModal({{ $product->id }})"><i class="fa fa-eye"></i></button>
                                                @if (strtotime($product->created_at) > strtotime('-10 day'))
                                                    <span class="product-label label-hot">New</span>
                                                @endif
                                            </figure>
                                            <div class="product-details text-center">
                                                <h2 class="product-title">
                                                    <a href="{{ route('product', $product->slug) }}">{{ $product->name }}</a>
                                                </h2>
                                                <div class="price-box">
                                                    <span class="old-product-price strong-300">{{ home_discounted_price($product->id) }}</span>
                                                    <span class="product-price strong-300"><strong>{{ home_price($product->id) }}</strong></span>
                                                </div><!-- End .price-box -->

                                                <div class="product-card-1-action">
                                                    <button class="paction add-wishlist" title="Add to Wishlist" onclick="addToWishList({{ $product->id }})">
                                                        <i class="ion-ios-heart-outline"></i>
                                                    </button>

                                                    <button type="button" class="paction add-cart btn btn-base-1 btn-circle btn-icon-left" onclick="showAddToCartModal({{ $product->id }})">
                                                        <i class="icon ion-android-cart"></i>Add to cart
                                                    </button>

                                                    <button class="paction add-compare" title="Add to Compare" onclick="addToCompare({{ $product->id }})">
                                                        <i class="ion-ios-browsers-outline"></i>
                                                    </button>
                                                </div><!-- End .product-action -->
                                            </div><!-- End .product-details -->
                                        </div>
                                    </div>
                                @endforeach
                            </div>
                        </div>
                        <div class="products-pagination bg-white p-3">
                            <nav aria-label="Center aligned pagination">
                                <ul class="pagination justify-content-center">
                                    {{ $products->links() }}
                                </ul>
                            </nav>
                        </div>

                        <div class="mt-3 sidebar-box bg-white">
                            <div class="box-title text-center">
                                Related products
                            </div>
                            <div class="box-content">
                                <div class="row">
                                    <div class="col-4">
                                        <div class="block product no-radius">
                                            <div class="product-image">
                                                <div class="view view-first">
                                                    <a href="#">
                                                        <img src="{{ asset('frontend/images/prv/shop/accessories/img-1a.png') }}">
                                                    </a>
                                                </div>

                                                <div class="product-actions--a product-actions--2" data-animation-in="slideInRight" data-animation-out="slideOutRight">
                                                    <button type="button" class="btn-product-action">
                                                        <i class="ion-bag"></i>
                                                    </button>

                                                    <button type="button" class="btn-product-action">
                                                        <i class="ion-ios-heart-outline"></i>
                                                    </button>
                                                </div>
                                            </div>

                                            <div class="block-body px-0">
                                                <h3 class="heading heading-6 strong-500 text-capitalize mb-0">Wood phone case</h3>
                                                <span class="star-rating star-rating-sm">
                                                    <i class="fa fa-star"></i>
                                                    <i class="fa fa-star"></i>
                                                    <i class="fa fa-star"></i>
                                                    <i class="fa fa-star-o"></i>
                                                    <i class="fa fa-star-o"></i>
                                                </span>
                                                <div class="price-wrapper">
                                                    <span class="price heading-6 c-gray-light strong-400">$<span class="price-value">80.00</span></span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                    <!-- </div> -->
                </div>
            </div>
        </div>
    </section>

@endsection
