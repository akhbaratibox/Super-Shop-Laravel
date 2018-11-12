@extends('frontend.layouts.app')

@section('content')

    <section class="gry-bg py-4 profile">
        <div class="container">
            <div class="row cols-xs-space cols-sm-space cols-md-space">
                <div class="col-lg-3">
                    @if(Auth::user()->user_type == 'seller')
                        @include('frontend.inc.seller_side_nav')
                    @elseif(Auth::user()->user_type == 'customer')
                        @include('frontend.inc.customer_side_nav')
                    @endif
                </div>

                <div class="col-lg-9">
                    <div class="main-content">
                        <!-- Page title -->
                        <div class="page-title">
                            <div class="row align-items-center">
                                <div class="col-lg-6 col-12">
                                    <h2 class="heading heading-6 text-capitalize strong-600 mb-0">
                                        Manage Profile
                                    </h2>
                                </div>
                                <div class="col-lg-6 col-12">
                                    <div class="float-right">
                                        <ul class="breadcrumb">
                                            <li><a href="{{ route('home') }}">Home</a></li>
                                            <li><a href="{{ route('dashboard') }}">Dashboard</a></li>
                                            <li class="active"><a href="{{ route('profile') }}">Manage Profile</a></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <form class="" action="{{ route('profile.update') }}" method="POST" enctype="multipart/form-data">
                            @csrf
                            <div class="form-box bg-white mt-4">
                                <div class="form-box-title px-3 py-2">
                                    Basic info
                                </div>
                                <div class="form-box-content p-3">
                                    <div class="row">
                                        <div class="col-2">
                                            <label>Your Name</label>
                                        </div>
                                        <div class="col-10">
                                            <input type="text" class="form-control mb-3" placeholder="Your name" name="name" value="{{ Auth::user()->name }}">
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-2">
                                            <label>Your Email</label>
                                        </div>
                                        <div class="col-10">
                                            <input type="email" class="form-control mb-3" placeholder="Your Email" name="email" value="{{ Auth::user()->email }}" disabled>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-2">
                                            <label>Photo</label>
                                        </div>
                                        <div class="col-10">
                                            <input type="file" name="photo" id="file-3" class="custom-input-file custom-input-file--4" data-multiple-caption="{count} files selected" accept="image/*" />
                                            <label for="file-3" class="mw-100 mb-3">
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
                                            <label>Your Password</label>
                                        </div>
                                        <div class="col-10">
                                            <input type="password" class="form-control mb-3" placeholder="New Password" name="new_password">
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-2">
                                            <label>Confirm Password</label>
                                        </div>
                                        <div class="col-10">
                                            <input type="password" class="form-control mb-3" placeholder="Confirm Password" name="confirm_password">
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="form-box bg-white mt-4">
                                <div class="form-box-title px-3 py-2">
                                    Shipping info
                                </div>
                                <div class="form-box-content p-3">
                                    <div class="row">
                                        <div class="col-2">
                                            <label>Address</label>
                                        </div>
                                        <div class="col-10">
                                            <textarea class="form-control textarea-autogrow mb-3" placeholder="Your Address" rows="1" name="address">{{ Auth::user()->address }}</textarea>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-2">
                                            <label>Country</label>
                                        </div>
                                        <div class="col-10">
                                            <div class="mb-3">
                                                <select class="form-control mb-3 selectpicker" data-placeholder="Select your country" name="country">
                                                    @foreach (\App\Country::all() as $key => $country)
                                                        <option value="{{ $country->code }}" <?php if(Auth::user()->country == $country->code) echo "selected";?> >{{ $country->name }}</option>
                                                    @endforeach
                                                </select>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-2">
                                            <label>City</label>
                                        </div>
                                        <div class="col-10">
                                            <input type="text" class="form-control mb-3" placeholder="Your City" name="city" value="{{ Auth::user()->city }}">
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-2">
                                            <label>Postal Code</label>
                                        </div>
                                        <div class="col-10">
                                            <input type="text" class="form-control mb-3" placeholder="Your Postal Code" name="postal_code" value="{{ Auth::user()->postal_code }}">
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-2">
                                            <label>Phone</label>
                                        </div>
                                        <div class="col-10">
                                            <input type="text" class="form-control mb-3" placeholder="Your Phone Number" name="phone" value="{{ Auth::user()->phone }}">
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="text-right mt-4">
                                <button type="submit" class="btn btn-styled btn-base-1">Update Profile</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>

@endsection
