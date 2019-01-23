@extends('admin.layouts.auth')
@section('content')
<div class="card-body">
    <form class="form-horizontal form-material" id="loginform" action="{{ url('admin/login') }}" method="POST">
        {{ csrf_field() }}
        <h3 class="box-title m-b-20">Sign In</h3>
        @if (count($errors)>0)
        @foreach ($errors as $error)
        <div class="alert alert-danger" role="alert">
            {{ $error }}
        </div>
        @endforeach
        @endif
        <div class="form-group ">
            <div class="col-xs-12">
                <input class="form-control" type="text" required="" placeholder="Username" name="username"> </div>
        </div>
        <div class="form-group">
            <div class="col-xs-12">
                <input class="form-control" type="password" required="" placeholder="Password" name="password"> </div>
        </div>
        <div class="form-group row">
            <div class="col-md-12 font-14">
                <div class="checkbox checkbox-primary pull-left p-t-0">
                    <input id="checkbox-signup" type="checkbox">
                    <label for="checkbox-signup"> Remember me </label>
                </div> <a href="javascript:void(0)" id="to-recover" class="text-dark pull-right">
                    <!-- <i class="fa fa-lock m-r-5"></i> --> Forgot pwd?</a>
            </div>
        </div>
        <div class="form-group text-center m-t-20">
            <div class="col-xs-12">
                <button class="btn btn-info btn-lg btn-block text-uppercase waves-effect waves-light" type="submit">Log
                    In</button>
            </div>
        </div>
        <div class="row">
            <div class="col-xs-12 col-sm-12 col-md-12 m-t-10 text-center">
                <div class="social">
                    <a href="javascript:void(0)" class="btn  btn-facebook" data-toggle="tooltip" title="Login with Facebook">
                        <i aria-hidden="true" class="fab fa-facebook-f"></i> </a>
                    <a href="javascript:void(0)" class="btn btn-googleplus" data-toggle="tooltip" title="Login with Google">
                        <i aria-hidden="true" class="fab fa-google-plus-g"></i> </a>
                </div>
            </div>
        </div>
        <div class="form-group m-b-0">
            <div class="col-sm-12 text-center">
                <div>Don't have an account? <a href="{{ url('admin/register') }}" class="text-info m-l-5"><b>Sign Up</b></a></div>
            </div>
        </div>
    </form>
    <form class="form-horizontal" id="recoverform" action="index.html">
        <div class="form-group ">
            <div class="col-xs-12">
                <h3>Recover Password</h3>
                <p class="text-muted">Enter your Email and instructions will be sent to you! </p>
            </div>
        </div>
        <div class="form-group ">
            <div class="col-xs-12">
                <input class="form-control" type="text" required="" placeholder="Email"> </div>
        </div>
        <div class="form-group text-center m-t-20">
            <div class="col-xs-12">
                <button class="btn btn-primary btn-lg btn-block text-uppercase waves-effect waves-light" type="submit">Reset</button>
            </div>
        </div>
    </form>
</div>
@endsection
