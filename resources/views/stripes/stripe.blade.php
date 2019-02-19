@extends('layouts.app')

@section('content')

    <div class="col-lg-6 col-lg-offset-3">
        <div class="panel">
            <div class="panel-heading">
                <h3 class="panel-title">{{__('Stripe Payment')}}</h3>
            </div>

            <!--Horizontal Form-->
            <!--===================================================-->
            <form class="form-horizontal" role="form" action="{{ route('stripe.post') }}" method="post" class="require-validation"
                data-cc-on-file="false"
                data-stripe-publishable-key="{{ env('STRIPE_KEY') }}"
                id="payment-form">
            	@csrf
                <div class="panel-body">
                    <div class="form-group">
                        <label class="col-sm-2 control-label" for="name">{{__('Name on Card')}}</label>
                        <div class="col-sm-10 required">
                            <input type="text" autocomplete='off' placeholder="{{__('Name on Card')}}" size='20' id="name" name="name" class="form-control" required>
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-sm-2 control-label" for="card_number">{{__('Card Number')}}</label>
                        <div class="col-sm-10 required">
                            <input type="text" autocomplete='off' placeholder="{{__('Card Number')}}" id="card_number" name="card_number" class="form-control card-number" required>
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-sm-2 control-label" for="cvc">{{__('CVC')}}</label>
                        <div class="col-sm-10 cvc required">
                            <input type="text" placeholder="{{__('ex. 321')}}" size='4' id="cvc" name="cvc" class="form-control card-cvc" required>
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-sm-2 control-label" for="exp_month">{{__('Expiration Month')}}</label>
                        <div class="col-sm-10 expiration required">
                            <input type="text" placeholder="{{__('MM')}}" size='2' id="exp_month" name="exp_month" class="form-control card-expiry-month" required>
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-sm-2 control-label" for="exp_year">{{__('Expiration Year')}}</label>
                        <div class="col-sm-10 expiration required">
                            <input type="text" placeholder="{{__('YYYY')}}" size='4' id="exp_year" name="exp_year" class="form-control card-expiry-year" required>
                        </div>
                    </div>
                    <div class='form-row'>
                        <div class='col-sm-12 error form-group hide'>
                            <div class='alert-danger alert'>{{__('Please correct the errors and try again.')}}</div>
                        </div>
                    </div>
                </div>
                <div class="panel-footer text-right">
                    <button class="btn btn-purple" type="submit">{{__('Pay Now')}}</button>
                </div>
            </form>
            <!--===================================================-->
            <!--End Horizontal Form-->

        </div>
    </div>

@endsection
