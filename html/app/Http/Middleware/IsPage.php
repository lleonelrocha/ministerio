<?php
namespace App\Http\Middleware;

use Closure;
use Illuminate\Contracts\Auth\Guard;

class IsPage{

    public function __construct(Guard $guard)
    {
        $this->auth = $auth;
    }

    public function handle($request, Closure $next)
    {
        if(auth()->user()->estado != 0)
        {
            return redirect('auth/login');
        }

        return $next($request);
    }

}