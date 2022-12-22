<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
//
//below for schema default string added in boot function
use Illuminate\Support\Facades\Schema; 

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        //To add default schema length
        Schema::defaultstringLength(191);
    }
}
