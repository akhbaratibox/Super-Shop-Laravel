@extends('layouts.app')

@section('content')

<div class="row">
    <div class="col-sm-12">
        <a href="{{ route('home_banners.create')}}" class="btn btn-info pull-right">{{__('web.add_new')}}</a>
    </div>
</div>

<br>

<!-- Basic Data Tables -->
<!--===================================================-->
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
                @foreach($banners as $key => $banner)
                    <tr>
                        <td>{{$key+1}}</td>
                        <td><img class="img-md" src="{{ asset($banner->photo)}}" alt="banner Image"></td>
                        <td><label class="switch">
                            <input onchange="update_published(this)" value="{{ $banner->id }}" type="checkbox" <?php if($banner->published == 1) echo "checked";?> >
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

@endsection

@section('script')
    <script type="text/javascript">
        function update_published(el){
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
    </script>
@endsection
