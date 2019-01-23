@extends('admin.layouts.main')
@section('content')
<div class="row page-titles">
    <div class="col-md-5 align-self-center">
        <h3 class="text-themecolor">Add Category</h3>
    </div>
    <div class="col-md-7 align-self-center">
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="javascript:void(0)">Home</a></li>
            <li class="breadcrumb-item">Forms</li>
            <li class="breadcrumb-item active">Add Category</li>
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
                <form class="form-horizontal m-t-40">
                    <div class="form-group">
                        <label for="title">Name</label>
                        <input type="text" class="form-control" name="title" placeholder="Title" value="">
                    </div>
                    <div class="form-group">
                        <fieldset disabled>
                            <label for="disabledTextInput">Disabled input</label>
                            <input type="text" id="disabledTextInput" class="form-control" placeholder="Viet Long Le">
                        </fieldset>
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
<script src="plugins/switchery/dist/switchery.min.js"></script>
<script src="plugins/select2/dist/js/select2.full.min.js" type="text/javascript"></script>
<script src="plugins/bootstrap-select/bootstrap-select.min.js" type="text/javascript"></script>
<script src="plugins/bootstrap-tagsinput/dist/bootstrap-tagsinput.min.js"></script>
<script src="plugins/bootstrap-touchspin/dist/jquery.bootstrap-touchspin.js" type="text/javascript"></script>
<script src="plugins/dff/dff.js" type="text/javascript"></script>
<script type="text/javascript" src="plugins/multiselect/js/jquery.multi-select.js"></script>
@endsection
