@extends('layouts.blank')
@section('content')
<h4 class="header-title">System Settings</h4>
<p class="text-muted font-13">
    <form method="POST" action="{{ route('system_settings') }}">
        @csrf
        <div class="form-group">
            <label for="system_name">System Name</label>
            <input type="text" class="form-control" id="name" name="name">
        </div>

        <div class="form-group">
            <label for="system_email">System Mail</label>
            <input type="email" class="form-control" id="email" name="email">
        </div>

        <div class="form-group">
            <label for="running_session">Address</label>
            <input type="text" class="form-control" id="address" name="address">
        </div>

        <div class="form-group">
            <label for="running_session">Phone</label>
            <input type="text" class="form-control" id="phone" name="phone">
        </div>

        <div class="form-group">
            <label for="admin_email">Admin Email</label>
            <input type="email" class="form-control" id="admin_email" name="admin_email">
        </div>

        <div class="form-group">
            <label for="admin_password">Password</label>
            <input type="password" class="form-control" id="admin_password" name="admin_password">
        </div>

        <div class="form-group">
            <label for="admin_name">Admin Name</label>
            <input type="text" class="form-control" id="admin_name" name="admin_name">
        </div>

        <div class="form-group">
            <label for="admin_name">System Currency</label>
            <select class="form-control" name="system_default_currency">
                @foreach (\App\Currency::all() as $key => $currency)
                    <option value="{{ $currency->id }}">{{ $currency->name }}</option>
                @endforeach
            </select>
        </div>

        <button type="submit" class="btn btn-info">Set Me Up</button>
    </form>
</p>
@endsection
