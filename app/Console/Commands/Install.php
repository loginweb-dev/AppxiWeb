<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use TCG\Voyager\VoyagerServiceProvider;

class Install extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'appxi:install';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Instalando appsi';

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
        $this->call('key:generate');
        $this->call('migrate:fresh');
        $this->call('storage:link');
        $this->call('db:seed');
        $this->call('vendor:publish', ['--provider' => VoyagerServiceProvider::class, '--tag' => ['config', 'voyager_avatar']]);
        $this->info('
            █ █▄░█ █▀ ▀█▀ ▄▀█ █░░ █░░ █▀▀ █▀▄ █ █ █
            █ █░▀█ ▄█ ░█░ █▀█ █▄▄ █▄▄ ██▄ █▄▀ ▄ ▄ ▄
        ');
    }
}
