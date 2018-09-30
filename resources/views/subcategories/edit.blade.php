@extends('layouts.app')

@section('content')

<div class="col-sm-6">
    <div class="panel">
        <div class="panel-heading">
            <h3 class="panel-title">Sub Category Information</h3>
        </div>

        <!--Horizontal Form-->
        <!--===================================================-->
        <form class="form-horizontal" action="{{ route('subcategories.update', $subcategory->id) }}" method="POST" enctype="multipart/form-data">
            <input name="_method" type="hidden" value="PATCH">
        	@csrf
            <div class="panel-body">
                <div class="form-group">
                    <label class="col-sm-3 control-label" for="name">Sub Category Name</label>
                    <div class="col-sm-9">
                        <input type="text" placeholder="Name" id="name" name="name" class="form-control" value="{{$subcategory->name}}" required>
                    </div>
                </div>
                <div class="form-group">
                    <label class="col-sm-3 control-label" for="name">Select Category</label>
                    <div class="col-sm-9">
                        <select id="demo-chosen-select" name="category_id" required class="form-control">
                            @foreach($categories as $category)
                                <option value="{{$category->id}}" <?php if($subcategory->category_id == $category->id) echo "selected";?> >{{$category->name}}</option>
                            @endforeach
                        </select>
                    </div>
                </div>
                <div class="form-group">
                    <label class="col-sm-3 control-label" for="banner">Banner</label>
                    <div class="col-sm-9">
                        <input type="file" id="banner" name="banner" class="form-control">
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
