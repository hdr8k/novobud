<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;

class InitCommand extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'init {--reset=false} {--seed=false}';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Init';

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
        $reset = $this->option('reset') === 'true';
        $seed  = $this->option('seed') === 'true';

        if ($reset) {
            $this->call('migrate:fresh');
        } else {
            $this->call('migrate');
        }


        $this->call('admin:create');

        $this->call('seo:migrate');


        if ($seed) {
            $this->info('Seed');
            $this->call('db:seed');
        }

        return 0;
    }
}
