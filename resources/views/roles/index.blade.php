@extends('layouts.app')

@section('content')

<div class="row">
    <div class="col-sm-12">
        <a href="{{ route('roles.create')}}" class="btn btn-info pull-right">{{__('web.add_new')}}</a>
    </div>
</div>

<br>

<!-- Basic Data Tables -->
<!--===================================================-->
<div class="panel">
    <div class="panel-heading">
        <h3 class="panel-title">{{__('web.roles')}}</h3>
    </div>
    <div class="panel-body">
        <table class="table table-striped table-bordered demo-dt-basic" cellspacing="0" width="100%">
            <thead>
                <tr>
                    <th width="10%">#</th>
                    <th>{{__('web.name')}}</th>
                    <th width="10%">{{__('web.options')}}</th>
                </tr>
            </thead>
            <tbody>
                @foreach($roles as $key => $role)
                    <tr>
                        <td>{{$key+1}}</td>
                        <td>{{$role->name}}</td>
                        <td>
                            <a href="{{route('roles.edit', $role->id)}}" class="btn btn-mint btn-icon"><i class="demo-psi-pen-5 icon-lg"></i></a>
                            <a onclick="confirm_modal('{{route('roles.destroy', $role->id)}}');" class="btn btn-danger btn-icon"><i class="demo-psi-recycling icon-lg"></i></a>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>

    </div>
</div>

@endsection