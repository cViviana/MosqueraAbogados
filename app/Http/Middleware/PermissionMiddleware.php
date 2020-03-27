<?php

namespace App\Http\Middleware;
use Illuminate\Support\Facades\Auth;

use Closure;

class PermissionMiddleware
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle($request, Closure $next, $permiso)
    {
        if(Auth::guest()){
            //un invitado tiene restringido
            return redirect('/home');
        }
        if(!$request->user()->can($permiso)){
            //este usuario no puede acceder a este permiso
            return redirect()->route('accesoDenegado');
        }
        return $next($request);
    }
}
