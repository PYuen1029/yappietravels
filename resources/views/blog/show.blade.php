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
		<h1> {{ $blog->name }} </h1>
		<span class="tagline"> {{ $blog->tagline }}</span>

		<h3> All Posts </h3>
		@foreach($blogPosts as $blogPost)
			<div class="row">

			@include('partials._blogPost-preview', [
				'blog' => $blogPost->blog
			])

			</div>
		@endforeach
	</div>
@stop