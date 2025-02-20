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
        
        $configPath = dirname(__DIR__) . '/config/wordlimit.php';
        $this->mergeConfigFrom($configPath, 'wordlimit');
    }

    /**
     * Bootstrap services.
     */
    public function boot(): void
    {
        if ($this->app->runningInConsole()) {
            $configPath = dirname(__DIR__) . '/config/wordlimit.php';
            $this->publishes([
                $configPath => config_path('wordlimit.php'),
            ], 'wordlimit-config');

            $this->commands([
                Console\PublishCommand::class,
            ]);
        }
    }

    /**
     * Load the helper functions.
     */
    protected function loadHelpers(): void
    {
        require_once __DIR__ . '/helpers.php';
    }
} 