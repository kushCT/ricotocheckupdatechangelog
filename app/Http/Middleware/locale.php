<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\App;

class locale
{
    /**
     * Handle an incoming request.
     *
     * @param Request $request
     * @param Closure $next
     * @return mixed
     */
    public function handle(Request $request, Closure $next)
    {
        // Find matched pattern
        preg_match(
            "/([a-z]{2}-[A-Z]{2})*/",
            $request->server->get('HTTP_ACCEPT_LANGUAGE'),
            $matches,
            PREG_OFFSET_CAPTURE
        );

        // Set locale
        App::setLocale(reset($matches[0]));

        // redirect with language.
        return $next($request);
    }
}
