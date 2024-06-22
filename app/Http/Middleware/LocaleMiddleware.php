<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class LocaleMiddleware
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next): Response
    {
        //dd(session()->all());
        $locale = session('locale') ?? 'ro';
        session()->put('locale', $locale);
        // Locale is enabled and allowed to be changed
   
        setAllLocale($locale); 
    
        
        return $next($request);
    }
}
