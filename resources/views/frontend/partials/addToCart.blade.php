<div class="modal-body p-4">
    <div class="row no-gutters cols-xs-space cols-sm-space cols-md-space">
        <div class="col-lg-6">
            <div class="gallery-container product-gallery sticky-top">
                <div id="slideshow" class="gallery-top no-padding bg-transparent"><div class="desoslide-wrapper"><img alt="Bird" class="img-responsive" src="{{ asset(json_decode($product->photos)[0]) }}" style="opacity: 1;"></div></div>
                <div id="slideshow_thumbs" class="swiper-js-container gallery-thumbs gallery-thumbs--style-1 mt-4">
                    <div class="swiper-container swiper-container-horizontal swiper-container-undefined" data-swiper-items="7" data-swiper-space-between="10" data-swiper-xs-items="3" data-swiper-xs-space-between="10" data-swiper-sm-items="4" data-swiper-sm-space-between="10">
                        <div class="swiper-wrapper" style="transform: translate3d(0px, 0px, 0px);">
                            @foreach (json_decode($product->photos) as $key => $photo)
                                <div class="swiper-slide swiper-slide-active" style="width: 65px; margin-right: 10px;">
                                    <a href="{{ asset($photo) }}" data-desoslide-index="{{ $key }}">
                                        <img src="{{ asset($photo) }}" alt="Product Image">
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

                <div class="row no-gutters mt-4">
                    <div class="col-2">
                        <div class="product-description-label">Price:</div>
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
                        <div class="product-description-label">Discount Price:</div>
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

                <hr>

                <form id="option-choice-form">
                    @csrf
                    <input type="hidden" name="id" value="{{ $product->id }}">

                    @foreach (json_decode($product->subsubcategory->options) as $key => $option)

                    <div class="row no-gutters">
                        <div class="col-2">
                            <div class="product-description-label">{{ $option->title }}:</div>
                        </div>
                        <div class="col-10">
                            <ul class="list-inline checkbox-alphanumeric checkbox-alphanumeric--style-1 mb-2">
                                @foreach ($option->options as $key => $options)
                                    <li>
                                        <input type="radio" id="{{ $option->name }}-{{ $options }}" name="{{ $option->name }}" value="{{ $options }}" <?php if($key == 0) echo "checked";?>>
                                        <label for="{{ $option->name }}-{{ $options }}">{{ $options }}</label>
                                    </li>
                                @endforeach
                            </ul>
                        </div>
                    </div>

                    @endforeach

                    <div class="row no-gutters">
                        <div class="col-2">
                            <div class="product-description-label">Color:</div>
                        </div>
                        <div class="col-10">
                            <ul class="list-inline checkbox-color mb-1">
                                @foreach (json_decode($product->colors) as $key => $color)
                                    <li>
                                        <input type="radio" id="color-{{ $key }}" name="color" value="{{ $color }}" <?php if($key == 0) echo "checked";?> >
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
                                    <input type="text" name="quantity" class="form-control input-number text-center" placeholder="3" value="1" min="1" max="10">
                                    <span class="input-group-btn">
                                        <button class="btn btn-number" type="button" data-type="plus" data-field="quantity[1]">
                                            <i class="ion-plus"></i>
                                        </button>
                                    </span>
                                </div>
                                {{-- <div class="avialable-amount">(1298 pc available)</div> --}}
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
                    </div>
                </div>

            </div>
        </div>
    </div>
</div>
