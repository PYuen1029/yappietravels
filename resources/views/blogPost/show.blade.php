@extends('app')

@section('title')
	YappieTravels: {{ $blogPost->title }}
@stop

@section('css')
<link rel="stylesheet" type="text/css" href="/css/blogPost.css">

@stop

@section('js')
@stop

@section('content')
	<div class="container">
		<h1> {{$blogPost->title}} </h1>
		<p>
			{!! nl2br(e($blogPost->content)) !!}
		</p>
		<div class="col-xs-12">
			@foreach($blogPost->photo as $photo)
				<div class="col-xs-4">	
					@include('blogPost.partials._showPhotos')
				</div>
			@endforeach
		</div>
	</div>
@stop