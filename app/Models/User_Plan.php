<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class User_Plan extends Model
{
    use HasFactory;
    public $timestamps = false;

    protected $fillable = [

        'id',
        'user_id',	
        'currency_id',
        'next_user_plan_id',
        'end_timestamp',
        'renewal_timestamp',
        'renewal_price',	
        'renewal_timestamp',
        'renewal_price',
        'requires_invoice',
        'status',
        'created',	
        'modified',
        'financiation',
        'status_financiation',
        'language',
        'nif',
        'business_name',	
        'pending_payment',
        'date_max_payment',
        'proxim_start_timestamp',
        'proxim_end_timestamp',
        'proxim_renewal_timestamp',	
        'proxim_renewal_price',
        'credits_return',
        'company_id',
        'cancel_employee',
        'force_renovation',	
        'date_canceled',
        'amount_confirm_canceled',
        'credit_confirm_canceled',
        'cost_center_id'
        
    ];
}
