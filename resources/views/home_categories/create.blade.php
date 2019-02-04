<div class="panel">
    <div class="panel-heading">
        <h3 class="panel-title">{{__('home_categories')}}</h3>
    </div>

    <!--Horizontal Form-->
    <!--===================================================-->
    <form class="form-horizontal" action="{{ route('home_categories.store') }}" method="POST" enctype="multipart/form-data">
        @csrf
        <div class="panel-body">
            <div class="form-group" id="category">
                <label class="col-lg-2 control-label">{{__('category')}}</label>
                <div class="col-lg-7">
                    <select class="form-control demo-select2-placeholder" name="category_id" id="category_id" required>
                        @foreach(\App\Category::all() as $category)
                            <option value="{{$category->id}}">{{$category->name}}</option>
                        @endforeach
                    </select>
                </div>
            </div>
            <div class="form-group" id="subsubcategory">
                <label class="col-lg-2 control-label">{{__('subsubcategory')}}</label>
                <div class="col-lg-7">
                    <select class="form-control demo-select2-max-4" name="subsubcategories[]" id="subsubcategory_id" data-placeholder="Choose Options (max 4)" multiple required>

                    </select>
                </div>
            </div>
        </div>
        <div class="panel-footer text-right">
            <button class="btn btn-purple" type="submit">{{__('save')}}</button>
        </div>
    </form>
    <!--===================================================-->
    <!--End Horizontal Form-->

</div>

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
                        text: data[i].name +' ('+data[i].number_of_products+' products)'
                    }));
                    $(".demo-select2-max-4").select2({
                        maximumSelectionLength: 4
                    });
                }
            });
        }

    });
</script>
