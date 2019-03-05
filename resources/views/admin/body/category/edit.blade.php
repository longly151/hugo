@extends('admin.layouts.main')
@section('content')
<div class="row page-titles">
    <div class="col-md-5 align-self-center">
        <h3 class="text-themecolor">Edit {{$type=='topCategory' ? 'Top Category':($type=='category' ? 'Category':'Sub Category')}}</h3>
    </div>
    <div class="col-md-7 align-self-center">
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="javascript:void(0)">Home</a></li>
            <li class="breadcrumb-item">Forms</li>
            <li class="breadcrumb-item active">Edit {{$type=='topCategory' ? 'Top Category':($type=='category' ? 'Category':'Sub Category')}}</li>
        </ol>
    </div>
    <div class="">
        <button class="right-side-toggle waves-effect waves-light btn-inverse btn btn-circle btn-sm pull-right m-l-10"><i
                class="ti-settings text-white"></i></button>
    </div>
</div>

<div class="container-fluid">
    <div class="row">
        <div class="col-sm-12">
            <div class="card card-body">
                <h4 class="card-title">Category Info</h4>
                @if(session('success'))
                <div class="alert alert-success" role="alert">
                    {{session('success')}}
                </div>
                @endif
                @if ($type == 'topCategory')
                <form class="form-horizontal m-t-40" ation="/admin/category/edit/{{$currentTopCategory->id}}" method="post">
                    {{ csrf_field() }}
                    <div class="form-group">
                        <label for="title">Name</label>
                        <input type="text" class="form-control" name="name" placeholder="Top Category Name" value="{{ null !== old('name')? old('name'): $currentTopCategory->name }}">
                        @if($errors->has('name'))
                        <small class="form-control-feedback text-danger">
                            {{$errors->first('name')}}
                        </small>
                        @endif
                    </div>
                    <div class="form-group">
                        <label>Author</label>
                        <input type="text" id="disabledTextInput" class="form-control" placeholder="{{ session()->get('admin')['fullname'] }}" disabled>
                        
                    </div>
                    <button type="submit" class="btn btn-success waves-effect waves-light m-r-10">Submit</button>
                    <a href="javascript:history.back()" class="btn btn-danger">Cancel</a>
                </form>
                @elseif($type == 'category')
                <form class="form-horizontal m-t-40" ation="/admin/category/edit/{{$currentCategory->id}}" method="post">
                    {{ csrf_field() }}
                    <div class="form-group">
                        <label for="title">Name</label>
                        <input type="text" class="form-control" name="name" placeholder="Category Name" value="{{ null !== old('name')? old('name'): $currentCategory->name }}">
                        @if($errors->has('name'))
                        <small class="form-control-feedback text-danger">
                            {{$errors->first('name')}}
                        </small>
                        @endif
                    </div>
                    <div class="form-group" id="topCategoriesForm">
                        <h4 id="topCategoriesLabel" class="card-title">Top Category</h4>
                        <select id="topCategories" class="select2 form-control custom-select" style="width: 100%; height:36px;" name="topCategory">
                            @foreach ($topCategories as $topCategory)
                                <option value="{{ $topCategory->id }}"
                                {{null !== old('topCategory')? ($topCategory->id == old('topCategory') ? 'selected':''):($topCategory->id == $currentTopCategory->id ? 'selected':'')}}
                                >{{$topCategory->name }}</option>
                            @endforeach
                        </select>
                    </div>
                    <div class="form-group">
                        <input type="hidden" name="category" value="0">
                    </div>
                    <div class="form-group">
                        <label>Author</label>
                        <input type="text" id="disabledTextInput" class="form-control" placeholder="{{ session()->get('admin')['fullname'] }}" disabled>
                    </div>
                    <button type="submit" class="btn btn-success waves-effect waves-light m-r-10">Submit</button>
                    <a href="javascript:history.back()" class="btn btn-danger">Cancel</a>
                </form>
                @elseif($type == 'subCategory')
                <form class="form-horizontal m-t-40" ation="/admin/category/edit/{{$currentSubCategory->id}}" method="post">
                    {{ csrf_field() }}
                    <div class="form-group">
                        <label for="title">Name</label>
                        <input type="text" class="form-control" name="name" placeholder="Sub Category Name" value="{{ null !== old('name')? old('name'): $currentSubCategory->name }}">
                        @if($errors->has('name'))
                        <small class="form-control-feedback text-danger">
                            {{$errors->first('name')}}
                        </small>
                        @endif
                    </div>
                    <div class="form-group" id="topCategoriesForm">
                        <h4 id="topCategoriesLabel" class="card-title">Top Category</h4>
                        <select id="topCategories" class="select2 form-control custom-select" style="width: 100%; height:36px;" name="topCategory">
                            @foreach ($topCategories as $topCategory)
                                <option value="{{ $topCategory->id }}"
                                {{null !== old('topCategory')? ($topCategory->id == old('topCategory') ? 'selected':''):($topCategory->id == $currentTopCategory->id ? 'selected':'')}}
                                >{{$topCategory->name }}</option>
                            @endforeach
                        </select>
                    </div>

                    <div class="form-group" id="categoriesForm" style="display:none;">
                        <h4 id="categoriesLabel" class="card-title">Parent Category</h4>
                        <select id="categories" class="select2 form-control custom-select" style="width: 100%; height:36px;" name="category">
                        </select>
                    </div>
                    <div class="form-group">
                        <label>Author</label>
                        <input type="text" id="disabledTextInput" class="form-control" placeholder="{{ session()->get('admin')['fullname'] }}" disabled>
                        
                    </div>
                    <button type="submit" class="btn btn-success waves-effect waves-light m-r-10">Submit</button>
                    <a href="javascript:history.back()" class="btn btn-danger">Cancel</a>
                </form>
                @endif
                {{-- <form class="form-horizontal m-t-40" ation="/admin/category/edit').'/' }}" method="post">
                    {{ csrf_field() }}
                    <div class="form-group">
                        <label for="title">Name</label>
                        <input type="text" class="form-control" name="name" placeholder="Category Name" value="{{ null !== old('name')? old('name'): $topCategory->name }}">
                        @if($errors->has('name'))
                        <small class="form-control-feedback text-danger">
                            {{$errors->first('name')}}
                        </small>
                        @endif
                    </div>
                    <div class="form-group" id="topCategoriesForm">
                        <h4 id="topCategoriesLabel" class="card-title">Top Category</h4>
                        <select id="topCategories" class="select2 form-control custom-select" style="width: 100%; height:36px;" name="topCategory">
                            <option value="0">-- Select Category --</option>
                            @foreach ($topCategories as $topCategory)
                                <option value="{{ $topCategory->id }}"
                                {{$topCategory->id == old('topCategory') ? 'selected':''}}>{{$topCategory->name }}</option>
                            @endforeach
                        </select>
                    </div>

                    <div class="form-group" id="categoriesForm" style="display:none;">
                        <h4 id="categoriesLabel" class="card-title">Parent Category</h4>
                        <select id="categories" class="select2 form-control custom-select" style="width: 100%; height:36px;" name="category">
                        </select>
                    </div>
                    <div class="form-group">
                        <label>Author</label>
                        <input type="text" id="disabledTextInput" class="form-control" placeholder="{{ session()->get('admin')['fullname'] }}" disabled>
                        
                    </div>
                    <button type="submit" class="btn btn-success waves-effect waves-light m-r-10">Submit</button>
                    <a href="javascript:history.back()" class="btn btn-danger">Cancel</a>
                </form> --}}
            </div>
        </div>
    </div>
