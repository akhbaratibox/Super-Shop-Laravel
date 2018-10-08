<div class="col-sm-6 col-sm-offset-3">
	<table class="table table-responsive">
		<thead>
			<tr>
				<th>Color</th>
				@foreach(json_decode($subsubcategory->options) as $key=> $option)
					<th>{{$option->title}}</th>
				@endforeach
				<th width="10%">Quantity</th>
			</tr>
		</thead>
		<tbody>
			@foreach(json_decode($product->colors) as $color)
				@foreach(json_decode($subsubcategory->options) as $key=> $option)
			  
	                @if($option->type == 'radio' || $option->type == 'select')
	                    @foreach($option->options as $options)
	                    	<tr>
	                    		<td><input type="text" name="colors[]" class="form-control color" value="{{$color}}" disabled></td>
	                    		<td><label class="control-label">{{$options}}</label></td>
	                    		<td><input class="form-control" type="number" min="0" step="0.01" name="" required></td>
	                    	</tr>
	                    @endforeach
	                @endif

				@endforeach
			@endforeach
		</tbody>
	</table>
</div>
