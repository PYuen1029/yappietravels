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
    /**
     * Get a validator for registering new users, on top of UserValidationRequest.
     *
     * @param  array  $data
     * @return \Illuminate\Contracts\Validation\Validator
     */
    protected function requireInscription(array $data)
    {
        return Validator::make($data, [
            'inscription_title'         => 'required',
            'inscription_content'       => 'required',
        ]);
    }

    public function store(PhotoValidationRequest $request, Blog $blog, BlogPost $blogPost)
    {
        $photo = $request->file('photo');

        (new AddPhotoToBlogPost($blogPost, $photo))->save();
    }

    public function edit(Blog $blog, BlogPost $blogPost, Photo $photo)
    {
        return view('photo.edit', compact('blogPost', 'photo'));
    }

    public function update(Request $request, Blog $blog, BlogPost $blogPost, Photo $photo)
    {
        // extra validation specific to adding an inscription
        $validator = $this->requireInscription($request->all());

        if ($validator->fails()) {
            $this->throwValidationException(
                $request, $validator
            );
        }

        $photo->inscription_title = $request['inscription_title'];
        $photo->inscription_content = $request['inscription_content'];
        $photo->save();

        return redirect(route('blog.blogPost.edit', [
            'blog'          => getUrlForThisName($blog),
            'blogPost'      => getUrlForThisName($blogPost)
        ]));

    }

    public function destroy(Blog $blog, BlogPost $blogPost, Photo $photo)
    {
        $photo->delete();

        return back();
    }
}
