<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Route_Data extends Model
{
    use HasFactory;
    public $timestamps = false;

    protected $fillable = [
        'id',
        'route_id',	
        'calendar_id',
        'vinculation_route',
        'route_circular',
        'date_init',
        'date_finish',	
        'mon',
        'tue',
        'wed',
        'thu',
        'fri',	
        'sat',
        'sun',
        'updated_at',
        'created_at',
    ];
}
