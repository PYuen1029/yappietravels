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
use App\Http\Requests\BlogValidationRequest;
use App\Http\Controllers\Controller;

class BlogController extends Controller
{
    // MIDDLEWARES
    public function __construct()
    {
        $this->middleware('auth', ['except' => array('index', 'show')]);
         
        $this->middleware('currentUser', ['except' => array('index', 'show')]);

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
        $blogPosts = $blog->blogPost()->orderBy('id', 'desc')->get();

        return view('blog.show', compact('blog', 'blogPosts'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Blog $blog)
    {
        $blogPosts = $blog->blogPost()->orderBy('id', 'desc')->get();

        return view('blog.edit', compact('blog', 'blogPosts'));

    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(BlogValidationRequest $request, Blog $blog)
    {
        $blog->update($request->all());

        return redirect(route('blog.show', ['blog' => getUrlForThisName($blog)]));
    }

}
