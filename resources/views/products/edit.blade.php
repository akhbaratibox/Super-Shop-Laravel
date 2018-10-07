@extends('layouts.app')

@section('content')

<div class="row">
	<div class="col-sm-12">
		<div class="panel">

		    <!-- Classic Form Wizard -->
		    <!--===================================================-->
		    <div id="demo-cls-wz">

		        <!--Nav-->
		        <ul class="wz-nav-off wz-icon-inline wz-classic">
		            <li class="col-xs-4 bg-info active">
		                <a data-toggle="tab" href="#demo-cls-tab1" aria-expanded="true">
		                    Product Details
		                </a>
		            </li>
		            <li class="col-xs-4 bg-info">
		                <a data-toggle="tab" href="#demo-cls-tab2" aria-expanded="false">
		                	Business Details
		                </a>
		            </li>
		            <li class="col-xs-4 bg-info">
		                <a data-toggle="tab" href="#demo-cls-tab3" aria-expanded="false">
		                    Customer Choice Options
		                </a>
		            </li>
		        </ul>

		        <!--Form-->
		        <form id="product_form" class="form-horizontal mar-top" action="{{route('products.update', $product->id)}}" method="POST" enctype="multipart/form-data">
		        	<input name="_method" type="hidden" value="PATCH">
		        	@csrf
		        	<input type="hidden" name="added_by" value="admin">
		            <div class="panel-body">
		                <div class="tab-content">

		                    <!--First tab-->
		                    <div id="demo-cls-tab1" class="tab-pane active in">
		                        <div class="form-group">
		                            <label class="col-lg-3 control-label">Product Name</label>
		                            <div class="col-lg-7">
		                                <input type="text" class="form-control" name="name" placeholder="Product Name" value="{{$product->name}}" required>
		                            </div>
		                        </div>
		                        <div class="form-group" id="category">
		                            <label class="col-lg-3 control-label">Category</label>
		                            <div class="col-lg-7">
		                                <select class="form-control demo-select2-placeholder" name="category_id" id="category_id" required>
		                                	<option>Select an option</option>
		                                	@foreach($categories as $category)
		                                	    <option value="{{$category->id}}" <?php if($product->category_id == $category->id) echo "selected"; ?> >{{$category->name}}</option>
		                                	@endforeach
		                                </select>
		                            </div>
		                        </div>
		                        <div class="form-group" id="subcategory">
		                            <label class="col-lg-3 control-label">Sub Category</label>
		                            <div class="col-lg-7">
		                                <select class="form-control demo-select2-placeholder" name="subcategory_id" id="subcategory_id" required>
		                                	
		                                </select>
		                            </div>
		                        </div>
		                        <div class="form-group" id="subsubcategory">
		                            <label class="col-lg-3 control-label">Sub Sub Category</label>
		                            <div class="col-lg-7">
		                                <select class="form-control demo-select2-placeholder" name="subsubcategory_id" id="subsubcategory_id" required>
		                                	
		                                </select>
		                            </div>
		                        </div>
		                        <div class="form-group" id="brand">
		                            <label class="col-lg-3 control-label">Brand</label>
		                            <div class="col-lg-7">
		                                <select class="form-control demo-select2-placeholder" name="brand_id" id="brand_id" required>
		                                	
		                                </select>
		                            </div>
		                        </div>
		                        <div class="form-group">
		                            <label class="col-lg-3 control-label">Unit</label>
		                            <div class="col-lg-7">
		                                <input type="text" class="form-control" name="unit" placeholder="Unit (e.g. KG, Pc etc)" value="{{$product->unit}}" required>
		                            </div>
		                        </div>
		                        <div class="form-group">
		                            <label class="col-lg-3 control-label">Tags</label>
		                            <div class="col-lg-7">
		                            	@php
		                            		$str = '';
		                            		foreach (json_decode($product->tags) as $key => $tag) {
		                            			$str .= $tag;
		                            		}
		                            	@endphp
		                                <input type="text" class="form-control" name="tags[]" id="tags" value="{{$str}}" placeholder="Type to add a tag" data-role="tagsinput">
		                            </div>
		                        </div>
		                        <div class="form-group">
		                            <label class="col-lg-3 control-label">Product Image</label>
		                            <div class="col-lg-7">
		                                <input type="file" class="form-control" name="photo" required>
		                            </div>
		                        </div>
		                        <div class="form-group">
		                            <label class="col-lg-3 control-label">Description</label>
		                            <div class="col-lg-7">
		                                <textarea class="demo-summernote" name="description">{{$product->description}}</textarea>
		                            </div>
		                        </div>
		                    </div>

		                    <!--Second tab-->
		                    <div id="demo-cls-tab2" class="tab-pane fade">
		                        <div class="form-group">
		                            <label class="col-lg-3 control-label">Unit Price (Base Price)</label>
		                            <div class="col-lg-7">
		                                <input type="text" placeholder="Unit Price" name="unit_price" class="form-control" value="{{$product->unit_price}}" required>
		                            </div>
		                        </div>
		                        <div class="form-group">
		                            <label class="col-lg-3 control-label">Purchase Price</label>
		                            <div class="col-lg-7">
		                                <input type="number" min="0" step="0.01" placeholder="Purchase Price" name="purchase_price" class="form-control" value="{{$product->purchase_price}}" required>
		                            </div>
		                        </div>
		                        <div class="form-group">
		                            <label class="col-lg-3 control-label">Shipping Cost</label>
		                            <div class="col-lg-7">
		                                <input type="number" min="0" step="0.01" placeholder="Shipping Cost" name="shipping_cost" class="form-control" value="{{$product->shipping_cost}}" required>
		                            </div>
		                        </div>
		                        <div class="form-group">
		                            <label class="col-lg-3 control-label">Tax</label>
		                            <div class="col-lg-7">
		                                <input type="number" min="0" step="0.01" placeholder="Tax" name="tax" class="form-control" value="{{$product->tax}}" required>
		                            </div>
		                            <div class="col-lg-1">
		                                <select class="demo-select2" name="tax_type" required>
		                                	<option value="amount" <?php if($product->tax_type == 'amount') echo "selected";?> >$</option>
		                                	<option value="percent" <?php if($product->tax_type == 'percent') echo "selected";?> >%</option>
		                                </select>
		                            </div>
		                        </div>
		                        <div class="form-group">
		                            <label class="col-lg-3 control-label">Discount</label>
		                            <div class="col-lg-7">
		                                <input type="number" min="0" step="0.01" placeholder="Discount" name="discount" class="form-control" value="{{$product->discount}}" required>
		                            </div>
		                            <div class="col-lg-1">
		                                <select class="demo-select2" name="discount_type" required>
		                                	<option value="amount" <?php if($product->discount_type == 'amount') echo "selected";?> >$</option>
		                                	<option value="percent" <?php if($product->discount_type == 'percent') echo "selected";?> >%</option>
		                                </select>
		                            </div>
		                        </div>
		                    </div>

		                    <!--Third tab-->
		                    <div id="demo-cls-tab3" class="tab-pane">
		                       
								@foreach(json_decode($product->colors) as $key=> $color)
									@if($key == 0)
										<div class="form-group increment">
										    <label class="col-sm-3 control-label">Colors</label>
										    <div class="col-sm-3">
										        <input type="text" name="colors[]" class="form-control color" value="{{$color}}" required>
										    </div>
										    <div class="col-sm-3">
										        <button class="btn btn-primary add-colors" type="button" style="margin-left:10px">Add More Color Options</button>
										    </div>
										</div>
									@else
				                        <div class="form-group control-group">
				                        	<label class="col-sm-3 control-label"></label>
				                        	<div class="col-sm-3">
				                        		<input type="text" name="colors[]" value="{{$color}}" class="form-control color" required>
				                        	</div>
				                        	<div class="col-sm-3">
				                        		<button class="btn btn-danger btn-circle btn-sm remove-colors" type="button" style="margin-left:10px"><i class="glyphicon glyphicon-remove"></i>
				                        		</button>
				                        	</div>
				                        </div>
			                        @endif
		                        @endforeach
								
								<div class="customer_choice_options" id="customer_choice_options">
									
									@foreach(json_decode($product->subsubcategory->options) as $key=> $option)
									    <div class="form-group clearfix">
									        <div class="col-sm-3 text-right">
									            <label class="control-label">{{$option->title}}</label>
									        </div>
									        <div class="col-sm-6">
									            <div class="customer_choice_options_types_wrap">
									                <div class="customer_choice_options_types_wrap_child">
									                    @if($option->type == 'radio' || $option->type == 'select')
									                        @foreach($option->options as $options)
									                            <div class="form-group clearfix">
									                                <div class="col-sm-3">
									                                    <input class="form-control" type="text" value="{{$options}}" disabled>
									                                </div>
									                                <div class="col-sm-3">
									                                	@php
									                                		$str_price = $option->name.'_'.$options.'_price';
									                                		$str_variation = $option->name.'_'.$options.'_variation';
									                                	@endphp
									                                    <input class="form-control" type="number" min="0" step="0.01" name="{{$option->name}}_{{$options}}_price" value="{{json_decode($product->price_variations)->$str_price}}" required>
									                                </div>
									                                <div class="col-sm-3">
									                                    <select class="form-control demo-select2" name="{{$option->name}}_{{$options}}_variation">
									                                        <option value="increase" <?php if(json_decode($product->price_variations)->$str_variation == 'increase') echo "selected";?> >Increase</option>
									                                        <option value="decrease" <?php if(json_decode($product->price_variations)->$str_variation == 'decrease') echo "selected";?> >Decrease</option>
									                                    </select>
									                                </div>
									                            </div>
									                        @endforeach

									                    @endif
									                </div>
									            </div>
									        </div>
									    </div>
									@endforeach

								</div>

		                    </div>
		            </div>

		            <!--Footer button-->
		            <div class="panel-footer text-right">
		                <div class="box-inline">
		                    <button type="button" class="previous btn btn-info disabled">Previous</button>
		                    <button type="button" class="next btn btn-info">Next</button>
		                    <button type="button" class="finish btn btn-info" disabled="" style="display: none;">Finish</button>
		                </div>
		            </div>
		        </form>
		    </div>
		    <!--===================================================-->
		    <!-- End Classic Form Wizard -->

		</div>
	</div>
