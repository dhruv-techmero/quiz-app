<?php

namespace App\Http\Controllers\Website;

use App\Http\Controllers\Controller;
use App\Jobs\SendWelcomeEmail;
use App\Mail\WelcomeMail;
use App\Models\Plan;
use App\Models\User;
use App\Models\UserAnswer;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Str;


class HomeController extends Controller
{
    public function index(Request $request)
    {
        return view('website.home');
    }

    public function storeBrowserData(Request $request)
    {
      
        $validator = Validator::make($request->all(), [
            'email' => 'required|email',
        ]);
    
        // Check if validation fails
        if ($validator->fails()) {
            return response()->json([
                'errors' => $validator->errors()
            ], 422); // Return a 422 status code for validation errors
        }
    
        try {
            DB::transaction(function () use ($request) {
                $generate_password = Str::random(8);
    
                $user = User::updateOrCreate(
                    ['email' => $request->email],
                    ['password' => Hash::make($generate_password)]
                );
    
                UserAnswer::create([
                    'user_id' => $user->id,
                    'answers' => json_encode($request->all())
                ]);
    
                if ($user) {
                    dispatch(new SendWelcomeEmail($user));
                    Session::put('user', $user);
                }
            });
    
            return response()->json([
                'message' => 'User created successfully!',
                'redirect' => route('website-plan')
            ]);
    
        } catch (\Exception $e) {
            return response()->json(['error' => $e->getMessage()], 500);
        }
    }
    


    public function plan(Request $request)
    {

        $plans = Plan::get();
        return view('website.plan', compact('plans'));
    }
}
