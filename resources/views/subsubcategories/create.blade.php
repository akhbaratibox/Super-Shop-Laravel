@extends('layouts.app')

@section('content')

<div class="col-sm-12">
    <div class="panel">
        <div class="panel-heading">
            <h3 class="panel-title">Sub Sub Category Information</h3>
        </div>

        <!--Horizontal Form-->
        <!--===================================================-->
        <form class="form-horizontal" action="{{ route('subsubcategories.store') }}" method="POST" enctype="multipart/form-data">
        	@csrf
            <div class="panel-body">
                <div class="form-group">
                    <label class="col-sm-3 control-label" for="name">Name</label>
                    <div class="col-sm-9">
                        <input type="text" placeholder="Name" id="name" name="name" class="form-control" required>
                    </div>
                </div>
                <div class="form-group">
                    <label class="col-sm-3 control-label" for="name">Select Category</label>
                    <div class="col-sm-9">
                        <select name="category_id" id="category_id" class="form-control demo-select2-placeholder" required>
                            @foreach($categories as $category)
                                <option value="{{$category->id}}">{{$category->name}}</option>
                            @endforeach
                        </select>
                    </div>
                </div>
                <div class="form-group">
                    <label class="col-sm-3 control-label" for="name">Select Sub Category</label>
                    <div class="col-sm-9">
                        <select name="sub_category_id" id="sub_category_id" class="form-control demo-select2-placeholder" required>
                            
                        </select>
                    </div>
                </div>
                <div class="form-group">
                    <label class="col-sm-3 control-label" for="name">Brands</label>
                    <div class="col-sm-9">
                        <select name="brands[]" id="brands" class="form-control demo-select2" multiple required data-placeholder="Choose Brands">
                            @foreach($brands as $brand)
                                <option value="{{$brand->id}}">{{$brand->name}}</option>
                            @endforeach
                        </select>
                    </div>
                </div>
                <div class="form-group">
                    <label class="col-sm-3 control-label" for="banner">Banner</label>
                    <div class="col-sm-9">
                        <input type="file" id="banner" name="banner" class="form-control" required>
                    </div>
                </div>
            </div>

            <div class="panel-heading">
                <h3 class="panel-title">Customer Choice Options</h3>
            </div>

            <div class="panel-body">
                {{-- <div class="form-group increment">
                    <label class="col-sm-3 control-label" for="color">Colors</label>
                    <div class="col-sm-6">
                        <input type="color" id="color" name="colors[]" class="form-control" required>
                    </div>
                    <div class="col-sm-3">
                        <button class="btn btn-success add-colors" type="button" style="margin-left:10px"><i class="glyphicon glyphicon-plus"></i> Add</button>
                    </div>
                </div>
                <div class="clone-color hide">
                    <div class="form-group control-group">
                        <label class="col-sm-3 control-label" for="color"></label>
                        <div class="col-sm-6">
                            <input type="color" id="color" name="colors[]" class="form-control" required>
                        </div>
                        <div class="col-sm-3">
                            <button class="btn btn-danger remove-colors" type="button" style="margin-left:10px"><i class="glyphicon glyphicon-remove"></i> Remove</button>
                        </div>
                    </div>
                </div> --}}

                <div class="customer_choice_options" id="customer_choice_options">

                </div>
                <div class="form-group">
                    <div class="col-sm-12 text-right">
                        <button id="customer_choice_options_add_new" class="btn btn-info" type="button">Add More Customer Choice Option</button>
                    </div>
                </div>

            </div>

            <div class="panel-footer text-right">
                <button class="btn btn-purple" type="submit">Save</button>
            </div>
        </form>
        <!--===================================================-->
        <!--End Horizontal Form-->

    </div>
</div>

@endsection


@section('script')

<script type="text/javascript">
    
    var i =0;

    $('#customer_choice_options_add_new').click(function(){
        var choiceWrap = $('#customer_choice_options');
        choiceWrap.append('<div class="form-group clearfix"> <div class="col-sm-4"> <input type="hidden" name="options[]" value="'+i+'"> <input type="text" class="form-control" required placeholder="Customer Input Title" name="option_title[]"> </div><div class="col-sm-6"> <select class="form-group form-control customer_choice_options_types" required name="option_type[]" onchange="customer_choice_options_types('+i+',this)"> <option value="text">Text</option> <option value="select">Select</option> <option value="radio">Radio</option> </select> <div class="customer_choice_options_types_wrap"><div class="customer_choice_options_types_wrap_child"></div></div></div><div class="col-sm-2"> <span class="btn btn-danger btn-icon btn-circle icon-lg fa fa-times" onclick="delete_choice_clearfix(this)"></span> </div></div>');
        i++;
    });

    function customer_choice_options_types(i, em){
        if($(em).val() == 'select' || $(em).val() == 'radio'){
            if (!$(em).next().children().hasClass('add_customer_choice_options')) {
                $(em).next().append('<button class="btn btn-success add_customer_choice_options" type="button" style="margin-left:10px" onclick="add_customer_choice_options('+i+',this)"><i class="glyphicon glyphicon-plus"></i> Add option</button>');
            }
        }
    }
    function add_customer_choice_options(i, em){
        $(em).parent().find('.customer_choice_options_types_wrap_child').append('<div class="form-group clearfix"> <div class="col-sm-9"> <input class="form-control" type="text" name="choices_'+i+'[]" value="" required> </div><div class="col-sm-3"> <span class="btn btn-danger btn-icon btn-circle icon-lg fa fa-times" onclick="delete_choice_clearfix(this)"></span> </div></div>');
    }
    function delete_choice_clearfix(em){
        $(em).parent().parent().remove();
    }
    
    function get_subcategories_by_category(){
        var category_id = $('#category_id').val();
        $.post('{{ route('subcategories.get_subcategories_by_category') }}',{_token:'{{ csrf_token() }}', category_id:category_id}, function(data){
            $('#sub_category_id').html(null);
            for (var i = 0; i < data.length; i++) {
                $('#sub_category_id').append($('<option>', {
                    value: data[i].id,
                    text: data[i].name
                }));
                $('.demo-select2').select2();
            }
        });
    }

    $(document).ready(function(){
        get_subcategories_by_category();

        // $(".add-colors").click(function(){
        //     console.log('test');
        //     var html = $(".clone-color").html();
        //     $(".increment").after(html);
        // });

        // $("body").on("click",".remove-colors",function(){
        //     $(this).parents(".control-group").remove();
        // });
    });

    $('#category_id').on('change', function() {
        get_subcategories_by_category();
    });

</script>

@endsection
