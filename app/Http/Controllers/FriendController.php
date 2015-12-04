<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\UserValidationRequest;


use App\User;
use App\Blog;
use App\BlogPost;
use App\Photo;
use App\Region;
use App\Country;
use Illuminate\Support\Facades\DB;
use Validator;
use Auth;
use Carbon\Carbon;

use App\Http\Requests;
use App\Http\Controllers\Controller;

class FriendController extends Controller
{
    public function approveFriend(User $friend)
    {
    	Auth::user()->approve($friend);

    	flash()->success("Friend request approved.");

    	return redirect()->back();
    }

    public function denyFriend(User $friend)
    {
    	Auth::user()->deny($friend);

    	flash()->warning("Friend request denied.");

    	return redirect()->back();
    }
}
