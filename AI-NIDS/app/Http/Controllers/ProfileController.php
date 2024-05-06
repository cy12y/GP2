<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ProfileController extends Controller
{
    /**
     * Display the user's profile.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        // Get the currently authenticated user
        $user = Auth::user();

        // Pass the user data to the profile view
        return view('profile', ['user' => $user]);
    }

    /**
     * Alternative method to show the user's profile.
     * This method fetches the user data and passes it to the view.
     *
     * @return \Illuminate\Http\Response
     */
    public function showProfile()
    {
        // Get the currently authenticated user
        $user = Auth::user();

        // Check if the user is authenticated
        if ($user) {
            // Load the profile view and pass the user data
            return view('profile', ['user' => $user]);
        } else {
            // User is not authenticated, handle accordingly (e.g., redirect to login)
            return redirect()->route('login'); // Redirect to login page
        }
    }
}






