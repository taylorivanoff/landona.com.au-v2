<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use App\Services\Staff;

class StaffServiceProvider extends ServiceProvider
{
    /**
     * Register services.
     *
     * @return void
     */
    public function register()
    {
        // Register the Staff class in the service container
        $this->app->singleton(Staff::class, function ($app) {
            return new Staff();
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
