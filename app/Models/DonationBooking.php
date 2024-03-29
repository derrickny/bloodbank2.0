<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class DonationBooking extends Model
{
    use HasFactory;

    protected $fillable = ['donation_place','user_location','date_booked','hospital_id','booked_by'];
}
