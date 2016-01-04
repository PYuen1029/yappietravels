@extends('app')

@section('meta')
<meta name="token" value="<?php echo csrf_token() ?>">
@stop

@section('title')
YappieTravels: All Blog Posts
@stop

@section('css')
<style>
.byline {
	text-align: right;
    font-style: italic;
    font-weight: 400;
    font-size: 15px;
    color: #242424;
    display: block;
}
</style>
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
    <script src="/js/blogpost.index.blade.js"></script>
@stop

@section('content')
<div class="content-body">
		<div class="container" id="container">
			<!-- TODO: see what all-blogs class does stylistically -->
			<div class="col-xs-9 all-blogs fh-desc">
				<h3> All Posts </h3>

				<ul class="nav nav-pills nav-stacked">
					<li class="featured" v-for="blogPost in blogPosts">	
						<a :href="urlOf(blogPost)"> 
							@{{blogPost.title}}
							<span class="byline"> Posted by @{{ blogPost.blog.user.name }} </span>
							<p class="blogPost-body"> 
								@{{ blogPost.tagline }} 
							</p>
						</a>
					</li>

					<nav>
			            <ul class="pager">
			                <li v-show="pagination.previous" class="previous ">
			                    <button @click="paginate('previous')" class="btn btn-default btn-lg"><< Previous</button>
			                </li>
			                <li v-show="pagination.next" class="next">
			                    <button @click="paginate('next')" class="btn btn-default btn-lg">Next >></button>
			                </li>
			            </ul>
		        	</nav>
				</ul>
			</div>

		</div>
	</div>

@stop
