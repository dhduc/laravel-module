<?php

namespace Unet\Module\Console\Commands;

use Illuminate\Console\Command;

/**
 * Class CreateModule
 * @package Unet\Module\Console\Commands
 */
class CreateModule extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'unet:module';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Unet module command';

    /**
     * CreateModule constructor.
     */
    public function __construct()
    {
        parent::__construct();
    }

    /**
     * Execute the console command.
     *
     * @return mixed
     */
    public function handle()
    {
        $this->info('Unet module command');
    }
}
