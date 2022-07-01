<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PointsConverted extends Model
{
    use HasFactory;
    protected $fillable = ['hospital_id','user_id','points_converted','rem_points','status'];
}
