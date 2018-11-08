@extends('frontend.layouts.app')

@section('content')

    <section class="gry-bg py-4 profile">
        <div class="container">
            <div class="row cols-xs-space cols-sm-space cols-md-space">
                <div class="col-lg-3">
                    @include('frontend.inc.seller_side_nav')
                </div>

                <div class="col-lg-9">
                    <div class="main-content">
                        <!-- Page title -->
                        <div class="page-title">
                            <div class="row align-items-center">
                                <div class="col-lg-6 col-12">
                                    <h2 class="heading heading-6 text-capitalize strong-600 mb-0">
                                        Products
                                    </h2>
                                </div>
                                <div class="col-lg-6 col-12">
                                    <div class="float-right">
                                        <ul class="breadcrumb">
                                            <li><a href="{{ route('home') }}">Home</a></li>
                                            <li><a href="{{ route('dashboard') }}">Dashboard</a></li>
                                            <li><a href="{{ route('seller.products') }}">Products</a></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- Order history table -->
                        <div class="card no-border mt-4">
                            <div class="row">
                                <div class="col-12">
                                    <a href="{{ route('seller.products.upload')}}" class="btn btn-info pull-right mb-3 mt-3 mr-3">{{__('web.add_new')}}</a>
                                </div>
                            </div>
                            <div>
                                <table class="table table-sm table-hover">
                                    <thead>
                                        <tr>
                                            <th>#</th>
                                            <th>{{__('web.name')}}</th>
                                            <th>{{__('web.subsubcategory')}}</th>
                                            <th>{{__('web.current_qty')}}</th>
                                            <th>{{__('web.base_price')}}</th>
                                            <th>{{__('web.options')}}</th>
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
                                                <td>
                                                    <ul class="inline-links">
                                                        <li><a href="{{route('seller.products.edit', $product->id)}}" ><button class="btn btn-mint">Edit</button></a></li>
    					                                <li><button onclick="confirm_modal('{{route('products.destroy', $product->id)}}');" class="btn btn-danger">Delete</button></li>
                                                        <li><button onclick="" class="btn btn-purple">Discount</button></li>
                                                    </ul>
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
