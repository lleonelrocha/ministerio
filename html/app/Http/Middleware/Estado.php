<?php namespace App\Http\Middleware;

use Closure;
use Illuminate\Contracts\Auth\Guard;

class Estado {



    public function __construct(Guard $auth)
    {
        $this->auth= $auth;
    }


    public function handle($request, Closure $next)
    {
            if(auth()->check() && auth()->user()->estado == 0)
            return $next($request);
    }

}
