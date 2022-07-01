<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class UserDonations extends Model
{
    use HasFactory;

    protected $fillable = ['hospital_id','date_donated','donation_user_id','pints_donated','blood_group','reward','status'];
}
