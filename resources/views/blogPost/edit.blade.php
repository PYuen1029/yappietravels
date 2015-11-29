@extends('app')

@section('title')
	{{ $blogPost->title }} : Edit
@stop

@section('css')
<link rel="stylesheet" type="text/css" href="/css/dropzone.css">
<style> 
.dropzone, .blogPostPhoto {
	margin-top: 25px;
}



</style>
@stop

@section('content')
	<div class="container">
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
				{!! Form::input('datetime-local', 'published_at', date(DateTime::W3C), [
					'class' =>	"form-control"
				]) !!}
			</div>

			<div class="form-group">
				{!! Form::submit("Submit", ['class' => 'btn btn-primary form-control']) !!}
			</div>

		{!! Form::close() !!}

		<!-- IMAGES -->
		<div class="col-xs-4">
			
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
			
			<!-- IMAGES -->
			@foreach($blogPost->photo as $photo)
				<img src="/{{ $photo->thumbnail_path }}" 
				class="blogPostPhoto">

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