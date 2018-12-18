@extends('frontend.layouts.app')

@section('content')

    <section class="gry-bg py-4 profile">
        <div class="container">
            <div class="row cols-xs-space cols-sm-space cols-md-space">
                <div class="col-lg-3">
                    @include('frontend.inc.seller_side_nav')
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
                                            <li><a href="{{ route('home') }}">Home</a></li>
                                            <li><a href="{{ route('dashboard') }}">Dashboard</a></li>
                                            <li><a href="{{ route('seller.products') }}">Products</a></li>
                                            <li class="active"><a href="{{ route('seller.products.upload') }}">Add Product</a></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <form class="" action="{{route('products.store')}}" method="POST" enctype="multipart/form-data" id="choice_form">
                            @csrf
                    		<input type="hidden" name="added_by" value="seller">

                            <div class="form-box bg-white mt-4">
                                <div class="form-box-title px-3 py-2">
                                    General
                                </div>
                                <div class="form-box-content p-3">
                                    <div class="row">
                                        <div class="col-2">
                                            <label>{{__('web.product_name')}} <span class="required-star">*</span></label>
                                        </div>
                                        <div class="col-10">
                                            <input type="text" class="form-control mb-3" name="name" placeholder="{{__('web.product_name')}}">
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
                                                <select class="form-control mb-3 selectpicker" data-placeholder="Select a brand" id="brands" name="brand_id">

                                                </select>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-2">
                                            <label>Product Unit <span class="required-star">*</span></label>
                                        </div>
                                        <div class="col-10">
                                            <input type="text" class="form-control mb-3" name="unit" placeholder="Product unit">
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-2">
                                            <label>Product Tag <span class="required-star">*</span></label>
                                        </div>
                                        <div class="col-10">
                                            <input type="text" class="form-control mb-3 tagsInput" name="tags[]" placeholder="Type & hit enter" data-role="tagsinput">
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
                                            <input type="file" name="photos[]" id="file-1" class="custom-input-file custom-input-file--4" data-multiple-caption="{count} files selected" multiple accept="image/*" />
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
                                            <input type="file" name="thumbnail_img" id="file-2" class="custom-input-file custom-input-file--4" data-multiple-caption="{count} files selected" accept="image/*" />
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
                                            <input type="file" name="featured_img" id="file-3" class="custom-input-file custom-input-file--4" data-multiple-caption="{count} files selected" accept="image/*" />
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
                                            <input type="file" name="flash_deal_img" id="file-4" class="custom-input-file custom-input-file--4" data-multiple-caption="{count} files selected" accept="image/*" />
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
                                                <select class="form-control selectpicker" data-minimum-results-for-search="Infinity" name="video_provider">
                                                    <option value="youtube">Youtube</option>
            										<option value="dailymotion">Dailymotion</option>
            										<option value="vimeo">Vimeo</option>
                                                </select>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-2">
                                            <label>Video URL</label>
                                        </div>
                                        <div class="col-10">
                                            <input type="text" class="form-control mb-3" name="video_link" placeholder="Video link">
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
                                    Customer Choice
                                </div>
                                <div class="form-box-content p-3">
                                    <div class="row mb-3">
                                        <div class="col-2">
        									<input type="text" class="form-control" value="{{__('web.colors')}}" disabled>
        								</div>
        								<div class="col-9">
        									<select class="form-control selectpicker" name="colors[]" id="colors" multiple>
        										@foreach (\App\Color::orderBy('name', 'asc')->get() as $key => $color)
        											<option value="{{ $color->code }}">{{ $color->name }}</option>
        										@endforeach
        									</select>
        								</div>
        								<div class="col-1">
        									<label class="switch" style="margin-top:5px;">
        										<input value="1" type="checkbox" name="colors_active" checked>
        										<span class="slider round"></span>
        									</label>
        								</div>
                                    </div>
                                    <div id="customer_choice_options">

                                    </div>
                                    <div class="row">
                                        <div class="col-2">
        									<button type="button" class="btn btn-info" onclick="add_more_customer_choice_option()">{{ __('web.add_more_customer_choice_option') }}</button>
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
                                            <input type="number" min="0" step="0.01" class="form-control mb-3" name="unit_price" placeholder="Unit Price (Base Price)">
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-2">
                                            <label>Purchase Price</label>
                                        </div>
                                        <div class="col-10">
                                            <input type="number" min="0" step="0.01" class="form-control mb-3" name="purchase_price" placeholder="Purchase Price">
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-2">
                                            <label>Tax</label>
                                        </div>
                                        <div class="col-8">
                                            <input type="number" min="0" step="0.01" class="form-control mb-3" name="tax" placeholder="Tax">
                                        </div>
                                        <div class="col-2">
                                            <div class="mb-3">
                                                <select class="form-control selectpicker" name="tax_type" data-minimum-results-for-search="Infinity">
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
                                            <input type="number" min="0" step="0.01" class="form-control mb-3" name="discount" placeholder="Discount">
                                        </div>
                                        <div class="col-2">
                                            <div class="mb-3">
                                                <select class="form-control selectpicker" name="discount_type" data-minimum-results-for-search="Infinity">
                                                    <option value="1">$</option>
                                                    <option value="2">%</option>
                                                </select>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-12" id="sku_combination">

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
                                                <textarea class="editor" name="description"></textarea>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="form-box mt-4 text-right">
                                <button type="submit" class="btn btn-styled btn-base-1">{{ __('web.save') }}</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Modal -->
    <div class="modal fade" id="categorySelectModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true" data-backdrop="static">
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
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancel</button>
                    <button type="button" class="btn btn-primary" onclick="closeModal()">Confirm</button>
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

        var category_id = null;
        var subcategory_id = null;
        var subsubcategory_id = null;

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

        function get_subcategories_by_category(el, cat_id){
            list_item_highlight(el);
            category_id = cat_id;
            subcategory_id = null;
            subsubcategory_id = null;
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

        function get_subsubcategories_by_subcategory(el, subcat_id){
            list_item_highlight(el);
            subcategory_id = subcat_id;
            subsubcategory_id = null;
            subcategory_name = $(el).html();
            $('#subsubcategories').html(null);
            $.post('{{ route('subsubcategories.get_subsubcategories_by_subcategory') }}',{_token:'{{ csrf_token() }}', subcategory_id:subcategory_id}, function(data){
                for (var i = 0; i < data.length; i++) {
                    $('#subsubcategories').append('<li onclick="confirm_subsubcategory(this, '+data[i].id+')">'+data[i].name+'</li>');
                }
                $('#subsubcategory_list').show();
            });
        }

        function confirm_subsubcategory(el, subsubcat_id){
            list_item_highlight(el);
            subsubcategory_id = subsubcat_id;
            subsubcategory_name = $(el).html();
    	}

        function get_brands_by_subsubcategory(subsubcat_id){
            $('#brands').html(null);
    		$.post('{{ route('subsubcategories.get_brands_by_subsubcategory') }}',{_token:'{{ csrf_token() }}', subsubcategory_id:subsubcategory_id}, function(data){
    		    for (var i = 0; i < data.length; i++) {
    		        $('#brands').append($('<option>', {
    		            value: data[i].id,
    		            text: data[i].name
    		        }));
    		    }
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

        function closeModal(){
            if(category_id > 0 && subcategory_id > 0 && subsubcategory_id > 0){
                $('#category_id').val(category_id);
                $('#subcategory_id').val(subcategory_id);
                $('#subsubcategory_id').val(subsubcategory_id);
                $('#product_category').html(category_name+'>'+subcategory_name+'>'+subsubcategory_name);
                $('#categorySelectModal').modal('hide');
                get_brands_by_subsubcategory(subsubcategory_id);
            }
            else{
                alert('Please choose categories...');
                console.log(category_id);
                console.log(subcategory_id);
                console.log(subsubcategory_id);
                //showAlert();
            }
        }

        var i = 0;
    	function add_more_customer_choice_option(){
    		$('#customer_choice_options').append('<div class="row mb-3"><div class="col-2"><input type="hidden" name="choice_no[]" value="'+i+'"><input type="text" class="form-control" name="choice[]" value="" placeholder="Choice Title"></div><div class="col-9"><input type="text" class="form-control tagsInput" name="choice_options_'+i+'[]" placeholder="Enter choice values" onchange="update_sku()"></div><div class="col-1"><button type="button" onclick="delete_row(this)" class="btn btn-link btn-icon text-danger"><i class="fa fa-trash-o"></i></button></div></div>');
    		i++;
            $('.tagsInput').tagsinput('items');
    	}

    	$('input[name="colors_active"]').on('change', function() {
    	    if(!$('input[name="colors_active"]').is(':checked')){
    			$('#colors').prop('disabled', true);
    		}
    		else{
    			$('#colors').prop('disabled', false);
    		}
    		update_sku();
    	});

    	$('#colors').on('change', function() {
    	    update_sku();
    	});

    	$('input[name="unit_price"]').on('keyup', function() {
    	    update_sku();
    	});

        $('input[name="name"]').on('keyup', function() {
    	    update_sku();
    	});

    	function delete_row(em){
    		$(em).closest('.row').remove();
    		update_sku();
    	}

    	function update_sku(){
            $.ajax({
    		   type:"POST",
    		   url:'{{ route('products.sku_combination') }}',
    		   data:$('#choice_form').serialize(),
    		   success: function(data){
    			   $('#sku_combination').html(data);
    		   }
    	   });
    	}

    </script>
@endsection
