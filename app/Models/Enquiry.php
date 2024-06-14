<?php

namespace App\Models;

use DateInterval;
use DatePeriod;
use DateTime;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Enquiry extends Model
{
    use HasFactory;

    protected $fillable = ['client_type', 'first_name', 'last_name', 'email', 'phone_number', 'type_of_matter', 'find_us', 'preferred_contact_time'];
}
