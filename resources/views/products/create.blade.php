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
		                    {{__('web.product_details')}}
		                </a>
		            </li>
		            <li class="col-xs-4 bg-info">
		                <a data-toggle="tab" href="#demo-cls-tab2" aria-expanded="false">
		                	{{__('web.business_details')}}
		                </a>
		            </li>
		            <li class="col-xs-4 bg-info">
		                <a data-toggle="tab" href="#demo-cls-tab3" aria-expanded="false">
		                    {{__('web.customer_choice_options')}}
		                </a>
		            </li>
		        </ul>

		        <!--Form-->
		        <form id="product_form" class="form-horizontal mar-top" action="{{route('products.store')}}" method="POST" enctype="multipart/form-data">
		        	@csrf
		        	<input type="hidden" name="added_by" value="admin">
		            <div class="panel-body">
		                <div class="tab-content">

		                    <!--First tab-->
		                    <div id="demo-cls-tab1" class="tab-pane active in">
		                        <div class="form-group">
		                            <label class="col-lg-3 control-label">{{__('web.product_name')}}</label>
		                            <div class="col-lg-7">
		                                <input type="text" class="form-control" name="name" placeholder="{{__('web.product_name')}}" required>
		                            </div>
		                        </div>
		                        <div class="form-group" id="category">
		                            <label class="col-lg-3 control-label">{{__('web.category')}}</label>
		                            <div class="col-lg-7">
		                                <select class="form-control demo-select2-placeholder" name="category_id" id="category_id" required>
		                                	@foreach($categories as $category)
		                                	    <option value="{{$category->id}}">{{$category->name}}</option>
		                                	@endforeach
		                                </select>
		                            </div>
		                        </div>
		                        <div class="form-group" id="subcategory">
		                            <label class="col-lg-3 control-label">{{__('web.subcategory')}}</label>
		                            <div class="col-lg-7">
		                                <select class="form-control demo-select2-placeholder" name="subcategory_id" id="subcategory_id" required>
		                                	
		                                </select>
		                            </div>
		                        </div>
		                        <div class="form-group" id="subsubcategory">
		                            <label class="col-lg-3 control-label">{{__('web.subsubcategory')}}</label>
		                            <div class="col-lg-7">
		                                <select class="form-control demo-select2-placeholder" name="subsubcategory_id" id="subsubcategory_id" required>
		                                	
		                                </select>
		                            </div>
		                        </div>
		                        <div class="form-group" id="brand">
		                            <label class="col-lg-3 control-label">{{__('web.brand')}}</label>
		                            <div class="col-lg-7">
		                                <select class="form-control demo-select2-placeholder" name="brand_id" id="brand_id" required>
		                                	
		                                </select>
		                            </div>
		                        </div>
		                        <div class="form-group">
		                            <label class="col-lg-3 control-label">{{__('web.unit')}}</label>
		                            <div class="col-lg-7">
		                                <input type="text" class="form-control" name="unit" placeholder="Unit (e.g. KG, Pc etc)" required>
		                            </div>
		                        </div>
		                        <div class="form-group">
		                            <label class="col-lg-3 control-label">{{__('web.tags')}}</label>
		                            <div class="col-lg-7">
		                                <input type="text" class="form-control" name="tags[]" placeholder="Type to add a tag" data-role="tagsinput">
		                            </div>
		                        </div>
		                        <div class="form-group">
		                            <label class="col-lg-3 control-label">{{__('web.product_image')}}</label>
		                            <div class="col-lg-7">
		                                <input type="file" class="form-control" name="photo" required>
		                            </div>
		                        </div>
		                        <div class="form-group">
		                            <label class="col-lg-3 control-label">{{__('web.description')}}</label>
		                            <div class="col-lg-7">
		                                <textarea class="demo-summernote" name="description"></textarea>
		                            </div>
		                        </div>
		                    </div>

		                    <!--Second tab-->
		                    <div id="demo-cls-tab2" class="tab-pane fade">
		                        <div class="form-group">
		                            <label class="col-lg-3 control-label">{{__('web.unit_price')}}</label>
		                            <div class="col-lg-7">
		                                <input type="text" placeholder="{{__('web.unit_price')}}" name="unit_price" class="form-control">
		                            </div>
		                        </div>
		                        <div class="form-group">
		                            <label class="col-lg-3 control-label">{{__('web.purchase_price')}}</label>
		                            <div class="col-lg-7">
		                                <input type="number" min="0" step="0.01" placeholder="{{__('web.purchase_price')}}" name="purchase_price" class="form-control">
		                            </div>
		                        </div>
		                        <div class="form-group">
		                            <label class="col-lg-3 control-label">{{__('web.shipping_cost')}}</label>
		                            <div class="col-lg-7">
		                                <input type="number" min="0" step="0.01" placeholder="{{__('web.shipping_cost')}}" name="shipping_cost" class="form-control">
		                            </div>
		                        </div>
		                        <div class="form-group">
		                            <label class="col-lg-3 control-label">{{__('web.tax')}}</label>
		                            <div class="col-lg-7">
		                                <input type="number" min="0" step="0.01" placeholder="{{__('web.tax')}}" name="tax" class="form-control">
		                            </div>
		                            <div class="col-lg-1">
		                                <select class="demo-select2" name="tax_type">
		                                	<option value="amount">$</option>
		                                	<option value="percent">%</option>
		                                </select>
		                            </div>
		                        </div>
		                        <div class="form-group">
		                            <label class="col-lg-3 control-label">{{__('web.discount')}}</label>
		                            <div class="col-lg-7">
		                                <input type="number" min="0" step="0.01" placeholder="{{__('web.discount')}}" name="discount" class="form-control">
		                            </div>
		                            <div class="col-lg-1">
		                                <select class="demo-select2" name="discount_type">
		                                	<option value="amount">$</option>
		                                	<option value="percent">%</option>
		                                </select>
		                            </div>
		                        </div>
		                    </div>

		                    <!--Third tab-->
		                    <div id="demo-cls-tab3" class="tab-pane">
		                        
		                        <div class="form-group increment">
		                            <label class="col-sm-3 control-label">{{__('web.colors')}}</label>
		                            <div class="col-sm-3">
		                                <input type="text" name="colors[]" class="form-control color" value="#000" required>
		                            </div>
		                            <div class="col-sm-3">
		                                <button class="btn btn-primary add-colors" type="button" style="margin-left:10px">{{__('web.add_more_color')}}</button>
		                            </div>
		                        </div>
								
								<div class="customer_choice_options" id="customer_choice_options">

								</div>

		                    </div>
		            </div>

		            <!--Footer button-->
		            <div class="panel-footer text-right">
		                <div class="box-inline">
		                    <button type="button" class="previous btn btn-info disabled">{{__('web.previous')}}</button>
		                    <button type="button" class="next btn btn-info">{{__('web.next')}}</button>
		                    <button type="button" class="finish btn btn-info" disabled="" style="display: none;">{{__('web.finish')}}</button>
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
		        $('.demo-select2').select2();
		    }
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
		        $('.demo-select2').select2();
		    }
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
		        $('.demo-select2').select2();
		    }
		});
		get_price_variations_by_subsubcategory();
	}

	function get_price_variations_by_subsubcategory(){
		var subsubcategory_id = $('#subsubcategory_id').val();
		$.post('{{ route('subsubcategories.get_price_variations_by_subsubcategory') }}',{_token:'{{ csrf_token() }}', subsubcategory_id:subsubcategory_id}, function(data){
		    $('#customer_choice_options').html(data);
		});
	}

	$(document).ready(function(){
	    //get_subcategories_by_category();
	});

	$('#category_id').on('change', function() {
	    get_subcategories_by_category();
	});

	$('#subcategory_id').on('change', function() {
	    get_subsubcategories_by_subcategory();
	});

	$('#subsubcategory_id').on('change', function() {
	    get_brands_by_subsubcategory();
	    get_price_variations_by_subsubcategory();
	});


</script>

@endsection