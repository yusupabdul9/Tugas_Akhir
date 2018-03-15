<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\Schema;
class AppServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        Schema::defaultStringLength(191);
    }

    /**
     * Syntax error or access violation: 1071 Specified key was t oo long; max key length is 767 bytes
     *
     * @return long.Max key length is 767
     */
    public function register()
    {
        //
    }
}
