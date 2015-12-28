@extends('app')

@section('title')
	YappieTravels: {{ $user->name }}'s Profile
@stop

@section('css')
<style>
.profile-pic {
	width: 100%;
}


</style>
@stop

@section('js')
@stop

@section('content')
	<div class="container">
	
		<div class="content-body">
			<div class="row">
				<!-- PROFILE PICTURE col-xs-4 -->
				<div class="col-xs-4">
					<img class="profile-pic" src="{{ $user->profile_pic }}" />

					<!-- ADD FRIEND BUTTON -->
					<div class="add-friend-btn">
						<!-- IF THESE GUYS ARE FRIENDS, SHOW AN INACTIVE BUTTTON -->
						@if($user->isFriendsWith(Auth::user()))
							<a href="{{ route('addFriend', ['user' => $user->id ]) }}" class="btn disabled btn-info col-sm-12" role="button">You're already friends with this person</a>

						@else
						<!-- TODO THIS SHOULD BE A FORM FOR SECURITY REASONS -->
							<a href="{{ route('addFriend', ['user' => $user->id ]) }}" class="btn btn-info col-sm-12" role="button">Add Friend</a>

						@endif
					</div>
				</div>

				<!-- BIO col-xs-8 -->
				<div class="col-xs-8">
					<div class="bio name"> 
						<p class="big-text">
							<span class="big-text-label">Name:</span> {{ $user->name }}
						</p>
					</div>

					<div class="bio email">
						<p class="big-text">
							<span class="big-text-label">Email:</span> {{ $user->email }}
						</p>
					</div>

					<div class="bio hometown">
						<p class="big-text">
							<span class="big-text-label">Hometown:</span> {{ $user->hometown }}
						</p> 
					</div>

					<div class="bio brief-description">
						<p class="big-text">
							<span class="big-text-label">Description:</span> 					
						</p>
						<p class="text">{{ $user->brief_description }} </p>
					</div>

					<div class="bio age">
						<p class="big-text">
							<span class="big-text-label">Age:</span> {{ $user->age }}
						</p> 
					</div>
				</div>

			</div>
		</div>

		<!-- RECENT POSTS -->
		<div id="recent-posts">
			<div class="row">
				@foreach ($user->blog->blogPost as $post)
					<p> {{$post->title}} </p>
				@endforeach
			</div>
		</div>

		<!-- EDIT PROFILE BUTTON -->
		@if(Auth::user()->isCurrentUser($user))

			<div class="col-sm-9">
				<a href="{{ route('user.edit', ['user' => $user->id ]) }}" class="btn btn-info col-sm-6" role="button">Edit Profile</a>
			</div>

		@endif

	</div>
@stop