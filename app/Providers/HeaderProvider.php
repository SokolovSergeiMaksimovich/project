<?php

namespace App\Providers;

use App\Models\Module;
use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\View;

class HeaderProvider extends ServiceProvider
{
    /**
     * Register services.
     */
    public function register(): void
    {
        //
    }

    /**
     * Bootstrap services.
     */
    public function boot(): void
    {
        //
        View::composer('layouts/layout', function ($view) {
            $view->with('modules', Module::all());
        });
    }
}
