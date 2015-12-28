@extends('app')

@section('title')
Yappie Travels: Index
@stop

@section('css')
@stop

@section('js')
@stop

@section('content')
	<div class="content-body" id="content-body">
		<div class="container">
		  <div class="row">        
			<div class="col-md-6 col-sm-6 col-xs-12">
			  <div class="fh-desc">
				  <h3>Featured Blogs</h3>
				  <ul class="nav nav-pills nav-stacked">
					@foreach($featuredBlogs as $featuredBlog)
						<li class="featured"> 
							<a href="{{
								route('blog.show', [
									'blog' => getUrlForThisName($featuredBlog)])
								}}">
								{{ $featuredBlog->name }}
							</a>
						</li>
					@endforeach
				  </ul>
			  </div>
			</div>
			<div class="col-md-6 col-sm-6 col-xs-12">
			  <div class="fh-desc">
				<h3>Recent Blog Posts</h3>
				<ul class="nav nav-pills nav-stacked">
					@foreach($recentPosts as $recentPost)
						<li class="featured">
							<a href="{{
								route('blog.blogPost.show', [
									'blog' => getUrlForThisName($recentPost->blog),
									'post' => getUrlForThisName($recentPost),
								])
							}}">{{ $recentPost->title }}</a> 
						</li>
					@endforeach
				</ul>
			  </div>
			</div>
		  </div>
		</div>
  	</div>
	
	<div class="subscribe-social"> 
		<div class="container">
			<div class="row">
				<div class="col-md-8 col-sm-12 col-xs-12">
					<div class="subscibe">
						<form role="form">
							<div class="col-md-8 col-sm-10 col-xs-12">
								<div class="form-group">
									<input type="email" class="form-control" id="email" placeholder="Enter Your Email address">
								</div>
							</div>
							<div class="col-md-4 col-sm-2 col-xs-12 centertext">
								<button type="submit" class="btn btn-or">Subscibe</button>
							</div>
						</form>
					</div>
				</div>
				<div class="col-md-4 col-sm-12 col-xs-12 text-center">
					<ul class="social">
						<li><a href="#"><i class="fa fa-twitter-square"></i></a></li>
						<li><a href="#"><i class="fa fa-facebook-square"></i></a></li>
						<li><a href="#"><i class="fa fa-google-plus-square"></i></a></li>
						<li><a href="#"><i class="fa fa-linkedin-square"></i></a></li>
					</ul>
				</div>
			</div>
		</div>
	</div>

	<div class="address" id="contact">
		<div class="container">
			<div class="row">
				<div class="col-md-12 col-sm-12 col-xs-12">
					<div class="alldesc">
						<div class="col-md-6 col-sm-6 col-xs-12 centertext">
							<p class="all-td">How To Get In Touch</p>
							<h2>Contact</h2>
						</div>
						<div class="col-md-6 col-sm-6 col-xs-12 info centertext">
							<p>10/B/195 Barcolomy Real Estate</p>
							  <p>Keep Walking, America</p>
							  <p>Tel No : +12345678</p>
							  <p>Email : Yogeshpix@gmail.com</p>
						</div>
					</div>
				</div>        
			</div>
		</div>
	</div>
@stop