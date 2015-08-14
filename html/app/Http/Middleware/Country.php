<?php

namespace App\Http\Middleware;

use Closure;

class Country
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
        $country = 'Mexico';

        if( $country == 'Mexico' ){
            echo $country;
            return $next($request);
        }
        return redirect('/');
    }
}