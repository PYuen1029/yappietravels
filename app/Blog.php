<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Blog extends Model
{
    protected $fillable = [
    	'name'
    ];

    /**
     * RELATIONSHIPS
     */

    public function blogPosts()
    {
    	$this->hasMany('App\BlogPost');

    }

    public function user()
    {
    	$this->belongsTo('App\User');
    }

    
}
