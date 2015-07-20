<?php namespace App\Http\Middleware;

use Closure;
use Illuminate\Contracts\Auth\Guard;

class IsAdmin {



    public function __construct(Guard $auth)
    {
        $this->auth= $auth;
    }


	public function handle($request, Closure $next)
	{
        $acciones = $request->route()->getAction();

        $roles = $acciones['roles'];


        if (!in_array($this->auth->user()->profile_id,  $roles))
        //  return response('Unauthorized.', 401);
        return redirect()->intended('auth/login');
    else
        //return redirect()->back()->withErrors('El usuario no existe o la contraseña es incorrecta.');

        return $next($request);
	}

}
