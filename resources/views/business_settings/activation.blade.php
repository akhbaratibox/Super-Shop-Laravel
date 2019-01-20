@extends('layouts.app')

@section('content')

<div class="row">
    <h3 class="text-center">{{__('business_related')}}</h3>
    <div class="col-lg-4">
        <div class="panel">
            <div class="panel-heading">
                <h3 class="panel-title text-center">{{__('product_activation')}}</h3>
            </div>
            <div class="panel-body text-center">
                <label class="switch">
                    <input type="checkbox" onchange="updateSettings(this, 'product_activation')" <?php if(\App\BusinessSetting::where('type', 'product_activation')->first()->value == 1) echo "checked";?> >
                    <span class="slider round"></span>
                </label>
            </div>
        </div>
    </div>
    <div class="col-lg-4">
        <div class="panel">
            <div class="panel-heading">
                <h3 class="panel-title text-center">{{__('vendor_system_activation')}}</h3>
            </div>
            <div class="panel-body text-center">
                <label class="switch">
                    <input type="checkbox" onchange="updateSettings(this, 'vendor_system_activation')" <?php if(\App\BusinessSetting::where('type', 'vendor_system_activation')->first()->value == 1) echo "checked";?>>
                    <span class="slider round"></span>
                </label>
            </div>
        </div>
    </div>
    <div class="col-lg-4">
        <div class="panel">
            <div class="panel-heading">
                <h3 class="panel-title text-center">{{__('show_vendor')}}</h3>
            </div>
            <div class="panel-body text-center">
                <label class="switch">
                    <input type="checkbox" onchange="updateSettings(this, 'show_vendors')" <?php if(\App\BusinessSetting::where('type', 'show_vendors')->first()->value == 1) echo "checked";?>>
                    <span class="slider round"></span>
                </label>
            </div>
        </div>
    </div>
</div>

<div class="row">
    <h3 class="text-center">{{__('payment_related')}}</h3>
    <div class="col-lg-4">
        <div class="panel">
            <div class="panel-heading">
                <h3 class="panel-title text-center">{{__('paypal_payment_activation')}}</h3>
            </div>
            <div class="panel-body text-center">
                <label class="switch">
                    <input type="checkbox" onchange="updateSettings(this, 'paypal_payment')" <?php if(\App\BusinessSetting::where('type', 'paypal_payment')->first()->value == 1) echo "checked";?>>
                    <span class="slider round"></span>
                </label>
            </div>
        </div>
    </div>
    <div class="col-lg-4">
        <div class="panel">
            <div class="panel-heading">
                <h3 class="panel-title text-center">{{__('stripe_payment_activation')}}</h3>
            </div>
            <div class="panel-body text-center">
                <label class="switch">
                    <input type="checkbox" onchange="updateSettings(this, 'stripe_payment')" <?php if(\App\BusinessSetting::where('type', 'stripe_payment')->first()->value == 1) echo "checked";?>>
                    <span class="slider round"></span>
                </label>
            </div>
        </div>
    </div>
    <div class="col-lg-4">
        <div class="panel">
            <div class="panel-heading">
                <h3 class="panel-title text-center">{{__('cash_payment_activation')}}</h3>
            </div>
            <div class="panel-body text-center">
                <label class="switch">
                    <input type="checkbox" onchange="updateSettings(this, 'cash_payment')" <?php if(\App\BusinessSetting::where('type', 'cash_payment')->first()->value == 1) echo "checked";?>>
                    <span class="slider round"></span>
                </label>
            </div>
        </div>
    </div>
    <div class="col-lg-4">
        <div class="panel">
            <div class="panel-heading">
                <h3 class="panel-title text-center">{{__('pay_u_money_activation')}}</h3>
            </div>
            <div class="panel-body text-center">
                <label class="switch">
                    <input type="checkbox" onchange="updateSettings(this, 'payumoney_payment')" <?php if(\App\BusinessSetting::where('type', 'payumoney_payment')->first()->value == 1) echo "checked";?>>
                    <span class="slider round"></span>
                </label>
            </div>
        </div>
    </div>
</div>

@endsection

@section('script')
    <script type="text/javascript">
        function updateSettings(el, type){
            if($(el).is(':checked')){
                var value = 1;
            }
            else{
                var value = 0;
            }
            $.post('{{ route('business_settings.update.activation') }}', {_token:'{{ csrf_token() }}', type:type, value:value}, function(data){
                if(data == '1'){
                    showAlert('success', 'Settings updated successfully');
                }
                else{
                    showAlert('danger', 'Something went wrong');
                }
            });
        }
    </script>
@endsection
