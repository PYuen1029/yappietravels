<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\BlogPostValidationRequest;
use Redirect;

use App\User;
use App\Blog;
use App\BlogPost;
use App\Photo;
use App\Region;
use App\Country;
use Illuminate\Support\Facades\DB;
use Validator;
use Auth;
use App\BlogPostRepo;

use Carbon\Carbon;

use App\Http\Requests;
use App\Http\Controllers\Controller;

class BlogPostController extends Controller
{
    protected $blogPostRepo;

    // MIDDLEWARES
    public function __construct(BlogPostRepo $blogPostRepo)
    {
        $this->blogPostRepo = $blogPostRepo;

        $this->middleware('auth', ['except' => array('index', 'show', 'api')]);
         
        $this->middleware('currentUser', ['except' => array('index', 'show', 'api')]);

    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $allPosts = BlogPost::with('blog')->orderBy('id', 'desc')->get();

        return view('blogPost.index', compact('allPosts'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Blog $blog)
    {
        return view('blogPost.create', compact('blog'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(BlogPostValidationRequest $request, Blog $blog)
    {
        $blogPost = new BlogPost($request->all());

        $blog->blogPost()->save($blogPost);

        return Redirect::route('blog.blogPost.edit', [
            'blog' => getUrlForThisName($blog),
            'blogPost' => getUrlForThisName($blogPost)]);

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Blog $blog, BlogPost $blogPost)
    {
        return view('blogPost.show', compact('blogPost'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Blog $blog, BlogPost $blogPost)
    {
        return view('blogPost.edit', compact('blogPost'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(BlogPostValidationRequest $request, Blog $blog, BlogPost $blogPost)
    {
        $blogPost->update($request->all());

        return Redirect::route('blog.edit', ['blog' => getUrlForThisName($blog)]);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Blog $blog, BlogPost $blogPost)
    {
        $blogPost->delete();

        return Redirect::route('blog.edit', ['blog' => getUrlForThisName($blog)]);
    }

    public function api(Blog $blog)
    {
        return $this->blogPostRepo->getPaginatedBlogPosts($blog, 5);
    }

}
