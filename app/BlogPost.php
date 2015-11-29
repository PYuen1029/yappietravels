<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use DB;



class BlogPost extends Model
{
    protected $fillable = [
    	'published_at',
    	'title',
    	'tagline',
    	'content',
        'blog_id'

    ];

    /**
     * RELATIONSHIPS
     */
    
    public function photo()
    {
    	return $this->hasMany('App\Photo');
    	
    }

    public function blog()
    {
        return $this->belongsTo('App\Blog');
    }


    /**
     * SCOPES
     */
    
    public function scopeRecent($query)
    {
        $rows = BlogPost::orderBy('id', 'desc')->take(5);

        return $rows;
    }
}
