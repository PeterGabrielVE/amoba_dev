<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Calendar_Days_Disabled extends Model
{
    use HasFactory;
    public $timestamps = false;

    protected $fillable = [
        'id', 
        'calendar_id',
        'day',
        'enabled',	
        'updated_at',
        'created_at',
    	
    ];
}
