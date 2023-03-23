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
        echo "The ageCheck GLOBAL middleware is working on this page!";

        // if the age is less than 18, then redirect to the noaccess page
        if($request->age && $request->age<= 18) 
        {
            return redirect('noaccess');
        }
        return $next($request);
    }
}

// use this to check http://127.0.0.1:8000/?age=10