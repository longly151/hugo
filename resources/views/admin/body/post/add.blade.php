@extends('admin.layouts.main')
@section('content')
<div class="row page-titles">
    <div class="col-md-5 align-self-center">
        <h3 class="text-themecolor">Add Post</h3>
    </div>
    <div class="col-md-7 align-self-center">
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="javascript:void(0)">Home</a></li>
            <li class="breadcrumb-item">Forms</li>
            <li class="breadcrumb-item active">Add Post</li>
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
                <h4 class="card-title">Post Info</h4>
                <form class="form-horizontal m-t-40" action="/admin/post/add" method="post" enctype="multipart/form-data">
                    {{ csrf_field() }}
                    <div class="form-group">
                        <label for="title">Title</label>
                        <input type="text" class="form-control" name="title" placeholder="Title" value="{{ old('title') }}">
                        @if($errors->has('title'))
                        <small class="form-control-feedback text-danger">
                            {{$errors->first('title')}}
                        </small>
                        @endif
                    </div>
                    <div class="form-group">
                        <label for="description">Description</label>
                        <input type="text" class="form-control" name="description" placeholder="Description" value="{{ old('description') }}">
                        @if($errors->has('description'))
                        <small class="form-control-feedback text-danger">
                            {{$errors->first('description')}}
                        </small>
                        @endif
                    </div>
                    <div class="form-group">
                        <label for="area">Content</label>
                        <textarea id="editor1" name="content" rows="10" cols="80">{{ old('content') }}</textarea>
                        @if($errors->has('content'))
                        <small class="form-control-feedback text-danger">
                            {{$errors->first('content')}}
                        </small>
                        @endif
                    </div>
                    <div class="form-group">
                        <label>Author</label>
                        <input type="text" id="disabledTextInput" class="form-control" placeholder="{{ session()->get('admin')['fullname'] }}" disabled>
                    </div>
                    
                    <div class="form-group">
                        <h4 id="topCategoriesLabel" class="card-title">Top Category</h4>
                        <select id="topCategories" class="select2 form-control custom-select" style="width: 100%; height:36px;" name="topCategory">
                            <option value="0">-- Select Category --</option>
                            @foreach ($topCategories as $topCategory)
                                <option value="{{ $topCategory->id }}"
                                {{$topCategory->id == old('topCategory') ? 'selected':''}}>{{$topCategory->name }}</option>
                            @endforeach
                        </select>
                        @if($errors->has('topCategory'))
                        <small class="form-control-feedback text-danger">
                            {{$errors->first('topCategory')}}
                        </small>
                        @endif
                    </div>
                    <div class="form-group" id="categoriesForm" style="display:none;">
                        <h4 id="categoriesLabel" class="card-title">Parent Category</h4>
                        <select id="categories" class="select2 form-control custom-select" style="width: 100%; height:36px;" name="category">
                        </select>
                        @if($errors->has('category'))
                        <small class="form-control-feedback text-danger">
                            {{$errors->first('category')}}
                        </small>
                        @endif
                    </div>
                    <div class="form-group" id="subCategoriesForm" style="display:none;">
                        <h4 id="subCategoriesLabel" class="card-title">Child Category</h4>
                        <select id="subCategories" class="select2 form-control custom-select" style="width: 100%; height:36px;" name="subCategory">
                        </select>
                        @if($errors->has('subCategory'))
                        <small class="form-control-feedback text-danger">
                            {{$errors->first('subCategory')}}
                        </small>
                        @endif
                    </div>

                    <div class="form-group">
                        <h4 class="m-t-20">Tag</h4>
                        <select class="select2 m-b-10 select2-multiple" style="width: 100%" multiple="multiple" data-placeholder="Choose" name="tags[]">
                            @foreach ($tags as $tag)
                            <option value="{{ $tag->id }}"
                                @if (is_array(old('tags')))
                                @foreach (old('tags') as $oldTag)
                                {{$tag->id == $oldTag ? 'selected':''}}
                                @endforeach
                                @endif
                            >{{$tag->name}}</option>
                            @endforeach
                        </select>
                        @if($errors->has('tag'))
                        <small class="form-control-feedback text-danger">
                            {{$errors->first('tag')}}
                        </small>
                        @endif
                    </div>

                    <div class="form-group">
                        <h4 class="m-t-20">Cover Photo</h4>
                        <input type="file" class="form-control" id="exampleInputFile" aria-describedby="fileHelp" name="cover">
                    </div>
                    <button type="submit" class="btn btn-success waves-effect waves-light m-r-10">Submit</button>
                    <button type="submit" class="btn btn-inverse waves-effect waves-light">Cancel</button>
                </form>
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
jQuery(document).ready(function () {
    // Switchery
    var elems = Array.prototype.slice.call(document.querySelectorAll('.js-switch'));
    $('.js-switch').each(function () {
        new Switchery($(this)[0], $(this).data());
    });
    // For select 2
    $(".select2").select2();
    $('.selectpicker').selectpicker();
    //Bootstrap-TouchSpin
    $(".vertical-spin").TouchSpin({
        verticalbuttons: true,
        verticalupclass: 'ti-plus',
        verticaldownclass: 'ti-minus'
    });
    var vspinTrue = $(".vertical-spin").TouchSpin({
        verticalbuttons: true
    });
    if (vspinTrue) {
        $('.vertical-spin').prev('.bootstrap-touchspin-prefix').remove();
    }
    $("input[name='tch1']").TouchSpin({
        min: 0,
        max: 100,
        step: 0.1,
        decimals: 2,
        boostat: 5,
        maxboostedstep: 10,
        postfix: '%'
    });
    $("input[name='tch2']").TouchSpin({
        min: -1000000000,
        max: 1000000000,
        stepinterval: 50,
        maxboostedstep: 10000000,
        prefix: '$'
    });
    $("input[name='tch3']").TouchSpin();
    $("input[name='tch3_22']").TouchSpin({
        initval: 40
    });
    $("input[name='tch5']").TouchSpin({
        prefix: "pre",
        postfix: "post"
    });
    // For multiselect
    $('#pre-selected-options').multiSelect();
    $('#optgroup').multiSelect({
        selectableOptgroup: true
    });
    $('#public-methods').multiSelect();
    $('#select-all').click(function () {
        $('#public-methods').multiSelect('select_all');
        return false;
    });
    $('#deselect-all').click(function () {
        $('#public-methods').multiSelect('deselect_all');
        return false;
    });
    $('#refresh').on('click', function () {
        $('#public-methods').multiSelect('refresh');
        return false;
    });
    $('#add-option').on('click', function () {
        $('#public-methods').multiSelect('addOption', {
            value: 42,
            text: 'test 42',
            index: 0
        });
        return false;
    });
    $(".ajax").select2({
        ajax: {
            url: "https://api.github.com/search/repositories",
            dataType: 'json',
            delay: 250,
            data: function (params) {
                return {
                    q: params.term, // search term
                    page: params.page
                };
            },
            processResults: function (data, params) {
                // parse the results into the format expected by Select2
                // since we are using custom formatting functions we do not need to
                // alter the remote JSON data, except to indicate that infinite
                // scrolling can be used
                params.page = params.page || 1;
                return {
                    results: data.items,
                    pagination: {
                        more: (params.page * 30) < data.total_count
                    }
                };
            },
            cache: true
        },
        escapeMarkup: function (markup) {
            return markup;
        }, // let our custom formatter work
        minimumInputLength: 1,
        templateResult: formatRepo, // omitted for brevity, see the source of this page
        templateSelection: formatRepoSelection // omitted for brevity, see the source of this page
    });
});
</script>

