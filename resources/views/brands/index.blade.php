@extends('layouts.app')

@section('content')

<div class="row">
    <div class="col-sm-12">
        <a href="{{ route('brands.create')}}" class="btn btn-info pull-right">{{__('web.add_new')}}</a>
    </div>
</div>

<br>

<!-- Basic Data Tables -->
<!--===================================================-->
<div class="panel">
    <div class="panel-heading">
        <h3 class="panel-title">{{__('web.brands')}}</h3>
    </div>
    <div class="panel-body">
        <table class="table table-striped table-bordered demo-dt-basic" cellspacing="0" width="100%">
            <thead>
                <tr>
                    <th>#</th>
                    <th>{{__('web.name')}}</th>
                    <th>{{__('web.logo')}}</th>
                    <th width="10%">{{__('web.options')}}</th>
                </tr>
            </thead>
            <tbody>
                @foreach($brands as $key => $brand)
                    <tr>
                        <td>{{$key+1}}</td>
                        <td>{{$brand->name}}</td>
                        <td><img class="img-md" src="{{ asset($brand->logo) }}" alt="Logo"></td>
                        <td>
                            <a href="{{route('brands.edit', $brand->id)}}" class="btn btn-mint btn-icon"><i class="demo-psi-pen-5 icon-lg"></i></a>
                            <a onclick="confirm_modal('{{route('brands.destroy', $brand->id)}}');" class="btn btn-danger btn-icon"><i class="demo-psi-recycling icon-lg"></i></a>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>

    </div>
</div>

@endsection
