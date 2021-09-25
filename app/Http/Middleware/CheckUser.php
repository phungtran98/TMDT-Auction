<?php

namespace App\Http\Middleware;

use Closure;

use Illuminate\Support\Facades\Auth;

class CheckUser
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
        // dd(Auth::guard('nhanvien')->check());
        if(Auth::guard('nhanvien')->check())
        {
                return $next($request);
        }
        else
        {
            return redirect()->route('getDangnhap');
        }
    }
}
