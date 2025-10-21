<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Auth;

class DashboardController extends Controller
{
    public function index()
    {
        $user = Auth::user(); // Get the logged-in user

        // Pass user data to the dashboard view
        return view('user_dashboard', ['user' => $user]);
    }
}
