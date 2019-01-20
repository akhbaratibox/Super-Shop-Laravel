@extends('layouts.app')

@section('content')

<div class="col-sm-6">
    <div class="panel">
        <div class="panel-heading">
            <h3 class="panel-title">{{__('seller_information')}}</h3>
        </div>

        <!--Horizontal Form-->
        <!--===================================================-->
        <form class="form-horizontal" action="{{ route('sellers.update', $seller->id) }}" method="POST" enctype="multipart/form-data">
            <input name="_method" type="hidden" value="PATCH">
        	@csrf
            <div class="panel-body">
                <div class="form-group">
                    <label class="col-sm-3 control-label" for="name">{{__('name')}}</label>
                    <div class="col-sm-9">
                        <input type="text" placeholder="{{__('name')}}" id="name" name="name" class="form-control" value="{{$seller->user->name}}" required>
                    </div>
                </div>
                <div class="form-group">
                    <label class="col-sm-3 control-label" for="email">{{__('email_address')}}</label>
                    <div class="col-sm-9">
                        <input type="text" placeholder="{{__('email_address')}}" id="email" name="email" class="form-control" value="{{$seller->user->email}}" required>
                    </div>
                </div>
                <div class="form-group">
                    <label class="col-sm-3 control-label" for="password">{{__('password')}}</label>
                    <div class="col-sm-9">
                        <input type="password" placeholder="{{__('password')}}" id="password" name="password" class="form-control">
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
