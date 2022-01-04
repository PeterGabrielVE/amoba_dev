<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Reservation extends Model
{
    use HasFactory;
    public $timestamps = false;

    protected $fillable = [
        'id',
        'user_plan_id',	
        'route_id',
        'track_id',
        'reservation_start',
        'reservation_end',
        'route_stop_destination_id',	
        'created_at',
        'updated_at',
        'deleted_at',
    ];
}
