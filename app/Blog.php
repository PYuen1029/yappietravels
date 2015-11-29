<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Blog extends Model
{
    protected $fillable = [
    	'name',
        'user_id',
        'tagline'
    ];

    /**
     * RELATIONSHIPS
     */

    public function blogPost()
    {
    	return $this->hasMany('App\BlogPost');

    }

    public function user()
    {
    	return $this->belongsTo('App\User');
    }

    /**
     * SCOPES
     */
    
    public function scopeFeatured($query)
    {  
		return $query->where('featured', 1);
    }
    
    public function scopeRecent($query)
    {
    	return $query->orderBy('id', 'desc')->take(5);
    }

}
