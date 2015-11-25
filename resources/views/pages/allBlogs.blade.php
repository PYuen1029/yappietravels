@extends('app')

@section('title')
YappieTravels: All Blogs
@stop

@section('css')
@stop

@section('js')
@stop

@section('content')
	<div class="container">
		<h1> All Blogs </h1>
		@foreach($allBlogs as $blog)
			<div class="row">	
				<h3 class="blog-name"> <a 
					href="{{ route('blog.show', [
						'name' => $blog->name
					]) }}">
					{{ $blog->name }} </a> </h3>
				<p class="author"> {{ $blog->user->name }} </p>
				<p class="blog-tagline"> {{ $blog->tagline }} </p>
			</div>
		@endforeach
	</div>

@stop
