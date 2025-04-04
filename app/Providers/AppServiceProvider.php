<?php

namespace App\Providers;

use Illuminate\Support\Facades\Blade;
use Illuminate\Support\ServiceProvider;

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
        Blade::anonymousComponentPath(resource_path('views/contacts/components'), 'contacts');
        Blade::anonymousComponentNamespace('App\\Contacts\\Views\\Components', 'contacts');

        Blade::anonymousComponentPath(resource_path('views/auth/components'), 'auth');
        Blade::anonymousComponentNamespace('App\\Auth\\Views\\Components', 'auth');
    }
}
