<?php

namespace App\Models;

use App\Observers\ChirpObserver;
use Illuminate\Database\Eloquent\Attributes\ObservedBy;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

#[ObservedBy([ChirpObserver::class])]
class Chirp extends Model
{
    use HasFactory;

    protected $fillable = [
        'message',
    ];

    public function user(): BelongsTo
    {
        return $this->belongsTo(User::class);
    }

    protected $dispatchesEvents = [
        'updating' => \App\Events\ChirpProcessed::class,
    ];
}
