<?php

namespace Pkc\WordLimit;

use Illuminate\Support\ServiceProvider;

class WordLimitServiceProvider extends ServiceProvider
{
    /**
     * Register services.
     */
    public function register(): void
    {
        $this->loadHelpers();
        
        $this->mergeConfigFrom(
            __DIR__ . '/../config/wordlimit.php', 'wordlimit'
        );
    }

    /**
     * Bootstrap services.
     */
    public function boot(): void
    {
        $this->publishes([
            __DIR__ . '/../config/wordlimit.php' => config_path('wordlimit.php'),
        ], 'wordlimit-config');
    }

    /**
     * Load the helper functions.
     */
    protected function loadHelpers(): void
    {
        require_once __DIR__ . '/helpers.php';
    }
} 