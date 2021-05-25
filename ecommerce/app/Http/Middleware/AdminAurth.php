<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;

class AdminAurth
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle(Request $request, Closure $next)
    {
        if($request->path()=='adminlogin' && $request->session()->has("admin")){
            return redirect('/adminpanel');
        }
        return $next($request);
    }
}