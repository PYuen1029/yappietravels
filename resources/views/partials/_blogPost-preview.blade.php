<h3 class="blogPost-title"> <a 
	href="{{ route('blog.blogPost.show', [
		'blog' =>getUrlForThisName($blog),
		'blogPost' => getUrlForThisName($blogPost)
	]) }}">
	{{ $blogPost->title }} 
</a> </h3>

<p class="blogPost-tagline"> {{ $blogPost->tagline }} </p>