</div>

@endsection

@section('script')

<script type="text/javascript">

	var i = 0;

	$('.color').spectrum({
		preferredFormat: "hex",
	    showPalette: true,
	    palette: [
	        ["#000","#444","#666","#999","#ccc","#eee","#f3f3f3","#fff"],
            ["#f00","#f90","#ff0","#0f0","#0ff","#00f","#90f","#f0f"],
            ["#f4cccc","#fce5cd","#fff2cc","#d9ead3","#d0e0e3","#cfe2f3","#d9d2e9","#ead1dc"],
            ["#ea9999","#f9cb9c","#ffe599","#b6d7a8","#a2c4c9","#9fc5e8","#b4a7d6","#d5a6bd"],
            ["#e06666","#f6b26b","#ffd966","#93c47d","#76a5af","#6fa8dc","#8e7cc3","#c27ba0"],
            ["#c00","#e69138","#f1c232","#6aa84f","#45818e","#3d85c6","#674ea7","#a64d79"],
            ["#900","#b45f06","#bf9000","#38761d","#134f5c","#0b5394","#351c75","#741b47"],
            ["#600","#783f04","#7f6000","#274e13","#0c343d","#073763","#20124d","#4c1130"]
	    ]
	});

	$(".add-colors").click(function(){
	    var html = '<div class="form-group control-group"><label class="col-sm-3 control-label"></label><div class="col-sm-3"><input type="text" name="colors[]" class="form-control color" required></div><div class="col-sm-3"><button class="btn btn-danger btn-circle btn-sm remove-colors" type="button" style="margin-left:10px"><i class="glyphicon glyphicon-remove"></i></button></div></div>';
	    
	    $(".increment").after(html);

    	$('.color').spectrum({
    		preferredFormat: "hex",
    	    showPalette: true,
    	    palette: [
    	        ["#000","#444","#666","#999","#ccc","#eee","#f3f3f3","#fff"],
                ["#f00","#f90","#ff0","#0f0","#0ff","#00f","#90f","#f0f"],
                ["#f4cccc","#fce5cd","#fff2cc","#d9ead3","#d0e0e3","#cfe2f3","#d9d2e9","#ead1dc"],
                ["#ea9999","#f9cb9c","#ffe599","#b6d7a8","#a2c4c9","#9fc5e8","#b4a7d6","#d5a6bd"],
                ["#e06666","#f6b26b","#ffd966","#93c47d","#76a5af","#6fa8dc","#8e7cc3","#c27ba0"],
                ["#c00","#e69138","#f1c232","#6aa84f","#45818e","#3d85c6","#674ea7","#a64d79"],
                ["#900","#b45f06","#bf9000","#38761d","#134f5c","#0b5394","#351c75","#741b47"],
                ["#600","#783f04","#7f6000","#274e13","#0c343d","#073763","#20124d","#4c1130"]
    	    ]
    	});
	});

	$("body").on("click",".remove-colors",function(){
	    $(this).parents(".control-group").remove();
	});

	function get_subcategories_by_category(){
		var category_id = $('#category_id').val();
		$.post('{{ route('subcategories.get_subcategories_by_category') }}',{_token:'{{ csrf_token() }}', category_id:category_id}, function(data){
		    $('#subcategory_id').html(null);
		    for (var i = 0; i < data.length; i++) {
		        $('#subcategory_id').append($('<option>', {
		            value: data[i].id,
		            text: data[i].name
		        }));
		    }
		    $("#subcategory_id > option").each(function() {
		        if(this.value == '{{$product->subcategory_id}}'){
		            $("#subcategory_id").val(this.value).change();
		        }
		    });

		    $('.demo-select2').select2();

		    get_subsubcategories_by_subcategory();
		});
	}
	
	function get_subsubcategories_by_subcategory(){
		var subcategory_id = $('#subcategory_id').val();
		$.post('{{ route('subsubcategories.get_subsubcategories_by_subcategory') }}',{_token:'{{ csrf_token() }}', subcategory_id:subcategory_id}, function(data){
		    $('#subsubcategory_id').html(null);
		    for (var i = 0; i < data.length; i++) {
		        $('#subsubcategory_id').append($('<option>', {
		            value: data[i].id,
		            text: data[i].name
		        }));
		    }
		    $("#subsubcategory_id > option").each(function() {
		        if(this.value == '{{$product->subsubcategory_id}}'){
		            $("#subsubcategory_id").val(this.value).change();
		        }
		    });

		    $('.demo-select2').select2();

		    get_brands_by_subsubcategory();
		});
	}

	function get_brands_by_subsubcategory(){
		var subsubcategory_id = $('#subsubcategory_id').val();
		$.post('{{ route('subsubcategories.get_brands_by_subsubcategory') }}',{_token:'{{ csrf_token() }}', subsubcategory_id:subsubcategory_id}, function(data){
		    $('#brand_id').html(null);
		    for (var i = 0; i < data.length; i++) {
		        $('#brand_id').append($('<option>', {
		            value: data[i].id,
		            text: data[i].name
		        }));
		    }
		    $("#brand_id > option").each(function() {
		        if(this.value == '{{$product->brand_id}}'){
		            $("#brand_id").val(this.value).change();
		        }
		    });

		    $('.demo-select2').select2();

		});
	}

	function get_price_variations_by_subsubcategory(){
		var subsubcategory_id = $('#subsubcategory_id').val();
		$.post('{{ route('subsubcategories.get_price_variations_by_subsubcategory') }}',{_token:'{{ csrf_token() }}', subsubcategory_id:subsubcategory_id}, function(data){
		    $('#customer_choice_options').html(data);
		});
	}

	$(document).ready(function(){
	    get_subcategories_by_category();
	});

	$('#category_id').on('change', function() {
	    get_subcategories_by_category();
	});

	$('#subcategory_id').on('change', function() {
	    get_subsubcategories_by_subcategory();
	});

	$('#subsubcategory_id').on('change', function() {
		if(i>1){
			get_price_variations_by_subsubcategory();
		}
	    get_brands_by_subsubcategory();
	    i++;
	});


</script>

@endsection