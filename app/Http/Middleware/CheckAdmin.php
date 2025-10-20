<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;

class CheckAdmin
{
    public function handle(Request $request, Closure $next)
    {
        if (!session('admin', false)) {
            return redirect('/')->with('message', 'Tikai administratoriem ir piekļuve šai lapai');
        }

        return $next($request);
    }
}