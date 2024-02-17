<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;

class SetLocale
{
    public function handle(Request $request, Closure $next, string ...$guards): mixed
    {
        $var = 'fr';

        if($request->query('lang')) {
            $var = $request->query('lang');
        }

        app()->setLocale($var);

        return $next($request);
    }
}
