@extends('admin.layouts.main')
@section('pageStylesheet')
    <style>
        #map {
            height: 150px;
        }
    </style>
@endsection
@section('content')
<div class="row page-titles">
    <div class="col-md-5 align-self-center">
        <h3 class="text-themecolor">Profile</h3>
    </div>
    <div class="col-md-7 align-self-center">
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="javascript:void(0)">Home</a></li>
            <li class="breadcrumb-item">pages</li>
            <li class="breadcrumb-item active">Profile</li>
        </ol>
    </div>
    <div>
        <button class="right-side-toggle waves-effect waves-light btn-inverse btn btn-circle btn-sm pull-right m-l-10"><i
                class="ti-settings text-white"></i></button>
    </div>
</div>

<div class="container-fluid">
    <div class="row">
        <div class="col-lg-4 col-xlg-3 col-md-5">
            <div class="card">
                <div class="card-body">
                    <p class="m-t-30" style="text-align: center"><img src="{{ $user->avatar }}" class="img-circle"
                            width="150" />
                        <h4 class="card-title m-t-10">{{ $user->fullname }}</h4>
                        <h6 class="card-subtitle text-uppercase small">{{ $user->role->name }}</h6>
                        <div class="row text-center justify-content-md-center">
                            <div class="col-4"><a href="javascript:void(0)" class="link"><i class="icon-people"></i>
                                    <p class="font-medium">254</p>
                                </a></div>
                            <div class="col-4"><a href="javascript:void(0)" class="link"><i class="icon-picture"></i>
                                    <p class="font-medium">54</p>
                                </a></div>
                        </div>
                    </p>
                </div>
                <div>
                    <hr>
                </div>
                <div class="card-body"> <small class="text-muted">Email</small>
                    <h6>{{ $user->email }}</h6> <small class="text-muted p-t-30 db">Phone Number</small>
                    <h6>{{ $user->phoneNumber }}</h6> <small class="text-muted p-t-30 db">Address</small>
                    <h6>{{ $user->address }}</h6>
                    <div id="map"></div>
                    <small class="text-muted p-t-30 db">Social Profile</small>
                    <br />
                    <button class="btn btn-circle btn-secondary"><i class="fab fa-facebook-f"></i></button>
                    <button class="btn btn-circle btn-secondary"><i class="fab fa-twitter"></i></button>
                    <button class="btn btn-circle btn-secondary"><i class="fab fa-youtube"></i></button>
                </div>
            </div>
        </div>
        <!-- Column -->
        <!-- Column -->
        <div class="col-lg-8 col-xlg-9 col-md-7">
            <div class="card">
                <!-- Nav tabs -->
                <ul class="nav nav-tabs profile-tab" role="tablist">
                    <li class="nav-item"> <a class="nav-link active" data-toggle="tab" href="#profile" role="tab">Profile</a>
                    </li>
                </ul>
                @if(session('success'))
                <div class="alert alert-success" role="alert">
                    {{session('success')}}
                </div>
                @endif
                <!-- Tab panes -->
                <div class="tab-content">
                    <!--second tab-->
                    <div class="tab-pane active" id="profile" role="tabpanel">
                        <div class="card-body">
                            <div class="row">
                                <div class="col-md-3 col-xs-6 b-r"> <strong>Full Name</strong>
                                    <br>
                                    <p class="text-muted">{{ $user->fullname }}</p>
                                </div>
                                <div class="col-md-3 col-xs-6 b-r"> <strong>Mobile</strong>
                                    <br>
                                    <p class="text-muted">{{ $user->phoneNumber }}</p>
                                </div>
                                <div class="col-md-3 col-xs-6 b-r"> <strong>Email</strong>
                                    <br>
                                    <p class="text-muted">{{ $user->email }}</p>
                                </div>
                                <div class="col-md-3 col-xs-6"> <strong>Address</strong>
                                    <br>
                                    <p class="text-muted">{{ $user->address }}</p>
                                </div>
                            </div>
                            <hr>
                            {!! $user->description !!}
                            <h4 class="font-medium m-t-30">Skill Set</h4>
                            <hr>
                            <h5 class="m-t-30">Wordpress <span class="pull-right">80%</span></h5>
                            <div class="progress">
                                <div class="progress-bar bg-success" role="progressbar" aria-valuenow="80"
                                    aria-valuemin="0" aria-valuemax="100" style="width:80%; height:6px;"> <span class="sr-only">50%
                                        Complete</span> </div>
                            </div>
                            <h5 class="m-t-30">HTML 5 <span class="pull-right">90%</span></h5>
                            <div class="progress">
                                <div class="progress-bar bg-info" role="progressbar" aria-valuenow="90" aria-valuemin="0"
                                    aria-valuemax="100" style="width:90%; height:6px;"> <span class="sr-only">50%
                                        Complete</span> </div>
                            </div>
                            <h5 class="m-t-30">jQuery <span class="pull-right">50%</span></h5>
                            <div class="progress">
                                <div class="progress-bar bg-danger" role="progressbar" aria-valuenow="50" aria-valuemin="0"
                                    aria-valuemax="100" style="width:50%; height:6px;"> <span class="sr-only">50%
                                        Complete</span> </div>
                            </div>
                            <h5 class="m-t-30">Photoshop <span class="pull-right">70%</span></h5>
                            <div class="progress">
                                <div class="progress-bar bg-warning" role="progressbar" aria-valuenow="70"
                                    aria-valuemin="0" aria-valuemax="100" style="width:70%; height:6px;"> <span class="sr-only">50%
                                        Complete</span> </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Column -->
    </div>
    <!-- Row -->
    <!-- ============================================================== -->
    <!-- End PAge Content -->
    <!-- ============================================================== -->
</div>
@endsection

@section('pageScript')
<script>
    async function initMap (){
        var address = "{{ $user->address }}";
        try {
            let data = await $.ajax({
                type: "get",
                url: "https://maps.googleapis.com/maps/api/geocode/json?address="+address+"&key="+"{{env('MAP_API','')}}",
                dataType: "json",
                success: function (response) {
                    return response;
                }
            });
            var coordinate = await data.results[0].geometry.location;
            var map = new google.maps.Map(document.getElementById('map'), {
                    center: coordinate,
                    zoom: 15
                });

                // Create a marker and set its position.
                var marker = new google.maps.Marker({
                    map: map,
                    position: coordinate,
                    title: 'Your address'
                });
        } catch (error) {
            throw error;
        }
    }
  </script>
  
<script src="{{ "https://maps.googleapis.com/maps/api/js?key=".env('MAP_API','')."&callback=initMap"}}" async defer></script></script>
@endsection