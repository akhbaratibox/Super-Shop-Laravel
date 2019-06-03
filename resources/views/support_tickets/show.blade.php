@extends('layouts.app')

@section('content')

<div class="col-lg-12">
    <div class="panel">
        <div class="panel-heading">
            <h3 class="panel-title">{{__('Ticket Details')}}</h3>
        </div>

        <div class="panel-body">
            <form class="" action="{{ route('support_ticket.admin_store') }}" method="post">
                @csrf
                    <div class="form-group row">
                        <input type="hidden" name="ticket_id" value="{{$ticket->id}}">
                        <label class="col-lg-2 control-label" for="subject"><strong>{{__('Subject')}}</strong></label>
                        <div class="col-lg-9">
                            <p class="form-control">@php echo $ticket->subject; @endphp</p>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-lg-2 control-label" for="subject"><strong>{{__('Details')}}</strong></label>
                        <div class="col-lg-9">
                            <p class="form-control">@php echo $ticket->details; @endphp</p>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-lg-2 control-label" for="subject"><strong>{{__('Reply')}}</strong></label>
                        <div class="col-lg-9">
                            <textarea class="editor" name="reply"></textarea>
                        </div>
                    </div>
                    <div class="form-group row">
                        <div class="col-lg-2"></div>
                        <div class="col-lg-9">
                            <div class="panel-footer text-right">
                                <button class="btn btn-purple" type="submit">{{__('Send Your Reply')}}</button>
                            </div>
                        </div>
                    </div>
            </form>
{{-- Modal Start --}}

{{-- Modal End --}}

            @foreach($ticket_replies as $ticketreply)
                <div class="form-group">
                    <a class="media-left" href="#"><img class="img-circle img-sm" alt="Profile Picture" src="{{ asset($ticketreply->user->avatar_original) }}">
                    </a>
                    <div class="media-body">
                        <div class="comment-header">
                            <a href="#" class="media-heading box-inline text-main text-bold">{{ $ticketreply->user->name }}</a>
                            <p class="text-muted text-sm">{{$ticketreply->created_at}}</p>
                        </div>
                        <p>
                            @php
                                echo $ticketreply->reply;
                            @endphp
                        </p>
                    </div>
                </div>
            @endforeach
            <div class="form-group">
                <a class="media-left" href="#"><img class="img-circle img-sm" alt="Profile Picture" src="{{ asset($ticket->user->avatar_original) }}">
                </a>
                <div class="media-body">
                    <div class="comment-header">
                        <a href="#" class="media-heading box-inline text-main text-bold">{{ $ticket->user->name }}</a>
                        <p class="text-muted text-sm">{{$ticket->created_at}}</p>
                    </div>
                    <p>
                        @php
                            echo $ticket->details;
                        @endphp
                    </p>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection
