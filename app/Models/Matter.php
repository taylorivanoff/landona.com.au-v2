<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasOne;

class Matter extends Model
{
    protected $fillable = ['user_id', 'enquiry_id', 'type'];

    public function enquiry(): BelongsTo
    {
        return $this->belongsTo(Enquiry::class);
    }

    public function purchase(): HasOne
    {
        return $this->hasOne(Purchase::class);
    }

    public function sale(): HasOne
    {
        return $this->hasOne(Sale::class);
    }

    function user(): BelongsTo
    {
        return $this->belongsTo(User::class);
    }
}
