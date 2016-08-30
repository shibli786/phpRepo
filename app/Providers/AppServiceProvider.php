<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;use Illuminate\Support\Facades\Blade;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        //

        Blade::directive('resolve', function($val,$val2) {


            \Log::info("blade directive $val"); 
        });
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
