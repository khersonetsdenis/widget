<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;

class CheckUserBill extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'command:name'; //-> вот это вставить в кернел

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Command description';

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
        // Всех пользователей у который дипозит равено 0
		//foreach оправить всем письма;
    }
}
