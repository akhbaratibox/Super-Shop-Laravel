@extends('layouts.app')

@section('content')

<div class="col-sm-6">
    <div class="panel">
        <div class="panel-heading">
            <h3 class="panel-title">{{__('web.role_information')}}</h3>
        </div>

        <!--Horizontal Form-->
        <!--===================================================-->
        <form class="form-horizontal" action="{{ route('roles.store') }}" method="POST" enctype="multipart/form-data">
        	@csrf
            <div class="panel-body">
                <div class="form-group">
                    <label class="col-sm-3 control-label" for="name">{{__('web.name')}}</label>
                    <div class="col-sm-9">
                        <input type="text" placeholder="{{__('web.name')}}" id="name" name="name" class="form-control" required>
                    </div>
                </div>
                <div class="panel-heading">
                    <h3 class="panel-title">{{ __('web.permissions') }}</h3>
                </div>
                <div class="form-group">
                    <label class="col-sm-3 control-label" for="banner"></label>
                    <div class="col-sm-9">
                        <div class="row">
                            <div class="col-sm-10">
                                <label class="control-label">{{ __('web.products') }}</label>
                            </div>
                            <div class="col-sm-2">
                                <input type="checkbox" name="permissions[]" class="form-control demo-sw" value="1">
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-sm-10">
                                <label class="control-label">{{ __('web.sales') }}</label>
                            </div>
                            <div class="col-sm-2">
                                <input type="checkbox" name="permissions[]" class="form-control demo-sw" value="2">
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-sm-10">
                                <label class="control-label">{{ __('web.sellers') }}</label>
                            </div>
                            <div class="col-sm-2">
                                <input type="checkbox" name="permissions[]" class="form-control demo-sw" value="3">
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-sm-10">
                                <label class="control-label">{{ __('web.customers') }}</label>
                            </div>
                            <div class="col-sm-2">
                                <input type="checkbox" name="permissions[]" class="form-control demo-sw" value="4">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="panel-footer text-right">
                <button class="btn btn-purple" type="submit">{{__('web.save')}}</button>
            </div>
        </form>
        <!--===================================================-->
        <!--End Horizontal Form-->

    </div>
</div>

@endsection
