<?php

namespace App\Http\Middleware;

use Closure;
use Auth;

class CheckForSasAdmin
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
        if(Auth::user()->level != 0){
            return redirect()->route('dashboard')->with('warning', 'You cannot access that features!');
        }

        return $next($request);
    }
}
