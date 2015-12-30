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
    <script> 
    	var PHPObject = {
    		blogUrl: '<?php echo getUrlForThisName($user->blog); ?>',
    		// so I want to send an AJAX request to add friend. I will do this by sending a request via vue.js to whatever controller with whatever data is needed to add a friend. And then it will set a vue.data property, sendRequest, to true.
    		userUrl: '<?php echo $user->id ?>',
    		sentRequest: '<?php echo ($user->isFriendsWith(Auth::user()) != 0) ?>'
    	}
    </script>
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
						@if($user->isFriendsWith(Auth::user()) === 1)
							<a href="{{ route('addFriend', ['user' => $user->id ]) }}" class="btn disabled btn-info col-sm-12" role="button">Your Request was Sent</a>
						
						@elseif($user->isFriendsWith(Auth::user()) === 2)
							<a href="{{ route('addFriend', ['user' => $user->id ]) }}" class="btn disabled btn-info col-sm-12" role="button">You are already friends with this person</a>	
						@else
						<!-- TODO THIS SHOULD BE A FORM FOR SECURITY REASONS -->
							<a v-if="sentRequest" href="#" class="btn btn-info col-sm-12 disabled" role="button">Your Request was Sent</a>
							
							<a v-else @click="sendRequest()" href="#" class="btn btn-info col-sm-12" role="button">Add Friend</a>



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
					<a :href="urlOf(blogPost)"> @{{ blogPost.title }} </a>
				</li>
			</ul>
			<nav>
                <ul class="pager">
                    <li v-show="pagination.more" class="read-more" >
                        <button @click="paginate('more')" class="btn btn-default btn-lg"> Read More </button>
                    </li>
                </ul>
            </nav>
		</div>
		<!-- EDIT PROFILE BUTTON -->
		@if(Auth::user()->isCurrentUser($user))

			<div class="col-sm-9">
				<a href="{{ route('user.edit', ['user' => $user->id ]) }}" class="btn btn-info col-sm-6" role="button">Edit Profile</a>
			</div>

		@endif

	</div>
@stop
