@extends('layouts.app')

@section('content')

    <div class="col-lg-6 col-lg-offset-3">
        <div class="panel">
            <div class="panel-heading">
                <h3 class="panel-title">{{__('Color Settings')}}</h3>
            </div>

            <!--Horizontal Form-->
            <!--===================================================-->
            <form class="form-horizontal" action="{{ route('generalsettings.update',$generalsetting->id ) }}" method="POST" enctype="multipart/form-data">
            	@csrf
                <input type="hidden" name="_method" value="PATCH">
                <div class="panel-body">
                    <div class="row">
                        <div class="color-radio col-sm-3">
                            <label>
                                <input type="radio" name="frontend-color" class="color-control-input" value="default" checked>
                                <span class="color-control-box" style="background:#e62e04;"></span>
                            </label>
                        </div>
                        <div class="color-radio col-sm-3">
                            <label>
                                <input type="radio" name="frontend-color" class="color-control-input" value="1">
                                <span class="color-control-box" style="background:#1abc9c;"></span>
                            </label>
                        </div>
                        <div class="color-radio col-sm-3">
                            <label>
                                <input type="radio" name="frontend-color" class="color-control-input" value="2">
                                <span class="color-control-box" style="background:#3498db;"></span>
                            </label>
                        </div>
                        <div class="color-radio col-sm-3">
                            <label>
                                <input type="radio" name="frontend-color" class="color-control-input" value="3">
                                <span class="color-control-box" style="background:#72bf40;"></span>
                            </label>
                        </div>
                        <div class="color-radio col-sm-3">
                            <label>
                                <input type="radio" name="frontend-color" class="color-control-input" value="4">
                                <span class="color-control-box" style="background:#F79F1F;"></span>
                            </label>
                        </div>
                        <div class="color-radio col-sm-3">
                            <label>
                                <input type="radio" name="frontend-color" class="color-control-input" value="5">
                                <span class="color-control-box" style="background:#12CBC4;"></span>
                            </label>
                        </div>
                        <div class="color-radio col-sm-3">
                            <label>
                                <input type="radio" name="frontend-color" class="color-control-input" value="6">
                                <span class="color-control-box" style="background:#8e44ad;"></span>
                            </label>
                        </div>
                        <div class="color-radio col-sm-3">
                            <label>
                                <input type="radio" name="frontend-color" class="color-control-input" value="7">
                                <span class="color-control-box" style="background:#ED4C67;"></span>
                            </label>
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
