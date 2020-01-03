<?php

namespace App\Http\Middleware;

use Closure;

class FilterTime
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
        return date('i') % 2 ? $next($request) : abort(403);
    }
}
