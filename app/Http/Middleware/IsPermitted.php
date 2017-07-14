<?php

namespace App\Http\Middleware;
use Auth;
use App\Role;
use Closure;
use App\User;

class IsPermitted
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
      

        return $next($request);
    }
}
