<?php

namespace App\Http\Middleware;

use Closure;

class role
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle($request, Closure $next, $role= null)
    {
         $user=$request->user();

         $role = explode("-", $role);

         if(in_array($user->role, $role))
           {
            return $next($request);
           }
           return redirect()->action('ClientesController@acceso');
    }
}
