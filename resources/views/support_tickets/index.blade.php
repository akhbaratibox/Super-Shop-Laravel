@extends('layouts.app')

@section('content')

<div class="panel">
    <div class="panel-heading">
        <h3 class="panel-title">{{__('Support Desk')}}</h3>
    </div>
    <div class="panel-body">
        <table class="table table-striped table-bordered demo-dt-basic" cellspacing="0" width="100%">
            <thead>
                <tr>
                    <th>#</th>
                    <th>{{ __('Sending Date') }}</th>
                    <th>{{__('Subject')}}</th>
                    <th>{{__('User')}}</th>
                    <th>{{__('Status')}}</th>
                    <th>{{__('Last reply')}}</th>
                    <th>{{__('New Reply')}}</th>
                    <th>{{__('Options')}}</th>
                </tr>
            </thead>
            <tbody>
                    @foreach ($tickets as $key => $ticket)
                    <tr>
                        <td>{{$key+1}}</td>
                        <td>{{ $ticket->created_at }}</td>
                        <td>{{ $ticket->subject }}</td>
                        <td>{{ $ticket->user->name }}</td>
                        <td><span class="badge badge-pill badge-secondary">Open</span></td>
                        <!-- <td><span class="badge badge-pill badge-success">Solved</span></td>
                        <td><span class="badge badge-pill badge-danger">Pending</span></td> -->
                        <td>{{ $ticket->created_at }}</td>
                        <td><span class="badge badge-pill badge-info">2 new</span></td>
                        <td>
                            <a href="{{route('support_ticket.admin_show', encrypt($ticket->id))}}" class="btn-link">{{__('View Details')}}</a>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>

    </div>
</div>

@endsection