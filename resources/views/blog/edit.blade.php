@extends('app')

@section('title')
	Edit: {{ $blog->name }}'s Profile
@stop

@section('css')

@stop

@section('js')
@stop

@section('content')
	<div class="container">
		{!! Form::model($blog, [
			'method' => 'PATCH',
			'route' => ['blog.update', getUrlForThisName($blog)],
			'class' => "col-xs-10"
		]) !!}    

			<div class="form-group">
		        {!! Form::label('name', 'Name') !!}
		        {!! Form::text('name', null, [
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
				{!! Form::submit("Submit", ['class' => 'btn btn-primary form-control']) !!}
			</div>

		{!! Form::close() !!}

		<hr>

		<div class="col-sm-9">
			<h2> Blog Posts </h2>
			@foreach($blogPosts as $blogPost)
				<div class="row">
					@include('partials._blogPost-preview', [
						'blog' => $blogPost->blog
					])

					<!-- EDIT BUTTON -->
					<div class="col-sm-9">
						<a href="{{ route('blog.blogPost.edit', [
							'blog' 		=> getUrlForThisName(Auth::user()->blog), 
							'blogPost' 	=> getUrlForThisName($blogPost)
							]) }}" class="btn btn-info col-sm-9" role="button">
							Edit Post
						</a>
					</div>

					<!-- DELETE BUTTON -->
					<div class="col-sm-9">
						{!! Form::open([
							'route' => ['blog.blogPost.destroy', getUrlForThisName($blogPost->blog), getUrlForThisName($blogPost)], 
							'method' => 'delete'
						]) !!}
							{!! Form::submit('Delete Post', [
								'class'		=>	'btn btn-info col-sm-9',
								'role' 		=> 	'button'
							]) !!}
						{!! Form::close() !!}

					</div>
				</div>
			@endforeach
		</div>

	</div>
@stop