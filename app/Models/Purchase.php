<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Purchase extends Model
{
    protected $fillable = ['matter_id', 'details'];

    public function matter(): BelongsTo
    {
        return $this->belongsTo(Matter::class);
    }
}
