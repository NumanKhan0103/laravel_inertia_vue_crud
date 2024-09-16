<?php

namespace App\Http\Controllers\Auth;

use App\Models\User;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;

class AuthController extends Controller
{
    public function register(Request $request){
        
        // validated
        $data = $request->validate([
            'name' => ['required', 'max:255'],
            'email' => ['required', 'max:255', 'email', 'unique:users'],
            'password' => ['required', 'confirmed']
        ]);

        // register 
        $user = User::create($data);

        // login 
        Auth::login($user);
        
        // redirect 
        return to_route('home');
    }


    public function login(Request $request)
    {
        // Validate the incoming request data
        $validator = $request->validate([
            'email' => 'required|email',
            'password' => 'required',
        ]);



        // Attempt to login with the credentials
        if (Auth::attempt($request->only('email', 'password'), $request->remember)) {
            // Regenerate session
            $request->session()->regenerate();

            // Redirect to dashboard or wherever needed
            return redirect()->intended('/dashboard')
                             ->with('success', 'Logged in successfully!');
        }

        // If authentication fails, redirect back with an error message
        return back()->withErrors([
            'email' => 'The provided credentials do not match our records.',
        ])->onlyInput('email');
    }


    public function logout(Request $request){
       
        Auth::logout();

        $request->session()->invalidate();

        $request->session()->regenerateToken();

        return to_route('home');

    }
}
