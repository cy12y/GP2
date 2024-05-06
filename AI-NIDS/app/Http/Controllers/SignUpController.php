<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Storage;

class SignUpController extends Controller
{
    /**
     * Display the sign-up form.
     *
     * @return \Illuminate\View\View
     */
    public function index()
    {
        return view('signup');
    }

    /**
     * Handle sign-up form submission.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function submit(Request $request)
    {
        // Validate the incoming request data
        $validatedData = $request->validate([
            'first_name' => 'required|string|max:255',
            'last_name' => 'required|string|max:255',
            'email' => 'required|string|email|max:255|unique:users',
            'password' => 'required|string|min:8',
        ]);

        // Create a new user with the validated data
        $user = User::create([
            'first_name' => $validatedData['first_name'],
            'last_name' => $validatedData['last_name'],
            'email' => $validatedData['email'],
            'password' => bcrypt($validatedData['password']), // Hash the password
        ]);

        // Create a JSON file for the user
        $this->createUserJson($user);

        // Log the user in
        auth()->login($user);

        // Redirect the user to the profile page after sign-up
        return redirect()->route('profile');
    }

    /**
     * Create a JSON file for the user.
     *
     * @param  \App\Models\User  $user
     * @return void
     */
    private function createUserJson(User $user)
    {
        $userData = [
            'id' => $user->id,
            'first_name' => $user->first_name,
            'last_name' => $user->last_name,
            'email' => $user->email,
            'created_at' => $user->created_at,
            'updated_at' => $user->updated_at,
        ];
    
        $jsonData = json_encode($userData, JSON_PRETTY_PRINT);
    
        // Define the user-specific directory path
        $directory = "users/{$user->id}";
    
        // Ensure the user directory exists (create it if not already present)
        Storage::disk('public')->makeDirectory($directory);
    
        // Define the file path within the user-specific directory
        $filename = "user_data.json";
        $filepath = "{$directory}/{$filename}";
    
        // Store the JSON data in the user-specific directory
        Storage::disk('public')->put($filepath, $jsonData);
    }
}
