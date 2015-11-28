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
			'route' => ['blog.update', str_replace(' ', '-', $blog->name)],
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

	</div>
@stop