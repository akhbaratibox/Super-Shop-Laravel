@extends('layouts.app')

@section('content')
<div class="row">
    <div class="col-md-6">
        <div class="panel">
            <div class="panel-body text-center dash-widget dash-widget-left">
                <div class="dash-widget-vertical">
                    <div class="rorate">PRODUCTS</div>
                </div>
                <div class="pad-ver mar-top text-main">
                    <i class="demo-pli-data-settings icon-4x"></i>
                </div>
                <br>
                <p class="text-semibold text-lg text-main">Total published products: <span class="text-bold">1000</span></p>
                <p class="text-semibold text-lg text-main">Total seller's products: <span class="text-bold">1000</span></p>
                <p class="text-semibold text-lg text-main">Total admin's products: <span class="text-bold">1000</span></p>
                <br>
                <a href="" class="btn btn-primary mar-ver">Manage Products <i class="fa fa-long-arrow-right"></i></a>
            </div>
        </div>

    </div>
</div>

@endsection
