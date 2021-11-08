<?php

namespace App\Http\Middleware;

use App\Services\Localization\LocalizationHandle;
use Closure;
use Illuminate\Http\Request;

class LocalMiddleware
{
    private LocalizationHandle $localizationHandle;

    public function __construct(LocalizationHandle $localizationHandle)
    {
        $this->localizationHandle = $localizationHandle;
    }

    /**
     * Handle an incoming request.
     *
     * @param  Request  $request
     * @param  Closure  $next
     *
     * @return mixed
     */
    public function handle(Request $request, Closure $next)
    {
        $this->localizationHandle->setLocal();

        return $next($request);
    }
}
