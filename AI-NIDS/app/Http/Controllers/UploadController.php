<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class UploadController extends Controller
{
    public function upload(Request $request)
    {
        // Validate the uploaded data (you may need custom validation for JSON)
        $request->validate([
            'data' => 'required',
        ]);

        // Get the authenticated user
        $user = auth()->user();

        // Get the data from the request
        $data = $request->input('data');

        // Get the existing data from the JSON file
        $existingData = [];

        $path = storage_path("app/public/users/{$user->id}/result.json");

        if (Storage::disk('local')->exists($path)) {
            $existingData = json_decode(Storage::disk('local')->get($path), true);
        }

        // Append the new data to the existing data
        $existingData[] = $data;

        // Write the combined data back to the JSON file
        Storage::disk('local')->put($path, json_encode($existingData));

        return redirect()->back()->with('success', 'Data appended to result.json successfully.');
    }
}


