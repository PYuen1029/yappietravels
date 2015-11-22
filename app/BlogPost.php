<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class BlogPost extends Model
{
    protected $fillable = [
    	'published_at',
    	'title',
    	'tagline',
    	'content'
    ];

    /**
     * RELATIONSHIPS
     */
    
    public function photo()
    {
    	$this->hasMany('App\Photo');
    	
    }
}
