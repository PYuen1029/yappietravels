<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\User;
use App\Blog;
use App\BlogPost;
use App\Photo;
use App\Region;
use App\Country;
use Illuminate\Support\Facades\DB;
use Validator;
use Auth;

use App\Http\Requests;
use App\Http\Controllers\Controller;

class BlogController extends Controller
{
    // MIDDLEWARES
    public function __construct()
    {
        $this->middleware('auth');
         
        $this->middleware('currentUser', ['except' => 'show', 'index']);

    }

    // VALIDATOR
    protected $validator;

    /**
     * Get a validator for updating blog information
     *
     * @param  array  $data
     * @return \Illuminate\Contracts\Validation\Validator
     */
    protected function validator(array $data)
    {
        return Validator::make($data, [
            'name' => 'required|unique:blogs,name,'. Auth::user()->id,
            'tagline' => 'max:255'
        ]);
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        // CREATE $allBlogs WITH ASSOCIATED TAGLINES AND USERS
        $allBlogs = Blog::with('user')->orderBy('id', 'desc')->get();

        return view('blog.index', compact('allBlogs'));
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Blog $blog)
    {
        return view('blog.show', compact('blog'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Blog $blog)
    {
        return view('blog.edit', compact('blog'));

    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Blog $blog)
    {
        // extra validation specific to registering Users
        $validator = $this->validator($request->all());

        if ($validator->fails()) {
            $this->throwValidationException(
                $request, $validator
            );
        }

        $blog->update($request->all());

        return redirect(route('blog.show', ['blog' => str_replace(' ', '-', $blog->name)]));
    }

}
