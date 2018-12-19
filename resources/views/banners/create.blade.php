@extends('layouts.app')

@section('content')

    <div class="tab-base">

        <!--Nav Tabs-->
        <ul class="nav nav-tabs">
            <li class="">
                <a data-toggle="tab" href="#demo-lft-tab-1" aria-expanded="true">{{ __('web.home_slider') }}</a>
            </li>
            <li class="active">
                <a data-toggle="tab" href="#demo-lft-tab-2" aria-expanded="false">{{ __('web.home_banner') }}</a>
            </li>
            <li class="">
                <a data-toggle="tab" href="#demo-lft-tab-3" aria-expanded="false">{{ __('web.home_categories') }}</a>
            </li>
        </ul>

        <!--Tabs Content-->
        <div class="tab-content">
            <div id="demo-lft-tab-1" class="tab-pane fade">

                <div class="row">
                    <div class="col-sm-12">
                        <a href="{{ route('sliders.create')}}" class="btn btn-info pull-right">{{__('web.add_new')}}</a>
                    </div>
                </div>

                <div class="panel">
                    <div class="panel-heading">
                        <h3 class="panel-title">{{__('web.home_slider')}}</h3>
                    </div>
                    <div class="panel-body">
                        <table class="table table-striped table-bordered demo-dt-basic" cellspacing="0" width="100%">
                            <thead>
                                <tr>
                                    <th>#</th>
                                    <th>{{__('web.photo')}}</th>
                                    <th>{{__('web.published')}}</th>
                                    <th width="10%">{{__('web.options')}}</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach(\App\Slider::all() as $key => $slider)
                                    <tr>
                                        <td>{{$key+1}}</td>
                                        <td><img class="img-md" src="{{ asset($slider->photo)}}" alt="Slider Image"></td>
                                        <td><label class="switch">
                                            <input onchange="update_slider_published(this)" value="{{ $slider->id }}" type="checkbox" <?php if($slider->published == 1) echo "checked";?> >
                                            <span class="slider round"></span></label></td>
                                        <td>
                                            <a onclick="confirm_modal('{{route('sliders.destroy', $slider->id)}}');" class="btn btn-danger btn-icon"><i class="demo-psi-recycling icon-lg"></i></a>
                                        </td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>

                    </div>
                </div>
            </div>
            <div id="demo-lft-tab-2" class="tab-pane fade active in">

                <div class="panel">
                    <div class="panel-heading">
                        <h3 class="panel-title">{{__('web.banner_information')}}</h3>
                    </div>

                    <!--Horizontal Form-->
                    <!--===================================================-->
                    <form class="form-horizontal" action="{{ route('home_banners.store') }}" method="POST" enctype="multipart/form-data">
                    	@csrf
                        <div class="panel-body">
                            <div class="form-group">
                                <div class="col-sm-3">
                                    <label class="control-label">Banner Images</label>
                                    <strong>(850px*420px)</strong>
                                </div>
                                <div class="col-sm-9">
                                    <div id="photos">

                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="panel-footer text-right">
                            <button class="btn btn-purple" type="submit">{{__('web.save')}}</button>
                        </div>
                    </form>
                    <!--===================================================-->
                    <!--End Horizontal Form-->

                </div>

            </div>
            <div id="demo-lft-tab-3" class="tab-pane fade">

                <div class="row">
                    <div class="col-sm-12">
                        <a href="{{ route('home_categories.create')}}" class="btn btn-info pull-right">{{__('web.add_new')}}</a>
                    </div>
                </div>

                <div class="panel">
                    <div class="panel-heading">
                        <h3 class="panel-title">{{__('web.home_categories')}}</h3>
                    </div>
                    <div class="panel-body">
                        <table class="table table-striped table-bordered demo-dt-basic" cellspacing="0" width="100%">
                            <thead>
                                <tr>
                                    <th>#</th>
                                    <th>{{__('web.category')}}</th>
                                    <th>{{__('web.subsubcategories')}}</th>
                                    <th>{{ __('web.status') }}</th>
                                    <th width="10%">{{__('web.options')}}</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach(\App\HomeCategory::all() as $key => $home_category)
                                    <tr>
                                        <td>{{$key+1}}</td>
                                        <td>{{$home_category->category->name}}</td>
                                        <td>
                                            @foreach (json_decode($home_category->subsubcategories) as $key => $subsubcategory_id)
                                                <span class="badge badge-info">{{\App\SubSubCategory::find($subsubcategory_id)->name}}</span>
                                            @endforeach
                                        </td>
                                        <td><label class="switch">
                                            <input onchange="update_home_category_status(this)" value="{{ $home_category->id }}" type="checkbox" <?php if($home_category->status == 1) echo "checked";?> >
                                            <span class="slider round"></span></label></td>
                                        <td>
                                            <a href="{{route('home_categories.edit', $home_category->id)}}" class="btn btn-mint btn-icon"><i class="demo-psi-pen-5 icon-lg"></i></a>
                                            <a onclick="confirm_modal('{{route('home_categories.destroy', $home_category->id)}}');" class="btn btn-danger btn-icon"><i class="demo-psi-recycling icon-lg"></i></a>
                                        </td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>

                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection

@section('script')

<script type="text/javascript">
    function update_home_category_status(el){
        if(el.checked){
            var status = 1;
        }
        else{
            var status = 0;
        }
        $.post('{{ route('home_categories.update_status') }}', {_token:'{{ csrf_token() }}', id:el.value, status:status}, function(data){
            if(data == 1){
                showAlert('success', 'Home Page Category status updated successfully');
            }
            else{
                showAlert('danger', 'Something went wrong');
            }
        });
    }

    $(document).ready(function(){
        $("#photos").spartanMultiImagePicker({
            fieldName:        'photos[]',
            maxCount:         10,
            rowHeight:        '200px',
            groupClassName:   'col-md-4 col-sm-9 col-xs-6',
            maxFileSize:      '',
            dropFileLabel : "Drop Here",
            onExtensionErr : function(index, file){
                console.log(index, file,  'extension err');
                alert('Please only input png or jpg type file')
            },
            onSizeErr : function(index, file){
                console.log(index, file,  'file size too big');
                alert('File size too big');
            }
        });
    });

    function update_slider_published(el){
        if(el.checked){
            var status = 1;
        }
        else{
            var status = 0;
        }
        var url = '{{ route('sliders.update', 'slider_id') }}';
        url = url.replace('slider_id', el.value);

        $.post(url, {_token:'{{ csrf_token() }}', status:status, _method:'PATCH'}, function(data){
            if(data == 1){
                showAlert('success', 'Published sliders updated successfully');
            }
            else{
                showAlert('danger', 'Something went wrong');
            }
        });
    }
</script>

@endsection
