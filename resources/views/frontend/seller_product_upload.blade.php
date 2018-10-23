@extends('frontend.layouts.app')

@section('content')

    <section class="gry-bg py-4 profile">
        <div class="container">
            <div class="row cols-xs-space cols-sm-space cols-md-space">
                <div class="col-lg-3">
                    <div class="sidebar sidebar--style-3 no-border stickyfill">
                        <div class="widget mb-0">
                            <div class="widget-profile-box text-center">
                                <div class="image" style="background-image:url('assets/images/prv/people/person-7.jpg')"></div>
                                <div class="name">John Doe</div>
                            </div>
                            <div class="widget-profile-menu">
                                <ul class="categories categories--style-3">
                                    <li>
                                        <a href="../../html/e-commerce/account-orders.html">
                                            <i class="ion-calendar"></i>
                                            <span class="category-name">
                                                Dashboard
                                            </span>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="../../html/e-commerce/account-orders.html" class="active">
                                            <i class="ion-calendar"></i>
                                            <span class="category-name">
                                                Purchase History
                                            </span>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="../../html/e-commerce/account-wishlist.html">
                                            <i class="ion-heart"></i>
                                            <span class="category-name">
                                                Wishlist
                                            </span>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="../../html/e-commerce/account-wishlist.html">
                                            <i class="ion-heart"></i>
                                            <span class="category-name">
                                                Payment Gateway
                                            </span>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="../../html/e-commerce/account-wishlist.html">
                                            <i class="ion-heart"></i>
                                            <span class="category-name">
                                                Manage Profile
                                            </span>
                                        </a>
                                    </li>
                                </ul>
                            </div>
                            <div class="widget-seller-btn pt-4">
                                <a href="" class="btn btn-anim-primary w-100">Be A Seller</a>
                            </div>
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
                                        Add Product
                                    </h2>
                                </div>
                                <div class="col-lg-6 col-12">
                                    <div class="float-right">
                                        <ul class="breadcrumb">
                                            <li><a href="">Home</a></li>
                                            <li><a href="">Dashboard</a></li>
                                            <li><a href="">Products</a></li>
                                            <li class="active"><a href="">Add Product</a></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <form class="" action="#" method="POST">
                            @csrf
                            <div class="form-box bg-white mt-4">
                                <div class="form-box-title px-3 py-2">
                                    General
                                </div>
                                <div class="form-box-content p-3">
                                    <div class="row">
                                        <div class="col-2">
                                            <label>Product Name <span class="required-star">*</span></label>
                                        </div>
                                        <div class="col-10">
                                            <input type="text" class="form-control mb-3" placeholder="Product name">
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-2">
                                            <label>Product Category <span class="required-star">*</span></label>
                                        </div>
                                        <div class="col-10">
                                            <div class="form-control mb-3 c-pointer" data-toggle="modal" data-target="#categorySelectModal" id="product_category">Select a category</div>
                                            <input type="hidden" name="category_id" id="category_id" value="" required>
                                            <input type="hidden" name="subcategory_id" id="subcategory_id" value="" required>
                                            <input type="hidden" name="subsubcategory_id" id="subsubcategory_id" value="" required>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-2">
                                            <label>Product Brand <span class="required-star">*</span></label>
                                        </div>
                                        <div class="col-10">
                                            <div class="mb-3">
                                                <select class="form-control mb-3 selectpicker" data-placeholder="Select a brand" id="brands">

                                                </select>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-2">
                                            <label>Product Tag <span class="required-star">*</span></label>
                                        </div>
                                        <div class="col-10">
                                            <input type="text" class="form-control mb-3 tagsInput" placeholder="Type & hit enter" data-role="tagsinput">
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="form-box bg-white mt-4">
                                <div class="form-box-title px-3 py-2">
                                    Images
                                </div>
                                <div class="form-box-content p-3">
                                    <div class="row">
                                        <div class="col-2">
                                            <label>Main Images <span class="required-star">*</span></label>
                                        </div>
                                        <div class="col-10">
                                            <input type="file" name="file-1[]" id="file-1" class="custom-input-file custom-input-file--4" data-multiple-caption="{count} files selected" multiple accept="image/*" />
                                            <label for="file-1" class="mw-100 mb-3">
                                                <span></span>
                                                <strong>
                                                    <i class="fa fa-upload"></i>
                                                    Choose images…
                                                </strong>
                                            </label>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-2">
                                            <label>Thumbnail Image <span class="required-star">*</span></label>
                                        </div>
                                        <div class="col-10">
                                            <input type="file" name="file-2[]" id="file-2" class="custom-input-file custom-input-file--4" data-multiple-caption="{count} files selected" accept="image/*" />
                                            <label for="file-2" class="mw-100 mb-3">
                                                <span></span>
                                                <strong>
                                                    <i class="fa fa-upload"></i>
                                                    Choose image
                                                </strong>
                                            </label>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-2">
                                            <label>Featured <span class="required-star">*</span></label>
                                        </div>
                                        <div class="col-10">
                                            <input type="file" name="file-2[]" id="file-3" class="custom-input-file custom-input-file--4" data-multiple-caption="{count} files selected" accept="image/*" />
                                            <label for="file-3" class="mw-100 mb-3">
                                                <span></span>
                                                <strong>
                                                    <i class="fa fa-upload"></i>
                                                    Choose image
                                                </strong>
                                            </label>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-2">
                                            <label>Flash Deal <span class="required-star">*</span></label>
                                        </div>
                                        <div class="col-10">
                                            <input type="file" name="file-2[]" id="file-4" class="custom-input-file custom-input-file--4" data-multiple-caption="{count} files selected" accept="image/*" />
                                            <label for="file-4" class="mw-100 mb-3">
                                                <span></span>
                                                <strong>
                                                    <i class="fa fa-upload"></i>
                                                    Choose image
                                                </strong>
                                            </label>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="form-box bg-white mt-4">
                                <div class="form-box-title px-3 py-2">
                                    Videos
                                </div>
                                <div class="form-box-content p-3">
                                    <div class="row">
                                        <div class="col-2">
                                            <label>Video From</label>
                                        </div>
                                        <div class="col-10">
                                            <div class="mb-3">
                                                <select class="form-control selectpicker" data-minimum-results-for-search="Infinity">
                                                    <option value="1">Youtube</option>
                                                    <option value="2">Dailymotion</option>
                                                    <option value="3">Vimeo</option>
                                                </select>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-2">
                                            <label>Video URL</label>
                                        </div>
                                        <div class="col-10">
                                            <input type="text" class="form-control mb-3" placeholder="Video link">
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="form-box bg-white mt-4">
                                <div class="form-box-title px-3 py-2">
                                    Meta Tags
                                </div>
                                <div class="form-box-content p-3">
                                    <div class="row">
                                        <div class="col-2">
                                            <label>Keywords</label>
                                        </div>
                                        <div class="col-10">
                                            <input type="text" class="form-control mb-3" placeholder="keyword, keyword">
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-2">
                                            <label>Keywords</label>
                                        </div>
                                        <div class="col-10">
                                            <input type="text" class="form-control mb-3" placeholder="keyword, keyword">
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="form-box bg-white mt-4">
                                <div class="form-box-title px-3 py-2">
                                    Meta Tags
                                </div>
                                <div class="form-box-content p-3">
                                    <div class="row">
                                        <div class="col-2">
                                            <label>Keywords</label>
                                        </div>
                                        <div class="col-10">
                                            <input type="text" class="form-control mb-3" placeholder="keyword, keyword">
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-2">
                                            <label>Keywords</label>
                                        </div>
                                        <div class="col-10">
                                            <input type="text" class="form-control mb-3" placeholder="keyword, keyword">
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="form-box bg-white mt-4">
                                <div class="form-box-title px-3 py-2">
                                    Price
                                </div>
                                <div class="form-box-content p-3">
                                    <div class="row">
                                        <div class="col-2">
                                            <label>Unit Price (Base Price) <span class="required-star">*</span></label>
                                        </div>
                                        <div class="col-10">
                                            <input type="text" class="form-control mb-3" placeholder="Unit Price (Base Price)">
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-2">
                                            <label>Purchase Price</label>
                                        </div>
                                        <div class="col-10">
                                            <input type="text" class="form-control mb-3" placeholder="Purchase Price">
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-2">
                                            <label>Tax</label>
                                        </div>
                                        <div class="col-8">
                                            <input type="text" class="form-control mb-3" placeholder="Tax">
                                        </div>
                                        <div class="col-2">
                                            <div class="mb-3">
                                                <select class="form-control selectpicker" data-minimum-results-for-search="Infinity">
                                                    <option value="1">$</option>
                                                    <option value="2">%</option>
                                                </select>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-2">
                                            <label>Discount</label>
                                        </div>
                                        <div class="col-8">
                                            <input type="text" class="form-control mb-3" placeholder="Discount">
                                        </div>
                                        <div class="col-2">
                                            <div class="mb-3">
                                                <select class="form-control selectpicker" data-minimum-results-for-search="Infinity">
                                                    <option value="1">$</option>
                                                    <option value="2">%</option>
                                                </select>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="form-box bg-white mt-4">
                                <div class="form-box-title px-3 py-2">
                                    Description
                                </div>
                                <div class="form-box-content p-3">
                                    <div class="row">
                                        <div class="col-2">
                                            <label>Description</label>
                                        </div>
                                        <div class="col-10">
                                            <div class="mb-3">
                                                <textarea class="summernote" name="description" data-ghfgh="fgdgd"></textarea>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="form-box bg-white mt-4">
                                <div class="form-box-title px-3 py-2">
                                    Customer Choice
                                </div>
                                <div class="form-box-content p-3">
                                    <div class="row">
                                        <div class="col-2">
                                            <label>Price Variations</label>
                                        </div>
                                        <div class="col-10">
                                            <div class="mb-3" id="customer_choice_options">

                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Modal -->
    <div class="modal fade" id="categorySelectModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-lg" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h6 class="modal-title" id="exampleModalLabel">Select Category</h6>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <div class="target-category heading-6">
                        <span class="mr-3">Target Category:</span>
                        <span>Category > Sub category > Sub sub category</span>
                    </div>
                    <div class="row no-gutters modal-categories mt-4 mb-2">
                        <div class="col-4">
                            <div class="modal-category-box c-scrollbar">
                                <div class="sort-by-box">
                                    <form role="form" class="search-widget">
                                        <input class="form-control input-lg" type="text" placeholder="Search Category" onkeyup="filterListItems(this, 'categories')">
                                        <button type="button" class="btn-inner">
                                            <i class="fa fa-search"></i>
                                        </button>
                                    </form>
                                </div>
                                <div class="modal-category-list has-right-arrow">
                                    <ul id="categories">
                                        @foreach ($categories as $key => $category)
                                            <li onclick="get_subcategories_by_category(this, {{ $category->id }})">{{ $category->name }}</li>
                                        @endforeach
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="col-4">
                            <div class="modal-category-box c-scrollbar" id="subcategory_list">
                                <div class="sort-by-box">
                                    <form role="form" class="search-widget">
                                        <input class="form-control input-lg" type="text" placeholder="Search SubCategory" onkeyup="filterListItems(this, 'subcategories')">
                                        <button type="button" class="btn-inner">
                                            <i class="fa fa-search"></i>
                                        </button>
                                    </form>
                                </div>
                                <div class="modal-category-list has-right-arrow">
                                    <ul id="subcategories">

                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="col-4">
                            <div class="modal-category-box c-scrollbar" id="subsubcategory_list">
                                <div class="sort-by-box">
                                    <form role="form" class="search-widget">
                                        <input class="form-control input-lg" type="text" placeholder="Search SubSubCategory" onkeyup="filterListItems(this, 'subsubcategories')">
                                        <button type="button" class="btn-inner">
                                            <i class="fa fa-search"></i>
                                        </button>
                                    </form>
                                </div>
                                <div class="modal-category-list">
                                    <ul id="subsubcategories">

                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-primary" data-dismiss="modal">Confirm</button>
                </div>
            </div>
        </div>
    </div>

