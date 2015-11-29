@extends('app')

@section('title')
	Edit: {{ $blogPost->name }} Photo
@stop

@section('css')
<style type="text/css">
.inscription-input {
	margin-bottom:20px;
	width: 79%;
}

.col-centered{
    float: none;
    margin: 0 auto;
}

</style>
@stop

@section('js')
@stop

@section('content')
	<div class="container col-xs-11">
		<div class="row">
			<h1 class="page-title col-centered"> Edit Photo Caption </h1>
		</div>

		<div class="row">
			<div class="col-centered">
				<img src="/{{ $photo->path }}" >
			</div>
		</div>

		<hr>

		<div class="row">
			{!! Form::model($photo, [
				'method' => 'PATCH',
				'route' => ['blog.blogPost.photo.update', 
				getUrlForThisName($blogPost->blog), 
				getUrlForThisName($blogPost),
				$photo->id],
				'class' => 'col-centered'
			]) !!}    

				<div class="form-group">
					{!! Form::label('inscription', 'Inscription') !!}
					{!! Form::textarea('inscription', null, [
						'class' => 	"form-control inscription-input",
						'size'	=>	"20x3"
					]) !!}
				</div>

				<div class="form-group">
					{!! Form::submit("Submit", ['class' => 'btn btn-primary inscription-input form-control']) !!}
				</div>

			{!! Form::close() !!}
		</div>

	</div>
@stop