@extends('layouts.app')

@section('content')

<div class="col-sm-6">
    <div class="panel">
        <div class="panel-heading">
            <h3 class="panel-title">{{__('web.seller_information')}}</h3>
        </div>

        <!--Horizontal Form-->
        <!--===================================================-->
        <form class="form-horizontal" action="{{ route('sellers.store') }}" method="POST" enctype="multipart/form-data">
        	@csrf
            <div class="panel-body">
                <div class="form-group">
                    <label class="col-sm-3 control-label" for="name">{{__('web.name')}}</label>
                    <div class="col-sm-9">
                        <input type="text" placeholder="{{__('web.name')}}" id="name" name="name" class="form-control" required>
                    </div>
                </div>
                <div class="form-group">
                    <label class="col-sm-3 control-label" for="email">{{__('web.email_address')}}</label>
                    <div class="col-sm-9">
                        <input type="text" placeholder="{{__('web.email_address')}}" id="email" name="email" class="form-control" required>
                    </div>
                </div>
                <div class="form-group">
                    <label class="col-sm-3 control-label" for="password">{{__('web.password')}}</label>
                    <div class="col-sm-9">
                        <input type="password" placeholder="{{__('web.password')}}" id="password" name="password" class="form-control" required>
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
