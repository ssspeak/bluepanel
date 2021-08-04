<?php

namespace Azaan\Bluepanel;

use Illuminate\Support\ServiceProvider;

class BluepanelServiceProvider extends ServiceProvider
{
    /**
     * Register services.
     *
     * @return void
     */
    public function register()
    {
        //
        $this->app->make('Azaan\Bluepanel\BluepanelController');
        $this->loadViewsFrom(__DIR__.'/public/views', 'bluepanel');
    }

    /**
     * Bootstrap services.
     *
     * @return void
     */
    public function boot()
    {
        //
        include __DIR__.'/routes.php';
        $this->publishes([
            __DIR__.'/public/css' => public_path('css'),
            __DIR__.'/public/views' => resource_path('views/bluepanel'),
        ]);

        $this->loadRoutesFrom(__DIR__.'/routes.php');
    }
}
