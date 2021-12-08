<?php

namespace App\Modules\Post\Commands;

use Illuminate\Console\Command;

class PostImportCommand extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'post:import';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Import posts from other resources.';

    /**
     * Create a new command instance.
     *
     * @return void
     */
    public function __construct()
    {
        parent::__construct();
    }

    /**
     * Execute the console command.
     *
     * @return int
     */
    public function handle()
    {
        $this->line('Importing posts...');
        return Command::SUCCESS;
    }
}
