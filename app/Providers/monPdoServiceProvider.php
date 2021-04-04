<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;

class monPdoServiceProvider extends ServiceProvider
{
    /**
     * Register services.
     *
     * @return void
     */
    public function register()
    {
        $this->app->singleton('monPdo', function () {
            return new \App\MyApp\monPdo;
        });
    }

    /**
     * Bootstrap services.
     *
     * @return void
     */
    public function boot()
    {
        //
    }
}
