@extends('layouts.app')

@section('content')

<div class="col-sm-12">
    <div class="panel">
        <div class="panel-heading">
            <h3 class="panel-title">Send Newsletter</h3>
        </div>
        <!--Horizontal Form-->
        <!--===================================================-->
        <form class="form-horizontal" action="{{ route('newsletters.send') }}" method="POST" enctype="multipart/form-data">
        	@csrf
            <div class="panel-body">
                <div class="form-group">
                    <label class="col-sm-2 control-label" for="name">Emails (users)</label>
                    <div class="col-sm-10">
                        <select class="form-control demo-select2-multiple-selects" name="user_emails[]" multiple required>
                            @foreach($users as $user)
                                <option value="{{$user->email}}">{{$user->email}}</option>
                            @endforeach
                        </select>
                    </div>
                </div>
                <div class="form-group">
                    <label class="col-sm-2 control-label" for="name">Emails (subscribers)</label>
                    <div class="col-sm-10">
                        <select class="form-control demo-select2-multiple-selects" name="subscriber_emails[]" multiple disabled>
                            
                        </select>
                    </div>
                </div>
                <div class="form-group">
                    <label class="col-sm-2 control-label" for="mail_from">From : Email Address</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" name="mail_from" id="mail_from" required>
                    </div>
                </div>
                <div class="form-group">
                    <label class="col-sm-2 control-label" for="subject">Newsletter Subject</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" name="subject" id="subject" required>
                    </div>
                </div>
                <div class="form-group">
                    <label class="col-sm-2 control-label" for="name">Newsletter Content</label>
                    <div class="col-sm-10">
                        <textarea class="demo-summernote-long" name="content" required></textarea>
                    </div>
                </div>
            </div>
            <div class="panel-footer text-right">
                <button class="btn btn-purple" type="submit">Send</button>
            </div>
        </form>
        <!--===================================================-->
        <!--End Horizontal Form-->

    </div>
</div>

@endsection
