<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LoginController extends Controller
{
    /**
     * Show the login form.
     *
     * @return \Illuminate\View\View
     */
    public function showLoginForm()
    {
        return view('auth.login');
    }

    public function login(Request $request)
    {
        // Validate the form data
        $validatedData = $request->validate([
            'email' => 'required|email',
            'password' => 'required',
        ]);
        if (Auth::attempt($validatedData)) {
            // Authentication successful, redirect to profile page
            return redirect()->route('profile');
        }

        // Authentication failed, redirect back with error message
        return redirect()->back()->withInput()->withErrors([
            'email' => 'Invalid email or password.',
        ]);
}
}