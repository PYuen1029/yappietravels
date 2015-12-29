<?php

namespace App;

use App\Blog;
use Auth;
use Illuminate\Database\Eloquent\Model;

class BlogPostRepo extends Model
{
    public function getPaginatedBlogPosts(Blog $blog, $n = 10)
    {
    	$blogPosts = $blog->blogPost()
    					->latest()
    					->simplePaginate($n);

    	return $blogPosts;
    }
}
