<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Session;

class AuthController extends Controller
{
    public function login(Request $request)
    {

        if ($request->isMethod('post')) {
            $this->validate($request, [
                'email' => 'required',
                'password' => 'required'
            ]);

            if (!$user = User::where('email', $request->email)->first())
                return redirect()->back()->with(['error' => 'Email not found']);

            if (!Hash::check($request->password, $user->password))
                return redirect()->back()->with(['error' => 'Invalid password']);

           Session::put(['user' => $user]);
           return redirect()->route('user-welcome')->with(['success' => 'Welcome '.$user->name]);     
        }
        return view('authentication.login');
    }
}
