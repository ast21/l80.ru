<?php

namespace App\Ship\Middlewares;

use Illuminate\Routing\Middleware\ValidateSignature as LaravelValidateSignatureMiddleware;

class ValidateSignature extends LaravelValidateSignatureMiddleware
{
    /**
     * The names of the query string parameters that should be ignored.
     *
     * @var array<int, string>
     */
    protected $except = [
        // 'fbclid',
        // 'utm_campaign',
        // 'utm_content',
        // 'utm_medium',
        // 'utm_source',
        // 'utm_term',
    ];
}
