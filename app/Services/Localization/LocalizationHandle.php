<?php

declare(strict_types=1);

namespace App\Services\Localization;


use Illuminate\Support\Facades\Request;

/**
 * Class LocalizationHandle
 * @package App\Services\Localization
 */
final class LocalizationHandle
{
    /**
     * @var string
     */
    private string $defaultLanguage;

    /**
     * @var array<string>
     */
    private array $languages;

    /**
     * LocalizationHandle constructor.
     */
    public function __construct()
    {
        $this->defaultLanguage = config('local.default_language');
        $this->languages       = config('local.languages');
    }


    /**
     *  Set local App and check local
     * @return void
     */
    public function setLocal(): void
    {
        $segment = Request::segment(1);

        $this->checker();

        if ($segment && in_array($segment, $this->languages, true)) {
            \App::setLocale($segment);
        } else {
            \App::setLocale($this->defaultLanguage);
        }
    }

    private function checker(): void
    {
        $segments = Request::segments();

        if ((count($segments) === 1)
            && (strlen($segments[0]) === 2
                && !in_array($segments[0], $this->languages, true))) {
            abort(404);
        }
    }
}
