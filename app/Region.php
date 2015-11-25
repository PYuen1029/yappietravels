<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Region extends Model
{
    protected $fillable = [
    	'name',
    	'vital_info'
    ];


    /**
     * RELATIONSHIPS
     */

    public function country()
    {
    	return $this->hasMany(App\Country);
    }
}
