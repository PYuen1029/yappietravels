@extends('app')

@section('title')
	Edit: {{ $user->name }}'s Profile
@stop

@section('css')

@stop

@section('js')
@stop

@section('content')
	<div class="container">
		{!! Form::model($user, [
			'method' => 'PATCH',
			'route' => ['user.update', $user->id],
			'class' => "col-xs-10"
		]) !!}    

			<div class="form-group">
		        {!! Form::label('name', 'Name') !!}
		        {!! Form::text('name', null, [
		        	'class' => "form-control"
		        ]) !!}
	        </div>

	        <div class="form-group">
				{!! Form::label('hometown', 'Hometown') !!}
		        {!! Form::text('hometown', null, [
		        	'class' => "form-control"
		        ]) !!}
	    	</div>

	    	<div class="form-group">
		        {!! Form::label('brief_description', 'Brief Description') !!}
		        {!! Form::text('brief_description', null, [
		        	'class' => "form-control"
		        ]) !!}
		    </div>

		    <div class="form-group">
		        {!! Form::label('age', 'Age') !!}
		        {!! Form::text('age', null, [
		        	'class' => "form-control",
		        	'size' => "3"
		        ]) !!}
		    </div>

			<div class="form-group">
				{!! Form::submit("Submit", ['class' => 'btn btn-primary form-control']) !!}
			</div>

		{!! Form::close() !!}

		{!! Form::model($user, [
			'method' => 'DELETE',
			'route' => ['user.destroy', $user->id],
			'class' => "col-xs-10"
		]) !!}    
			<div class="form-group">
				{!! Form::submit("DELETE", ['class' => 'btn btn-danger form-control']) !!}
			</div>

		{!! Form::close() !!}		

	</div>
@stop