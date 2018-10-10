@extends('layouts.app')

@section('content')

<div class="col-sm-6">
    <div class="panel">
        <div class="panel-heading">
            <h3 class="panel-title">{{__('web.role_information')}}</h3>
        </div>

        <!--Horizontal Form-->
        <!--===================================================-->
        <form class="form-horizontal" action="{{ route('roles.update', $role->id) }}" method="POST" enctype="multipart/form-data">
            <input name="_method" type="hidden" value="PATCH">
        	@csrf
            <div class="panel-body">
                <div class="form-group">
                    <label class="col-sm-3 control-label" for="name">{{__('web.name')}}</label>
                    <div class="col-sm-9">
                        <input type="text" placeholder="{{__('web.name')}}" id="name" name="name" class="form-control" value="{{ $role->name }}" required>
                    </div>
                </div>
                <div class="panel-heading">
                    <h3 class="panel-title">{{ __('web.permissions') }}</h3>
                </div>
                @php
                    $permissions = json_decode($role->permissions);
                @endphp
                <div class="form-group">
                    <label class="col-sm-3 control-label" for="banner"></label>
                    <div class="col-sm-9">
                        <div class="row">
                            <div class="col-sm-10">
                                <label class="control-label">{{ __('web.products') }}</label>
                            </div>
                            <div class="col-sm-2">
                                <input type="checkbox" name="permissions[]" class="form-control demo-sw" value="1" @php if(in_array(1, $permissions)) echo "checked"; @endphp>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-sm-10">
                                <label class="control-label">{{ __('web.sales') }}</label>
                            </div>
                            <div class="col-sm-2">
                                <input type="checkbox" name="permissions[]" class="form-control demo-sw" value="2" @php if(in_array(2, $permissions)) echo "checked"; @endphp>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-sm-10">
                                <label class="control-label">{{ __('web.sellers') }}</label>
                            </div>
                            <div class="col-sm-2">
                                <input type="checkbox" name="permissions[]" class="form-control demo-sw" value="3" @php if(in_array(3, $permissions)) echo "checked"; @endphp>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-sm-10">
                                <label class="control-label">{{ __('web.customers') }}</label>
                            </div>
                            <div class="col-sm-2">
                                <input type="checkbox" name="permissions[]" class="form-control demo-sw" value="4" @php if(in_array(4, $permissions)) echo "checked"; @endphp>
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