@endsection

@section('script')
    <script type="text/javascript">

        var category_name = "";
        var subcategory_name = "";
        var subsubcategory_name = "";

        $(document).ready(function(){
            $('#subcategory_list').hide();
            $('#subsubcategory_list').hide();
        });

        function list_item_highlight(el){
            $(el).parent().children().each(function(){
                $(this).removeClass('selected');
            });
            $(el).addClass('selected');
        }

        function get_subcategories_by_category(el, category_id){
            list_item_highlight(el);
            $('#category_id').val(category_id);
            category_name = $(el).html();
            $('#subcategories').html(null);
            $('#subsubcategory_list').hide();
            $.post('{{ route('subcategories.get_subcategories_by_category') }}',{_token:'{{ csrf_token() }}', category_id:category_id}, function(data){
                for (var i = 0; i < data.length; i++) {
                    $('#subcategories').append('<li onclick="get_subsubcategories_by_subcategory(this, '+data[i].id+')">'+data[i].name+'</li>');
                }
                $('#subcategory_list').show();
            });
        }

        function get_subsubcategories_by_subcategory(el, subcategory_id){
            list_item_highlight(el);
            $('#subcategory_id').val(subcategory_id);
            subcategory_name = $(el).html();
            $('#subsubcategories').html(null);
            $.post('{{ route('subsubcategories.get_subsubcategories_by_subcategory') }}',{_token:'{{ csrf_token() }}', subcategory_id:subcategory_id}, function(data){
                for (var i = 0; i < data.length; i++) {
                    $('#subsubcategories').append('<li onclick="get_brands_by_subsubcategory(this, '+data[i].id+')">'+data[i].name+'</li>');
                }
                $('#subsubcategory_list').show();
            });
        }

        function get_brands_by_subsubcategory(el, subsubcategory_id){
            list_item_highlight(el);
            $('#subsubcategory_id').val(subsubcategory_id);
            subsubcategory_name = $(el).html();
            $('#product_category').html(category_name+'>'+subcategory_name+'>'+subsubcategory_name);
            $('#brands').html(null);
    		$.post('{{ route('subsubcategories.get_brands_by_subsubcategory') }}',{_token:'{{ csrf_token() }}', subsubcategory_id:subsubcategory_id}, function(data){
    		    for (var i = 0; i < data.length; i++) {
    		        $('#brands').append($('<option>', {
    		            value: data[i].id,
    		            text: data[i].name
    		        }));
    		    }
    		});
            get_price_variations_by_subsubcategory(subsubcategory_id);
    	}

        function get_price_variations_by_subsubcategory(subsubcategory_id){
    		$.post('{{ route('subsubcategories.get_price_variations_by_subsubcategory') }}',{_token:'{{ csrf_token() }}', subsubcategory_id:subsubcategory_id}, function(data){
    		    $('#customer_choice_options').html(data);
    		});
    	}

        function filterListItems(el, list){
            filter = el.value.toUpperCase();
            li = $('#'+list).children();
            for (i = 0; i < li.length; i++) {
                if ($(li[i]).html().toUpperCase().indexOf(filter) > -1) {
                    $(li[i]).show();
                } else {
                    $(li[i]).hide();
                }
            }
        }
    </script>
@endsection
