<?php

namespace App;



use App\Blog;
use Illuminate\Database\Eloquent\Model;

class BlogRepo extends Model
{
    public function getPaginatedBlogs($n)
    {
    	$blogs = Blog::orderBy('updated_at', 'desc')
    		->simplePaginate($n);

    	return $blogs;
    }
}
