<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class scoreCheck
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
        
        echo "The scoreCheck group middleware is working on this page!";

        // if the score is less than 70, then redirect to the banned page
        if ($request->score && $request->score < 70) {
            return redirect('banned');
        }


        return $next($request);
    }
}
