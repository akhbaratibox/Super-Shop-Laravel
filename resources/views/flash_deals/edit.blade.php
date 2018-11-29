@extends('layouts.app')

@section('content')

<div class="col-sm-12">
    <div class="panel">
        <div class="panel-heading">
            <h3 class="panel-title">{{__('web.flash_deal_information')}}</h3>
        </div>

        <!--Horizontal Form-->
        <!--===================================================-->
        <form class="form-horizontal" action="{{ route('flash_deals.update', $flash_deal->id) }}" method="POST" enctype="multipart/form-data">
        	@csrf
            <input type="hidden" name="_method" value="PATCH">
            <div class="panel-body">
                <div class="form-group">
                    <label class="col-sm-3 control-label" for="name">{{__('web.title')}}</label>
                    <div class="col-sm-9">
                        <input type="text" placeholder="{{__('web.title')}}" id="name" name="title" value="{{ $flash_deal->title }}" class="form-control" required>
                    </div>
                </div>
                <div class="form-group">
                    <label class="col-sm-3 control-label" for="start_date">{{__('web.start_date')}}</label>
                    <div class="col-sm-9">
                        <div class="demo-dp-component">
                            <div class="input-group date">
                                <input type="text" class="form-control" id="start_date" name="start_date" value="{{ date('m/d/Y', $flash_deal->start_date) }}" required>
                                <span class="input-group-addon"><i class="demo-pli-calendar-4"></i></span>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="form-group">
                    <label class="col-sm-3 control-label" for="end_date">{{__('web.end_date')}}</label>
                    <div class="col-sm-9">
                        <div class="demo-dp-component">
                            <div class="input-group date">
                                <input type="text" class="form-control" id="end_date" name="end_date" value="{{ date('m/d/Y', $flash_deal->end_date) }}" required>
                                <span class="input-group-addon"><i class="demo-pli-calendar-4"></i></span>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="form-group">
                    <label class="col-sm-3 control-label" for="products">{{__('web.products')}}</label>
                    <div class="col-sm-9">
                        <select name="products[]" id="products" class="form-control demo-select2" multiple required data-placeholder="Choose Products">
                            @foreach(\App\Product::all() as $product)
                                <option value="{{$product->id}}">{{$product->name}}</option>
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
