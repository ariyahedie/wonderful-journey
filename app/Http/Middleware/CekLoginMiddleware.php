<?php

namespace App\Http\Middleware;

use Closure;

class CekLoginMiddleware
{
    public function handle($request, Closure $next)
    {
        if(!session('berhasil_login')){
            return redirect('/');
        }
        return $next($request);
    }
}