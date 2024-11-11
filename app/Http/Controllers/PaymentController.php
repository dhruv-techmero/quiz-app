<?php

namespace App\Http\Controllers;

use App\Models\Payment;
use App\Models\Plan;
use App\Models\User;
use Exception;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Validator;
use Stripe\Charge;
use Stripe\Stripe;
use Stripe\StripeClient;

class PaymentController extends Controller
{

    public function stripeCheckout(Request $request)
    {
        $user = Session::get('user');
        if (!$user) {
            return redirect()->back()->with(['error' => 'user not found']);
        }
    
        $plan = Plan::where('plan_id', $request->id)->first();
        if (!$plan) {
            return redirect()->back()->with(['error' => 'plan not found']);
        }
    
        $stripe = new StripeClient(env('STRIPE_SECRET'));
        $redirect_url = route('stripe.checkout.success') . '?session_id={CHECKOUT_SESSION_ID}';
        
        try {
            // Retrieve or create the Stripe Price ID based on your `Plan`
            $response = $stripe->checkout->sessions->create([
                'success_url' => $redirect_url,
                // 'cancel_url' => route('stripe.checkout.cancel'),
                'customer_email' => $user->email,
                'payment_method_types' => ['card', 'link'],
                'line_items' => [
                    [
                        'price' => $plan->plan_id,  // Pass Stripe Price ID here
                        'quantity' => 1,
                    ]
                ],
                'mode' => 'subscription',  // Ensure it's set to 'subscription'
                'metadata' => [
                    'user_id' => $user->id,
                    'plan_id' => $plan->id,
                ],
            ]);
    
            return redirect($response['url']);
        } catch (\Exception $e) {
            dd($e->getMessage());
            return redirect()->back()->with(['error' => $e->getMessage()]);
        }
    }
    
    public function stripeCheckoutSuccess(Request $request)
    {
        $stripe = new \Stripe\StripeClient(env('STRIPE_SECRET'));
    
        try {
            // Retrieve the checkout session
            $session = $stripe->checkout->sessions->retrieve($request->session_id);
    
            // Extract necessary details from the response
            $paymentMethod = $session->payment_method_types[0] ?? null;
            $paymentStatus = $session->payment_status;  // 'paid', 'unpaid', 'failed'
            $currency = $session->currency;
            $amountInCents = $session->amount_total;  // Amount in cents
            $paymentDate = $session->created;
            $subscriptionId = $session->subscription ?? null;  // Subscription ID if applicable
            $customerDetails = $session->customer_details;
            
            // Store payment details in the database
            $payment = Payment::create([
                'user_id' => $session->metadata->user_id,
                'plan_id' => $session->metadata->plan_id,
                'payment_method' => $paymentMethod,
                'payment_status' => $paymentStatus,
                'currency' => strtoupper($currency),
                'amount_in_cents' => $amountInCents,
                'payment_gateway_response' => json_encode($session),  // Store the full response for reference
                'payment_date' => \Carbon\Carbon::createFromTimestamp($paymentDate),
                'subscription_id' => $subscriptionId,  // Store subscription ID
                'billing_address' => json_encode($customerDetails->address),
            ]);
    
            // Optionally update user info based on payment response (e.g., name from customer_details)
            User::where('id', $session->metadata->user_id)->update([
                'name' => $customerDetails->name,
                'stripe_id' => $session->customer,
                // 'pm_type ' => $session->payment_method_types[0] ?? null,
                // 'pm_last_four ' =>$customerDetails->payment_method->card->last4 ?? null,
            ]);
    
            // Clean up session data
            Session::forget(['user', 'currentStep']);
            
            // Redirect to home or subscription details page
            return redirect()->route('website-home');
        
        } catch (\Exception $e) {
            // Handle errors (e.g., session retrieval failure)
            return response()->json(['status' => 'error', 'message' => $e->getMessage()], 500);
        }
    }
    public function userPayStatus(Request $request)
    {
        try {
            // Validate the user_id parameter
            $validator = Validator::make($request->all(), [
                'user_id' => 'required|integer|exists:users,id', // Ensure user_id is required, an integer, and exists in the users table
            ]);
    
            if ($validator->fails()) {
                return response()->json(['error' => $validator->errors()->first()], 422); // Return validation error
            }
    
            // Check if the user has a payment status
            $userPayStatus = Payment::where('user_id', $request->user_id)->first();
    
            if ($userPayStatus) {
                return response()->json(['success' => 'User found, payment status is available.'], 200);
            } 
    
        } catch (\Exception $e) {
            // Log the error for debugging and return a generic error message
            Log::error("Error in userPayStatus: ".$e->getMessage());
            return response()->json(['error' => 'An error occurred while fetching the payment status.'], 500);
        }
    }
}
