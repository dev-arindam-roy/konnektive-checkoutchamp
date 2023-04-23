<?php

namespace KonnektiveCrm\ApiDoc;

use Illuminate\Support\ServiceProvider;

class KonnektiveCrmApiDoc extends ServiceProvider
{
    /**
     * Register services.
     */
    public function register(): void
    {
        
    }

    /**
     * Bootstrap services.
     */
    public function boot(): void
    {
        $this->loadRoutesFrom(__DIR__ . '/web.php');

        $this->loadViewsFrom(__DIR__ , 'konnective-crm');
    }
}