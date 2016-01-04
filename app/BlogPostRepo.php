<?php

namespace App;

use App\Blog;
use App\BlogPost;
use Auth;
use Illuminate\Database\Eloquent\Model;

class BlogPostRepo extends Model
{
    public function getPaginatedBlogPosts($blog, $n)
    {
    	if ($blog) {
	    	$blogPosts = $blog->blogPost()
	    					->latest()
	    					->simplePaginate($n);
	    }
// what if I can eager-load the user or blog so I can do the linking...
	    else {
	    	$blogPosts = BlogPost::with('blog.user')
	    					->latest()
	    					->simplePaginate($n);
	    }

    	return $blogPosts;
    }
}
