@extends('layouts.app')

@section('content')

	<div class="col-sm-12">

		<div class="panel">
			<div class="panel-heading">
				<h3 class="panel-title text-center">Seller Verification Form</h3>
			</div>
			<div class="panel-body">
				<div class="row">
					<div class="col-lg-8 form-horizontal seller_form_border" id="form">

					</div>
					<div class="col-lg-4">

						<ul class="list-group">
							<li class="list-group-item btn" style="text-align: left;" onclick="appenddToForm('text')">Text Input</li>
							<li class="list-group-item btn" style="text-align: left;" onclick="appenddToForm('select')">Select</li>
							<li class="list-group-item btn" style="text-align: left;" onclick="appenddToForm('multi-select')">Multiple Select</li>
							<li class="list-group-item btn" style="text-align: left;" onclick="appenddToForm('radio')">Radio</li>
							<li class="list-group-item btn" style="text-align: left;" onclick="appenddToForm('file')">File</li>
						</ul>

					</div>
				</div>
			</div>
		</div>

	</div>

	<div class="text hide">
		<div class="form-group" style="background:rgba(0,0,0,0.1);padding:10px 0;">
			<div class="col-lg-3">
				<label class="control-label">Text</label>
			</div>
			<div class="col-lg-7">
				<input class="form-control" type="text" placeholder="Label">
			</div>
			<div class="col-lg-2">
				<span class="btn btn-danger btn-icon btn-circle icon-lg fa fa-times" onclick="delete_choice_clearfix(this)">
				</span>
			</div>
		</div>
	</div>

	<div class="file hide">
		<div class="form-group" style="background:rgba(0,0,0,0.1);padding:10px 0;">
			<div class="col-lg-3">
				<label class="control-label">File</label>
			</div>
			<div class="col-lg-7">
				<input class="form-control" type="text" placeholder="Label">
			</div>
			<div class="col-lg-2">
				<span class="btn btn-danger btn-icon btn-circle icon-lg fa fa-times" onclick="delete_choice_clearfix(this)">
				</span>
			</div>
		</div>
	</div>

	<div class="select hide">
		<div class="form-group" style="background:rgba(0,0,0,0.1);padding:10px 0;">
			<div class="col-lg-3">
				<label class="control-label">Select</label>
			</div>
			<div class="col-lg-7">
				<input class="form-control" type="text" placeholder="Select Label" style="margin-bottom:10px">
				<div class="customer_choice_options_types_wrap_child">

				</div>
				<button class="btn btn-success pull-right" type="button" onclick="add_customer_choice_options(this)"><i class="glyphicon glyphicon-plus"></i> Add option</button>
			</div>
			<div class="col-lg-2">
				<span class="btn btn-danger btn-icon btn-circle icon-lg fa fa-times" onclick="delete_choice_clearfix(this)">
				</span>
			</div>
		</div>
	</div>

	<div class="multi-select hide">
		<div class="form-group" style="background:rgba(0,0,0,0.1);padding:10px 0;">
			<div class="col-lg-3">
				<label class="control-label">Multi-Select</label>
			</div>
			<div class="col-lg-7">
				<input class="form-control" type="text" placeholder="Multi-Select Label" style="margin-bottom:10px">
				<div class="customer_choice_options_types_wrap_child">

				</div>
				<button class="btn btn-success pull-right" type="button" onclick="add_customer_choice_options(this)"><i class="glyphicon glyphicon-plus"></i> Add option</button>
			</div>
			<div class="col-lg-2">
				<span class="btn btn-danger btn-icon btn-circle icon-lg fa fa-times" onclick="delete_choice_clearfix(this)">
				</span>
			</div>
		</div>
	</div>

	<div class="radio hide">
		<div class="form-group" style="background:rgba(0,0,0,0.1);padding:10px 0;">
			<div class="col-lg-3">
				<label class="control-label">Radio</label>
			</div>
			<div class="col-lg-7">
				<input class="form-control" type="text" placeholder="Radio Label" style="margin-bottom:10px">
				<div class="customer_choice_options_types_wrap_child">

				</div>
				<button class="btn btn-success pull-right" type="button" onclick="add_customer_choice_options(this)"><i class="glyphicon glyphicon-plus"></i> Add option</button>
			</div>
			<div class="col-lg-2">
				<span class="btn btn-danger btn-icon btn-circle icon-lg fa fa-times" onclick="delete_choice_clearfix(this)">
				</span>
			</div>
		</div>
	</div>

	<div class="option hide">
		<div class="form-group">
			<div class="col-sm-6 col-sm-offset-4">
				<input class="form-control" type="text" value="" required>
			</div>
			<div class="col-sm-2"> <span class="btn btn-danger btn-icon btn-circle icon-lg fa fa-times" onclick="delete_choice_clearfix(this)"></span>
			</div>
		</div>
	</div>

@endsection

@section('script')
	<script type="text/javascript">
		function add_customer_choice_options(em){
			$(em).parent().find('.customer_choice_options_types_wrap_child').append($('.option').html());
		}
		function delete_choice_clearfix(em){
			$(em).parent().parent().remove();
		}
		function appenddToForm(type){
			$('#form').removeClass('seller_form_border');
			if(type == 'text'){
				$('#form').append($('.text').html());
			}
			else if (type == 'select') {
				$('#form').append($('.select').html());
			}
			else if (type == 'multi-select') {
				$('#form').append($('.multi-select').html());
			}
			else if (type == 'radio') {
				$('#form').append($('.radio').html());
			}
			else if (type == 'file') {
				$('#form').append($('.file').html());
			}
		}
	</script>
@endsection
