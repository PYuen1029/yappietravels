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

use App\Http\Requests;
use App\Http\Controllers\Controller;

class UserController extends Controller
{
    // ATTACH Auth AND IsNotCurrentUser middleware to for all routes except show
    public function __construct()
    {
         $this->middleware('auth');
         
         $this->middleware('currentUser', ['except' => 'show']);

    }

    protected function validator(array $data)
    {
        return Validator::make($data, [
            'email'             => 'required|email|max:150|unique:users,email,' . Auth::user()->id
        ]);
    }


    /**
     * Show a profile page.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(User $user)
    {
        return view('user.show', compact('user'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(User $user)
    {
        return view ('user.edit', compact('user'));
    }

    /**
     * Update the User from the request from user.edit
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(UserValidationRequest $request, User $user)
    {
        // also needs additional custom validation specific to updating User information. C.f. AuthController@postRegister
        $validator = $this->validator($request->all());

        if ($validator->fails()) {
            $this->throwValidationException(
                $request, $validator
            );
        }

        $user->update($request->all());

        return redirect(route('user.show', ['user' => $user->id]));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(User $user)
    {
        $user->delete();

        return redirect('/');   
    }
}
