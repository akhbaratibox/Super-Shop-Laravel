@extends('layouts.app')

@section('content')

<div class="col-sm-12">
    <div class="panel">
        <div class="panel-heading">
            <h3 class="panel-title">{{__('web.send_newsletter')}}</h3>
        </div>
        <!--Horizontal Form-->
        <!--===================================================-->
        <form class="form-horizontal" action="{{ route('newsletters.send') }}" method="POST" enctype="multipart/form-data">
        	@csrf
            <div class="panel-body">
                <div class="form-group">
                    <label class="col-sm-2 control-label" for="name">{{__('web.emails')}} ({{__('web.users')}})</label>
                    <div class="col-sm-10">
                        <select class="form-control demo-select2-multiple-selects" name="user_emails[]" multiple required>
                            @foreach($users as $user)
                                <option value="{{$user->email}}">{{$user->email}}</option>
                            @endforeach
                        </select>
                    </div>
                </div>
                <div class="form-group">
                    <label class="col-sm-2 control-label" for="name">{{__('web.emails')}} ({{__('web.subscribers')}})</label>
                    <div class="col-sm-10">
                        <select class="form-control demo-select2-multiple-selects" name="subscriber_emails[]" multiple disabled>
                            
                        </select>
                    </div>
                </div>
                <div class="form-group">
                    <label class="col-sm-2 control-label" for="mail_from">{{__('web.from')}} : {{__('web.email_address')}}</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" name="mail_from" id="mail_from" required>
                    </div>
                </div>
                <div class="form-group">
                    <label class="col-sm-2 control-label" for="subject">{{__('web.newsletter_subject')}}</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" name="subject" id="subject" required>
                    </div>
                </div>
                <div class="form-group">
                    <label class="col-sm-2 control-label" for="name">{{__('web.newsletter_content')}}</label>
                    <div class="col-sm-10">
                        <textarea class="demo-summernote-long" name="content" required></textarea>
                    </div>
                </div>
            </div>
            <div class="panel-footer text-right">
                <button class="btn btn-purple" type="submit">{{__('web.send')}}</button>
            </div>
        </form>
        <!--===================================================-->
        <!--End Horizontal Form-->

    </div>
</div>

@endsection
