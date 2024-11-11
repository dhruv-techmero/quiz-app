<?php

namespace App\Http\Controllers;

use App\Models\Plan;
use Exception;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Stripe\Price;
use Stripe\Product;
use Stripe\Stripe;

class SubscriptionController extends Controller
{
   public function create(Request $request){
    return view('admin.plan.create');
   }

   public function savePlan(Request $request)
{
    Stripe::setApiKey(env('STRIPE_SECRET'));

    $amount = $request->price * 100; // Convert amount to cents

    try {
        // Step 1: Start a database transaction
        DB::transaction(function () use ($request, $amount) {
            // Step 2: Create a Product in Stripe
            $stripeProduct = Product::create([
                'name' => $request->name,
            ]);

            // Step 3: Create a Price (or Plan) in Stripe for the Product
            $stripePrice = Price::create([
                'unit_amount' => $amount,
                'currency' => 'usd',
                'recurring' => [
                    'interval' => $request->billing_method,  // Adjust the interval based on your requirement
                    'interval_count' => $request->interval_count,
                ],
                'product' => $stripeProduct->id,
            ]);

            // Step 4: Save details in the local database (Plan model)
            Plan::create([
                'plan_id' => $stripePrice->id,
                'name' => $request->name,
                'billing_method' => $request->billing_method, // or specify other billing method if applicable
                'interval_count' => $request->interval_count,
                'price' => $request->price,
                'currency' => $stripePrice->currency,
            ]);
        });

        // Step 5: Return success response after transaction completion
        return response()->json(['success' => 'Plan created successfully.']);

    } catch (Exception $e) {
        // Return error response if exception occurs
        return response()->json(['error' => $e->getMessage()], 500);
    }
}
}
