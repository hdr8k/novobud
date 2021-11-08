<?php

declare(strict_types=1);

if ( ! function_exists('changeLang')) {
    /**
     * Function returns a link to the current page with the transferred language label
     *
     * @param  string  $lang
     *
     * @return string Link
     */
    function changeLang(string $lang): string
    {
        if ( ! in_array($lang, config('local.languages'), true)) {
            throw new \App\Services\Localization\LocalNotFoundException("Local {$lang} not found");
        }


        $segment     = collect(Request::segments())->last();
        $defaultLang = config('local.default_language');
        $route       = Request::route();

        if ($route && $route->getName() === 'index') {
            return $defaultLang === $lang ? '/' : "/{$lang}";
        }

        return $defaultLang === $lang ? "/$segment" : "/{$lang}/{$segment}";
    }
}

if ( ! function_exists('localUrl')) {
    /**
     * Function returns the passed link with the current language label
     *
     * @param  string  $url
     *
     * @return string link
     */
    function localUrl(string $url): string
    {
        $currentLocal = app()->getLocale();
        $defaultLang  = config('local.default_language');

        return $defaultLang === $currentLocal ? url("/$url") : url("/{$currentLocal}/{$url}");
    }
}

if ( ! function_exists('checkCurrentUrl')) {
    /**
     *
     * @param  string  $url
     *
     * @return string|null
     */
    function checkCurrentUrl(string $url): ?string
    {
        $segment = collect(request()->segments())->last();

        if ($segment === null && $url === '/') {
            return 'current';
        }

        return $url === $segment ? 'current' : null;
    }
}
