@extends('admin.layouts.main')
@section('content')
<div class="row page-titles">
    <div class="col-md-5 align-self-center">
        <h3 class="text-themecolor">User List</h3>
    </div>
    <div class="col-md-7 align-self-center">
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="javascript:void(0)">Home</a></li>
            <li class="breadcrumb-item">pages</li>
            <li class="breadcrumb-item active">Gallery</li>
        </ol>
    </div>
    <div>
        <button class="right-side-toggle waves-effect waves-light btn-inverse btn btn-circle btn-sm pull-right m-l-10"><i class="ti-settings text-white"></i></button>
    </div>
</div>
<!-- ============================================================== -->
<!-- End Bread crumb and right sidebar toggle -->
<!-- ============================================================== -->
<!-- ============================================================== -->
<!-- Container fluid  -->
<!-- ============================================================== -->
<div class="container-fluid">
    <!-- ============================================================== -->
    <!-- Start Page Content -->
    <!-- ============================================================== -->
    <div class="row el-element-overlay">
        <div class="col-md-12">
            <h4 class="card-title">User List</h4>
            {{-- <h6 class="card-subtitle m-b-20 text-muted">you can make gallery like this</h6> --}}
        </div>
        
        @foreach ($users as $user)
        <div class="col-lg-3 col-md-6">
            <div class="card">
                <div class="el-card-item">
                <div class="el-card-avatar el-overlay-1"> <img src="{{$user->avatar}}" alt="user" />
                        <div class="el-overlay">
                            <ul class="el-info">
                                <li><a class="btn default btn-outline image-popup-vertical-fit" href="/admin/user/view/{{$user->id}}"><i class="icon-user"></i></a></li>
                                {{-- <li><a class="btn default btn-outline" href="javascript:void(0);"><i class="icon-link"></i></a></li> --}}
                            </ul>
                        </div>
                    </div>
                    <div class="el-card-content">
                        <h3 class="box-title">{{$user->fullname}}</h3>
                        @if ($user->role['name'] == 'admin')
                        <small class="font-weight-bold h5 text-primary text-uppercase">{{$user->role['name']}}</small>
                        @elseif ($user->role['name'] == 'moderator')
                        <small class="h6 text-warning text-uppercase">{{$user->role['name']}}</small>
                        @elseif ($user->role['name'] == 'poster')
                        <small class="h6 text-success text-uppercase">{{$user->role['name']}}</small>
                        @elseif ($user->role['name'] == 'customer')
                        <small class="text-uppercase">{{$user->role['name']}}</small>
                        @endif
                        <br/> </div>
                </div>
            </div>
        </div>
        @endforeach
    </div>
</div>
@endsection