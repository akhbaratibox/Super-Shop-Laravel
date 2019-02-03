@extends('layouts.app')

@section('content')

<div class="col-sm-6">
    <div class="panel">
        <div class="panel-heading">
            <h3 class="panel-title">{{__('role_information')}}</h3>
        </div>

        <!--Horizontal Form-->
        <!--===================================================-->
        <form class="form-horizontal" action="{{ route('roles.update', $role->id) }}" method="POST" enctype="multipart/form-data">
            <input name="_method" type="hidden" value="PATCH">
        	@csrf
            <div class="panel-body">
                <div class="form-group">
                    <label class="col-sm-3 control-label" for="name">{{__('name')}}</label>
                    <div class="col-sm-9">
                        <input type="text" placeholder="{{__('name')}}" id="name" name="name" class="form-control" value="{{ $role->name }}" required>
                    </div>
                </div>
                <div class="panel-heading">
                    <h3 class="panel-title">{{ __('permissions') }}</h3>
                </div>
                @php
                    $permissions = json_decode($role->permissions);
                @endphp
                <div class="form-group">
                    <label class="col-sm-3 control-label" for="banner"></label>
                    <div class="col-sm-9">
                        <div class="row">
                            <div class="col-sm-10">
                                <label class="control-label">{{ __('products') }}</label>
                            </div>
                            <div class="col-sm-2">
                                <label class="switch">
                                    <input type="checkbox" name="permissions[]" class="form-control demo-sw" value="1" @php if(in_array(1, $permissions)) echo "checked"; @endphp>
                                    <span class="slider round"></span>
                                </label>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-sm-10">
                                <label class="control-label">{{ __('flash_deal') }}</label>
                            </div>
                            <div class="col-sm-2">
                                <label class="switch">
                                    <input type="checkbox" name="permissions[]" class="form-control demo-sw" value="2" @php if(in_array(2, $permissions)) echo "checked"; @endphp>
                                    <span class="slider round"></span>
                                </label>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-sm-10">
                                <label class="control-label">{{ __('orders') }}</label>
                            </div>
                            <div class="col-sm-2">
                                <label class="switch">
                                    <input type="checkbox" name="permissions[]" class="form-control demo-sw" value="3" @php if(in_array(3, $permissions)) echo "checked"; @endphp>
                                    <span class="slider round"></span>
                                </label>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-sm-10">
                                <label class="control-label">{{ __('sales') }}</label>
                            </div>
                            <div class="col-sm-2">
                                <label class="switch">
                                    <input type="checkbox" name="permissions[]" class="form-control demo-sw" value="4" @php if(in_array(4, $permissions)) echo "checked"; @endphp>
                                    <span class="slider round"></span>
                                </label>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-sm-10">
                                <label class="control-label">{{ __('sellers') }}</label>
                            </div>
                            <div class="col-sm-2">
                                <label class="switch">
                                    <input type="checkbox" name="permissions[]" class="form-control demo-sw" value="5" @php if(in_array(5, $permissions)) echo "checked"; @endphp>
                                    <span class="slider round"></span>
                                </label>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-sm-10">
                                <label class="control-label">{{ __('customers') }}</label>
                            </div>
                            <div class="col-sm-2">
                                <label class="switch">
                                    <input type="checkbox" name="permissions[]" class="form-control demo-sw" value="6" @php if(in_array(6, $permissions)) echo "checked"; @endphp>
                                    <span class="slider round"></span>
                                </label>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-sm-10">
                                <label class="control-label">{{ __('messaging') }}</label>
                            </div>
                            <div class="col-sm-2">
                                <label class="switch">
                                    <input type="checkbox" name="permissions[]" class="form-control demo-sw" value="7" @php if(in_array(7, $permissions)) echo "checked"; @endphp>
                                    <span class="slider round"></span>
                                </label>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-sm-10">
                                <label class="control-label">{{ __('business_settings') }}</label>
                            </div>
                            <div class="col-sm-2">
                                <label class="switch">
                                    <input type="checkbox" name="permissions[]" class="form-control demo-sw" value="8" @php if(in_array(8, $permissions)) echo "checked"; @endphp>
                                    <span class="slider round"></span>
                                </label>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-sm-10">
                                <label class="control-label">{{ __('frontend_settings') }}</label>
                            </div>
                            <div class="col-sm-2">
                                <label class="switch">
                                    <input type="checkbox" name="permissions[]" class="form-control demo-sw" value="9" @php if(in_array(9, $permissions)) echo "checked"; @endphp>
                                    <span class="slider round"></span>
                                </label>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-sm-10">
                                <label class="control-label">{{ __('staffs') }}</label>
                            </div>
                            <div class="col-sm-2">
                                <label class="switch">
                                    <input type="checkbox" name="permissions[]" class="form-control demo-sw" value="10" @php if(in_array(10, $permissions)) echo "checked"; @endphp>
                                    <span class="slider round"></span>
                                </label>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="panel-footer text-right">
                <button class="btn btn-purple" type="submit">{{__('save')}}</button>
            </div>
        </form>
        <!--===================================================-->
        <!--End Horizontal Form-->

    </div>
</div>

@endsection
