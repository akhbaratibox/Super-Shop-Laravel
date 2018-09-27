@extends('layouts.blank')

@section('content')

<div class="cls-content-sm panel">
    <div class="panel-body">
        <div class="mar-ver pad-btm">
            <h1 class="h3">Account Login</h1>
            <p>Sign In to your account</p>
        </div>
        <form method="POST" role="form" action="{{ route('login') }}">
            @csrf
            <div class="form-group">
                <input id="email" type="email" class="form-control{{ $errors->has('email') ? ' is-invalid' : '' }}" name="email" value="{{ old('email') }}" required autofocus placeholder="Email">
                @if ($errors->has('email'))
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $errors->first('email') }}</strong>
                    </span>
                @endif
            </div>
            <div class="form-group">
                <input id="password" type="password" class="form-control{{ $errors->has('password') ? ' is-invalid' : '' }}" name="password" required placeholder="Password">
                @if ($errors->has('password'))
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $errors->first('password') }}</strong>
                    </span>
                @endif
            </div>
            <div class="checkbox pad-btm text-left">
                <input id="demo-form-checkbox" class="magic-checkbox" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>
                <label for="demo-form-checkbox">
                    {{ __('Remember Me') }}
                </label>
            </div>
            <button type="submit" class="btn btn-primary btn-lg btn-block">
                {{ __('Login') }}
            </button>
        </form>
    </div>

    <div class="pad-all">
        <a href="{{ route('password.request') }}" class="btn-link mar-rgt">Forgot password ?</a>
        <a href="{{ route('register') }}" class="btn-link mar-lft">Create a new account</a>

        <div class="media pad-top bord-top">
            <div class="pull-right">
                <a href="#" class="pad-rgt"><i class="demo-psi-facebook icon-lg text-primary"></i></a>
                <a href="#" class="pad-rgt"><i class="demo-psi-twitter icon-lg text-info"></i></a>
                <a href="#" class="pad-rgt"><i class="demo-psi-google-plus icon-lg text-danger"></i></a>
            </div>
            <div class="media-body text-left text-bold text-main">
                Login with
            </div>
        </div>
    </div>
</div>

@endsection
