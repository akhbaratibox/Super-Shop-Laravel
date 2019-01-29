@extends('layouts.app')

@section('content')

<div class="row">
    <div class="col-lg-12">
        <a href="{{ route('products.create')}}" class="btn btn-info pull-right">{{__('add_new')}}</a>
    </div>
</div>

<br>

<div class="col-lg-12">
    <div class="tab-base">

        <!--Nav Tabs-->
        <ul class="nav nav-tabs">
            <li class="active">
                <a data-toggle="tab" href="#demo-lft-tab-1" aria-expanded="true">{{__('admin_products')}} <span class="badge badge-info">{{count(\App\Product::where('added_by','admin')->get())}}</span></a>
            </li>
            <li class="">
                <a data-toggle="tab" href="#demo-lft-tab-2" aria-expanded="false">{{__('seller_products')}} <span class="badge badge-purple">{{count(\App\Product::where('added_by','seller')->get())}}</span></a>
            </li>
        </ul>

        <!--Tabs Content-->
        <div class="tab-content">
            <div id="demo-lft-tab-1" class="tab-pane fade active in">
                <div class="panel">
                    <div class="panel-body">
                        <table class="table table-striped table-bordered demo-dt-basic" cellspacing="0" width="100%">
                            <thead>
                                <tr>
                                    <th>#</th>
                                    <th width="20%">{{__('name')}}</th>
                                    <th>{{__('photo')}}</th>
                                    <th>{{__('current_qty')}}</th>
                                    <th>{{__('base_price')}}</th>
                                    <th>{{__('todays_deal')}}</th>
                                    <th>{{__('published')}}</th>
                                    <th>{{__('featured')}}</th>
                                    <th>{{__('options')}}</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach(\App\Product::where('added_by', 'admin')->get() as $key => $product)
                                    <tr>
                                        <td>{{$key+1}}</td>
                                        <td><a href="{{ route('product', $product->slug) }}" target="_blank">{{ $product->name }}</a></td>
                                        <td><img class="img-md" src="{{ asset($product->thumbnail_img)}}" alt="Image"></td>
                                        <td>
                                            @php
                                                $qty = 0;
                                                foreach (json_decode($product->variations) as $key => $variation) {
                                                    $qty += $variation->qty;
                                                }
                                                echo $qty;
                                            @endphp
                                        </td>
                                        <td>{{ number_format($product->unit_price,2) }}</td>
                                        <td><label class="switch">
                                            <input onchange="update_todays_deal(this)" value="{{ $product->id }}" type="checkbox" <?php if($product->todays_deal == 1) echo "checked";?> >
                                            <span class="slider round"></span></label></td>
                                        <td><label class="switch">
                                            <input onchange="update_published(this)" value="{{ $product->id }}" type="checkbox" <?php if($product->published == 1) echo "checked";?> >
                                            <span class="slider round"></span></label></td>
                                        <td><label class="switch">
                                            <input onchange="update_featured(this)" value="{{ $product->id }}" type="checkbox" <?php if($product->featured == 1) echo "checked";?> >
                                            <span class="slider round"></span></label></td>
                                        <td>
                                            <div class="btn-group dropdown">
					                            <button class="btn btn-primary dropdown-toggle dropdown-toggle-icon" data-toggle="dropdown" type="button">
					                                Actions <i class="dropdown-caret"></i>
					                            </button>
					                            <ul class="dropdown-menu dropdown-menu-right">
					                                <li><a href="{{route('products.edit', $product->id)}}">Edit</a></li>
					                                <li><a onclick="confirm_modal('{{route('products.destroy', $product->id)}}');">Delete</a></li>
                                                    <li><a href="{{route('products.duplicate', $product->id)}}">Duplicate</a></li>
					                            </ul>
					                        </div>
                                        </td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>

                    </div>
                </div>
            </div>
            <div id="demo-lft-tab-2" class="tab-pane fade">
                <div class="panel">
                    <div class="panel-body">
                        <table class="table table-striped table-bordered demo-dt-basic" cellspacing="0" width="100%">
                            <thead>
                                <tr>
                                    <th>#</th>
                                    <th width="20%">{{__('name')}}</th>
                                    <th>{{__('photo')}}</th>
                                    <th>{{__('current_qty')}}</th>
                                    <th>{{__('base_price')}}</th>
                                    <th>{{__('todays_deal')}}</th>
                                    <th>{{__('published')}}</th>
                                    <th>{{__('featured')}}</th>
                                    <th>{{__('options')}}</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach(\App\Product::where('added_by', 'seller')->get() as $key => $product)
                                    <tr>
                                        <td>{{$key+1}}</td>
                                        <td><a href="{{ route('product', $product->slug) }}" target="_blank">{{ $product->name }}</a></td>
                                        <td><img class="img-md" src="{{ asset($product->thumbnail_img)}}" alt="Image"></td>
                                        <td>
                                            @php
                                                $qty = 0;
                                                foreach (json_decode($product->variations) as $key => $variation) {
                                                    $qty += $variation->qty;
                                                }
                                                echo $qty;
                                            @endphp
                                        </td>
                                        <td>{{ number_format($product->unit_price,2) }}</td>
                                        <td><label class="switch">
                                            <input onchange="update_todays_deal(this)" value="{{ $product->id }}" type="checkbox" <?php if($product->todays_deal == 1) echo "checked";?> >
                                            <span class="slider round"></span></label></td>
                                        <td><label class="switch">
                                            <input onchange="update_published(this)" value="{{ $product->id }}" type="checkbox" <?php if($product->published == 1) echo "checked";?> >
                                            <span class="slider round"></span></label></td>
                                        <td><label class="switch">
                                            <input onchange="update_featured(this)" value="{{ $product->id }}" type="checkbox" <?php if($product->featured == 1) echo "checked";?> >
                                            <span class="slider round"></span></label></td>
                                        <td>
                                            <div class="btn-group dropdown">
					                            <button class="btn btn-primary dropdown-toggle dropdown-toggle-icon" data-toggle="dropdown" type="button">
					                                Actions <i class="dropdown-caret"></i>
					                            </button>
					                            <ul class="dropdown-menu dropdown-menu-right">
					                                <li><a href="{{route('products.edit', $product->id)}}">Edit</a></li>
					                                <li><a onclick="confirm_modal('{{route('products.destroy', $product->id)}}');">Delete</a></li>
                                                    <li><a href="{{route('products.duplicate', $product->id)}}">Duplicate</a></li>
					                            </ul>
					                        </div>
                                        </td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>

                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection


