@extends('app')

@section('title')
YappieTravels: All Blog Posts
@stop

@section('css')
@stop

@section('js')
@stop

@section('content')
	<div class="container">
		<h1> All Blog Posts </h1>
		@foreach($allPosts as $blogPost)
			@include('partials._blogPost-preview', [
				'blog' => $blogPost->blog
			])
		@endforeach
	</div>

@stop
