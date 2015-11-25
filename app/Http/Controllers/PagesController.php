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

use App\Http\Requests;
use App\Http\Controllers\Controller;

class PagesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        // create $countryList
        $countriesCount = DB::table('countries')->count();

        $numRows = 6;

        $numInColmn = $countriesCount/$numRows;

        $countryList = [];

        for($i = 0; $i < $numRows; $i++){
            $countries{$i} = Country::whereBetween('id', array($i * $numInColmn, ($i + 1) * $numInColmn))->get();

            $iplus = $i + 1;

            $countryList["countries{$iplus}"] = $countries{$i};
        }

        // create $featuredBlogs
        $featuredBlogs = Blog::featured()->recent()->get();

        // create $recentPosts
        $recentPosts = BlogPost::recent()->get();

        return view('pages.index', compact('countryList', 'numRows', 'featuredBlogs', 'recentPosts'));
    }
    
}
