<?php

namespace App\Http\Middleware;

use Closure;

class CheeckListe
{

    public function handle($request, Closure $next)
    {
        return $next($request);
    }
}
