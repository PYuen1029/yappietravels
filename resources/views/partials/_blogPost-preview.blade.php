<div class="row">	
	<h3 class="blogPost-title"> <a 
		href="{{ route('blog.blogPost.show', [
			'name' => $blog->name,
			'title' => $blogPost->title
		]) }}">
		{{ $blogPost->title }} </a> </h3>
	<p class="blogPost-tagline"> {{ $blogPost->tagline }} </p>
</div>