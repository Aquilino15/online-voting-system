<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\User;
use Illuminate\Support\Facades\Hash;
use App\Http\Controllers\Controller;

class DashboardController extends Controller
{
    public function index()
    {
        $user = Auth::user(); // Get the logged-in user

        return view('user_dashboard', ['user' => $user]);
    }
}

class AuthController extends Controller
{
    public function __construct()
    {
        // 🧭 Apply middleware to restrict access
        $this->middleware('guest')->except('logout');
    }

    public function showLoginForm()
    {
        return view('/login'); // ✅ make sure this exists
    }

    public function login(Request $request)
    {
        $credentials = $request->only('student_id', 'password');

        if (Auth::attempt(['student_id' => $credentials['student_id'], 'password' => $credentials['password']])) {
            $request->session()->regenerate();
            return redirect()->intended('user_dashboard');
        }

        return back()->withErrors([
            'student_id' => 'Invalid credentials. Please try again.',
        ]);
    }

    public function showRegisterForm()
    {
        return view('register');
    }

    public function register(Request $request)
    {
        $request->validate([
            'student_id' => 'required|unique:users,student_id',
            'email' => 'required|email|unique:users,email',
            'password' => 'required|min:6|confirmed',
        ]);

        $user = User::create([
            'student_id' => $request->student_id,
            'name' => $request->name,
            'email' => $request->email,
            'password' => Hash::make($request->password),
        ]);

        Auth::login($user);

        return redirect()->intended('user_dashboard');
    }

    public function logout(Request $request)
    {
        Auth::logout();
        $request->session()->invalidate();
        $request->session()->regenerateToken();

        return redirect('/login');
    }
}
