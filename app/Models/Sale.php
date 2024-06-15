<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Sale extends Model
{
    protected $fillable = ['matter_id', 'details'];

    public function matter()
    {
        return $this->belongsTo(Matter::class);
    }
}
