<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;
use Illuminate\Support\Facades\Auth;

class OnlyAdmin
{
    public function handle($request, Closure $next)
    {
        if (Auth::check() && Auth::id() === 1) {
            return $next($request);
        }

        return redirect('/'); // или abort(403)
    }
}