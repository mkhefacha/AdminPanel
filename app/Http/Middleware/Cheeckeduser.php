<?php

namespace App\Http\Middleware;

use App\User;
use Closure;
use Session;
use Auth;

class Cheeckeduser
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request $request
     * @param  \Closure $next
     * @return mixed
     */
    public function handle($request, Closure $next)
    {
        if (Auth::check())
        {

        if
        (Auth::user()->active == "Inactive")
        {
            Auth::logout();
         return redirect('/login')->with('message',"votre session est desactivé ,merci de contacter l'admin");
        }

    }
        return $next($request);
    }
}
