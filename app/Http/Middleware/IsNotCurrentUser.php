<?php

namespace App\Http\Middleware;

use Closure;
use Auth;

class IsNotCurrentUser
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle($request, Closure $next)
    {
        $checkId = '';
        // assign $checkId to $request->route('user') if this is a user.edit
        if ($request->route('user'))
        {
            $checkId = $request->route('user')->id;
        }

        // assign $checkId to $request->route('blog')...->id if this is a blog.edit
        else if ($request->route('blog'))
        {
            $checkId = $request->route('blog')->user()->first()->id;
        }

        // assign $checkId to $request->route('blogPost')...->id if this is a blogPost.edit
        else 
        {
            $checkId = Auth::user()->id;
        }

        if($checkId !== Auth::user()->id)
        {

            flash()->error('You do not have permission to visit that page');

            return redirect('/user');

        };  

        return $next($request);
    }
}
