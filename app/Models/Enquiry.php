<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Enquiry extends Model
{
    use HasFactory;

    protected $fillable = ['user_id', 'client_type', 'first_name', 'last_name', 'email', 'phone_number', 'type_of_matter', 'find_us', 'preferred_contact_time'];

    public function matters(): HasMany
    {
        return $this->hasMany(Matter::class);
    }
}
