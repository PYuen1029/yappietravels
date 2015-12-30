@extends('app')

@section('meta')
<meta name="token" value="<?php echo csrf_token() ?>">
@stop

@section('title')
YappieTravels: All Blogs
@stop

@section('css')
@stop

@section('js')
	<!-- Vue.js JavaScript -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/vue/1.0.10/vue.js"></script>
   	<script src="https://cdnjs.cloudflare.com/ajax/libs/vue-resource/0.1.17/vue-resource.js"></script> 
    <script> 
    	var PHPObject = {
    		//
    	}
    </script>
    <script src="/js/blog.index.blade.js"></script>
@stop

@section('content')
	<div class="container">
		<h1> All Blogs </h1>
		@foreach($allBlogs as $blog)
			<div class="row">	
				<h3 class="blog-name"> <a 
					href="{{ route('blog.show', [
						'name' => getUrlForThisName($blog)
					]) }}">
					{{ $blog->name }} </a> </h3>
				<p class="author"> {{ $blog->user->name }} </p>
				<p class="blog-tagline"> {{ $blog->tagline }} </p>
			</div>
		@endforeach
	</div>

@stop
