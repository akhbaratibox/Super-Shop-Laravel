<div class="col-sm-6 col-sm-offset-3">
	<form class="form-horizontal">
		<div class="row">
			<div class="col-sm-4">
				<h3 class="panel-title">Color</h3>
			</div>
			<div class="col-sm-8">
				@foreach(json_decode($product->colors) as $color)
					<div class="form-group">
						<div class="col-sm-6">
							<input type="text" name="colors[]" class="form-control color" value="{{$color}}" disabled>
						</div>
						<div class="col-sm-6">
							<input class="form-control" type="number" min="0" step="1" name="color_{{ $color }}_qty" placeholder="0" required>
						</div>
					</div>
				@endforeach
			</div>
		</div>

		@foreach(json_decode($subsubcategory->options) as $key=> $option)
			@if($option->type == 'radio' || $option->type == 'select')
				<div class="row">
					<div class="col-sm-4">
						<h3 class="panel-title">{{ $option->title }}</h3>
					</div>
					<div class="col-sm-8">
						@foreach($option->options as $options)
							<div class="form-group">
								<div class="col-sm-6">
									<input type="text" name="colors[]" class="form-control" value="{{$options}}" disabled>
								</div>
								<div class="col-sm-6">
									<input class="form-control" type="number" min="0" step="1" name="{{ $option->name }}_{{$options}}_qty" placeholder="0" required>
								</div>
							</div>
						@endforeach
					</div>
				</div>
			@endif
		@endforeach
	</form>
</div>
