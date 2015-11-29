<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Symfony\Component\HttpFoundation\File\UploadedFile;
use Image;

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

    public function filePath()
    {
        return $this->baseDir() . '/' . $this->fileName();
    }

    public function setNameAttribute($name)
    {
        $this->attributes['name'] = $name;

        $this->path = $this->baseDir() . '/' . $name;

        $this->thumbnail_path = $this->baseDir() . '/tn-' . $name;
    }

    public function delete()
    {
        \File::delete([
            $this->path,
            $this->thumbnail_path

        ]);

        parent::delete();
    }

    public function baseDir()
    {
        return 'img/photos';
    }

}
