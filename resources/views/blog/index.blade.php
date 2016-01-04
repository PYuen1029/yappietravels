@extends('app')

@section('meta')
<meta name="token" value="<?php echo csrf_token() ?>">
@stop

@section('title')
YappieTravels: All Blogs
@stop

@section('css')
<style>
.byline {
	text-align: right;
    font-style: italic;
    font-weight: 400;
    font-size: 15px;
    color: #242424;
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
    <script src="/js/blog.index.blade.js"></script>
@stop

@section('content')
	<div class="content-body">
		<div class="container" id="container">
			<div class="col-xs-9 all-blogs fh-desc">

				<h3> All Blogs </h3>

				<ul class="nav nav-pills nav-stacked">
					<li class="featured" v-for="blog in blogs">	
						<a :href="urlOf(blog)"> 
							@{{blog.name}}
							<span class="byline"> blog by @{{ blog.author }} </span>
							<p class="blog-body"> 
								@{{ blog.tagline }} 
							</p>
						</a>
					</li>

					<nav>
			            <ul class="pager">
			                <li v-show="pagination.previous" class="previous ">
			                    <button @click="paginate('previous')" class="btn btn-default btn-lg"><< Previous</button>
			                </li>
			                <li v-show="pagination.next" class="next">
			                    <button @click="paginate('next')" class="btn btn-default btn-lg" href="#all-blogs">Next >></button>
			                </li>
			            </ul>
		        	</nav>
				</ul>
			</div>

		</div>
	</div>
@stop
