@extends('layouts.app')

@section('content')

<div class="row">
    <div class="col-sm-12">
        <a href="{{ route('sellers.create')}}" class="btn btn-info pull-right">{{__('add_new')}}</a>
    </div>
</div>

<br>

<!-- Basic Data Tables -->
<!--===================================================-->
<div class="panel">
    <div class="panel-heading">
        <h3 class="panel-title">{{__('sellers')}}</h3>
    </div>
    <div class="panel-body">
        <table class="table table-striped table-bordered demo-dt-basic" cellspacing="0" width="100%">
            <thead>
                <tr>
                    <th>#</th>
                    <th>{{__('name')}}</th>
                    <th>{{__('email_address')}}</th>
                    <th>{{__('status')}}</th>
                    <th width="10%">{{__('options')}}</th>
                </tr>
            </thead>
            <tbody>
                @foreach($sellers as $key => $seller)
                    <tr>
                        <td>{{$key+1}}</td>
                        <td>{{$seller->user->name}}</td>
                        <td>{{$seller->user->email}}</td>
                        <td>
                            @if ($seller->verification_status == 1)
                                Verified
                            @else
                                Not verified
                            @endif
                        </td>
                        <td>
                            <div class="btn-group dropdown">
                                <button class="btn btn-primary dropdown-toggle dropdown-toggle-icon" data-toggle="dropdown" type="button">
                                    Actions <i class="dropdown-caret"></i>
                                </button>
                                <ul class="dropdown-menu dropdown-menu-right">
                                    <li><a href="{{route('sellers.edit', $seller->id)}}">Edit</a></li>
                                    <li><a onclick="confirm_modal('{{route('sellers.destroy', $seller->id)}}');">Delete</a></li>
                                </ul>
                            </div>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>

    </div>
</div>

@endsection
