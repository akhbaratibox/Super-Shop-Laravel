@extends('layouts.app')

@section('content')

    <div class="row">
        <div class="col-sm-12">
            <a href="{{ route('languages.create')}}" class="btn btn-rounded btn-info pull-right">{{__('Add New Language')}}</a>
        </div>
    </div>

    <br>

    <div class="row">
        <div class="panel">
            <div class="panel-heading">
                <h3 class="panel-title">{{__('Language')}}</h3>
            </div>
            <div class="panel-body">
                <table class="table table-striped table-bordered demo-dt-basic" cellspacing="0" width="100%">
                    <thead>
                        <tr>
                            <th>#</th>
                            <th>{{__('Name')}}</th>
                            <th>{{__('Code')}}</th>
                            <th width="10%">{{__('Options')}}</th>
                        </tr>
                    </thead>
                    <tbody>
                        @php
                            $i = 1;
                        @endphp
                        @foreach ($languages as $key => $language)
                            <tr>
                                <td>{{ $key+1 }}</td>
                                <td>{{ $language->name }}</td>
                                <td>{{ $language->code }}</td>
                                <td>
                                    <div class="btn-group dropdown">
                                        <button class="btn btn-primary dropdown-toggle dropdown-toggle-icon" data-toggle="dropdown" type="button">
                                            Actions <i class="dropdown-caret"></i>
                                        </button>
                                        <ul class="dropdown-menu dropdown-menu-right">
                                            <li><a href="{{route('languages.show', $language->id)}}">Translation</a></li>
                                            <li><a href="{{route('languages.edit', $language->id)}}">Edit</a></li>
                                            @if($language->code != 'en')
                                                <li><a onclick="confirm_modal('{{route('languages.destroy', $language->id)}}');">Delete</a></li>
                                            @endif
                                        </ul>
                                    </div>
                                </td>
                            </tr>
                            @php
                                $i++;
                            @endphp
                        @endforeach
                    </tbody>
                </table>

            </div>
        </div>
    </div>

@endsection
