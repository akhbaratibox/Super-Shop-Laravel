@extends('frontend.layouts.app')

@section('content')

    <section class="gry-bg py-4 profile">
        <div class="container">
            <div class="row cols-xs-space cols-sm-space cols-md-space">
                <div class="col-lg-3 d-none d-lg-block">
                    @include('frontend.inc.seller_side_nav')
                </div>

                <div class="col-lg-9">
                    <div class="main-content">
                        <!-- Page title -->
                        <div class="page-title">
                            <div class="row align-items-center">
                                <div class="col-md-6">
                                    <h2 class="heading heading-6 text-capitalize strong-600 mb-0">
                                        {{__('products')}}
                                    </h2>
                                </div>
                                <div class="col-md-6">
                                    <div class="float-md-right">
                                        <ul class="breadcrumb">
                                            <li><a href="{{ route('home') }}">{{__('Home')}}</a></li>
                                            <li><a href="{{ route('dashboard') }}">{{__('dashboard')}}</a></li>
                                            <li><a href="{{ route('seller.products') }}">{{__('products')}}</a></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- Order history table -->
                        <div class="card no-border mt-4">
                            <div class="row">
                                <div class="col-12">
                                    <a href="{{ route('seller.products.upload')}}" class="btn btn-base-1 pull-right mb-3 mt-3 mr-3">{{__('add_new')}}</a>
                                </div>
                            </div>
                            <div>
                                <table class="table table-sm table-hover table-responsive-md">
                                    <thead>
                                        <tr>
                                            <th>#</th>
                                            <th>{{__('name')}}</th>
                                            <th>{{__('subsubcategory')}}</th>
                                            <th>{{__('current_qty')}}</th>
                                            <th>{{__('base_price')}}</th>
                                            <th>{{__('featured')}}</th>
                                            <th>{{__('options')}}</th>
                                        </tr>
                                    </thead>

                                    <tbody>
                                        @foreach ($products as $key => $product)
                                            <tr>
                                                <td>{{ $key+1 }}</td>
                                                <td><a href="{{ route('product', $product->slug) }}">{{ $product->name }}</a></td>
                                                <td>{{ $product->subsubcategory->name }}</td>
                                                <td>
                                                    @php
                                                        $qty = 0;
                                                        foreach (json_decode($product->variations) as $key => $variation) {
                                                            $qty += $variation->qty;
                                                        }
                                                        echo $qty;
                                                    @endphp
                                                </td>
                                                <td>{{ $product->unit_price }}</td>
                                                <td><label class="switch">
                                                    <input onchange="update_featured(this)" value="{{ $product->id }}" type="checkbox" <?php if($product->featured == 1) echo "checked";?> >
                                                    <span class="slider round"></span></label>
                                                </td>
                                                <td>
                                                    <div class="dropdown">
                                                        <button class="btn" type="button" id="dropdownMenuButton-{{ $key }}" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                            <i class="fa fa-ellipsis-v"></i>
                                                        </button>

                                                        <div class="dropdown-menu dropdown-menu-right" aria-labelledby="dropdownMenuButton-{{ $key }}">
                                                            <a href="{{route('seller.products.edit', $product->id)}}" class="dropdown-item">{{__('Edit')}}</a>
        					                                <button onclick="confirm_modal('{{route('products.destroy', $product->id)}}')" class="dropdown-item">Delete</button>
                                                            <a href="{{route('products.duplicate', $product->id)}}" class="dropdown-item">{{__('Duplicate')}}</a>
                                                        </div>
                                                    </div>
                                                </td>
                                            </tr>
                                        @endforeach
                                    </tbody>
                                </table>
                            </div>
                        </div>

                        <div class="pagination-wrapper py-4">
                            <ul class="pagination justify-content-end">
                                {{ $products->links() }}
                            </ul>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>

@endsection

@section('script')
    <script type="text/javascript">
        function update_featured(el){
            if(el.checked){
                var status = 1;
            }
            else{
                var status = 0;
            }
            $.post('{{ route('products.featured') }}', {_token:'{{ csrf_token() }}', id:el.value, status:status}, function(data){
                if(data == 1){
                    showFrontendAlert('success', 'Featured products updated successfully');
                }
                else{
                    showFrontendAlert('danger', 'Something went wrong');
                }
            });
        }
    </script>
@endsection
