<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;

class rnocheck
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
        if($request->rno > 10)
        {
            return redirect('my_form');
        }
        return $next($request);
    }
}
