<!DOCTYPE html>
<html lang="en-US">
	<base href="/public/client/">
	@include('client.partials.head')

<body class="home blog">

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