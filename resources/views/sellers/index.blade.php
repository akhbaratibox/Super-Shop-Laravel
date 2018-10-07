@extends('layouts.app')

@section('content')

<div class="row">
    <div class="col-sm-12">
        <a href="{{ route('sellers.create')}}" class="btn btn-info pull-right">Add New</a>
    </div>
</div>

<br>

<!-- Basic Data Tables -->
<!--===================================================-->
<div class="panel">
    <div class="panel-heading">
        <h3 class="panel-title">Sellers</h3>
    </div>
    <div class="panel-body">
        <table class="table table-striped table-bordered demo-dt-basic" cellspacing="0" width="100%">
            <thead>
                <tr>
                    <th>#</th>
                    <th>Name</th>
                    <th>Email</th>
                    <th>Status</th>
                    <th width="10%">Options</th>
                </tr>
            </thead>
            <tbody>
                @foreach($sellers as $key => $seller)
                    <tr>
                        <td>{{$key+1}}</td>
                        <td>{{$seller->user->name}}</td>
                        <td>{{$seller->user->email}}</td>
                        <td>{{$seller->status}}</td>
                        <td>
                            <a href="{{route('sellers.edit', $seller->id)}}" class="btn btn-mint btn-icon"><i class="demo-psi-pen-5 icon-lg"></i></a>
                            <a onclick="confirm_modal('{{route('sellers.destroy', $seller->id)}}');" class="btn btn-danger btn-icon"><i class="demo-psi-recycling icon-lg"></i></a>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>

    </div>
</div>

@endsection
