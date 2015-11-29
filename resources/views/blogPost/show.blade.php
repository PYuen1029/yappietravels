@extends('app')

@section('title')
	YappieTravels: {{ $blogPost->title }}
@stop

@section('css')
@stop

@section('js')
@stop

@section('content')
	<div class="container">
		<h1> {{$blogPost->title}} </h1>
		<p>
			{!! nl2br(e($blogPost->content)) !!}
		</p>
		@foreach($blogPost->photo as $photo)
			<div class="row">	
				<img src="{{ $photo->path }}" />
			</div>
		@endforeach
	</div>
@stop