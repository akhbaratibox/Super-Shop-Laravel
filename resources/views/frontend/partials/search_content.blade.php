<div class="keyword">
    @if (sizeof($keywords) > 0)
        <div class="title">Popular Suggestions</div>
        <ul>
            @foreach ($keywords as $key => $keyword)
                <li><a href="{{ route('suggestion.search', $keyword) }}">{{ $keyword }}</a></li>
            @endforeach
        </ul>
    @endif
</div>
<div class="category">
    @if (count($subsubcategories) > 0)
        <div class="title">Category Suggestions</div>
        <ul>
            @foreach ($subsubcategories as $key => $subsubcategory)
                <li><a href="{{ route('products.subsubcategory', $subsubcategory->id) }}">{{ $subsubcategory->name }}</a></li>
            @endforeach
        </ul>
    @endif
</div>
<div class="product">
    @if (count($products) > 0)
        <div class="title">Products</div>
        <ul>
            @foreach ($products as $key => $product)
                <li>
                    <a href="{{ route('product', $product->slug) }}">
                        <div class="d-flex search-product align-items-center">
                            <div class="image" style="background-image:url('{{ asset(json_decode($product->photos)[0]) }}');">
                            </div>
                            <div class="w-100">
                                <div class="product-name">
                                    {{ $product->name }}
                                </div>
                                <div class="clearfix">
                                    <div class="price-box float-left">
                                        @if(home_base_price($product->id) != home_discounted_base_price($product->id))
                                            <del class="old-product-price strong-400">{{ home_base_price($product->id) }}</del>
                                        @endif
                                        <span class="product-price strong-600">{{ home_discounted_base_price($product->id) }}</span>
                                    </div>
                                    <div class="stock-box float-right">
                                        @php
                                            $qty = 0;
                                            foreach (json_decode($product->variations) as $key => $variation) {
                                                $qty += $variation->qty;
                                            }
                                        @endphp
                                        @if ($qty > 0)
                                            <span class="badge badge-pill bg-green">In stock</span>
                                        @else
                                            <span class="badge badge badge-pill bg-red">Out of stock</span>
                                        @endif
                                    </div>
                                </div>
                            </div>
                        </div>
                    </a>
                </li>
            @endforeach
        </ul>
    @endif
</div>
