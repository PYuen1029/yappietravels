@extends('app')

@section('meta')
<meta name="token" value="<?php echo csrf_token() ?>">
@stop

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
	<!-- Vue.js JavaScript -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/vue/1.0.10/vue.js"></script>
   	<script src="https://cdnjs.cloudflare.com/ajax/libs/vue-resource/0.1.17/vue-resource.js"></script> 
    <script src="/js/user.show.blade.js"></script> 
@stop

@section('content')
	<div class="container" id="container">
	
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
		<div id="recent-posts" class="fh-desc">
			<h3> Recent Blog Posts </h3>
			<ul class="nav nav-pills nav-stacked">
				<li v-for="blogPost in blogPosts" class="featured"> 
					<a href="#"> @{{ blogPost.title }} </a>
				</li>
			</ul>
			<nav>
                <ul class="pager">
                    <li v-show="pagination.previous" class="previous featured">
                        <a @click="paginate('previous')" class="page-scroll" href="#dreams"><< Previous</a>
                    </li>
                    <li v-show="pagination.next" class="next">
                        <a @click="paginate('next')" class="page-scroll" href="#dreams">Next >></a>
                    </li>
                </ul>
            </nav>
		</div>
		@{{ $data | json }}
		<!-- EDIT PROFILE BUTTON -->
		@if(Auth::user()->isCurrentUser($user))

			<div class="col-sm-9">
				<a href="{{ route('user.edit', ['user' => $user->id ]) }}" class="btn btn-info col-sm-6" role="button">Edit Profile</a>
			</div>

		@endif

	</div>
@stop
