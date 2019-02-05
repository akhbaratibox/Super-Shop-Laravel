@extends('layouts.blank')
@section('content')
    <div class="cls-content-sm panel">
        <div class="panel-body">
            <div class="mar-ver pad-btm">
                <h1 class="h3">Active Super Shop Installation</h1>
                <p>You will need to know the following items before
                proceeding.</p>
            </div>
             <ol class="list-group">
                <li class="list-group-item">Codecanyon purchase code</li>
                <li class="list-group-item">Database Name</li>
                <li class="list-group-item">Database Username</li>
                <li class="list-group-item">Database Password</li>
                <li class="list-group-item">Database Hostname</li>
             </ol>
             <p style="font-size: 14px;">
                During the installation process, we will check if the files that are needed to be written
                (<strong>.env file</strong>) have
                <strong>write permission</strong>. We will also check if <strong>curl</strong> are enabled on your server or not.
             </p>
             <p style="font-size: 14px;">
                Gather the information mentioned above before hitting the start installation button. If you are ready....
             </p>
             <br>
             <a href="{{ route('step1') }}" class="btn btn-info">
                 Start Installation Process
             </a>
    </div>
@endsection
