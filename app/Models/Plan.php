<?php

namespace App\Models;

use Exception;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Stripe\Stripe;

class Plan extends Model
{
    use HasFactory;
    protected $fillable =[
        'plan_id','name','billing_method','interval_count','price','currency'
    ];

    public function scopeActive($q){
        return $q->where('status',1);
    }

    // public static function perDayPrice($week,$price){
    //     $total_days  = $week * 7;
    //     $per_day_price = $price / $total_days;
    //     return round($per_day_price);
    // }

    public function createPlan(){

        // self::create([
        //     'name' => 'Mega Plan',
        //     'price' => 79.99,
        //     'duration' => 12,
        // ]);
        Stripe::setApiKey(env('STRIPE_SECRET'));


        try{
            Plan::create([
                'amount' => 1*100,
                'currency' => 'USD',
                'interval' => 1,
                'product' => [
                    'name' => 'test'
                ]
            ]);
        }catch(Exception $e){
            dd($e->getMessage());
        }
        return "success";
    }
   

}

