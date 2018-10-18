@extends('frontend.layouts.app')

@section('content')

    <section class="gry-bg py-4 profile">
        <div class="container">
            <div class="row cols-xs-space cols-sm-space cols-md-space">
                <div class="col-lg-3">
                    <div class="sidebar sidebar--style-3 no-border stickyfill">
                        <div class="widget">
                            <!-- Profile picture -->
                            <div class="profile-picture profile-picture--style-2">
                                <img src="{{ asset('frontend/images/prv/people/person-7.jpg')}}" class="img-center">
                                <a href="#" class="btn-aux">
                                    <i class="ion ion-edit"></i>
                                </a>
                            </div>

                            <!-- Profile details -->
                            <div class="profile-details mb-4">
                                <h2 class="heading heading-6 strong-600 profile-name ">{{ Auth::user()->xml_set_end_namespace_decl_handler }}</h2>
                            </div>

                            <hr>

                            <ul class="categories categories--style-3 mt-3">
                                <li>
                                    <a href="html/e-commerce/account-settings.html">
                                        <i class="ion-gear-b"></i>
                                        <span class="category-name">
                                            Settings
                                        </span>
                                    </a>
                                </li>
                                <li>
                                    <a href="html/e-commerce/account-orders.html">
                                        <i class="ion-calendar"></i>
                                        <span class="category-name">
                                            Orders
                                        </span>
                                    </a>
                                </li>
                                <li>
                                    <a href="html/e-commerce/account-wishlist.html" class="active">
                                        <i class="ion-heart"></i>
                                        <span class="category-name">
                                            Wishlist
                                        </span>
                                    </a>
                                </li>
                                <li>
                                    <a href="html/e-commerce/account-notifications.html">
                                        <i class="ion-email-unread"></i>
                                        <span class="category-name">
                                            Notifications
                                        </span>
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>

                <div class="col-lg-9">
                    <div class="main-content">
                        <!-- Page title -->
                        <div class="page-title">
                            <div class="row align-items-center">
                                <div class="col-lg-6 col-12">
                                    <h2 class="heading heading-6 text-capitalize strong-600 mb-0">
                                        Wishlist
                                    </h2>
                                </div>
                                <div class="col-lg-6 col-12">
                                    <div class="float-right">
                                        <ul class="breadcrumb">
                                            <li><a href="">Home</a></li>
                                            <li><a href="">Dashboard</a></li>
                                            <li><a href="">Products</a></li>
                                            <li class="active"><a href="">Wishlist</a></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- Wishlist items -->

                        <div class="row shop-default-wrapper shop-cards-wrapper shop-tech-wrapper mt-4">
                            @foreach (Auth::user()->wishlists as $key => $wishlist)
                                <div class="col-lg-4" id="wishlist_{{ $wishlist->id }}">
                                    <div class="card card-product mb-3">
                                        <div class="card-body">
                                            <div class="card-image swiper-js-container">
                                                <div class="">
                                                    <div class="swiper-container" data-swiper-items="1" data-swiper-space-between="0">
                                                        <div class="swiper-wrapper">
                                                            @foreach (json_decode($wishlist->product->photos) as $key => $photo)
                                                                <div class="swiper-slide">
                                                                    <img src="{{ asset($photo) }}" class="img-fluid img-center img-primary">
                                                                </div>
                                                            @endforeach
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>

                                            <h2 class="heading heading-6 strong-600 mt-2 mb-3">
                                                <a href="#">{{ $wishlist->product->name }}</a>
                                            </h2>

                                            <div class="mt-3">
                                                <div class="price-wrapper">
                                                    <span class="price price-sm c-gray-dark">
                                                        <span class="strong-300">$</span><span class="price-value strong-600">65.</span><small class="strong-300">00</small>
                                                    </span>
                                                    <span class="clearfix"></span>
                                                </div>
                                                <h6 class="heading heading-sm strong-400 c-red">Save 10%</h6>
                                                <span class="star-rating">
                                                    <i class="fa fa-star"></i>
                                                    <i class="fa fa-star"></i>
                                                    <i class="fa fa-star"></i>
                                                    <i class="fa fa-star-o"></i>
                                                    <i class="fa fa-star-o"></i>
                                                </span>
                                            </div>
                                        </div>
                                        <div class="card-footer">
                                            <div class="product-buttons">
                                                <div class="row align-items-center">
                                                    <div class="col-2">
                                                        <a href="#" class="link link--style-3" data-toggle="tooltip" data-placement="top" title="Remove from wishlist" onclick="removeFromWishlist({{ $wishlist->id }})">
                                                            <i class="ion-close-round"></i>
                                                        </a>
                                                    </div>
                                                    <div class="col-10">
                                                        <button type="button" class="btn btn-block btn-base-1 btn-circle btn-icon-left">
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

                        <div class="pagination-wrapper py-4">
                            <ul class="pagination justify-content-end">
                                <li class="page-item"><a class="page-link" href="#">«</a></li>
                                <li class="page-item active"><a class="page-link" href="#">1</a></li>
                                <li class="page-item"><a class="page-link" href="#">2</a></li>
                                <li class="page-item"><a class="page-link" href="#">3</a></li>
                                <li class="page-item"><a class="page-link" href="#">4</a></li>
                                <li class="page-item"><a class="page-link" href="#">5</a></li>
                                <li class="page-item"><a class="page-link" href="#">»</a></li>
                            </ul>
                        </div>


                    </div>
                </div>
            </div>
        </div>
    </section>

@endsection

@section('script')
    <script type="text/javascript">
        function removeFromWishlist(id){
            $.post('{{ route('wishlists.remove') }}',{_token:'{{ csrf_token() }}', id:id}, function(data){
                $('#wishlist').html(data);
                $('#wishlist_'+id).hide();
            })
        }
    </script>
@endsection
