<!DOCTYPE html>
<html lang="en-US">
	<base href="/public/client/">
	@include('client.partials.head')

<body class="home blog">
		<div id="fb-root"></div>
		<script async defer crossorigin="anonymous" src="https://connect.facebook.net/vi_VN/sdk.js#xfbml=1&version=v3.2&appId=1671249089647154&autoLogAppEvents=1"></script>
	@include('client.partials.nav')

	<div class="wrapper-boxed header-style-header-2 dark-layout-enabled">

		@include('client.partials.header')

		@yield('content')
		
		<div class="clear-footer"></div>
		
		@include('client.partials.footer')


	</div><!-- End .wrapper-boxed -->

	@include('client.partials.extra_sidebar')

		
	@include('client.partials.scripts')
</body>

</html>