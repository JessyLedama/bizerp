<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use App\ViewComposers\NavComposer;
use App\ViewComposers\SideNavComposer;

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
        // NavComposer
        view()->composer('layouts.navigation', NavComposer::class);

        // SideNavComposer
        view()->composer('layouts.side-nav', SideNavComposer::class);
    }
}
