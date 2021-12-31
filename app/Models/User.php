<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class User extends Model
{
    use  HasFactory;

    public $timestamps = false;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'id',
        'first_name',
        'last_name',
        'phone_number',	
        'picture',
        'email',
        'remember_token',
        'password',	
        'last_online',
        'verification_code',
        'new_email',
        'status	first',
        'last_accept_date',
        'created',
        'modified',
        'company_contact',
        'credits',
        'first_trip',
        'incomplete_profile',
        'phone_verify',
        'token_auto_login',
        'user_vertical',
        'language_id',
        'no_registered',
        'deleted_at'	
    ];

}
