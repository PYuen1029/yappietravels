@extends('app')

@section('title')
	{{ $blog->name }} : Create a New Post
@stop

@section('css')
<style>
.page-title {
	padding: 0 30px;

}
</style>
@stop

@section('js')
@stop

@section('content')
	<h1 class="col-xs-10 page-title"> Create a New Blog Post </h1>

	<div class="container">
		{!! Form::open([
			'route' => ['blog.blogPost.store', getUrlForThisName($blog)],
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

			<!-- WILL APPARENTLY NEED SOME JAVASCRIPT TO SHOW CURRENT DATETIME, SEE http://encosia.com/setting-the-value-of-a-datetime-local-input-with-javascript/ -->
			<div class="form-group">
				{!! Form::label('published_at', 'Publish Date') !!}
				{!! Form::input('date', 'published_at', date('Y-m-d'), [
					'class' =>	"form-control"
				]) !!}
			</div>

			<div class="form-group">
				{!! Form::submit("Submit", ['class' => 'btn btn-primary form-control']) !!}
			</div>

		{!! Form::close() !!}
	</div>
@stop