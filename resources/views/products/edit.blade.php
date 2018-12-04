@extends('layouts.app')

@section('content')

<div class="row">
	<form class="form form-horizontal mar-top" action="{{route('products.update', $product->id)}}" method="POST" enctype="multipart/form-data" id="choice_form">
		<input name="_method" type="hidden" value="POST">
		<input type="hidden" name="id" value="{{ $product->id }}">
		@csrf
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
				            <a data-toggle="tab" href="#demo-stk-lft-tab-5" aria-expanded="false">Customer Choice</a>
				        </li>
						<li class="">
				            <a data-toggle="tab" href="#demo-stk-lft-tab-6" aria-expanded="false">Price</a>
				        </li>
						<li class="">
				            <a data-toggle="tab" href="#demo-stk-lft-tab-7" aria-expanded="false">Description</a>
				        </li>
						<li class="">
				            <a data-toggle="tab" href="#demo-stk-lft-tab-8" aria-expanded="false">Display Settings</a>
				        </li>
						<li class="">
				            <a data-toggle="tab" href="#demo-stk-lft-tab-9" aria-expanded="false">Shipping Info</a>
				        </li>
						<li class="">
				            <a data-toggle="tab" href="#demo-stk-lft-tab-10" aria-expanded="false">PDF Specs</a>
				        </li>
				    </ul>

				    <!--Tabs Content-->
				    <div class="tab-content">
				        <div id="demo-stk-lft-tab-1" class="tab-pane fade active in">
							<div class="form-group">
	                            <label class="col-lg-2 control-label">{{__('web.product_name')}}</label>
	                            <div class="col-lg-7">
	                                <input type="text" class="form-control" name="name" placeholder="{{__('web.product_name')}}" value="{{$product->name}}" required>
	                            </div>
	                        </div>
	                        <div class="form-group" id="category">
	                            <label class="col-lg-2 control-label">{{__('web.category')}}</label>
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
	                                <input type="text" class="form-control" name="unit" placeholder="Unit (e.g. KG, Pc etc)" value="{{$product->unit}}" required>
	                            </div>
	                        </div>
	                        <div class="form-group">
	                            <label class="col-lg-2 control-label">{{__('web.tags')}}</label>
	                            <div class="col-lg-7">
	                                <input type="text" class="form-control" name="tags[]" id="tags" value="{{ $product->tags }}" placeholder="Type to add a tag" data-role="tagsinput">
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
										<option value="youtube" <?php if($product->video_provider == 'youtube') echo "selected";?> >Youtube</option>
										<option value="dailymotion" <?php if($product->video_provider == 'dailymotion') echo "selected";?> >Dailymotion</option>
										<option value="vimeo" <?php if($product->video_provider == 'vimeo') echo "selected";?> >Vimeo</option>
									</select>
								</div>
							</div>
							<div class="form-group">
								<label class="col-lg-2 control-label">Video Link</label>
								<div class="col-lg-7">
									<input type="text" class="form-control" name="video_link" value="{{ $product->video_link }}" placeholder="Video Link" required>
								</div>
							</div>
				        </div>
						<div id="demo-stk-lft-tab-4" class="tab-pane fade">
				            <p class="text-main text-semibold">Meta Tags</p>
				        </div>
						<div id="demo-stk-lft-tab-5" class="tab-pane fade">
							<div class="form-group">
								<div class="col-lg-2">
									<input type="text" class="form-control" value="{{__('web.colors')}}" disabled>
								</div>
								<div class="col-lg-7">
									<select class="form-control demo-select2-placeholder" name="colors[]" id="colors" multiple>
										@foreach (\App\Color::orderBy('name', 'asc')->get() as $key => $color)
											<option value="{{ $color->code }}" <?php if(in_array($color->code, json_decode($product->colors))) echo 'selected'?> >{{ $color->name }}</option>
										@endforeach
									</select>
								</div>
								<div class="col-lg-2">
									<label class="switch" style="margin-top:5px;">
										<input value="1" type="checkbox" name="colors_active" <?php if(count(json_decode($product->colors)) > 0) echo "checked";?> >
										<span class="slider round"></span>
									</label>
								</div>
							</div>

							<div class="customer_choice_options" id="customer_choice_options">
								@foreach (json_decode($product->choice_options) as $key => $choice_option)
									<div class="form-group">
										<div class="col-lg-2">
											<input type="hidden" name="choice_no[]" value="{{ explode('_', $choice_option->name)[1] }}">
											<input type="text" class="form-control" name="choice[]" value="{{ $choice_option->title }}" placeholder="Choice Title">
										</div>
										<div class="col-lg-7">
											<input type="text" class="form-control" name="choice_options_{{ explode('_', $choice_option->name)[1] }}[]" placeholder="Enter choice values" value="{{ implode(',', $choice_option->options) }}" data-role="tagsinput" onchange="update_sku()">
										</div>
										<div class="col-lg-2">
											<button onclick="delete_row(this)" class="btn btn-danger btn-icon"><i class="demo-psi-recycling icon-lg"></i></button>
										</div>
									</div>
								@endforeach
							</div>
							<div class="form-group">
								<div class="col-lg-2">
									<button type="button" class="btn btn-info" onclick="add_more_customer_choice_option()">{{ __('web.add_more_customer_choice_option') }}</button>
								</div>
							</div>
				        </div>
						<div id="demo-stk-lft-tab-6" class="tab-pane fade">
							<div class="form-group">
	                            <label class="col-lg-2 control-label">{{__('web.unit_price')}}</label>
	                            <div class="col-lg-7">
	                                <input type="text" placeholder="{{__('web.unit_price')}}" name="unit_price" class="form-control" value="{{$product->unit_price}}" required>
	                            </div>
	                        </div>
	                        <div class="form-group">
	                            <label class="col-lg-2 control-label">{{__('web.purchase_price')}}</label>
	                            <div class="col-lg-7">
	                                <input type="number" min="0" step="0.01" placeholder="{{__('web.purchase_price')}}" name="purchase_price" class="form-control" value="{{$product->purchase_price}}" required>
	                            </div>
	                        </div>
	                        <div class="form-group">
	                            <label class="col-lg-2 control-label">{{__('web.tax')}}</label>
	                            <div class="col-lg-7">
	                                <input type="number" min="0" step="0.01" placeholder="{{__('web.tax')}}" name="tax" class="form-control" value="{{$product->tax}}" required>
	                            </div>
	                            <div class="col-lg-1">
	                                <select class="demo-select2" name="tax_type" required>
	                                	<option value="amount" <?php if($product->tax_type == 'amount') echo "selected";?> >$</option>
	                                	<option value="percent" <?php if($product->tax_type == 'percent') echo "selected";?> >%</option>
	                                </select>
	                            </div>
	                        </div>
	                        <div class="form-group">
	                            <label class="col-lg-2 control-label">{{__('web.discount')}}</label>
	                            <div class="col-lg-7">
	                                <input type="number" min="0" step="0.01" placeholder="{{__('web.discount')}}" name="discount" class="form-control" value="{{$product->discount}}" required>
	                            </div>
	                            <div class="col-lg-1">
	                                <select class="demo-select2" name="discount_type" required>
	                                	<option value="amount" <?php if($product->discount_type == 'amount') echo "selected";?> >$</option>
	                                	<option value="percent" <?php if($product->discount_type == 'percent') echo "selected";?> >%</option>
	                                </select>
	                            </div>
	                        </div>
							<br>
							<div class="sku_combination" id="sku_combination">

							</div>
				        </div>
						<div id="demo-stk-lft-tab-7" class="tab-pane fade">
							<div class="form-group">
	                            <label class="col-lg-2 control-label">{{__('web.description')}}</label>
	                            <div class="col-lg-9">
	                                <textarea class="demo-summernote-long" name="description">{{$product->description}}</textarea>
	                            </div>
	                        </div>
				        </div>
						<div id="demo-stk-lft-tab-8" class="tab-pane fade">

				        </div>
						<div id="demo-stk-lft-tab-9" class="tab-pane fade">
							<div class="col-sm-4">
						        <div class="panel">
						            <div class="panel-heading">
						                <h3 class="panel-title text-center">DHL</h3>
						            </div>
						            <div class="panel-body text-center">
						                <label class="switch">
						                    <input type="checkbox" name="dhl" value="1" checked>
						                    <span class="slider round"></span>
						                </label>
						            </div>
						        </div>
						    </div>
							<div class="col-sm-4">
						        <div class="panel">
						            <div class="panel-heading">
						                <h3 class="panel-title text-center">FedX</h3>
						            </div>
						            <div class="panel-body text-center">
						                <label class="switch">
						                    <input type="checkbox" name="fedx" value="1" checked>
						                    <span class="slider round"></span>
						                </label>
						            </div>
						        </div>
						    </div>
							<div class="col-sm-4">
						        <div class="panel">
						            <div class="panel-heading">
						                <h3 class="panel-title text-center">UPS</h3>
						            </div>
						            <div class="panel-body text-center">
						                <label class="switch">
						                    <input type="checkbox" name="ups" value="1" checked>
						                    <span class="slider round"></span>
						                </label>
						            </div>
						        </div>
						    </div>
				        </div>
						<div id="demo-stk-lft-tab-10" class="tab-pane fade">

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

	var i = $('input[name="choice_no[]"').last().val();

	function add_more_customer_choice_option(){
		i++;
		$('#customer_choice_options').append('<div class="form-group"><div class="col-lg-2"><input type="hidden" name="choice_no[]" value="'+i+'"><input type="text" class="form-control" name="choice[]" value="" placeholder="Choice Title"></div><div class="col-lg-7"><input type="text" class="form-control" name="choice_options_'+i+'[]" placeholder="Enter choice values" data-role="tagsinput" onchange="update_sku()"></div><div class="col-lg-2"><button onclick="delete_row(this)" class="btn btn-danger btn-icon"><i class="demo-psi-recycling icon-lg"></i></button></div></div>');
		$("input[data-role=tagsinput], select[multiple][data-role=tagsinput]").tagsinput();
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

	function delete_row(em){
		$(em).closest('.form-group').remove();
		update_sku();
	}

	function update_sku(){
		$.ajax({
		   type:"POST",
		   url:'{{ route('products.sku_combination_edit') }}',
		   data:$('#choice_form').serialize(),
		   success: function(data){
			   $('#sku_combination').html(data);
		   }
	   });
	}

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

	$(document).ready(function(){
		$('#container').removeClass('mainnav-lg').addClass('mainnav-sm');
	    get_subcategories_by_category();
		$("#photos").spartanMultiImagePicker({
			fieldName:        'photos[]',
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
	});

</script>

@endsection
