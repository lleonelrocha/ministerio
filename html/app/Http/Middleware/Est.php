<?php namespace App\Http\Middleware;

use Closure;
use Illuminate\Contracts\Auth\Guard;

class Est {

    public function __construct(Guard $auth)
    {
        $this->auth = $auth;
    }


    public function handle($request, Closure $next)
    {
            if(auth()->user()->estado != 0)
            {
                //return redirect()->back()->with('msg_ok', 'mensaje');
                return redirect()->intended('auth/login');
            }

            return $next($request);
    }

}
