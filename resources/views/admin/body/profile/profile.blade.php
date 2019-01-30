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
                    <p class="m-t-30" style="text-align: center"><img src="{{ session()->get('admin')['avatar'] }}" class="img-circle"
                            width="150" />
                        <h4 class="card-title m-t-10">{{ session()->get('admin')['fullname'] }}</h4>
                        <h6 class="card-subtitle text-uppercase small">{{ session()->get('admin')['role'] }}</h6>
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
                    <h6>{{ session()->get('admin')['email'] }}</h6> <small class="text-muted p-t-30 db">Phone Number</small>
                    <h6>{{ session()->get('admin')['phoneNumber'] }}</h6> <small class="text-muted p-t-30 db">Address</small>
                    <h6>{{ session()->get('admin')['address'] }}</h6>
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
                    <li class="nav-item"> <a class="nav-link @if(!session('active')&&!session('errors')) active @endif" data-toggle="tab" href="#home" role="tab">Timeline</a>
                    </li>
                    <li class="nav-item"> <a class="nav-link @if(session('active')=='profile') active @endif" data-toggle="tab" href="#profile" role="tab">Profile</a>
                    </li>
                    <li class="nav-item"> <a class="nav-link @if(session('active')=='changeInfo'||$errors->has('email')||$errors->has('phoneNumber')||$errors->has('address')||$errors->has('description'))
                        active @endif" data-toggle="tab" href="#change-info" role="tab">Change Info</a>
                    </li>
                    <li class="nav-item"> <a class="nav-link @if(session('active')=='changePassword'||$errors->has('oldPassword')||$errors->has('password')||$errors->has('rePassword'))
                        active @endif" data-toggle="tab" href="#change-password" role="tab">Change Password</a>
                    </li>
                </ul>
                @if(session('success'))
                <div class="alert alert-success" role="alert">
                    {{session('success')}}
                </div>
                @endif
                <!-- Tab panes -->
                <div class="tab-content">
                    <div class="tab-pane @if(!session('active')&&!session('errors')) active @endif" id="home" role="tabpanel">
                        <div class="card-body">
                            <div class="profiletimeline">
                                <div class="sl-item">
                                    <div class="sl-left"> <img src="images/users/1.jpg" alt="user" class="img-circle" />
                                    </div>
                                    <div class="sl-right">
                                        <div><a href="#" class="link">John Doe</a> <span class="sl-date">5 minutes ago</span>
                                            <p>assign a new task <a href="#"> Design weblayout</a></p>
                                            <div class="row">
                                                <div class="col-lg-3 col-md-6 m-b-20"><img src="images/big/img1.jpg"
                                                        class="img-responsive radius" /></div>
                                                <div class="col-lg-3 col-md-6 m-b-20"><img src="images/big/img2.jpg"
                                                        class="img-responsive radius" /></div>
                                                <div class="col-lg-3 col-md-6 m-b-20"><img src="images/big/img3.jpg"
                                                        class="img-responsive radius" /></div>
                                                <div class="col-lg-3 col-md-6 m-b-20"><img src="images/big/img4.jpg"
                                                        class="img-responsive radius" /></div>
                                            </div>
                                            <div class="like-comm"> <a href="javascript:void(0)" class="link m-r-10">2
                                                    comment</a> <a href="javascript:void(0)" class="link m-r-10"><i
                                                        class="fa fa-heart text-danger"></i> 5 Love</a> </div>
                                        </div>
                                    </div>
                                </div>
                                <hr>
                                <div class="sl-item">
                                    <div class="sl-left"> <img src="images/users/2.jpg" alt="user" class="img-circle" />
                                    </div>
                                    <div class="sl-right">
                                        <div> <a href="#" class="link">John Doe</a> <span class="sl-date">5 minutes ago</span>
                                            <div class="m-t-20 row">
                                                <div class="col-md-3 col-xs-12"><img src="images/big/img1.jpg"
                                                        alt="user" class="img-responsive radius" /></div>
                                                <div class="col-md-9 col-xs-12">
                                                    <p> Lorem ipsum dolor sit amet, consectetur adipiscing elit.
                                                        Integer nec odio. Praesent libero. Sed cursus ante dapibus
                                                        diam. </p> <a href="#" class="btn btn-success"> Design
                                                        weblayout</a>
                                                </div>
                                            </div>
                                            <div class="like-comm m-t-20"> <a href="javascript:void(0)" class="link m-r-10">2
                                                    comment</a> <a href="javascript:void(0)" class="link m-r-10"><i
                                                        class="fa fa-heart text-danger"></i> 5 Love</a> </div>
                                        </div>
                                    </div>
                                </div>
                                <hr>
                                <div class="sl-item">
                                    <div class="sl-left"> <img src="images/users/3.jpg" alt="user" class="img-circle" />
                                    </div>
                                    <div class="sl-right">
                                        <div><a href="#" class="link">John Doe</a> <span class="sl-date">5 minutes ago</span>
                                            <p class="m-t-10"> Lorem ipsum dolor sit amet, consectetur adipiscing elit.
                                                Integer nec odio. Praesent libero. Sed cursus ante dapibus diam. Sed
                                                nisi. Nulla quis sem at nibh elementum imperdiet. Duis sagittis ipsum.
                                                Praesent mauris. Fusce nec tellus sed augue semper </p>
                                        </div>
                                        <div class="like-comm m-t-20"> <a href="javascript:void(0)" class="link m-r-10">2
                                                comment</a> <a href="javascript:void(0)" class="link m-r-10"><i class="fa fa-heart text-danger"></i>
                                                5 Love</a> </div>
                                    </div>
                                </div>
                                <hr>
                                <div class="sl-item">
                                    <div class="sl-left"> <img src="images/users/4.jpg" alt="user" class="img-circle" />
                                    </div>
                                    <div class="sl-right">
                                        <div><a href="#" class="link">John Doe</a> <span class="sl-date">5 minutes ago</span>
                                            <blockquote class="m-t-10">
                                                Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do
                                                eiusmod tempor incididunt
                                            </blockquote>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!--second tab-->
                    <div class="tab-pane @if(session('active')=='profile') active @endif" id="profile" role="tabpanel">
                        <div class="card-body">
                            <div class="row">
                                <div class="col-md-3 col-xs-6 b-r"> <strong>Full Name</strong>
                                    <br>
                                    <p class="text-muted">{{ session()->get('admin')['fullname'] }}</p>
                                </div>
                                <div class="col-md-3 col-xs-6 b-r"> <strong>Mobile</strong>
                                    <br>
                                    <p class="text-muted">{{ session()->get('admin')['phoneNumber'] }}</p>
                                </div>
                                <div class="col-md-3 col-xs-6 b-r"> <strong>Email</strong>
                                    <br>
                                    <p class="text-muted">{{ session()->get('admin')['email'] }}</p>
                                </div>
                                <div class="col-md-3 col-xs-6"> <strong>Address</strong>
                                    <br>
                                    <p class="text-muted">{{ session()->get('admin')['address'] }}</p>
                                </div>
                            </div>
                            <hr>
                            {!! session()->get('admin')['description'] !!}
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
                    <div class="tab-pane @if(session('active')=='changeInfo'||$errors->has('email')||$errors->has('phoneNumber')||$errors->has('address')||$errors->has('description'))
                        active @endif" id="change-info" role="tabpanel">
                        <div class="card-body">
                            <form action="{{ url('admin/profile/change-info') }}" method="post" class="form-horizontal form-material">
                                {{ csrf_field() }}
                                <div class="form-group">
                                    <label for="email" class="col-md-12">Email</label>
                                        <div class="col-md-12">
                                        <input type="text" value="{{ session()->get('admin')['email']}}" class="form-control form-control-line"
                                            name="email" id="email">
                                        @if($errors->has('email'))
                                        <small class="form-control-feedback text-danger">
                                            {{$errors->first('email')}}
                                        </small>
                                        @endif
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="phoneNumber" class="col-md-12">Phone Number</label>
                                    <div class="col-md-12">
                                        <input type="text" value="{{ session()->get('admin')['phoneNumber']}}" class="form-control form-control-line"
                                            name="phoneNumber" id="phoneNumber">
                                        @if($errors->has('phoneNumber'))
                                        <small class="form-control-feedback text-danger">
                                            {{$errors->first('phoneNumber')}}
                                        </small>
                                        @endif
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="address" class="col-md-12">Address</label>
                                    <div class="col-md-12">
                                        <input type="text" value="{{ session()->get('admin')['address']}}" class="form-control form-control-line"
                                            name="address" id="address">
                                        @if($errors->has('address'))
                                        <small class="form-control-feedback text-danger">
                                            {{$errors->first('address')}}
                                        </small>
                                        @endif
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="description" class="col-md-12">Description</label>
                                    <div class="col-md-12">
                                        <textarea rows="5" class="form-control form-control-line"
                                    name="description" id="description">{{session()->get('admin')['description']}}</textarea>
                                        @if($errors->has('description'))
                                        <small class="form-control-feedback text-danger">
                                            {{$errors->first('description')}}
                                        </small>
                                        @endif
                                    </div>
                                </div>
                                {{-- <div class="form-group">
                                    <label class="col-sm-12">Select Country</label>
                                    <div class="col-sm-12">
                                        <select class="form-control form-control-line">
                                            <option>London</option>
                                            <option>India</option>
                                            <option>Usa</option>
                                            <option>Canada</option>
                                            <option>Thailand</option>
                                        </select>
                                    </div>
                                </div> --}}
                                <div class="form-group">
                                    <div class="col-sm-12">
                                        <button class="btn btn-success">Update Profile</button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                    <div class="tab-pane @if(session('active')=='changePassword'||$errors->has('oldPassword')||$errors->has('password')||$errors->has('rePassword'))
                    active @endif" id="change-password" role="tabpanel">
                        <div class="card-body">
                            <form action="{{ url('admin/profile/change-password') }}" method="post" class="form-horizontal form-material">
                                {{ csrf_field() }}
                                <div class="form-group">
                                    <label for="oldPassword" class="col-md-12">Old Password</label>
                                    <div class="col-md-12">
                                        <input type="password" class="form-control form-control-line" placeholder="•••••••••••••"
                                        name="oldPassword" id="oldPassword">
                                        @if($errors->has('oldPassword'))
                                        <small class="form-control-feedback text-danger">
                                            {{$errors->first('oldPassword')}}
                                        </small>
                                        @endif
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="password" class="col-md-12">New Password</label>
                                    <div class="col-md-12">
                                        <input type="password" class="form-control form-control-line" placeholder="•••••••••••••"
                                        name="password" id="password">
                                        @if($errors->has('password'))
                                        <small class="form-control-feedback text-danger">
                                            {{$errors->first('password')}}
                                        </small>
                                        @endif
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="rePassword" class="col-md-12">Confirm Password</label>
                                    <div class="col-md-12">
                                        <input type="password" class="form-control form-control-line" placeholder="•••••••••••••"
                                        name="rePassword" id="rePassword">
                                        @if($errors->has('rePassword'))
                                        <small class="form-control-feedback text-danger">
                                            {{$errors->first('rePassword')}}
                                        </small>
                                        @endif
                                    </div>
                                </div>
                                <div class="form-group">
                                    <div class="col-sm-12">
                                        <button class="btn btn-success">Change Password</button>
                                    </div>
                                </div>
                            </form>
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
    <!-- ============================================================== -->
    <!-- Right sidebar -->
    <!-- ============================================================== -->
    <!-- .right-sidebar -->
    <div class="right-sidebar">
        <div class="slimscrollright">
            <div class="rpanel-title"> Service Panel <span><i class="ti-close right-side-toggle"></i></span> </div>
            <div class="r-panel-body">
                <ul id="themecolors" class="m-t-20">
                    <li><b>With Light sidebar</b></li>
                    <li><a href="javascript:void(0)" data-theme="default" class="default-theme">1</a></li>
                    <li><a href="javascript:void(0)" data-theme="green" class="green-theme">2</a></li>
                    <li><a href="javascript:void(0)" data-theme="red" class="red-theme">3</a></li>
                    <li><a href="javascript:void(0)" data-theme="blue" class="blue-theme">4</a></li>
                    <li><a href="javascript:void(0)" data-theme="purple" class="purple-theme">5</a></li>
                    <li><a href="javascript:void(0)" data-theme="megna" class="megna-theme">6</a></li>
                    <li class="d-block m-t-30"><b>With Dark sidebar</b></li>
                    <li><a href="javascript:void(0)" data-theme="default-dark" class="default-dark-theme">7</a></li>
                    <li><a href="javascript:void(0)" data-theme="green-dark" class="green-dark-theme">8</a></li>
                    <li><a href="javascript:void(0)" data-theme="red-dark" class="red-dark-theme">9</a></li>
                    <li><a href="javascript:void(0)" data-theme="blue-dark" class="blue-dark-theme working">10</a></li>
                    <li><a href="javascript:void(0)" data-theme="purple-dark" class="purple-dark-theme">11</a></li>
                    <li><a href="javascript:void(0)" data-theme="megna-dark" class="megna-dark-theme">12</a></li>
                </ul>
                <ul class="m-t-20 chatonline">
                    <li><b>Chat option</b></li>
                    <li>
                        <a href="javascript:void(0)"><img src="images/users/1.jpg" alt="user-img" class="img-circle">
                            <span>Varun Dhavan <small class="text-success">online</small></span></a>
                    </li>
                    <li>
                        <a href="javascript:void(0)"><img src="images/users/2.jpg" alt="user-img" class="img-circle">
                            <span>Genelia Deshmukh <small class="text-warning">Away</small></span></a>
                    </li>
                    <li>
                        <a href="javascript:void(0)"><img src="images/users/3.jpg" alt="user-img" class="img-circle">
                            <span>Ritesh Deshmukh <small class="text-danger">Busy</small></span></a>
                    </li>
                    <li>
                        <a href="javascript:void(0)"><img src="images/users/4.jpg" alt="user-img" class="img-circle">
                            <span>Arijit Sinh <small class="text-muted">Offline</small></span></a>
                    </li>
                    <li>
                        <a href="javascript:void(0)"><img src="images/users/5.jpg" alt="user-img" class="img-circle">
                            <span>Govinda Star <small class="text-success">online</small></span></a>
                    </li>
                    <li>
                        <a href="javascript:void(0)"><img src="images/users/6.jpg" alt="user-img" class="img-circle">
                            <span>John Abraham<small class="text-success">online</small></span></a>
                    </li>
                    <li>
                        <a href="javascript:void(0)"><img src="images/users/7.jpg" alt="user-img" class="img-circle">
                            <span>Hritik Roshan<small class="text-success">online</small></span></a>
                    </li>
                    <li>
                        <a href="javascript:void(0)"><img src="images/users/8.jpg" alt="user-img" class="img-circle">
                            <span>Pwandeep rajan <small class="text-success">online</small></span></a>
                    </li>
                </ul>
            </div>
        </div>
    </div>
</div>
@endsection

@section('pageScript')
<script>
    async function initMap (){
        var address = "{{ session()->get('admin')['address'] }}";
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