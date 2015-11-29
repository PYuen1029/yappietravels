<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\User;
use App\Blog;
use App\BlogPost;
use App\Photo;
use App\Region;
use App\Country;
use App\AddPhotoToBlogPost;
use Illuminate\Support\Facades\DB;
use Validator;
use Auth;

use App\Http\Requests;
use App\Http\Requests\PhotoValidationRequest;
use App\Http\Controllers\Controller;

class PhotoController extends Controller
{
    public function store(PhotoValidationRequest $request, Blog $blog, BlogPost $blogPost)
    {
        $photo = $request->file('photo');

        (new AddPhotoToBlogPost($blogPost, $photo))->save();
    }

    public function destroy(Blog $blog, BlogPost $blogPost, Photo $photo)
    {
        $photo->delete();

        return back();
    }
}
