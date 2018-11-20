@extends('layouts.app')

@section('content')

<div class="col-sm-6">
    <div class="panel">
        <div class="panel-heading">
            <h3 class="panel-title">{{__('web.slider_information')}}</h3>
        </div>

        <!--Horizontal Form-->
        <!--===================================================-->
        <form class="form-horizontal" action="{{ route('sliders.store') }}" method="POST" enctype="multipart/form-data">
        	@csrf
            <div class="panel-body">
                <div class="form-group">
                    <div class="col-sm-3">
                        <label class="control-label">Slider Images</label>
                        <strong>(850px*380px)</strong>
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

@endsection

@section('script')
    <script type="text/javascript">
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
    </script>
@endsection
