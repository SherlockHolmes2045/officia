<?php

namespace App\Http\Middleware;

use Closure;

class Candidate
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
        if(auth()->check()){
            if(auth()->user()->account_type != "candidate"){
                abort(403, 'Access denied');
            }
        }
        return $next($request);
    }
}
