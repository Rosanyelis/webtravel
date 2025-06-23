<?php

namespace App\Helpers;

use Illuminate\Support\Facades\App;

class LanguageHelper
{
    /**
     * Generar URL con el idioma actual
     */
    public static function localizedRoute($name, $parameters = [], $absolute = true)
    {
        $locale = App::getLocale();
        $url = route($name, $parameters, $absolute);
        
        // Si la URL no contiene el idioma, agregarlo
        if (!str_contains($url, '/' . $locale . '/')) {
            $baseUrl = url('/');
            $path = parse_url($url, PHP_URL_PATH);
            return $baseUrl . '/' . $locale . $path;
        }
        
        return $url;
    }
    
    /**
     * Obtener el idioma actual
     */
    public static function getCurrentLocale()
    {
        return App::getLocale();
    }
    
    /**
     * Obtener idiomas disponibles
     */
    public static function getAvailableLocales()
    {
        return [
            'en' => 'English',
            'es' => 'Español'
        ];
    }
    
    /**
     * Verificar si es el idioma actual
     */
    public static function isCurrentLocale($locale)
    {
        return App::getLocale() === $locale;
    }
} 