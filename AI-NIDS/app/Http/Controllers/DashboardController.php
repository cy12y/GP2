<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Auth;
class DashboardController extends Controller
{
    public function index()
    {
        $user = Auth::user();

       $path = "app/public/users/{$user->id}/result.json";
        $jsonFilePath = storage_path($path);
        
        // Read the JSON file contents
        $jsonData = file_get_contents($jsonFilePath);
        
        // Decode the JSON data into an array
        $jsonDataArray = json_decode($jsonData, true);
        return view('Dashboard', ['jsonDataArray' => $jsonDataArray]);

    }

}

