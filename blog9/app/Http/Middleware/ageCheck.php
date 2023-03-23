<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class ageCheck
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next): Response
    {
        // this is going to show on every page the middleware is working.
        echo "This is the ageCheck middleware";

        // if the age is less than 18, then redirect to the home page
        if ($request->age <= 18) {
            return redirect('home');
        }
        return $next($request);
    }
}
