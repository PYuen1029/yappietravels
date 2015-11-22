<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Photos extends Model
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
    	$this->belongsTo('App\BlogPost');
    }
}
