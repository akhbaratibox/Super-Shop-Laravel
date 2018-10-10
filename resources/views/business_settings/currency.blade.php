@extends('layouts.app')

@section('content')

<div class="row">
    <div class="col-lg-6">
        <div class="panel">
            <div class="panel-heading">
                <h3 class="panel-title text-center">{{__('web.home_default_currency')}}</h3>
            </div>
            <div class="panel-body">
                <form class="form-horizontal">
                    <div class="form-group">
                        <div class="col-lg-3">
                            <label class="control-label">{{__('web.home_default_currency')}}</label>
                        </div>
                        <div class="col-lg-6">
                            <select class="form-control demo-select2-placeholder" name="home_defualt_currency"></select>
                        </div>
                        <div class="col-lg-3">
                            <button class="btn btn-purple" type="submit">{{__('web.save')}}</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>

    <div class="col-lg-6">
        <div class="panel">
            <div class="panel-heading">
                <h3 class="panel-title text-center">{{__('web.system_default_currency')}}</h3>
            </div>
            <div class="panel-body">
                <form class="form-horizontal">
                    <div class="form-group">
                        <div class="col-lg-3">
                            <label class="control-label">{{__('web.system_default_currency')}}</label>
                        </div>
                        <div class="col-lg-6">
                            <select class="form-control demo-select2-placeholder" name="system_default_currency"></select>
                        </div>
                        <div class="col-lg-3">
                            <button class="btn btn-purple" type="submit">{{__('web.save')}}</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>

    <div class="col-lg-6">
        <div class="panel">
            <div class="panel-heading">
                <h3 class="panel-title text-center">{{__('web.set_currency_formats')}}</h3>
            </div>
            <div class="panel-body">
                <form class="form-horizontal">
                    <div class="form-group">
                        <div class="col-lg-3">
                            <label class="control-label">{{__('web.currency_format')}}</label>
                        </div>
                        <div class="col-lg-6">
                            <select class="form-control demo-select2-placeholder" name="currency_format"></select>
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="col-lg-3">
                            <label class="control-label">{{__('web.symbol_format')}}</label>
                        </div>
                        <div class="col-lg-6">
                            <select class="form-control demo-select2-placeholder" name="symbol_format"></select>
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="col-lg-3">
                            <label class="control-label">{{__('web.no_of_decimals')}}</label>
                        </div>
                        <div class="col-lg-6">
                            <select class="form-control demo-select2-placeholder" name="no_of_decimals"></select>
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="col-lg-12 text-right">
                            <button class="btn btn-purple" type="submit">{{__('web.save')}}</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>

<div class="row">
    <div class="panel">
        <div class="panel-heading">
            <h3 class="panel-title">{{__('web.all_currency')}}</h3>
        </div>
        <div class="panel-body">
            <table class="table table-striped table-bordered demo-dt-basic" cellspacing="0" width="100%">
                <thead>
                    <tr>
                        <th>#</th>
                        <th>{{__('web.currency_name')}}</th>
                        <th>{{__('web.currency_symbol')}}</th>
                        <th>{{__('web.currency_code')}}</th>
                        <th>{{__('web.exchange_rate')}}</th>
                        <th>{{__('web.status')}}</th>
                        <th width="10%">{{__('web.options')}}</th>
                    </tr>
                </thead>
                <tbody>
                    @for($i = 0; $i < count($currencies)-1; $i++)
                        <tr>
                            <td>{{$i+1}}</td>
                            <td>{{$currencies[$i]->name}}</td>
                            <td>{{$currencies[$i]->symbol}}</td>
                            <td>{{$currencies[$i]->code}}</td>
                            <td><input class="form-control" type="number" min="0" step="0.01" value="{{$currencies[$i]->exchange_rate}}"></td>
                            <td><input class="demo-sw" type="checkbox" <?php if($currencies[$i]->status == 1) echo "checked";?> ></td>
                            <td><button class="btn btn-purple" type="submit">{{__('web.save')}}</button></td>
                        </tr>
                    @endfor
                    <tr>
                        <td>{{count($currencies)}}</td>
                        <td><input class="form-control" type="text" value="{{$currencies[count($currencies)-1]->name}}"></td>
                        <td><input class="form-control" type="text" value="{{$currencies[count($currencies)-1]->symbol}}"></td>
                        <td><input class="form-control" type="text" value="{{$currencies[count($currencies)-1]->code}}"></td>
                        <td><input class="form-control" type="number" min="0" step="0.01" value="{{$currencies[count($currencies)-1]->exchange_rate}}"></td>
                        <td><input class="demo-sw" type="checkbox" <?php if($currencies[count($currencies)-1]->status == 1) echo "checked";?> ></td>
                        <td><button class="btn btn-purple" type="submit">{{__('web.save')}}</button></td>
                    </tr>
                </tbody>
            </table>

        </div>
    </div>
</div>

@endsection
