<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;

class PhpUnit extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'test {file_name?}';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'phpunitを実行する.ファイルを指定する場合は引数にファイル名を指定する';

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
        $this->info(shell_exec("vendor/bin/phpunit " . $this->argument('file_name')));
    }
}
