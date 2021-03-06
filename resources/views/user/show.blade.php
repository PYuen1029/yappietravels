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
		@if(Auth::user()->isCurrentUser($user))

			<div class="col-sm-9">
				<a href="{{ route('user.edit', ['user' => $user->id ]) }}" class="btn btn-info col-sm-6" role="button">Edit Profile</a>
			</div>

		@endif

		<!-- ADD FRIEND BUTTON -->
		<div class="col-sm-9">
			<!-- IF THESE GUYS ARE FRIENDS, SHOW AN INACTIVE BUTTTON -->
			@if($user->isFriendsWith(Auth::user()))
				<a href="{{ route('addFriend', ['user' => $user->id ]) }}" class="btn disabled btn-info col-sm-6" role="button">You're already friends with this person</a>

			@else
			<!-- TODO THIS SHOULD BE A FORM FOR SECURITY REASONS -->
				<a href="{{ route('addFriend', ['user' => $user->id ]) }}" class="btn btn-info col-sm-6" role="button">Add Friend</a>

			@endif
		</div>

	</div>
@stop