<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Hospital extends Model
{
    use HasFactory;

    protected $fillable = ['hospital_name','hospital_phone','hospital_email','hospital_location','hospital_doc','hospital_status','added_by'];
}
