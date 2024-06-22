<?php

use Carbon\Carbon;
use Illuminate\Support\Facades\File;

if (!function_exists('setAllLocale')) {

    /**
     * @param $locale
     */
    function setAllLocale($locale)
    {
        setAppLocale($locale);
        setPHPLocale($locale);
        setCarbonLocale($locale);
    }
}

if (!function_exists('setAppLocale')) {

    /**
     * @param $locale
     */
    function setAppLocale($locale)
    {
        app()->setLocale($locale);
    }
}

if (!function_exists('setPHPLocale')) {

    /**
     * @param $locale
     */
    function setPHPLocale($locale)
    {
        setlocale(LC_TIME, $locale);
    }
}

if (!function_exists('setCarbonLocale')) {

    /**
     * @param $locale
     */
    function setCarbonLocale($locale)
    {
        Carbon::setLocale($locale);
    }
}

if (!function_exists('getLocaleName')) {

    /**
     * @param $locale
     * @return mixed
     */
    function getLocaleName($locale)
    {
        //return config('boilerplate.locale.languages')[$locale]['name'];
    }
}

if (!function_exists('getAllLocales')) {

    /**
     * @param $locale
     * @return mixed
     */
    function getAllLocales($fromFileSystem = false)
    {
        $locales = [
            'it',
            'ro',
            'en'
        ];

        if ($fromFileSystem) {
            $localePath = base_path('lang'); // Modificato il percorso
            $files = File::files($localePath);
            $locales = [];

            foreach ($files as $file) {
                if ($file->getExtension() === 'json') {
                    $locales[] = pathinfo($file->getFilename(), PATHINFO_FILENAME); // Estrae solo il nome del file senza estensione
                }
            }
        }

        return $locales;
    }
}

if (!function_exists('existLocale')) {

    /**
     * @param $locale
     * @return mixed
     */
    function existLocale($lang)
    {
        $locales = getAllLocales(true);
        return in_array($lang, $locales);
    }
}
