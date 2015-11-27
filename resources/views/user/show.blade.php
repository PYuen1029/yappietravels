@extends('app')

@section('title')
	YappieTravels: {{ $user->name }}'s Profile
@stop

@section('css')
@stop

@section('js')
@stop

@section('content')
	<div class="container">
		<div class="col-sm-9">
			<img src="{{ $user->profile_pic }}" />
		</div>
		
		<div class="col-sm-9">
			Name: {{ $user->name }}
		</div>

		<div class="col-sm-9">
			Email: {{ $user->email }}
		</div>
		
		<div class="col-sm-9">
			Hometown: {{ $user->hometown }}
		</div>
		
		<div class="col-sm-9">
			Description: {{ $user->brief_description }}
		</div>
		
		<div class="col-sm-9">
			Age: {{ $user->age }}
		</div>

		<!-- EDIT BUTTON -->
		<div class="col-sm-9">
			<a href="{{ route('user.edit', ['user' => $user->id ]) }}" class="btn btn-info col-sm-6" role="button">Edit Profile</a>
		</div>


		<hr>

		<div class="col-sm-9">
			<h2> Blog Posts </h2>
			@foreach($blogPosts as $blogPost)
				<div class="col-sm-4">
					<img src="{{ $blogPost->featured_image }}" />

					<h3> {{$blogPost->title}} </h3>

					<span>{{ $blogPost->tagline}} </span>

					<div>{{ $blogPost->content}} </div>
				</div>
			@endforeach
		</div>

	</div>
@stop