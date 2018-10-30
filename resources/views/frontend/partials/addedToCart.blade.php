<div class="modal-body p-4 added-to-cart">
    <div class="text-center text-success">
        <i class="fa fa-check"></i>
        <h3>Item added to your cart!</h3>
    </div>
    <div class="product-box">
        <div class="block">
            <div class="block-image">
                <img src="{{ asset(json_decode($product->photos)[0]) }}" class="" alt="Product Image">
            </div>
            <div class="block-body">
                <h6 class="strong-600">
                    {{ $product->name }}
                </h6>
                <div class="row no-gutters mt-2 mb-2">
                    <div class="col-2">
                        <div>Price:</div>
                    </div>
                    <div class="col-10">
                        <div class="heading-6 text-danger">
                            <strong>
                                {{ $product->unit_price }}
                            </strong>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="text-center">
        <button class="btn btn-styled btn-base-1 btn-outline" data-toggle="modal" data-target="#GuestCheckout">Back to shopping</button>
        <button class="btn btn-styled btn-base-1" data-toggle="modal" data-target="#GuestCheckout">Proceed to Checkout</button>
    </div>
</div>
