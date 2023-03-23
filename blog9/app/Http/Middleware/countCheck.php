<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class countCheck
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next): Response
    {
        // this is going to show on every page the middleware is working.
        echo "<br>";
        echo "<br>";
        echo "The countCheck route middleware is working on this page!";

        // if the count is less than 5, then redirect to the restricted page
        if ($request->count && $request->count < 10) {
            return redirect('restricted');
        }

        return $next($request);
    }
}

// use this to check http://
http://127.0.0.1:8000/about?=3