</div>
@endsection

@section('pageScript')
<script src="/public/admin/plugins/switchery/dist/switchery.min.js"></script>
<script src="/public/admin/plugins/select2/dist/js/select2.full.min.js" type="text/javascript"></script>
<script src="/public/admin/plugins/bootstrap-select/bootstrap-select.min.js" type="text/javascript"></script>
<script src="/public/admin/plugins/bootstrap-tagsinput/dist/bootstrap-tagsinput.min.js"></script>
<script src="/public/admin/plugins/bootstrap-touchspin/dist/jquery.bootstrap-touchspin.js" type="text/javascript"></script>
<script src="/public/admin/plugins/dff/dff.js" type="text/javascript"></script>
<script type="text/javascript" src="/public/admin/plugins/multiselect/js/jquery.multi-select.js"></script>
<script>
    $(document).ready(function () {
        // for old value
        $("#categoriesForm").show();
        let id = $("#topCategories").val();
        if (id == "0") {
            $("#categoriesForm").hide();
        } else {
            $.get("/hugo/admin/ajax/category/"+id,function(categories) {
                var data = categories;
                $("#categories").html(data);
                $("#categories").val({{null!=old('category')?old('category'):($currentCategory? $currentCategory['id']:'0')}});
            });
        }
        // for changed value
        $("#topCategories").change(function() {
            $("#categoriesForm").show()
            let id = $(this).val();
            if (id == "0") {
                $("#categoriesForm").hide();
            }
            $.get("/hugo/admin/ajax/category/"+id, function(categories) {
                let data = categories;
                $("#categories").html(data);
            });
        });
    });
</script>
@endsection
