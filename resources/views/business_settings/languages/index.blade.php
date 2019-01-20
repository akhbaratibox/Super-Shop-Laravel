@extends('layouts.app')

@section('content')

    <div class="row">
        <div class="col-sm-12">
            <a href="{{ route('languages.create')}}" class="btn btn-info pull-right">{{__('add_new')}}</a>
        </div>
    </div>

    <br>

    <div class="row">
        <div class="panel">
            <div class="panel-heading">
                <h3 class="panel-title">{{__('language')}}</h3>
            </div>
            <div class="panel-body">
                <table class="table table-striped table-bordered demo-dt-basic" cellspacing="0" width="100%">
                    <thead>
                        <tr>
                            <th>#</th>
                            <th>{{__('name')}}</th>
                            <th>{{__('code')}}</th>
                            <th width="10%">{{__('options')}}</th>
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
                                            <li><a href="{{route('languages.show', $language->id)}}">View</a></li>
                                            <li><a href="{{route('languages.edit', $language->id)}}">Edit</a></li>
                                            <li><a onclick="confirm_modal('{{route('languages.destroy', $language->id)}}');">Delete</a></li>
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
