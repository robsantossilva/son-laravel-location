<?php

namespace Modules\Location\Providers;

use Illuminate\Support\Facades\Route;
use Illuminate\Support\ServiceProvider;
use Modules\Location\Location;

class LocationServiceProvider extends ServiceProvider
{
    public function boot()
    {
        Route::middleware(['web'])
            ->group(__DIR__ . '/../Routes/web.php');

        $this->loadTranslationsFrom(__DIR__ . '/../Lang', 'Location');
    }

    public function register()
    {
        // Register Facade
        $this->app->singleton('Location.location', function ($app) {
            //$config = $app['config']->get('pages.home');
            return new Location('pt-br');
        });
    }
}
