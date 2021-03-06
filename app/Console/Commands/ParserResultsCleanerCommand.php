<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use App\Services\ParserService;

class ParserResultsCleanerCommand extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'parser:clean';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Cleans all expired parser results from database';

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
    public function handle(ParserService $parserService)
    {
        try {
            $parserService->cleanParsedResults();
        } catch (\Throwable $th) {
            $this->error($th->getMessage());
            return 1;
        }
        $this->info('Command executed!');
        return 0;
    }
}
