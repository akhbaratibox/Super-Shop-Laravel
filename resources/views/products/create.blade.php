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
		        <form class="form-horizontal mar-top">
		            <div class="panel-body">
		                <div class="tab-content">

		                    <!--First tab-->
		                    <div id="demo-cls-tab1" class="tab-pane active in">
		                        <div class="form-group">
		                            <label class="col-lg-3 control-label">Product Name</label>
		                            <div class="col-lg-7">
		                                <input type="text" class="form-control" name="name" placeholder="Product Name" required>
		                            </div>
		                        </div>
		                        <div class="form-group" id="category">
		                            <label class="col-lg-3 control-label">Category</label>
		                            <div class="col-lg-7">
		                                <select class="form-control demo-select2-placeholder"name="category_id" id="category_id" required>
		                                	<option>Select an option</option>
		                                	@foreach($categories as $category)
		                                	    <option value="{{$category->id}}">{{$category->name}}</option>
		                                	@endforeach
		                                </select>
		                            </div>
		                        </div>
		                        <div class="form-group" id="subcategory">
		                            <label class="col-lg-3 control-label">Sub Category</label>
		                            <div class="col-lg-7">
		                                <select class="form-control demo-select2-placeholder"name="subcategory_id" id="subcategory_id" required>
		                                	
		                                </select>
		                            </div>
		                        </div>
		                        <div class="form-group" id="subsubcategory">
		                            <label class="col-lg-3 control-label">Sub Sub Category</label>
		                            <div class="col-lg-7">
		                                <select class="form-control demo-select2-placeholder"name="subsubcategory_id" id="subsubcategory_id" required>
		                                	
		                                </select>
		                            </div>
		                        </div>
		                        <div class="form-group" id="brand">
		                            <label class="col-lg-3 control-label">Brand</label>
		                            <div class="col-lg-7">
		                                <select class="form-control demo-select2-placeholder"name="brand_id" id="brand_id" required>
		                                	
		                                </select>
		                            </div>
		                        </div>
		                        <div class="form-group">
		                            <label class="col-lg-3 control-label">Unit</label>
		                            <div class="col-lg-7">
		                                <input type="text" class="form-control" name="unit" placeholder="Unit (e.g. KG, Pc etc)" required>
		                            </div>
		                        </div>
		                        <div class="form-group">
		                            <label class="col-lg-3 control-label">Tags</label>
		                            <div class="col-lg-7">
		                                <input type="text" class="form-control" placeholder="Type to add a tag" data-role="tagsinput">
		                            </div>
		                        </div>
		                        <div class="form-group">
		                            <label class="col-lg-3 control-label">Product Image</label>
		                            <div class="col-lg-7">
		                                <input type="file" class="form-control" required>
		                            </div>
		                        </div>
		                        <div class="form-group">
		                            <label class="col-lg-3 control-label">Description</label>
		                            <div class="col-lg-7">
		                                <textarea class="demo-summernote" name="description"></textarea>
		                            </div>
		                        </div>
		                    </div>

		                    <!--Second tab-->
		                    <div id="demo-cls-tab2" class="tab-pane fade">
		                        <div class="form-group">
		                            <label class="col-lg-3 control-label">First name</label>
		                            <div class="col-lg-7">
		                                <input type="text" placeholder="First name" name="firstName" class="form-control">
		                            </div>
		                        </div>
		                        <div class="form-group">
		                            <label class="col-lg-3 control-label">Last name</label>
		                            <div class="col-lg-7">
		                                <input type="text" placeholder="Last name" name="lastName" class="form-control">
		                            </div>
		                        </div>
		                    </div>

		                    <!--Third tab-->
		                    <div id="demo-cls-tab3" class="tab-pane">
		                        <div class="form-group">
		                            <label class="col-lg-3 control-label">Address</label>
		                            <div class="col-lg-7">
		                                <input type="text" placeholder="Address" name="address" class="form-control">
		                            </div>
		                        </div>
		                        <div class="form-group">
		                            <label class="col-lg-3 control-label">City</label>
		                            <div class="col-lg-7">
		                                <input type="text" placeholder="City" name="city" class="form-control">
		                            </div>
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
	
	$(document).ready(function(){
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
	    });
	});

	$('#category_id').on('change', function() {
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
	    });
	});

	$('#subcategory_id').on('change', function() {
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
	    });
	});

	$('#subsubcategory_id').on('change', function() {
	    var subsubcategory_id = $('#subsubcategory_id').val();
	    $.post('{{ route('subsubcategories.get_brands_by_subsubcategory') }}',{_token:'{{ csrf_token() }}', subsubcategory_id:subsubcategory_id}, function(data){
	        $('#brand_id').html(null);
	        // for (var i = 0; i < data.length; i++) {
	        //     $('#brand_id').append($('<option>', {
	        //         value: data[i].id,
	        //         text: data[i].name
	        //     }));
	        //     $('.demo-select2').select2();
	        // }
	        alert(data);
	    });
	});

</script>

@endsection