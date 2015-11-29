<?php

namespace App;

use Symfony\Component\HttpFoundation\File\UploadedFile;
use App\Photo;
use App\Thumbnail;

/**
 * summary
 */
class AddPhotoToBlogPost
{
    protected $blogPost;
    protected $file;

    public function __construct(BlogPost $blogPost, UploadedFile $file, Thumbnail $thumbnail = null)
    {
        $this->blogPost = $blogPost;
        $this->file = $file;
        $this->thumbnail = $thumbnail ?: new Thumbnail;

    }

    public function save()
    {
        // Attach the photo to the flyer
    	$photo = $this->blogPost->addPhoto($this->makePhoto());

    	// Move the photo to the images folder
    	$this->file->move($photo->baseDir(), $photo->name);

    	// generate a thumbnail
        $this->thumbnail->make($photo->path, $photo->thumbnail_path);
	    
    }

    protected function makePhoto()
    {
    	return new Photo(['name' => $this->makeFileName()]);
    }

    protected function makeFileName()
    {
    	$name = sha1(
            time(). $this->file->getClientOriginalName()
        );

        $extension = $this->file->getClientOriginalExtension();

        return "{$name}.{$extension}";
    }

}