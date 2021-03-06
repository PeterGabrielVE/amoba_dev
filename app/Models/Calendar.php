<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Calendar extends Model
{
    use HasFactory;
    public $timestamps = false;

    protected $fillable = [
        'id',
        'calendar_id',	
        'name',
        'updated_at',
        'created_at',
    ];
        
}
