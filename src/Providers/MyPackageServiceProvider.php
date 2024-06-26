<?php

namespace Mucahittopcu\Filmapi\Providers;

use Illuminate\Support\ServiceProvider;
use Mucahittopcu\Filmapi\Facades\MovieServiceFacade;
use Mucahittopcu\Filmapi\Services\MovieService;
class MyPackageServiceProvider extends ServiceProvider
{
    public function register()
    {
        $this->app->singleton(MovieServiceFacade::class, function ($app) {
            return new MovieServiceFacade(new MovieService($app));
        });
    }

    public function boot()
    {
        $this->loadRoutesFrom(__DIR__.'/../../routes/api.php');
    }
}