@section('script')
    <script type="text/javascript">

        $(document).ready(function(){
            //$('#container').removeClass('mainnav-lg').addClass('mainnav-sm');
        });

        function update_todays_deal(el){
            if(el.checked){
                var status = 1;
            }
            else{
                var status = 0;
            }
            $.post('{{ route('products.todays_deal') }}', {_token:'{{ csrf_token() }}', id:el.value, status:status}, function(data){
                if(data == 1){
                    showAlert('success', 'Todays Deal updated successfully');
                }
                else{
                    showAlert('danger', 'Something went wrong');
                }
            });
        }

        function update_published(el){
            if(el.checked){
                var status = 1;
            }
            else{
                var status = 0;
            }
            $.post('{{ route('products.published') }}', {_token:'{{ csrf_token() }}', id:el.value, status:status}, function(data){
                if(data == 1){
                    showAlert('success', 'Published products updated successfully');
                }
                else{
                    showAlert('danger', 'Something went wrong');
                }
            });
        }

        function update_featured(el){
            if(el.checked){
                var status = 1;
            }
            else{
                var status = 0;
            }
            $.post('{{ route('products.featured') }}', {_token:'{{ csrf_token() }}', id:el.value, status:status}, function(data){
                if(data == 1){
                    showAlert('success', 'Featured products updated successfully');
                }
                else{
                    showAlert('danger', 'Something went wrong');
                }
            });
        }
    </script>
@endsection
