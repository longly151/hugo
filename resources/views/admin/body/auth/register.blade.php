@extends('admin.layouts.auth')
@section('content')
<div class="card-body">
    <form class="form-horizontal form-material" id="loginform" action="{{ url('admin/register') }}" method="POST">
        {{ csrf_field() }}
        <h3 class="box-title m-b-20">Sign Up</h3>
        <div class="form-group">
            <div class="col-xs-12">
                <input class="form-control" type="text" required="" placeholder="Full Name" name="fullname">
            </div>
        </div>
        <div class="form-group">
            <div class="col-xs-12">
                <input class="form-control" type="text" required="" placeholder="Username" name="username">
            </div>
        </div>
        <div class="form-group">
            <div class="col-xs-12">
                <input class="form-control" type="text" required="" placeholder="Email" name="email">
            </div>
        </div>
        <div class="form-group">
            <div class="col-xs-12">
                <input class="form-control" type="text" required="" placeholder="Phone Number" name="phoneNumber">
            </div>
        </div>
        <div class="form-group ">
            <div class="col-xs-12">
                <input class="form-control" type="password" required="" placeholder="Password" name="password">
            </div>
        </div>
        <div class="form-group">
            <div class="col-xs-12">
                <input class="form-control" type="password" required="" placeholder="Confirm Password" name="passwordConfirm">
            </div>
        </div>
        <div class="form-group row">
            <div class="col-md-12">
                <div class="checkbox checkbox-success">
                    <input id="checkbox-signup" type="checkbox">
                    <label for="checkbox-signup"> I agree to all <a href="#">Terms</a></label>
                </div>
            </div>
        </div>
        <div class="form-group text-center m-t-20">
            <div class="col-xs-12">
                <button class="btn btn-info btn-lg btn-block text-uppercase waves-effect waves-light" type="submit">Sign
                    Up</button>
            </div>
        </div>
        <div class="form-group m-b-0">
            <div class="col-sm-12 text-center">
                <div>Already have an account? <a href="{{ url('admin/login') }}" class="text-info m-l-5"><b>Sign In</b></a></div>
            </div>
        </div>
    </form>
</div>
@endsection