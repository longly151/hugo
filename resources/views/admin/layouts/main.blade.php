<!DOCTYPE html>
<html lang="en">
<head>
    @include('admin.partials.head')
    @section('pageStylesheet')
        @show
</head>

<body class="fix-header fix-sidebar card-no-border">
    <!-- ============================================================== -->
    <!-- Preloader - style you can find in spinners.css -->
    <!-- ============================================================== -->
    <div class="preloader">
        <svg class="circular" viewBox="25 25 50 50">
            <circle class="path" cx="50" cy="50" r="20" fill="none" stroke-width="2" stroke-miterlimit="10" /> </svg>
    </div>
    <!-- ============================================================== -->
    <!-- Main wrapper - style you can find in pages.scss -->
    <!-- ============================================================== -->
    <div id="main-wrapper">

        @include('admin.partials.header')

        @include('admin.partials.sidebar_left')

        <div class="page-wrapper">

            @yield('content')

            @include('admin.partials.footer')
            
            <div class="container-fluid">
                @include('admin.partials.sidebar_right')
            </div>
            <!-- ============================================================== -->
            <!-- End footer -->
            <!-- ============================================================== -->
        </div>
        <!-- ============================================================= -->
        <!-- End Page wrapper  -->
        <!-- ============================================================== -->
    </div>
    <!-- ============================================================== -->
    <!-- End Wrapper -->
    <!-- ============================================================== -->
    <!-- ============================================================== -->
    
    @include('admin.partials.scripts')
    @section('pageScript')

    @show
    <script src="/public/admin/js/main.js"></script>

</body>

</html>