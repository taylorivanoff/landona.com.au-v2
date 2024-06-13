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

    public static function generateTimeslots(): array
    {
        $start_time = new DateTime('09:00 AM');
        $end_time = new DateTime('05:00 PM');
        $interval = new DateInterval('PT30M'); // 30 minutes interval
        $period = new DatePeriod($start_time, $interval, $end_time);

        $days = [];
        for ($i = 0; $i < 2; $i++) {
            $current_day = new DateTime();
            $current_day->modify('+' . $i . ' weekdays');
            foreach ($period as $time) {
                $days[$current_day->format('l, d F Y')][] = $time->format('h:i A');
            }
        }

        return $days;
    }

}
