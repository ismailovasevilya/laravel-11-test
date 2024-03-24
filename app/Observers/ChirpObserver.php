<?php

namespace App\Observers;

use App\Models\Chirp;
use Illuminate\Support\Facades\Log;

class ChirpObserver
{
    /**
     * Handle the Chirp "created" event.
     */
    public function created(Chirp $chirp): void
    {
        Log::info('chirp has been created');
    }

    /**
     * Handle the Chirp "updated" event.
     */
    public function updated(Chirp $chirp): void
    {
        //
    }

    /**
     * Handle the Chirp "deleted" event.
     */
    public function deleted(Chirp $chirp): void
    {
        //
    }

    /**
     * Handle the Chirp "restored" event.
     */
    public function restored(Chirp $chirp): void
    {
        //
    }

    /**
     * Handle the Chirp "force deleted" event.
     */
    public function forceDeleted(Chirp $chirp): void
    {
        //
    }
}
