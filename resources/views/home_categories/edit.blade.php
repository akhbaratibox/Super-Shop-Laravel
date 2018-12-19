@extends('layouts.app')

@section('content')

    <div class="tab-base">

        <!--Nav Tabs-->
        <ul class="nav nav-tabs">
            <li class="">
                <a data-toggle="tab" href="#demo-lft-tab-1" aria-expanded="true">{{ __('web.home_slider') }}</a>
            </li>
            <li class="">
                <a data-toggle="tab" href="#demo-lft-tab-2" aria-expanded="false">{{ __('web.home_banner') }}</a>
            </li>
            <li class="active">
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
            <div id="demo-lft-tab-2" class="tab-pane fade">

                <div class="row">
                    <div class="col-sm-12">
                        <a href="{{ route('home_banners.create')}}" class="btn btn-info pull-right">{{__('web.add_new')}}</a>
                    </div>
                </div>

                <div class="panel">
                    <div class="panel-heading">
                        <h3 class="panel-title">{{__('web.home_banner')}} (Max 3 published)</h3>
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
                                @foreach(\App\Banner::all() as $key => $banner)
                                    <tr>
                                        <td>{{$key+1}}</td>
                                        <td><img class="img-md" src="{{ asset($banner->photo)}}" alt="banner Image"></td>
                                        <td><label class="switch">
                                            <input onchange="update_banner_published(this)" value="{{ $banner->id }}" type="checkbox" <?php if($banner->published == 1) echo "checked";?> >
                                            <span class="slider round"></span></label></td>
                                        <td>
                                            <a onclick="confirm_modal('{{route('home_banners.destroy', $banner->id)}}');" class="btn btn-danger btn-icon"><i class="demo-psi-recycling icon-lg"></i></a>
                                        </td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>

                    </div>
                </div>
            </div>
            <div id="demo-lft-tab-3" class="tab-pane fade active in">

                <div class="panel">
                    <div class="panel-heading">
                        <h3 class="panel-title">{{__('web.home_categories')}}</h3>
                    </div>

                    <!--Horizontal Form-->
                    <!--===================================================-->
                    <form class="form-horizontal" action="{{ route('home_categories.update', $homeCategory->id) }}" method="POST" enctype="multipart/form-data">
                    	@csrf
                        <input type="hidden" name="_method" value="PATCH">
                        <div class="panel-body">
                            <div class="form-group" id="category">
                                <label class="col-lg-2 control-label">{{__('web.category')}}</label>
                                <div class="col-lg-7">
                                    <select class="form-control demo-select2-placeholder" name="category_id" id="category_id" required>
                                        @foreach(\App\Category::all() as $category)
                                            <option value="{{$category->id}}" @php if($homeCategory->category_id == $category->id) echo "selected"; @endphp>{{$category->name}}</option>
                                        @endforeach
                                    </select>
                                </div>
                            </div>
                            <div class="form-group" id="subsubcategory">
                                <label class="col-lg-2 control-label">{{__('web.subsubcategory')}}</label>
                                <div class="col-lg-7">
                                    <select class="form-control demo-select2-max-4" name="subsubcategories[]" id="subsubcategory_id" data-placeholder="Choose Options (max 4)" multiple required>

                                    </select>
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
        </div>
    </div>

@endsection

@section('script')

<script type="text/javascript">

    $(document).ready(function(){

        get_subsubcategories_by_category();

        $('#category_id').on('change', function() {
            get_subsubcategories_by_category();
        });

        function get_subsubcategories_by_category(){
            var category_id = $('#category_id').val();
            $.post('{{ route('home_categories.get_subsubcategories_by_category') }}',{_token:'{{ csrf_token() }}', category_id:category_id}, function(data){
                $('#subsubcategory_id').html(null);
                for (var i = 0; i < data.length; i++) {
                    $('#subsubcategory_id').append($('<option>', {
                        value: data[i].id,
                        text: data[i].name
                    }));
                    $('.demo-select2').select2();
                }

                $("#subsubcategory_id > option").each(function() {
                    @foreach (json_decode($homeCategory->subsubcategories) as $key => $id)
                        if(this.value == '{{$id}}'){
                            $(this).prop('selected', true);
                        }
                    @endforeach
                });
            });
        }
    });

    function update_banner_published(el){
        if(el.checked){
            var status = 1;
        }
        else{
            var status = 0;
        }
        var url = '{{ route('home_banners.update', 'banner_id') }}';
        url = url.replace('banner_id', el.value);

        $.post(url, {_token:'{{ csrf_token() }}', status:status, _method:'PATCH'}, function(data){
            if(data == 1){
                showAlert('success', 'Published banners updated successfully');
            }
            else{
                showAlert('danger', 'Something went wrong');
            }
        });
    }

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
