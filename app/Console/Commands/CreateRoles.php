<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use Bican\Roles\Models\Role;

class CreateRoles extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'roles:create {name} {slug} {level?} {description?}';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Creates a role in the database with the specified args.';

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
     * @return mixed
     */
    public function handle()
    {
        
    }
}
