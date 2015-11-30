<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta name="description"  content="Community Nepal | A website for we Nepali">

	<title>Community Nepal | A website for we Nepali</title>
	<link href="/css/all.css" rel="stylesheet">
	<link href="/css/blog.css" rel="stylesheet">
	<link href='//fonts.googleapis.com/css?family=Roboto:400,300' rel='stylesheet' type='text/css'>
	<link rel="shortcut icon" href="/favicon.ico" type="image/x-icon" />

</head>
<body>

	@include('partials.nav')
	<div id = "content-wrapper" class="container">
		
	    <div class="container">
	    	<div class="row">
	    		<!-- Main Content -->
	    		<div class="col-sm-8 blog-main">@yield('content')</div>

	    		<!-- Right Sidebar Content -->
	    		<div class="col-sm-3 col-sm-offset-1">
	    			<div class="sidebar-module sidebar-module-inset">
	    			<h4>Welcome</h4>
	    			<p>Community Nepal is a blog dedicated to nepalese content and we provide 
	    			relevant news, information and events. The sites main motto is to awake the 
	    			nepalese masses with positive and relevant information.  </p>
	    			</div>
	    		</div>

	    	</div>
	    	
	    </div>	


	    <!-- Footer  -->
	    <div class="blog-footer">
			<small>
				<em><p class="text-center">copyright &copy; {{date('Y')}} Community Nepal.
					@if(Auth::user()) 
				<a href="/auth/logout">logout</a></p></em> 
									
					@else 
					<a href="/auth/login">admin</a></p></em> 
							
					@endif
					
			</small>

		</div>

	</div>
	<!-- #content-wrapper ends -->

	<!-- Scripts -->
	<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
	<script src="//cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.1/js/bootstrap.min.js"></script>
</body>
</html>