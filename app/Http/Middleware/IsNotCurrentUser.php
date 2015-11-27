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
        if($request->route('user')->id !== Auth::user()->id)
        {
            flash()->error('You do not have permission to visit that page');

            return redirect('/');
        };  

        return $next($request);
    }
}
