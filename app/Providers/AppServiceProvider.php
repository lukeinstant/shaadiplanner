<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use App\Listing;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        view()->composer('*', 'App\Http\Composers\ClientComposer');
    }

    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }
}
