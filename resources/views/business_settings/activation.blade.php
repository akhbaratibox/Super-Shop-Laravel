@extends('layouts.app')

@section('content')

<div class="row">
    <h3 class="text-center">Business Related</h3>
    <div class="col-lg-4">
        <div class="panel">
            <div class="panel-heading">
                <h3 class="panel-title text-center">Product Activation</h3>
            </div>
            <div class="panel-body text-center">
                <input class="demo-sw" type="checkbox" checked>
            </div>
        </div>
    </div>
    <div class="col-lg-4">
        <div class="panel">
            <div class="panel-heading">
                <h3 class="panel-title text-center">Vendor System Activation</h3>
            </div>
            <div class="panel-body text-center">
                <input class="demo-sw" type="checkbox" checked>
            </div>
        </div>
    </div>
    <div class="col-lg-4">
        <div class="panel">
            <div class="panel-heading">
                <h3 class="panel-title text-center">Show Vendors</h3>
            </div>
            <div class="panel-body text-center">
                <input class="demo-sw" type="checkbox" checked>
            </div>
        </div>
    </div>
</div>

<div class="row">
    <h3 class="text-center">Payment Related</h3>
    <div class="col-lg-4">
        <div class="panel">
            <div class="panel-heading">
                <h3 class="panel-title text-center">Paypal Payment Activation</h3>
            </div>
            <div class="panel-body text-center">
                <input class="demo-sw" type="checkbox" checked>
            </div>
        </div>
    </div>
    <div class="col-lg-4">
        <div class="panel">
            <div class="panel-heading">
                <h3 class="panel-title text-center">Stripe Payment Activation</h3>
            </div>
            <div class="panel-body text-center">
                <input class="demo-sw" type="checkbox" checked>
            </div>
        </div>
    </div>
    <div class="col-lg-4">
        <div class="panel">
            <div class="panel-heading">
                <h3 class="panel-title text-center">Cash Payment Activation</h3>
            </div>
            <div class="panel-body text-center">
                <input class="demo-sw" type="checkbox" checked>
            </div>
        </div>
    </div>
    <div class="col-lg-4">
        <div class="panel">
            <div class="panel-heading">
                <h3 class="panel-title text-center">Pay U Money Activation</h3>
            </div>
            <div class="panel-body text-center">
                <input class="demo-sw" type="checkbox" checked>
            </div>
        </div>
    </div>
</div>

@endsection
