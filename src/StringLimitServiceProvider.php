<?php

namespace Pkc\WordLimit;

use Illuminate\Support\ServiceProvider;

class WordLimitServiceProvider extends ServiceProvider
{
    /**
     * Register services.
     */
    public function register()
    {
        // Helper function লোড করুন
        $this->loadHelpers();
    }

    /**
     * Bootstrap services.
     */
    public function boot()
    {
        // Publish Config (Optional)
        $this->publishes([
            __DIR__ . '/../config/wordlimit.php' => config_path('wordlimit.php'),
        ]);
    }

    /**
     * Load the helper functions.
     */
    protected function loadHelpers()
    {
        require_once __DIR__ . '/helpers.php';
    }
}
