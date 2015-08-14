<?php

namespace App\Http\Middleware;

use Closure;

class Activo
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
        //if(auth()->user()->estado != 0)
        //$acciones = $request->route()->getAction();
        //$roles = $acciones['roles'];
        //if (!in_array($this->auth->user()->profile_id,  $roles))
        //$country = 'Mexico';

        if(auth()->user()->estado == 0){
            // echo $country;
            return $next($request);
        }

        echo 'tu usuario esta desactivado, redireccionando...';
        echo "<meta http-equiv='refresh' content='3 ; url=auth/login '>";
    }
}