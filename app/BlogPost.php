<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use DB;
use App\Photo;
use Carbon\Carbon;
use DateTime;



class BlogPost extends Model
{
    protected $fillable = [
    	'published_at',
    	'title',
    	'tagline',
    	'content',
        'blog_id'

    ];

    protected $dates = [
        'published_at',
        'updated_at'
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

    /**
     * MUTATORS AND ACCESSORS
     */
    
    public function getPublishedAtAttribute($date)
    {
        $formattedDate = new Carbon($date);

        return $formattedDate->format('Y-m-d');

    }


    /**
     * EXTRA METHODS
     */
    
    public function addPhoto(Photo $photo)
    {
        return $this->photo()->save($photo);
    }
}
