@extends('frontend.layouts.app')

@section('content')
    <section class="gry-bg py-4">
        <div class="profile">
            <div class="container container-sm">
                <div class="row cols-xs-space cols-sm-space cols-md-space">
                    <div class="col-md-5">
                        <div class="card">
                            <div class="card-title px-4">
                                <h3 class="heading heading-5 strong-500">
                                    {{__('login')}}
                                </h3>
                            </div>
                            <div class="card-body px-4">
                                <form class="form-default" role="form" action="{{ route('user.login.submit') }}" method="POST">
                                    @csrf
                                    <div class="row">
                                        <div class="col-12">
                                            <div class="form-group">
                                                <label>{{ __('email') }}</label>
                                                <div class="input-group input-group--style-1">
                                                    <input type="email" class="form-control form-control-lg {{ $errors->has('email') ? ' is-invalid' : '' }}" value="{{ old('email') }}" placeholder="Email" name="email" id="email">
                                                    <span class="input-group-addon">
                                                        <i class="text-md ion-person"></i>
                                                    </span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="row">
                                        <div class="col-12">
                                            <div class="form-group">
                                                <label>{{ __('password') }}</label>
                                                <div class="input-group input-group--style-1">
                                                    <input type="password" class="form-control form-control-lg {{ $errors->has('password') ? ' is-invalid' : '' }}" placeholder="Password" name="password" id="password">
                                                    <span class="input-group-addon">
                                                        <i class="text-md ion-locked"></i>
                                                    </span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="row">
                                        <div class="col-12">
                                            <div class="form-group">
                                                <div class="checkbox pad-btm text-left">
                                                    <input id="demo-form-checkbox" class="magic-checkbox" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>
                                                    <label for="demo-form-checkbox">
                                                        {{ __('Remember Me') }}
                                                    </label>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="row align-items-center">
                                        <div class="col-md-6">
                                            <a href="{{ route('password.request') }}" class="link link-xs link--style-3">{{__('Forgot password?')}}</a>
                                        </div>
                                        <div class="col-md-6 text-right">
                                            <button type="submit" class="btn btn-styled btn-base-1 px-4">{{ __('login') }}</button>
                                        </div>
                                    </div>
                                </form>

                                <div class="or or--1 mt-2">
                                    <span>{{__('or')}}</span>
                                </div>

                                <div class="">
                                    <table class="table table-responsive table-bordered">
                                        <tbody>
                                            <tr>
                                                <td>Seller Account</td>
                                                <td><button class="btn btn-info" onclick="autoFillSeller()">copy</button></td>
                                            </tr>
                                            <tr>
                                                <td>Customer Account</td>
                                                <td><button class="btn btn-info" onclick="autoFillCustomer()">copy</button></td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>

                                <a href="{{ route('social.login', ['provider' => 'google']) }}" class="btn btn-styled btn-block btn-google btn-icon--2 btn-icon-left px-4">
                                    <i class="icon ion-social-google"></i> {{__('Login with Google')}}
                                </a>
                                <a href="{{ route('social.login', ['provider' => 'facebook']) }}" class="btn btn-styled btn-block btn-facebook btn-icon--2 btn-icon-left px-4">
                                    <i class="icon ion-social-facebook"></i> {{__('Login with Facebook')}}
                                </a>
                                <a href="{{ route('social.login', ['provider' => 'twitter']) }}" class="btn btn-styled btn-block btn-twitter btn-icon--2 btn-icon-left px-4">
                                    <i class="icon ion-social-twitter"></i> {{__('Login with Twitter')}}
                                </a>
                            </div>
                        </div>
                    </div>

                    <div class="col-md-7">
                        <div class="card">
                            <div class="card-title px-4">
                                <h3 class="heading heading-5 strong-500">
                                    {{ __('create_account') }}
                                </h3>
                            </div>
                            <div class="card-body px-4">
                                <form class="form-default" role="form" action="{{ route('register') }}" method="POST">
                                    @csrf
                                    <div class="row">
                                        <div class="col-12">
                                            <div class="form-group">
                                                <label>{{ __('name') }}</label>
                                                <div class="input-group input-group--style-1">
                                                    <input type="text" class="form-control{{ $errors->has('name') ? ' is-invalid' : '' }} form-control-lg" value="{{ old('name') }}" placeholder="{{ __('name') }}" name="name">
                                                    <span class="input-group-addon">
                                                        <i class="text-md ion-person"></i>
                                                    </span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="row">
                                        <div class="col-12">
                                            <div class="form-group">
                                                <label>{{ __('email') }}</label>
                                                <div class="input-group input-group--style-1">
                                                    <input type="email" class="form-control{{ $errors->has('email') ? ' is-invalid' : '' }} form-control-lg" value="{{ old('email') }}" placeholder="{{ __('email') }}" name="email">
                                                    <span class="input-group-addon">
                                                        <i class="text-md ion-email"></i>
                                                    </span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="row">
                                        <div class="col-12">
                                            <div class="form-group">
                                                <label>{{ __('password') }}</label>
                                                <div class="input-group input-group--style-1">
                                                    <input type="password" class="form-control{{ $errors->has('password') ? ' is-invalid' : '' }} form-control-lg" placeholder="{{ __('password') }}" name="password">
                                                    <span class="input-group-addon">
                                                        <i class="text-md ion-locked"></i>
                                                    </span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="row">
                                        <div class="col-12">
                                            <div class="form-group">
                                                <label>{{ __('confirm_password') }}</label>
                                                <div class="input-group input-group--style-1">
                                                    <input type="password" class="form-control form-control-lg" placeholder="{{ __('confirm_password') }}" name="password_confirmation">
                                                    <span class="input-group-addon">
                                                        <i class="text-md ion-locked"></i>
                                                    </span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="row py-4">
                                        <div class="col-12">
                                            <div class="checkbox">
                                                <input type="checkbox" name="checkbox_example_1" id="checkboxExample_1a" required>
                                                <label for="checkboxExample_1a">By signing up you agree to our terms and conditions.</label>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="row align-items-center">
                                        <div class="col-md-12 text-right">
                                            <button type="submit" class="btn btn-styled btn-base-1">{{ __('create_account') }}</button>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection

@section('script')
    <script type="text/javascript">
        function autoFillSeller(){
            $('#email').val('seller@example.com');
            $('#password').val('123456');
        }
        function autoFillCustomer(){
            $('#email').val('customer@example.com');
            $('#password').val('123456');
        }
    </script>
@endsection
