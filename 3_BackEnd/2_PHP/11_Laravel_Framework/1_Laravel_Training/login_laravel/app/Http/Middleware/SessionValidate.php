<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;

class SessionValidate
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle(Request $request, Closure $next)
    {

        if(!session()->has("user_authenticated")){

            return redirect("account/login")->with("Sessão expirou");

        }

        return $next($request);

        
        
    }
}
