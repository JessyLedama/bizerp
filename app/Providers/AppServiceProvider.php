<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use App\ViewComposers\NavComposer;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     */
    public function register(): void
    {
        //
    }

    /**
     * Bootstrap any application services.
     */
    public function boot(): void
    {
        view()->composer('layouts.navigation', NavComposer::class);
    }
}
