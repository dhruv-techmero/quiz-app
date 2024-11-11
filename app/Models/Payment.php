<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Payment extends Model
{
    use HasFactory;

    protected $fillable = [
        'user_id', 'plan_id', 'payment_method', 'payment_status', 'currency',
        'amount_in_cents', 'payment_gateway_response', 'payment_date', 'refunded',
        'coupon_code', 'subscription_id', 'billing_address', 'refunded_amount'
    ];

}
