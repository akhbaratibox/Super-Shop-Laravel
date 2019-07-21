@extends('layouts.app')

@section('content')

<div class="col-lg-10 col-lg-offset-1 pad-btm mar-btm">
    <div class="panel">
        <div class="pad-all bg-gray-light">
            <h3 class="mar-no">{{ $ticket->subject }}</h3>
             <ul class="mar-top list-inline">
                <li>{{ $ticket->user->name }}</li>
                <li>{{ $ticket->created_at }}</li>
                <li><span class="badge badge-pill badge-secondary">Open</span></li>
            </ul>
        </div>

        <div class="panel-body">
            <form class="" action="{{ route('support_ticket.admin_store') }}" method="post">
                @csrf
                <input type="hidden" name="ticket_id" value="{{$ticket->id}}">
                <div class="form-group">
                    <textarea class="editor" name="reply" data-buttons="bold,underline,italic,|,ul,ol,|,paragraph,|,undo,redo"></textarea>
                </div>
                <div class="form-group">
                    <input type="file" name="attachment" class="form-control" required>
                </div>
                <div class="form-group text-right">
                    <button class="btn btn-purple" type="submit">{{__('Send Your Reply')}}</button>
                </div>
            </form>
            <div class="pad-top">
                @foreach($ticket->ticketreplies as $ticketreply)
                    <div class="media bord-top pad-top">
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
                <div class="media bord-top pad-top">
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
</div>

@endsection
