<?php

namespace App\Ship\Parents\Providers;

use Illuminate\Support\ServiceProvider as LaravelServiceProvider;

abstract class MiddlewareServiceProvider extends LaravelServiceProvider
{
    protected array $middlewares = [];

    protected array $middlewareGroups = [];

    protected array $middlewarePriority = [];

    protected array $routeMiddleware = [];
}
