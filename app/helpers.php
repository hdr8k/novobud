<?php

declare(strict_types=1);

if (!function_exists('changeLang')) {
    /**
     * Function returns a link to the current page with the transferred language label
     *
     * @param string $lang
     *
     * @return string Link
     */
    function changeLang(string $lang)
    {
        $referer = request()->url();
        $parse_url = parse_url($referer, PHP_URL_PATH);

        if (request()->route()->uri !== '/') {
            $segments = explode('/', $parse_url);

            if (in_array($segments[1], config('local.languages'))) {
                unset($segments[1]);
            }

            if ($lang != config('local.default_language')) {
                array_splice($segments, 1, 0, $lang);
            }

            $url = request()->root() . implode("/", $segments);
        } else {
            $url = request()->root() . '/' . $lang;
        }

        if (parse_url($referer, PHP_URL_QUERY)) {
            $url = $url . '?' . parse_url($referer, PHP_URL_QUERY);
        }

        return $url;
    }
}

if (!function_exists('localUrl')) {
    /**
     * Function returns the passed link with the current language label
     *
     * @param string $url
     *
     * @return string link
     */
    function localUrl(string $url): string
    {
        $currentLocal = app()->getLocale();
        $defaultLang = config('local.default_language');

        return $defaultLang === $currentLocal ? url("/$url") : url("/{$currentLocal}/{$url}");
    }
}

if (!function_exists('checkCurrentUrl')) {
    /**
     *
     * @param string $url
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
