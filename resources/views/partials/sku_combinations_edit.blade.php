@if(count($combinations[0]) > 0)
	<table class="table table-bordered">
		<thead>
			<tr>
				<td class="text-center">
					<label for="" class="control-label">Variant</label>
				</td>
				<td class="text-center">
					<label for="" class="control-label">Variant Price</label>
				</td>
				<td class="text-center">
					<label for="" class="control-label">SKU</label>
				</td>
				<td class="text-center">
					<label for="" class="control-label">Quantity</label>
				</td>
			</tr>
		</thead>
		<tbody>
@endif

@foreach ($combinations as $key => $combination)
	@php
		$sku = '';
		foreach (explode(' ', $product_name) as $key => $value) {
			$sku .= substr($value, 0, 1);
		}

		$str = '';
		foreach ($combination as $key => $item){
			if($key > 0 ){
				$str .= '-'.$item;
				$sku .='-'.$item;
			}
			else{
				if($colors_active == 1){
					$color_name = \App\Color::where('code', $item)->first()->name;
					$str .= $color_name;
					$sku .='-'.$color_name;
				}
				else{
					$str .= $item;
					$sku .='-'.$item;
				}
			}
		}
	@endphp
	@if(strlen($str) > 0)
		<tr>
			<td>
				<label for="" class="control-label">{{ $str }}</label>
			</td>
			<td>
				<input type="number" name="price_{{ $str }}" value="@php
                    if(isset(json_decode($product->variations)->$str->price)){
                        echo json_decode($product->variations)->$str->price;
                    }
                    else{
                        echo $unit_price;
                    }
                @endphp" min="0" step="0.01" class="form-control" required>
			</td>
			<td>
				<input type="text" name="sku_{{ $str }}" value="{{ $sku }}" class="form-control" required>
			</td>
			<td>
				<input type="number" name="qty_{{ $str }}" value="@php
                    if(isset(json_decode($product->variations)->str->qty)){
                        echo json_decode($product->variations)->$str->qty;
                    }
                    else{
                        echo '10';
                    }
                @endphp" min="1" step="1" class="form-control" required>
			</td>
		</tr>
	@endif
@endforeach

	</tbody>
</table>
