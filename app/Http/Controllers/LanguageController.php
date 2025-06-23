<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\App;
use Illuminate\Support\Facades\URL;

class LanguageController extends Controller
{
    public function change(Request $request, $locale)
    {
        // Verificar si el idioma es válido
        if (!in_array($locale, ['en', 'es'])) {
            abort(400);
        }
        
        // Establecer el idioma en la sesión
        App::setLocale($locale);
        Session::put('locale', $locale);
        
        $previousUrl = URL::previous();
        $previousRoute = app('router')->getRoutes()->match(app('request')->create($previousUrl));
        $previousRouteName = $previousRoute->getName();
        
        $parameters = $previousRoute->parameters();
        $parameters['locale'] = $locale;
        
        return redirect()->route($previousRouteName, $parameters);
    }
}
