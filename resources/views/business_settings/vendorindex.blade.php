@extends('layouts.app')

@section('content')

    <div class="col-sm-8">
        <div class="panel">
            <!--Horizontal Form-->

            <form class="form-horizontal" action="{{ route('business_settings.vendorstore') }}" method="POST" enctype="multipart/form-data">
            	@csrf
                <div class="panel-body">
                    <div class="form-group">
                        <input type="hidden" name="type" value="{{ $business->type }}">
                        <label class="col-lg-3 control-label">{{__('Vendor Commision')}}</label>
                        <div class="col-lg-7">
                            <input type="number" min="0" step="0.01" value="{{ $business->value }}" placeholder="{{__('Vendor Commision')}}" name="value" class="form-control">
                        </div>
                        <div class="col-lg-1">
                            <option class="form-control">%</option>
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
