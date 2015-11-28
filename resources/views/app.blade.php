<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">

	<title> @yield('title') </title>
	
	<!-- Styles -->

	<link href="/css/app.css" rel="stylesheet">

	<link href='//fonts.googleapis.com/css?family=Roboto:400,300' rel='stylesheet' type='text/css'>

	@yield('styles')

	<!-- Scripts -->
	<script src="/js/app.js"></script>

	@yield('scripts')
	

</head>
<body>
	<!-- FLASH MESSAGE -->
	@if (Session::has('flash_notification.message'))
	    <div class="alert alert-{{ Session::get('flash_notification.level') }}">
	        <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>

	        {{ Session::get('flash_notification.message') }}
	    </div>
	@endif

	@include('errors.alerts')

	<!-- NAV BAR -->
	<nav class="navbar navbar-default">
		<div class="container-fluid">
			<div class="navbar-header">
				<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar">
					<span class="sr-only">Toggle Navigation</span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
				</button>
				<a class="navbar-brand" href="{{ url('/') }}">YappieTravels</a>
			</div>

			<div class="collapse navbar-collapse" id="navbar">
				<ul class="nav navbar-nav">
					<li><a href="{{ route('blog.index') }}">
						Blogs
					</a></li>
				</ul>

				<ul class="nav navbar-nav">
					<li><a href="{{ route('blogPosts.index') }}">
						Posts
					</a></li>
				</ul>


				<ul class="nav navbar-nav navbar-right">
					@if(auth()->guest())
						@if(!Request::is('auth/login'))
							<li><a href="{{ url('/auth/login') }}">Login</a></li>
						@endif
						@if(!Request::is('auth/register'))
							<li><a href="{{ url('/auth/register') }}">Register</a></li>
						@endif
					@else
						<li class="dropdown">
							<a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">{{ auth()->user()->name }} <span class="caret"></span></a>
							<ul class="dropdown-menu" role="menu">
								<!-- <li><a href="{{ url('/auth/logout') }}">Logout</a></li> MAKE THIS A LINK TO ADMIN PANEL-->
								<li>
									<a href="{{ url('/auth/logout') }}">Logout</a>
								</li>

								<li>
									<a href="{{ route('user.show', [
										'user' => Auth::user()->id
									]) }}"> View Profile </a>
								</li>

								<li>
									<a href="{{ route('user.edit', [
										'user' => Auth::user()->id
									]) }}"> Edit Profile Settings </a>
								</li>

								<li>
									<a href="{{ route('blog.show', [
										'blog' => str_replace(' ', '-', Auth::user()->blog->name)
									]) }}"> View Blog </a>
								</li>

								<li>
									<a href="{{ route('blog.edit', [
										'blog' => str_replace(' ', '-', Auth::user()->blog->name)
									]) }}"> Edit Blog Settings </a>
								</li>
								
							</ul>
						</li>
					@endif
				</ul>
			</div>
		</div>
	</nav>
	<div class="container">
	@yield('content')
	</div>
	


</body>
</html>
