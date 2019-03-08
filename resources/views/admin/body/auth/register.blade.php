@extends('admin.layouts.auth')
@section('content')
<div class="card-body">
<form class="form-horizontal form-material" id="loginform" action="/admin/register" method="POST">
        {{ csrf_field() }}
        <h3 class="box-title m-b-20">Sign Up</h3>
        <div class="form-group">
            <div class="col-xs-12">
            <input class="form-control" type="text" placeholder="Full Name" name="fullname" value="{{ old('fullname') }}">
                @if($errors->has('fullname'))
                <small class="form-control-feedback text-danger">
                    {{$errors->first('fullname')}}
                </small>
                @endif
            </div>
        </div>
        <div class="form-group">
            <div class="col-xs-12">
                <input class="form-control" type="text" placeholder="Username" name="username" value="{{ old('username') }}">
                @if($errors->has('username'))
                <small class="form-control-feedback text-danger">
                    {{$errors->first('username')}}
                </small>
                @endif
            </div>
        </div>
        <div class="form-group">
            <div class="col-xs-12">
                <input class="form-control" type="text" placeholder="Email" name="email" value="{{ old('email') }}">
                @if($errors->has('email'))
                <small class="form-control-feedback text-danger">
                    {{$errors->first('email')}}
                </small>
                @endif
            </div>
        </div>
        <div class="form-group">
            <div class="col-xs-12">
                <input class="form-control" type="text" placeholder="Phone Number" name="phoneNumber" value="{{ old('phoneNumber') }}">
                @if($errors->has('phoneNumber'))
                <small class="form-control-feedback text-danger">
                    {{$errors->first('phoneNumber')}}
                </small>
                @endif
            </div>
        </div>
        <div class="form-group">
                <div class="col-xs-12">
                    <input class="form-control" type="text" placeholder="Address" name="address" value="{{ old('address') }}">
                    @if($errors->has('address'))
                    <small class="form-control-feedback text-danger">
                        {{$errors->first('address')}}
                    </small>
                    @endif
                </div>
            </div>
        <div class="form-group">
            <div class="col-xs-12">
                <input class="form-control" type="password" placeholder="Password" name="password">
                @if($errors->has('password'))
                <small class="form-control-feedback text-danger">
                    {{$errors->first('password')}}
                </small>
                @endif
            </div>
        </div>
        <div class="form-group">
            <div class="col-xs-12">
                <input class="form-control" type="password" placeholder="Confirm Password" name="rePassword">
                @if($errors->has('rePassword'))
                <small class="form-control-feedback text-danger">
                    {{$errors->first('rePassword')}}
                </small>
                @endif
            </div>
        </div>
        <div class="form-group row">
            <div class="col-md-12">
                <div class="checkbox checkbox-success">
                    <input id="checkbox-signup" type="checkbox">
                    <label for="checkbox-signup"> I agree to all <a href="javascript:void(0);">Terms</a></label>
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
                <div>Already have an account? <a href="/admin/login" class="text-info m-l-5"><b>Sign In</b></a></div>
            </div>
        </div>
    </form>
</div>
@endsection