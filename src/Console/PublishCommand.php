<?php

namespace Pkc\WordLimit\Console;

use Illuminate\Console\Command;

class PublishCommand extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'wordlimit:publish';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Publish WordLimit configuration';

    /**
     * Execute the console command.
     */
    public function handle(): void
    {
        $this->call('vendor:publish', [
            '--tag' => 'wordlimit-config',
            '--force' => true
        ]);

        $this->info('WordLimit configuration published successfully!');
    }
} 