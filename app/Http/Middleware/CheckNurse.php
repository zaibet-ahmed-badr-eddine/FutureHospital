<?php

namespace App\Http\Middleware;

use Closure;

class CheckNurse
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
        if($request->user()){
            if($request->user()->role_id != 4){
                Auth::logout();
                return redirect('/');
            }
            return $next($request);
        }
        return redirect('/');
    }
}
