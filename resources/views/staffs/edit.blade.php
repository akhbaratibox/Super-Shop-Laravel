@extends('layouts.app')

@section('content')

<div class="col-sm-6">
    <div class="panel">
        <div class="panel-heading">
            <h3 class="panel-title">{{__('web.staff_information')}}</h3>
        </div>

        <!--Horizontal Form-->
        <!--===================================================-->
        <form class="form-horizontal" action="{{ route('staffs.update', $staff->id) }}" method="POST" enctype="multipart/form-data">
            <input name="_method" type="hidden" value="PATCH">
        	@csrf
            <div class="panel-body">
                <div class="form-group">
                    <label class="col-sm-3 control-label" for="name">{{__('web.name')}}</label>
                    <div class="col-sm-9">
                        <input type="text" placeholder="{{__('web.name')}}" id="name" name="name" value="{{ $staff->user->name }}" class="form-control" required>
                    </div>
                </div>
                <div class="form-group">
                    <label class="col-sm-3 control-label" for="email">{{__('web.email')}}</label>
                    <div class="col-sm-9">
                        <input type="text" placeholder="{{__('web.email')}}" id="email" name="email" value="{{ $staff->user->email }}" class="form-control" required>
                    </div>
                </div>
                <div class="form-group">
                    <label class="col-sm-3 control-label" for="password">{{__('web.password')}}</label>
                    <div class="col-sm-9">
                        <input type="password" placeholder="{{__('web.password')}}" id="password" name="password" class="form-control">
                    </div>
                </div>
                <div class="form-group">
                    <label class="col-sm-3 control-label" for="name">{{__('web.role')}}</label>
                    <div class="col-sm-9">
                        <select name="role_id" required class="form-control demo-select2-placeholder">
                            @foreach($roles as $role)
                                <option value="{{$role->id}}" @php if($staff->role_id == $role->id) echo "selected"; @endphp >{{$role->name}}</option>
                            @endforeach
                        </select>
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