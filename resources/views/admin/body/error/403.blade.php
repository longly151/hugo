@extends('admin.layouts.error')
@section('content')
<section id="wrapper" class="error-page">
    <div class="error-box">
        <div class="error-body text-center">
            <h1 class="text-primary">403</h1>
            <h3 class="text-uppercase text-danger">Forbiddon Error!</h3>
            <p class="m-t-30 m-b-30 text-dark font-weight-bold">YOU DON'T HAVE PERMISSION TO ACCESS ON THIS SERVER.</p>
            <a href="{{ url('admin') }}" class="btn btn-info btn-rounded waves-effect waves-light m-b-40">Back to home</a>
        </div>
        <footer class="footer text-center text-primary">© 2017 Admin Press.</footer>
    </div>
</section>
@endsection