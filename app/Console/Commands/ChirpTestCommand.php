<?php

namespace App\Console\Commands;

use App\Models\Chirp;
use Illuminate\Console\Command;
use Illuminate\Support\Facades\Log;

class ChirpTestCommand extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'app:chirp-test-command';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Command description';

    /**
     * Execute the console command.
     */
    public function handle()
    {
        $chirps = Chirp::all();
        foreach ($chirps as $chirp) {
            $message = $chirp->message . '123';
            $chirp->update(['message' => $message]);
        }
    }
}
