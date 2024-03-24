<?php

namespace App\Listeners;

use App\Events\ChirpProcessed;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Support\Facades\Log;

class ChirpListener
{
    /**
     * Create the event listener.
     */
    public function __construct()
    {
        //
    }

    /**
     * Handle the event.
     */
    public function handle(ChirpProcessed $event): void
    {
        Log::info('listener triggered on updating chirp');
    }
}
