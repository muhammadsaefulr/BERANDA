<?php

namespace App\Http\Controllers;

use App\Models\UserCustomer;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Validation\ValidationException;

class UserCustomerAuthController extends Controller
{
    public function showLoginForm()
    {
        return view('user.auth.login');
    }

    public function showSignUpForm()
    {
        return view('user.auth.signup');
    }

    public function signup(Request $request)
    {
        $request->validate([
            'name' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:user_customers'],
            'password' => ['required', 'string', 'min:8', 'confirmed'],
        ]);

        $userCustomer = UserCustomer::create([
            'username' => $request->name,
            'email' => $request->email,
            'password' => Hash::make($request->password),
        ]);

        Auth::guard('user_customer')->login($userCustomer);

        return redirect()->route('user_customer.login');
    }

    public function login(Request $request)
    {
        $credentials = $request->validate([
            'email' => ['required', 'email'],
            'password' => ['required'],
        ]);

        if (Auth::guard('user_customer')->attempt($credentials)) {
            $request->session()->regenerate();
            return redirect()->route('user_customer.dashboard'); 
        }

        throw ValidationException::withMessages([
            'email' => __('auth.failed'),
        ]);
    }

    public function logout(Request $request)
    {
        Auth::guard('user_customer')->logout();
        $request->session()->invalidate();
        $request->session()->regenerateToken();

        return redirect('/user/auth/login');
    }
}
