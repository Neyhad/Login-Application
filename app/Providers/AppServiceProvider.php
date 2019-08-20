<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
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
         //this is due to the new laravel version 
        //(database from utf8 to utfbin_mb4 to accept new symbs.)
        //require us to store longest keys :)

        Schema::defaultStringLength(191);
    }
}
