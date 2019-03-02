@extends('client.layouts.main')
@section('content')
<div class="container page-404">
	<div class="error-404">
			<div class="error-image">
					<img src="https://max.soledad.pencidesign.com/soledad-coffee-blog/wp-content/themes/soledad/images/404.png"
							alt="404" />
			</div>
			<p class="sub-heading-text-404">OOPS! Page you&#039;re looking for doesn&#039;t exist. Please use
					search for help</p>
			<form role="search" method="get" id="searchform" action="#">
					<div>
							<input type="text" class="search-input" placeholder="Type and hit enter..." name="s" id="s" />
					</div>
			</form>
			<p class="go-back-home"><a href="/">Back to Home Page</a></p>
	</div>
</div>
@endsection