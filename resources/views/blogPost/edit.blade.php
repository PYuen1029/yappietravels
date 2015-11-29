@extends('app')

@section('title')
	{{ $blogPost->title }} : Edit
@stop

@section('css')
<link rel="stylesheet" type="text/css" href="/css/dropzone.css">
<style> 
.blogPostPhoto {
	margin-top: 25px;
}

.page-title {
	padding: 0 30px;

}

.btn-input {
	margin: 0 auto;
}

</style>
@stop

@section('content')
	<div class="container">
		<h1 class="col-xs-12 page-title"> Edit a New Blog Post </h1>

		{!! Form::model($blogPost, [
			'method' => 'PATCH',
			'route' => ['blog.blogPost.update', getUrlForThisName($blogPost->blog), getUrlForThisName($blogPost)],
			'class' => "col-xs-8"
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
				{!! Form::input('date', 'published_at', null, [
					'class' =>	"form-control"
				]) !!}
			</div>

			<div class="form-group">
				{!! Form::submit("Submit", ['class' => 'btn btn-primary form-control']) !!}
			</div>

		{!! Form::close() !!}

		<!-- IMAGES -->
		<div class="col-xs-4">
			{!! Form::label('photo', 'Add Photos Here') !!}

			<!-- DROPZONE -->
			<form action="{{ route('blog.blogPost.photo.store', [
				'blog' 			=>	getUrlForThisName($blogPost->blog),
				'blogPost' 		=>	getUrlForThisName($blogPost)
			]) }}"
				method="POST"
				id="addPhotosForm"
				class="dropzone col-xs-12">
				{{ csrf_field() }}
			</form>
			
			<!-- EDIT AND DELETE PHOTO -->
			@foreach($blogPost->photo as $photo)
				@include('blogPost.partials._showPhotos')
		
				<!-- EDIT PHOTO -->
				<div>
					<a href="{{ route('blog.blogPost.photo.edit', [
						'blog' 		=> getUrlForThisName($blogPost->blog), 
						'blogPost' 	=> getUrlForThisName($blogPost),
						'photo'		=> $photo->id
						]) }}" class="btn btn-info col-sm-9" role="button">
						Edit Photo
					</a>
				</div>

				<!-- DELETE PHOTO -->
				{!! Form::open([
					'route' => ['blog.blogPost.photo.destroy', 
					getUrlForThisName($blogPost->blog), 
					getUrlForThisName($blogPost),
					$photo->id], 
					'method' => 'delete'
				]) !!}

					{!! Form::submit('Delete Photo', [
						'class'		=>	'btn btn-info col-sm-9',
						'role' 		=> 	'button'
					]) !!}

				{!! Form::close() !!}

			@endforeach

		</div>

	</div>
@stop

@section('js')
<script src="/js/dropzone.js"></script>
<script>
	Dropzone.options.addPhotosForm = {
		paramName: 'photo',
		maxFilesize: 20,
		acceptedFiles: '.jpg, .jpeg, .png, .bmp'
	};
</script>

@stop