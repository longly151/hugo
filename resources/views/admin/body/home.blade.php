@extends('admin.layouts.main')
@section('content')

<div class="row page-titles">
    <div class="col-md-5 align-self-center">
        <h3 class="text-themecolor">Dashboard</h3>
    </div>
    <div class="col-md-7 align-self-center">
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="javascript:void(0)">Home</a></li>
            <li class="breadcrumb-item active">Dashboard</li>
        </ol>
    </div>
    <div>
        <button class="right-side-toggle waves-effect waves-light btn-inverse btn btn-circle btn-sm pull-right m-l-10"><i
                class="ti-settings text-white"></i></button>
    </div>
</div>

<div class="container-fluid">
    <!-- ============================================================== -->
    <!-- Start Page Content -->
    <!-- ============================================================== -->
    <!-- Row -->
    <!-- Row -->
    <div class="row">
        <div class="col-lg-12">
            @if (session('loginSuccess'))
            <div class="alert alert-success" role="alert">
                {{ session('loginSuccess') }}
            </div>
            @endif
        </div>
    </div>
    <!-- Row -->
    <!-- Row -->
    <div class="row">
        <div class="col-lg-9 col-xlg-9">
            <div class="card">
                <div class="card-body">
                    <div class="d-flex flex-wrap">
                        <div>
                            <h4 class="card-title">Analytics Overview</h4>
                            <h6 class="card-subtitle">Overview of Monthly analytics</h6>
                        </div>
                        <div class="ml-auto align-self-center">
                            <ul class="list-inline m-b-0">
                                <li>
                                    <h6 class="text-muted text-success"><i class="fa fa-circle font-10 m-r-10 "></i>Site
                                        A</h6>
                                </li>
                                <li>
                                    <h6 class="text-muted text-info"><i class="fa fa-circle font-10 m-r-10"></i>Site B</h6>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class="campaign ct-charts" style="height:305px!important;"></div>
                </div>
            </div>
        </div>
        <div class="col-lg-3">
            <div class="card">
                <div class="card-body">
                    <h4 class="card-title">Total Visit</h4>
                    <div class="d-flex">
                        <div class="align-self-center">
                            <h4 class="font-medium m-b-0"><i class="ti-angle-up text-success"></i> 12456</h4>
                        </div>
                        <div class="ml-auto">
                            <div id="spark8"></div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="card">
                <div class="card-body">
                    <h4 class="card-title">Bounce rate</h4>
                    <div class="d-flex">
                        <div class="align-self-center">
                            <h4 class="font-medium m-b-0"><i class="ti-angle-down text-danger"></i> 456</h4>
                        </div>
                        <div class="ml-auto">
                            <div id="spark9"></div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="card">
                <div class="card-body">
                    <h4 class="card-title">Page Views</h4>
                    <div class="d-flex">
                        <div class="align-self-center">
                            <h4 class="font-medium m-b-0"><i class="ti-angle-up text-success"></i> 2456</h4>
                        </div>
                        <div class="ml-auto">
                            <div id="spark10"></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Row -->
    <!-- Row -->
    <div class="row">
        <div class="col-lg-12">
            <div class="card">
                <div class="card-body">
                    <div class="d-flex no-block">
                        <h4 class="card-title">Visit From Countries</h4>
                        <div class="ml-auto">
                            <select class="custom-select">
                                <option selected="">January</option>
                                <option value="1">February</option>
                                <option value="2">March</option>
                                <option value="3">April</option>
                            </select>
                        </div>
                    </div>
                    <div class="table-responsive m-t-20">
                        <table class="table nowrap stylish-table">
                            <thead>
                                <tr>
                                    <th>Language</th>
                                    <th>Vists</th>
                                    <th>%</th>
                                    <th> </th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>
                                        <i class="flag-icon flag-icon-us"></i>
                                        <span class="country-name">U.S.A</span>
                                    </td>
                                    <td>18,224</td>
                                    <td>
                                        <div class="progress">
                                            <div class="progress-bar bg-danger " role="progressbar" aria-valuenow="50"
                                                aria-valuemin="0" aria-valuemax="100" style="width:50%; height:6px;">
                                                <span class="sr-only">50% Complete</span></div>
                                        </div>
                                    </td>
                                    <td>50%</td>
                                </tr>
                                <tr>
                                    <td>
                                        <i class="flag-icon flag-icon-gb"></i>
                                        <span class="country-name">U.K</span>
                                    </td>
                                    <td>12,347</td>
                                    <td>
                                        <div class="progress">
                                            <div class="progress-bar bg-success " role="progressbar" aria-valuenow="50"
                                                aria-valuemin="0" aria-valuemax="100" style="width:60%; height:6px;">
                                                <span class="sr-only">50% Complete</span></div>
                                        </div>
                                    </td>
                                    <td>60%</td>
                                </tr>
                                <tr>
                                    <td>
                                        <i class="flag-icon flag-icon-ca"></i>
                                        <span class="country-name">Canada</span>
                                    </td>
                                    <td>11,868</td>
                                    <td>
                                        <div class="progress">
                                            <div class="progress-bar bg-info" role="progressbar" aria-valuenow="50"
                                                aria-valuemin="0" aria-valuemax="100" style="width:70%; height:6px;">
                                                <span class="sr-only">50% Complete</span></div>
                                        </div>
                                    </td>
                                    <td>50%</td>
                                </tr>
                                <tr>
                                    <td>
                                        <i class="flag-icon flag-icon-de"></i>
                                        <span class="country-name">Germany</span>
                                    </td>
                                    <td>10,346</td>
                                    <td>
                                        <div class="progress">
                                            <div class="progress-bar bg-warning" role="progressbar" aria-valuenow="50"
                                                aria-valuemin="0" aria-valuemax="100" style="width:50%; height:6px;">
                                                <span class="sr-only">50% Complete</span></div>
                                        </div>
                                    </td>
                                    <td>50%</td>
                                </tr>
                                <tr>
                                    <td>
                                        <i class="flag-icon flag-icon-in"></i>
                                        <span class="country-name">India</span>
                                    </td>
                                    <td>8,354</td>
                                    <td>
                                        <div class="progress">
                                            <div class="progress-bar bg-inverse" role="progressbar" aria-valuenow="50"
                                                aria-valuemin="0" aria-valuemax="100" style="width:80%; height:6px;">
                                                <span class="sr-only">50% Complete</span></div>
                                        </div>
                                    </td>
                                    <td>80%</td>
                                </tr>
                                <tr>
                                    <td>
                                        <i class="flag-icon flag-icon-au"></i>
                                        <span class="country-name">Australia</span>
                                    </td>
                                    <td>7,675</td>
                                    <td>
                                        <div class="progress">
                                            <div class="progress-bar bg-danger " role="progressbar" aria-valuenow="50"
                                                aria-valuemin="0" aria-valuemax="100" style="width:50%; height:6px;">
                                                <span class="sr-only">50% Complete</span></div>
                                        </div>
                                    </td>
                                    <td>50%</td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Row -->
    <!-- Row -->
    <div class="row">
        <div class="col-lg-4 col-xlg-3">
            <div class="card">
                <div class="card-body">
                    <h4 class="card-title">Browser Stats</h4>
                    <table class="table browser m-t-30 no-border">
                        <tbody>
                            <tr>
                                <td style="width:40px"><img src="/public/admin/images/browser/chrome-logo.png" alt=logo /></td>
                                <td>Google Chrome</td>
                                <td class="text-right"><span class="label label-light-info">23%</span></td>
                            </tr>
                            <tr>
                                <td><img src="/public/admin/images/browser/firefox-logo.png" alt=logo /></td>
                                <td>Mozila Firefox</td>
                                <td class="text-right"><span class="label label-light-success">15%</span></td>
                            </tr>
                            <tr>
                                <td><img src="/public/admin/images/browser/safari-logo.png" alt=logo /></td>
                                <td>Apple Safari</td>
                                <td class="text-right"><span class="label label-light-primary">07%</span></td>
                            </tr>
                            <tr>
                                <td><img src="/public/admin/images/browser/internet-logo.png" alt=logo /></td>
                                <td>Internet Explorer</td>
                                <td class="text-right"><span class="label label-light-warning">09%</span></td>
                            </tr>
                            <tr>
                                <td><img src="/public/admin/images/browser/opera-logo.png" alt=logo /></td>
                                <td>Opera mini</td>
                                <td class="text-right"><span class="label label-light-danger">23%</span></td>
                            </tr>
                            <tr>
                                <td><img src="/public/admin/images/browser/internet-logo.png" alt=logo /></td>
                                <td>Microsoft edge</td>
                                <td class="text-right"><span class="label label-light-megna">09%</span></td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
        <div class="col-lg-8 col-xlg-9">
            <div class="card">
                <div class="card-body">
                    <h4 class="card-title">Total Visits</h4>
                    <div id="visitfromworld" style="width:100%!important; height:410px"></div>
                </div>
            </div>
        </div>
    </div>
    <!-- Row -->
    <div class="row">
        <div class="col-lg-4 col-xlg-3">
            <div class="card card-inverse card-info">
                <div class="card-body">
                    <div class="d-flex">
                        <div class="m-r-20 align-self-center">
                            <h1 class="text-white"><i class="ti-light-bulb"></i></h1>
                        </div>
                        <div>
                            <h3 class="card-title">Sales Analytics</h3>
                            <h6 class="card-subtitle">March 2017</h6>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-4 align-self-center">
                            <h2 class="font-light text-white"><sup><small><i class="ti-arrow-up"></i></small></sup>35487</h2>
                        </div>
                        <div class="col-8 p-t-10 p-b-20 text-right">
                            <div class="spark-count" style="height:65px"></div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="card card-inverse card-danger">
                <div class="card-body">
                    <div class="d-flex">
                        <div class="m-r-20 align-self-center">
                            <h1 class="text-white"><i class="ti-pie-chart"></i></h1>
                        </div>
                        <div>
                            <h3 class="card-title">Bandwidth usage</h3>
                            <h6 class="card-subtitle">March 2017</h6>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-4 align-self-center">
                            <h2 class="font-light text-white">50 GB</h2>
                        </div>
                        <div class="col-8 p-t-10 p-b-20 text-right align-self-center">
                            <div class="spark-count2" style="height:65px"></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-lg-8 col-xlg-9">
            <div class="card">
                <div class="card-body">
                    <h4 class="card-title">Sales Difference</h4>
                    <h6 class="card-subtitle">Check the difference between two site</h6>
                    <div id="morris-area-chart2" style="height: 335px;"></div>
                </div>
            </div>
        </div>
    </div>
    <!-- Row -->
    <!-- ============================================================== -->
    <!-- End PAge Content -->
    <!-- ============================================================== -->
    <!-- ============================================================== -->
</div>

@endsection