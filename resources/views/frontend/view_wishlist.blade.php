@extends('frontend.layouts.app')

@section('content')

    <section class="gry-bg py-4 profile">
        <div class="container">
            <div class="row cols-xs-space cols-sm-space cols-md-space">
                <div class="col-lg-3">
                    @if(Auth::user()->user_type == 'seller')
                        @include('frontend.inc.seller_side_nav')
                    @elseif(Auth::user()->user_type == 'customer')
                        @include('frontend.inc.customer_side_nav')
                    @endif
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
                                            <li><a href="{{ route('home') }}">Home</a></li>
                                            <li><a href="{{ route('dashboard') }}">Dashboard</a></li>
                                            <li class="active"><a href="{{ route('wishlists.index') }}">Wishlist</a></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- Wishlist items -->

                        <div class="row shop-default-wrapper shop-cards-wrapper shop-tech-wrapper mt-4">
                            @foreach ($wishlists as $key => $wishlist)
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
                                                        <button type="button" class="btn btn-block btn-base-1 btn-circle btn-icon-left" onclick="showAddToCartModal({{ $wishlist->product->id }})">
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
                                {{ $wishlists->links() }}
                            </ul>
                        </div>


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
        function removeFromWishlist(id){
            $.post('{{ route('wishlists.remove') }}',{_token:'{{ csrf_token() }}', id:id}, function(data){
                $('#wishlist').html(data);
                $('#wishlist_'+id).hide();
                showFrontendAlert('success', 'Item has been renoved from wishlist');
            })
        }

        function showAddToCartModal(id){
            if(!$('#modal-size').hasClass('modal-lg')){
                $('#modal-size').addClass('modal-lg');
            }
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
    </script>
@endsection
