@extends('app')

@section('title')
	{{ $blog->name }} : Create a New Post
@stop

@section('css')
@stop

@section('js')
@stop

@section('content')
	<div class="container">
		{!! Form::open([
			'route' => ['blog.blogPost.store', $blog->name],
			'method' => 'POST',
			'class' => "col-xs-10"
		]) !!}
			<div class="form-group">
				{!! Form::label('title', 'Title') !!}
				{!! Form::text('title', null, [
					'class' => "form-control"
				]) !!}
			</div>

			<div class="form-group">
				{!! Form::label('tagline', 'Tagline') !!}
				{!! Form::text('tagline', null, [
					'class' => "form-control"
				]) !!}
			</div>

			<div class="form-group">
				{!! Form::label('content', 'Content') !!}
				{!! Form::textarea('content', null, [
					'class' => 	"form-control",
					'size'	=>	"30x5"
				]) !!}
			</div>

			<!-- FEATURED IMAGE -->

		{!! Form::close() !!}
	</div>
@stop