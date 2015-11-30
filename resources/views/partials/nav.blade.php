		<nav class="navbar navbar-default">
		<div class="container-fluid container">
			<div class="navbar-header">
				<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
					<span class="sr-only">Toggle Navigation</span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
				</button>
				<a class="navbar-brand" href="{{url('/')}}">Community Nepal</a>


			</div>

			<div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">

				<ul class="nav navbar-nav navbar-right">
									@if(Auth::user())
				<li><a href="{{url('articles/create')}}" class="btn btn-default">Create Article</a></li>
				@endif
					<li><a href="{{url('/')}}">Home</a></li>
					<li><a href="{{url('about')}}" >About</a></li>
					<li><a href="{{url('contact')}}" >Contact</a></li>


				</ul>
			</div>
		</div>
	</nav>