<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Country extends Model
{
    protected $fillable = [
    	'name',
    	'vital_info',
        'code'
    ];

    /**
     * RELATIONSHIPS
     */
    public function blogPost()
    {
    	$this->hasMany('App\BlogPost');

    }

    public function region()
    {
    	$this->belongsTo('App\Region');
    	
    }
}
