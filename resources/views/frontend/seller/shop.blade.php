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
                                        Shop Settings
                                        <a href="{{ route('shop.visit', $shop->id) }}" class="btn btn-link btn-sm">(Visit Shop)</a>
                                    </h2>
                                </div>
                                <div class="col-lg-6 col-12">
                                    <div class="float-right">
                                        <ul class="breadcrumb">
                                            <li><a href="{{ route('home') }}">Home</a></li>
                                            <li><a href="{{ route('dashboard') }}">Dashboard</a></li>
                                            <li class="active"><a href="{{ route('shop.index') }}">Shop Settings</a></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <form class="" action="{{ route('shop.update', $shop->id) }}" method="POST" enctype="multipart/form-data">
                            <input type="hidden" name="_method" value="PATCH">
                            @csrf
                            <div class="form-box bg-white mt-4">
                                <div class="form-box-title px-3 py-2">
                                    Basic info
                                </div>
                                <div class="form-box-content p-3">
                                    <div class="row">
                                        <div class="col-2">
                                            <label>Shop Name <span class="required-star">*</span></label>
                                        </div>
                                        <div class="col-10">
                                            <input type="text" class="form-control mb-3" placeholder="Shop name" name="name" value="{{ $shop->name }}" required>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-2">
                                            <label>Logo</label>
                                        </div>
                                        <div class="col-10">
                                            <input type="file" name="logo" id="file-2" class="custom-input-file custom-input-file--4" data-multiple-caption="{count} files selected" accept="image/*" />
                                            <label for="file-2" class="mw-100 mb-3">
                                                <span></span>
                                                <strong>
                                                    <i class="fa fa-upload"></i>
                                                    Choose image
                                                </strong>
                                            </label>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-2">
                                            <label>Sliders</label>
                                        </div>
                                        <div class="col-10">
                                            <input type="file" name="sliders[]" id="file-1" class="custom-input-file custom-input-file--4" data-multiple-caption="{count} files selected" multiple accept="image/*" />
                                            <label for="file-1" class="mw-100 mb-3">
                                                <span></span>
                                                <strong>
                                                    <i class="fa fa-upload"></i>
                                                    Choose images…
                                                </strong>
                                            </label>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-2">
                                            <label>Address <span class="required-star">*</span></label>
                                        </div>
                                        <div class="col-10">
                                            <input type="text" class="form-control mb-3" placeholder="Address" name="address" value="{{ $shop->address }}" required>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-2">
                                            <label>Facebook </label>
                                        </div>
                                        <div class="col-10">
                                            <input type="text" class="form-control mb-3" placeholder="Facebook" name="facebook" value="{{ $shop->facebook }}">
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-2">
                                            <label>Google </label>
                                        </div>
                                        <div class="col-10">
                                            <input type="text" class="form-control mb-3" placeholder="Google" name="google" value="{{ $shop->google }}">
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-2">
                                            <label>Twitter </label>
                                        </div>
                                        <div class="col-10">
                                            <input type="text" class="form-control mb-3" placeholder="Twitter" name="twitter" value="{{ $shop->twitter }}">
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-2">
                                            <label>Youtube </label>
                                        </div>
                                        <div class="col-10">
                                            <input type="text" class="form-control mb-3" placeholder="Youtube" name="youtube" value="{{ $shop->youtube }}">
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="text-right mt-4">
                                <button type="submit" class="btn btn-styled btn-base-1">Save</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>

@endsection
