<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Photo extends Model
{
    protected $fillable = [
    	'name',
    	'path',
    	'thumbnail_path'
    ];

    /**
     * RELATIONSHIPS
     */
    
    public function blogPost()
    {
    	return $this->belongsTo('App\BlogPost');
    }
}
