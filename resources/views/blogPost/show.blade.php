@extends('app')

@section('title')
	YappieTravels: {{ $blogPost->title }}
@stop

@section('css')
<link rel="stylesheet" type="text/css" href="/css/component.css" />
<style>
	.grid-wrap {
		margin: 0 auto;
	}
</style>

<script src="/js/modernizr.custom.js"></script>
@stop

@section('js')
<script src="/js/imagesloaded.pkgd.min.js"></script>
<script src="/js/masonry.pkgd.min.js"></script>
<script src="/js/classie.js"></script>
<script src="/js/cbpGridGallery.js"></script>
<script>
	new CBPGridGallery( document.getElementById( 'grid-gallery' ) );
</script>
@stop

@section('content')
	<h1> {{$blogPost->title}} </h1>
	<p>
		{!! nl2br(e($blogPost->content)) !!}
	</p>
	<div id="grid-gallery" class="grid-gallery">
		<section class="grid-wrap">
			<ul class="grid">
				<li class="grid-sizer"></li><!-- for Masonry column width -->
				@foreach($blogPost->photo as $photo)
					@include('blogPost.partials._grid')
				@endforeach
			</ul>
		</section><!-- // grid-wrap -->
		<section class="slideshow">
			<ul>
				@foreach($blogPost->photo as $photo)
					@include('blogPost.partials._slideshow')
				@endforeach						
			</ul>
			<nav>
				<span class="icon nav-prev"></span>
				<span class="icon nav-next"></span>
				<span class="icon nav-close"></span>
			</nav>
			<div class="info-keys icon">Navigate with arrow keys</div>
		</section><!-- // slideshow -->
	</div><!-- // grid-gallery -->
@stop

