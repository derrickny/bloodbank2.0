<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Swap extends Model
{
    use HasFactory;

    protected $fillable = ['hospital_requesting','hospital_b','blood_requesting','blood_they_have','stock_requesting','stock_they_have','status'];

}
