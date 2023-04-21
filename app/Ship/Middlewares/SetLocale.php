<?php

namespace App\Ship\Middlewares;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Collection;
use Illuminate\Support\Facades\App;

class SetLocale
{
    /**
     * Handle an incoming request.
     *
     * @param \Illuminate\Http\Request $request
     * @param \Closure(\Illuminate\Http\Request): (\Illuminate\Http\Response|\Illuminate\Http\RedirectResponse) $next
     * @return \Illuminate\Http\Response|\Illuminate\Http\RedirectResponse
     */
    public function handle(Request $request, Closure $next)
    {
        $locale = $this->parseHttpLocale($request);
        App::setLocale($locale);

        return $next($request);
    }

    /**
     * Пример использования Accept-Language
     * https://developer.mozilla.org/ru/docs/Web/HTTP/Headers/Accept-Language
     *
     * @param Request $request
     * @return string
     */
    private function parseHttpLocale(Request $request): string
    {
        $localeList = ['ru', 'en', 'kk'];
        $defaultLocale = App::getLocale();
        $list = explode(',', $request->server('HTTP_ACCEPT_LANGUAGE', $defaultLocale));

        $locales = Collection::make($list)
            ->map(function ($locale) {
                $parts = explode(';', $locale);

                $mapping['locale'] = trim($parts[0]);

                if (isset($parts[1])) {
                    $factorParts = explode('=', $parts[1]);

                    $mapping['factor'] = $factorParts[1];
                } else {
                    $mapping['factor'] = 1;
                }

                return $mapping;
            })
            ->sortByDesc(fn($locale) => $locale['factor'])
            ->filter(fn($locale) => in_array($locale['locale'], $localeList));

        return $locales->first() ? $locales->first()['locale'] : $defaultLocale;
    }

}
