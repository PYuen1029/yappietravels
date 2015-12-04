@extends('app')

@section('title')
	YappieTravels: Index
@stop

@section('css')
<style> 
	.pending-friends div{
		margin-top: 20px;
	}

</style>
@stop

@section('js')
@stop

@section('content')
	<div class="pending-friends">
		@foreach ($currentUser->receivedPendingRequests()->getResults() as $result)				
			<div class="col-sm-12">
				{{$result->name}} would like to be your Friend.
			</div>

			<!-- TODO THIS SHOULD BE A FORM FOR SECURITY REASONS -->
			<a href="{{ route('approveFriend', ['user' => $result->id ]) }}" class="btn btn-info col-sm-4" role="button">Approve Friend Request</a>


			<!-- TODO THIS SHOULD BE A FORM FOR SECURITY REASONS -->
			<a href="{{ route('denyFriend', ['user' => $result->id ]) }}" class="btn btn-info col-sm-4" role="button">Delete Friend Request</a>


		@endforeach
	</div>

	<div class="friends-list">
		<h1> ALL FRIENDS </h1>
		<ul>
			@foreach($currentUser->friends as $friend)
				<li> Name: {{$friend->name}}
					<ul>
						<li> 
							Friends Since: {{$friend->pivot->approved_at}}
						</li>
							Brief Description: {{$friend->brief_description}}
						<li> 
					</ul>
				</li>
			@endforeach
		</ul>

	</div>

	<div class="status-feed">
		<h1> POSTS BY FRIENDS </h1>

		@foreach($currentUser->getAllFriendsBlogPosts() as $newPost)
			<div class="list-group">
				<a href="{{route('blog.blogPost.show', getUrlForThisName($newPost->blog), getUrlForThisName($newPost))}}" class="list-group-item">
					<h4 class="list-group-item-heading">{{$newPost->title}}</h4>
					<span class="post-date"> {{$newPost->updated_at->diffForHumans()}} </span>
					<p class="list-group-item-text">{{$newPost->content}}</p>
				</a>
			</div>

		@endforeach
	</div>

@stop
