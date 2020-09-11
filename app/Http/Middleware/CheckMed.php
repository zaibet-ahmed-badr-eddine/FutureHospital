<?php

namespace App\Http\Middleware;

use Closure;

class CheckMed
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
            if($request->user()->role_id != 3){
                Auth::logout();
                return redirect('/');
            }
            return $next($request);
        }
        return redirect('/');
    }
}
