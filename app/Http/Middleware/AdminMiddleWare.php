<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Auth ;

class AdminMiddleWare
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
        if(Auth::id())
        {
            return $next($request);
        }else 
        {
            return redirect()->route('admin.login');
        }
    }
}
