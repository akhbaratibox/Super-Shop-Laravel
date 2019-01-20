@extends('layouts.app')

@section('content')


<div class="col-lg-6">
    <div class="panel">
        <div class="panel-heading">
            <h3 class="panel-title text-center">{{ __('language_info') }}</h3>
        </div>
        <div class="panel-body">
            <form class="form-horizontal" action="{{ route('languages.store') }}" method="POST">
                @csrf
                <div class="form-group">
                    <div class="col-lg-3">
                        <label class="control-label">{{ __('name') }}</label>
                    </div>
                    <div class="col-lg-6">
                        <input type="text" class="form-control" name="name" placeholder="{{ __('name') }}" required>
                    </div>
                </div>
                <div class="form-group">
                    <input type="hidden" name="types[]" value="GOOGLE_CLIENT_SECRET">
                    <div class="col-lg-3">
                        <label class="control-label">{{ __('code') }}</label>
                    </div>
                    <div class="col-lg-6">
                        <input type="text" class="form-control" name="code" placeholder="{{ __('code') }}" required>
                    </div>
                </div>
                <div class="form-group">
                    <div class="col-lg-12 text-right">
                        <button class="btn btn-purple" type="submit">{{__('save')}}</button>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>


@endsection