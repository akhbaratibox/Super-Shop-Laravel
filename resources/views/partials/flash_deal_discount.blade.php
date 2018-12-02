@if(count($product_ids) > 0)
    <label class="col-sm-3 control-label">Discounts</label>
    <div class="col-sm-9">
        <table class="table table-bordered">
    		<thead>
    			<tr>
    				<td class="text-center" width="40%">
    					<label for="" class="control-label">Product</label>
    				</td>
                    <td class="text-center">
    					<label for="" class="control-label">Base Price</label>
    				</td>
    				<td class="text-center">
    					<label for="" class="control-label">Discount</label>
    				</td>
                    <td>
                        <label for="" class="control-label">Discount Type</label>
                    </td>
    			</tr>
    		</thead>
    		<tbody>
                @foreach ($product_ids as $key => $id)
                	@php
                		$product = \App\Product::findOrFail($id);
                	@endphp
                		<tr>
                			<td>
                				<label for="" class="control-label">{{ $product->name }}</label>
                			</td>
                            <td>
                				<label for="" class="control-label">{{ $product->unit_price }}</label>
                			</td>
                			<td>
                				<input type="number" name="discount_{{ $id }}" value="{{ $product->discount }}" min="0" step="1" class="form-control" required>
                			</td>
                            <td>
                                <select class="demo-select2" name="discount_type_{{ $id }}">
                                    <option value="amount">$</option>
                                    <option value="percent">%</option>
                                </select>
                            </td>
                		</tr>
                @endforeach
            </tbody>
        </table>
    </div>
@endif