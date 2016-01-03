<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	@yield('meta')

	<title> @yield('title') </title>
	
	<!-- Styles -->

	<link href="/css/app.css" rel="stylesheet">

	<link href='//fonts.googleapis.com/css?family=Roboto:400,300' rel='stylesheet' type='text/css'>
	<!-- SEDULOUS STYLESHEET -->
	<link rel="stylesheet" type="text/css" href="/css/style.css"/>
    <link rel="stylesheet" type="text/css" href="/css/bootstrap.min.css"/>
    <link rel="stylesheet" type="text/css" href="/css/font-awesome.min.css"/>
    <link href='http://fonts.googleapis.com/css?family=Raleway:400,700,200,100,300,500,600,800,900' rel='stylesheet' type='text/css'>
    <link href='http://fonts.googleapis.com/css?family=Pacifico' rel='stylesheet' type='text/css'>
    <link href='http://fonts.googleapis.com/css?family=Source+Sans+Pro:200,300,400,600,700,700italic,900,400italic,300italic' rel='stylesheet' type='text/css'>
	@yield('css')

	<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>
    <script type="text/javascript" src="/js/sedulous/jquery.sticky.js"></script>
    <script>
      $(window).load(function(){
        $("#menu").sticky({ topSpacing: 0 });
      });
    </script>

</head>
<body>
	<!-- FLASH MESSAGE -->
	@if (Session::has('flash_notification.message'))
	    <div class="alert alert-{{ Session::get('flash_notification.level') }}">
	        <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>

	        {{ Session::get('flash_notification.message') }}
	    </div>
	@endif
<!-- So I will have a specific CSS file for the index page that will have a larger image slideshow for the masthead-->
	@include('errors.alerts')

	<!-- BANNER -->
	<div class="container-fluid banner text-center" id="banner"> 
		<div class="row">
			<div class="col-md-12 line">
				<div class="tablebox">
					<div class="banner-text" id="bannertext">
						<h1 class="hostyle" id="heads">
							<a href="{{ url('/') }}"> YappieTravels </a>
						</h1>
						<p class="pstyle">Post your adventures, you crazy 20-something</p>
						@if(Request::path() == '/')
						<a href="#jump-to" class="page-scroll arrow"><i class="fa fa-angle-down"></i></a> 
						@endif
					</div>
				</div>
			</div>
		</div>
  	</div>

	<!-- NAVBAR -->
	<div class="navbar menubar" id="menu">
		<div class="container">
			<div class="navbar-header"> 
				<button type="button" class="navbar-toggle menu-button" data-toggle="collapse" data-target="#myNavbar">
					<span class="glyphicon glyphicon-align-justify"></span>
				</button>
				<a class="navbar-brand logo" href="{{ url('/') }}">YappieTravels</a> 
			</div>

			<div>
				<nav class="collapse navbar-collapse" id="myNavbar" role="navigation">
					<ul class="nav navbar-nav navstyle">
						<li><a href="{{ route('blog.index') }}" class="page-scroll">All Blogs</a></li>
						<li><a href="{{ route('blogPost.index') }}" class="page-scroll">All Posts</a></li>
					</ul>

					<ul class="nav navbar-nav navbar-right navstyle">
						@if (Auth::guest())
							@if(!Request::is('auth/login'))
								<li><a href="{{ url('/auth/login') }}">Login</a></li>
							@endif
							@if(!Request::is('auth/register'))
								<li><a href="{{ url('/auth/register') }}">Register</a></li>
							@endif
						@else
						<li class="dropdown">
							<a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false"> {{Auth::user()->name}} <span class="caret"></span></a>
							<ul class="dropdown-menu" role="menu">
								<li>
								<a href="{{
									route('blog.blogPost.create', [
										'blog' => getUrlForThisName(Auth::user()->blog)
									])
								}}"> Create a New Post </a>
								</li>

								<li>
								<a href="{{url('auth/logout')}}">Logout</a>
								</li>

								<li>
								<a href="{{
									route('user.index')
								}}"> View Dashboard </a>
								</li>
							</ul>
						</li>
						@endif
					</ul>
				</nav>
			</div>
		</div>
	</div>
	<!-- END NAVBAR -->
	
	<!-- START jump-to -->
	<div class="jump-to" id="jump-to"></div>
	@yield('content')
	
	<!-- FOOTER -->
	<footer class="foot"> 
		<div class="container">
			<div class="row">
				<div class="col-md-12 col-sm-12 col-xs-12">
					<h4 class="foot-logo">Yappie Travels</h4>
				</div>
			</div>
		</div>
	</footer>
	<!-- END FOOTER -->

<!-- Scripts -->
<script src="/js/sedulous/bootstrap.min.js"></script> 
<script type="text/javascript" src="/js/sedulous/jquery.waypoints.min.js"></script> 
<!-- DYNAMICALLY EDIT THE BANNER HEIGHT, THIS WILL BE DIFFERENT DEPENDING IF THIS IS INDEX OR NOT -->
<script>
	$(function(){
		var windowH = $(window).height();
		var bannerH = $('#banner').height();
		var heightDiff = (window.location.pathname == "/") ? 200 : 500;

		if(windowH > bannerH) {                            
		$('#banner').css({'height':($(window).height() - heightDiff)+'px'});
		$('#bannertext').css({'height':($(window).height() - heightDiff)+'px'});
		}                                                                               

		$(window).resize(function(){
			var windowH = $(window).height();
			var bannerH = $('#banner').height();
			var differenceH = windowH - bannerH;
			var newH = bannerH + differenceH;
			var truecontentH = $('#bannertext').height();

			if(windowH < truecontentH) {
				$('#banner').css({'height': (newH - heightDiff)+'px'});
				$('#bannertext').css({'height': (newH - heightDiff)+'px'});
			}

			if(windowH > truecontentH) {
				$('#banner').css({'height': (newH - heightDiff)+'px'});
				$('#bannertext').css({'height': (newH - heightDiff)+'px'});
			}

		})          
	});
</script>
<!-- END - DYNAMICALLY EDIT THE BANNER HEIGHT -->
@yield('js')

</body>
</html>