{{-- <script src="/public/admin/plugins/tinymce/tinymce.min.js"></script>
<script>
$(document).ready(function() {
    if ($("#mymce").length > 0) {
        tinymce.init({
            selector: "textarea#mymce",
            theme: "modern",
            height: 300,
            plugins: [
                "advlist autolink link image lists charmap print preview hr anchor pagebreak spellchecker",
                "searchreplace wordcount visualblocks visualchars code fullscreen insertdatetime media nonbreaking",
                "save table contextmenu directionality emoticons template paste textcolor"
            ],
            toolbar: "insertfile undo redo | styleselect | bold italic | alignleft aligncenter alignright alignjustify | bullist numlist outdent indent | l      ink image | print preview media fullpage | forecolor backcolor emoticons",

        });
    }
});
</script> --}}

<script src="/public/ckeditor/ckeditor.js"></script>
<script src="/public/ckfinder/ckfinder.js"></script>
<script>
    CKEDITOR.replace('editor1', {
    filebrowserBrowseUrl: "/public/ckfinder/ckfinder.html",
    filebrowserUploadUrl: "/public/ckfinder/core/connector/php/connector.php?command=QuickUpload&type=Files"});
</script>
<script>
    $(document).ready(function () {
        // for old value
        $("#categoriesForm").show();
        let topCategoryId= $("#topCategories").val();
        if (topCategoryId== "0") {
            $("#categoriesForm").hide();
            $("#subCategoriesForm").hide();
        } else {
            $.get("/admin/ajax/category/"+topCategoryId,function(categories) {
                var data = '<option value="0">-- Select Category --</option>'+categories;
                $("#categories").html(data);
                $("#categories").val({{null!=old('category')?old('category'):'0'}});
            });
            $("#subCategoriesForm").show();
            let categoryId = '{{ old('category') }}';
            if (!categoryId||categoryId == "0") {
                $("#subCategoriesForm").hide();
            } else {
                $.get("/admin/ajax/category/"+categoryId,function(categories) {
                    var data = '<option value="0">-- Select Category --</option>'+categories;
                    $("#subCategories").html(data);
                    $("#subCategories").val({{null!=old('subCategory')?old('subCategory'):'0'}});
                });
            }
        }
        // for changed value
        $("#topCategories").change(function() {
            $("#categoriesForm").show()
            $("#subCategoriesForm").hide()
            $("#subCategories").val("0");
            let topCategoryId= $(this).val();
            if (topCategoryId== "0") {
                $("#categoriesForm").hide();
                $("#subCategoriesForm").hide();
            } else {
                    $.get("/admin/ajax/category/"+topCategoryId, function(categories) {
                    let data = '<option value="0">-- Select Category --</option>'+categories;
                    $("#categories").html(data);
                });
            }
        });
        $("#categories").change(function() {
            $("#subCategoriesForm").show()
            let categoryId= $(this).val();
            if (categoryId== "0") {
                $("#subCategoriesForm").hide();
            } else {
                    $.get("/admin/ajax/category/"+categoryId, function(categories) {
                    let data = '<option value="0">-- Select Category --</option>'+categories;
                    $("#subCategories").html(data);
                });
            }
        });
    });
</script>


@endsection