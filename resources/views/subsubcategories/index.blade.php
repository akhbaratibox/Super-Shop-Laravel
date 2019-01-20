@extends('layouts.app')

@section('content')

<div class="row">
    <div class="col-sm-12">
        <a href="{{ route('subsubcategories.create')}}" class="btn btn-info pull-right">{{__('add_new')}}</a>
    </div>
</div>

<br>

<!-- Basic Data Tables -->
<!--===================================================-->
<div class="panel">
    <div class="panel-heading">
        <h3 class="panel-title">{{__('subsubcategories')}}</h3>
    </div>
    <div class="panel-body">
        <table class="table table-striped table-bordered demo-dt-basic" cellspacing="0" width="100%">
            <thead>
                <tr>
                    <th>#</th>
                    <th>{{__('subsubcategory')}}</th>
                    <th>{{__('subcategory')}}</th>
                    <th>{{__('category')}}</th>
                    <th>{{__('brands')}}</th>
                    <th>{{__('banner')}}</th>
                    <th width="10%">{{__('options')}}</th>
                </tr>
            </thead>
            <tbody>
                @foreach($subsubcategories as $key => $subsubcategory)
                    <tr>
                        <td>{{$key+1}}</td>
                        <td>{{$subsubcategory->name}}</td>
                        <td>{{$subsubcategory->subcategory->name}}</td>
                        <td>{{$subsubcategory->subcategory->category->name}}</td>
                        <td>
                            @foreach(json_decode($subsubcategory->brands) as $brand_id)
                                <span class="badge badge-info">{{\App\Brand::find($brand_id)->name}}</span>
                            @endforeach
                        </td>
                        <td><img class="img-md" src="{{ asset($subsubcategory->banner) }}" alt="Banner"></td>
                        <td>
                            <a href="{{route('subsubcategories.edit', $subsubcategory->id)}}" class="btn btn-mint btn-icon"><i class="demo-psi-pen-5 icon-lg"></i></a>
                            <a onclick="confirm_modal('{{route('subsubcategories.destroy', $subsubcategory->id)}}');" class="btn btn-danger btn-icon"><i class="demo-psi-recycling icon-lg"></i></a>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>

    </div>
</div>

@endsection
