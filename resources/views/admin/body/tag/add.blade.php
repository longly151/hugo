@extends('admin.layouts.main')
@section('content')
<div class="row page-titles">
    <div class="col-md-5 align-self-center">
        <h3 class="text-themecolor">Add Tag</h3>
    </div>
    <div class="col-md-7 align-self-center">
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="javascript:void(0)">Home</a></li>
            <li class="breadcrumb-item">Forms</li>
            <li class="breadcrumb-item active">Add Tag</li>
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
                <h4 class="card-title">Tag Info</h4>
                @if(session('success'))
                <div class="alert alert-success" role="alert">
                    {{session('success')}}
                </div>
                @endif
                <form class="form-horizontal m-t-40" ation="/admin/tag/add" method="post">
                {{ csrf_field() }}
                <div class="form-group">
                    <label for="title">Name</label>
                    <input type="text" class="form-control" name="name" placeholder="Tag Name" value="{{ old('name') }}">
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
@endsection
