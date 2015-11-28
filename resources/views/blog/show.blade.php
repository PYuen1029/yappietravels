@extends('app')

@section('title')
	YappieTravels: {{ $blog->name }}
@stop

@section('css')
@stop

@section('js')
@stop

@section('content')
	<div class="container">
		<h1> All Posts </h1>
		@foreach($blog->blogPost as $blogPost)
			<div class="row">	
				<h3 class="blogPost-title"> <a 
					href="{{ route('blog.blogPost.show', [
						'name' => $blog->name,
						'title' => $blogPost->title
					]) }}">
					{{ $blogPost->title }} </a> </h3>
				<p class="blogPost-tagline"> {{ $blogPost->tagline }} </p>
			</div>
		@endforeach
	</div>
@stop