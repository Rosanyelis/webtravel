<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\App;
use Illuminate\Support\Facades\Session;

class SetLocale
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure(\Illuminate\Http\Request): (\Illuminate\Http\Response|\Illuminate\Http\RedirectResponse)  $next
     * @return \Illuminate\Http\Response|\Illuminate\Http\RedirectResponse
     */
    public function handle(Request $request, Closure $next)
    {
        // Obtener el idioma de la URL
        $locale = $request->segment(1);
        
        // Verificar si el idioma es válido
        $validLocales = ['en', 'es'];
        
        if (in_array($locale, $validLocales)) {
            App::setLocale($locale);
            Session::put('locale', $locale);
        } else {
            // Si no hay idioma válido en la URL, usar el idioma por defecto
            $defaultLocale = config('app.locale', 'en');
            App::setLocale($defaultLocale);
            Session::put('locale', $defaultLocale);
        }
        
        return $next($request);
    }
}
