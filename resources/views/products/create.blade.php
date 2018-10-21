@extends('layouts.app')

@section('content')

<div class="row">
	<form class="form form-horizontal mar-top" action="{{route('products.store')}}" method="POST" enctype="multipart/form-data">
		@csrf
		<input type="hidden" name="added_by" value="admin">
		<div class="panel">
			<div class="panel-heading">
				<h3 class="panel-title">Product Information</h3>
			</div>
			<div class="panel-body">
				<div class="tab-base tab-stacked-left">
				    <!--Nav tabs-->
				    <ul class="nav nav-tabs">
				        <li class="active">
				            <a data-toggle="tab" href="#demo-stk-lft-tab-1" aria-expanded="true">General</a>
				        </li>
				        <li class="">
				            <a data-toggle="tab" href="#demo-stk-lft-tab-2" aria-expanded="false">Images</a>
				        </li>
						<li class="">
				            <a data-toggle="tab" href="#demo-stk-lft-tab-3" aria-expanded="false">Videos</a>
				        </li>
				        <li class="">
				            <a data-toggle="tab" href="#demo-stk-lft-tab-4" aria-expanded="false">Meta Tags</a>
				        </li>
						<li class="">
				            <a data-toggle="tab" href="#demo-stk-lft-tab-5" aria-expanded="false">Price</a>
				        </li>
						<li class="">
				            <a data-toggle="tab" href="#demo-stk-lft-tab-6" aria-expanded="false">Description</a>
				        </li>
						<li class="">
				            <a data-toggle="tab" href="#demo-stk-lft-tab-7" aria-expanded="false">Customer Choice</a>
				        </li>
						<li class="">
				            <a data-toggle="tab" href="#demo-stk-lft-tab-8" aria-expanded="false">Related Products</a>
				        </li>
						<li class="">
				            <a data-toggle="tab" href="#demo-stk-lft-tab-9" aria-expanded="false">Display Settings</a>
				        </li>
						<li class="">
				            <a data-toggle="tab" href="#demo-stk-lft-tab-10" aria-expanded="false">Shipping Info</a>
				        </li>
						<li class="">
				            <a data-toggle="tab" href="#demo-stk-lft-tab-11" aria-expanded="false">PDF Specs</a>
				        </li>
				    </ul>

				    <!--Tabs Content-->
				    <div class="tab-content">
				        <div id="demo-stk-lft-tab-1" class="tab-pane fade active in">
							<div class="form-group">
								<label class="col-lg-2 control-label">{{__('web.product_name')}}</label>
								<div class="col-lg-7">
									<input type="text" class="form-control" name="name" placeholder="{{__('web.product_name')}}" required>
								</div>
							</div>
							<div class="form-group" id="category">
								<label class="col-lg-2 control-label">{{__('web.category')}}</label>
								<div class="col-lg-7">
									<select class="form-control demo-select2-placeholder" name="category_id" id="category_id" required>
										@foreach($categories as $category)
											<option value="{{$category->id}}">{{$category->name}}</option>
										@endforeach
									</select>
								</div>
							</div>
							<div class="form-group" id="subcategory">
								<label class="col-lg-2 control-label">{{__('web.subcategory')}}</label>
								<div class="col-lg-7">
									<select class="form-control demo-select2-placeholder" name="subcategory_id" id="subcategory_id" required>

									</select>
								</div>
							</div>
							<div class="form-group" id="subsubcategory">
								<label class="col-lg-2 control-label">{{__('web.subsubcategory')}}</label>
								<div class="col-lg-7">
									<select class="form-control demo-select2-placeholder" name="subsubcategory_id" id="subsubcategory_id" required>

									</select>
								</div>
							</div>
							<div class="form-group" id="brand">
								<label class="col-lg-2 control-label">{{__('web.brand')}}</label>
								<div class="col-lg-7">
									<select class="form-control demo-select2-placeholder" name="brand_id" id="brand_id" required>

									</select>
								</div>
							</div>
							<div class="form-group">
								<label class="col-lg-2 control-label">{{__('web.unit')}}</label>
								<div class="col-lg-7">
									<input type="text" class="form-control" name="unit" placeholder="Unit (e.g. KG, Pc etc)" required>
								</div>
							</div>
							<div class="form-group">
								<label class="col-lg-2 control-label">{{__('web.tags')}}</label>
								<div class="col-lg-7">
									<input type="text" class="form-control" name="tags[]" placeholder="Type to add a tag" data-role="tagsinput">
								</div>
							</div>
				        </div>
				        <div id="demo-stk-lft-tab-2" class="tab-pane fade">
							<div class="form-group">
								<label class="col-lg-2 control-label">Main Images</label>
								<div class="col-lg-7">
									<div id="photos">

									</div>
								</div>
							</div>
							<div class="form-group">
								<label class="col-lg-2 control-label">Thumbnail Image</label>
								<div class="col-lg-7">
									<div id="thumbnail_img">

									</div>
								</div>
							</div>
							<div class="form-group">
								<label class="col-lg-2 control-label">Featured</label>
								<div class="col-lg-7">
									<div id="featured_img">

									</div>
								</div>
							</div>
							<div class="form-group">
								<label class="col-lg-2 control-label">Flash Deal</label>
								<div class="col-lg-7">
									<div id="flash_deal_img">

									</div>
								</div>
							</div>
				        </div>
				        <div id="demo-stk-lft-tab-3" class="tab-pane fade">
							<div class="form-group">
								<label class="col-lg-2 control-label">Video Provider</label>
								<div class="col-lg-7">
									<select class="form-control demo-select2-placeholder" name="video_provider" id="video_provider" required>
										<option value="youtube">Youtube</option>
										<option value="dailymotion">Dailymotion</option>
										<option value="vimeo">Vimeo</option>
									</select>
								</div>
							</div>
							<div class="form-group">
								<label class="col-lg-2 control-label">Video Link</label>
								<div class="col-lg-7">
									<input type="text" class="form-control" name="video_link" placeholder="Video Link" required>
								</div>
							</div>
				        </div>
						<div id="demo-stk-lft-tab-4" class="tab-pane fade">
				            <p class="text-main text-semibold">Meta Tags</p>
				        </div>
						<div id="demo-stk-lft-tab-5" class="tab-pane fade">
							<div class="form-group">
								<label class="col-lg-2 control-label">{{__('web.unit_price')}}</label>
								<div class="col-lg-7">
									<input type="text" placeholder="{{__('web.unit_price')}}" name="unit_price" class="form-control">
								</div>
							</div>
							<div class="form-group">
								<label class="col-lg-2 control-label">{{__('web.purchase_price')}}</label>
								<div class="col-lg-7">
									<input type="number" min="0" step="0.01" placeholder="{{__('web.purchase_price')}}" name="purchase_price" class="form-control">
								</div>
							</div>
							<div class="form-group">
								<label class="col-lg-2 control-label">{{__('web.shipping_cost')}}</label>
								<div class="col-lg-7">
									<input type="number" min="0" step="0.01" placeholder="{{__('web.shipping_cost')}}" name="shipping_cost" class="form-control">
								</div>
							</div>
							<div class="form-group">
								<label class="col-lg-2 control-label">{{__('web.tax')}}</label>
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
								<label class="col-lg-2 control-label">{{__('web.discount')}}</label>
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
						<div id="demo-stk-lft-tab-6" class="tab-pane fade">
							<div class="form-group">
								<label class="col-lg-2 control-label">{{__('web.description')}}</label>
								<div class="col-lg-7">
									<textarea class="demo-summernote-long" name="description"></textarea>
								</div>
							</div>
				        </div>
						<div id="demo-stk-lft-tab-7" class="tab-pane fade">
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
						<div id="demo-stk-lft-tab-8" class="tab-pane fade">
							<label class="col-lg-2 control-label">Related Products</label>
				        </div>
						<div id="demo-stk-lft-tab-9" class="tab-pane fade">

				        </div>
						<div id="demo-stk-lft-tab-10" class="tab-pane fade">

				        </div>
						<div id="demo-stk-lft-tab-11" class="tab-pane fade">

				        </div>
				    </div>
				</div>
			</div>
			<div class="panel-footer text-right">
				<button type="submit" name="button" class="btn btn-purple">{{ __('web.save') }}</button>
			</div>
		</div>
	</form>
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
		$('#container').removeClass('mainnav-lg').addClass('mainnav-sm');
	    get_subcategories_by_category();
		$("#photos").spartanMultiImagePicker({
			fieldName:        'fileUpload[]',
			maxCount:         10,
			rowHeight:        '200px',
			groupClassName:   'col-md-4 col-sm-4 col-xs-6',
			maxFileSize:      '',
			dropFileLabel : "Drop Here",
			onExtensionErr : function(index, file){
				console.log(index, file,  'extension err');
				alert('Please only input png or jpg type file')
			},
			onSizeErr : function(index, file){
				console.log(index, file,  'file size too big');
				alert('File size too big');
			}
		});
		$("#thumbnail_img").spartanMultiImagePicker({
			fieldName:        'thumbnail_img',
			maxCount:         1,
			rowHeight:        '200px',
			groupClassName:   'col-md-4 col-sm-4 col-xs-6',
			maxFileSize:      '',
			dropFileLabel : "Drop Here",
			onExtensionErr : function(index, file){
				console.log(index, file,  'extension err');
				alert('Please only input png or jpg type file')
			},
			onSizeErr : function(index, file){
				console.log(index, file,  'file size too big');
				alert('File size too big');
			}
		});
		$("#featured_img").spartanMultiImagePicker({
			fieldName:        'featured_img',
			maxCount:         1,
			rowHeight:        '200px',
			groupClassName:   'col-md-4 col-sm-4 col-xs-6',
			maxFileSize:      '',
			dropFileLabel : "Drop Here",
			onExtensionErr : function(index, file){
				console.log(index, file,  'extension err');
				alert('Please only input png or jpg type file')
			},
			onSizeErr : function(index, file){
				console.log(index, file,  'file size too big');
				alert('File size too big');
			}
		});
		$("#flash_deal_img").spartanMultiImagePicker({
			fieldName:        'flash_deal_img',
			maxCount:         1,
			rowHeight:        '200px',
			groupClassName:   'col-md-4 col-sm-4 col-xs-6',
			maxFileSize:      '',
			dropFileLabel : "Drop Here",
			onExtensionErr : function(index, file){
				console.log(index, file,  'extension err');
				alert('Please only input png or jpg type file')
			},
			onSizeErr : function(index, file){
				console.log(index, file,  'file size too big');
				alert('File size too big');
			}
		});
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
