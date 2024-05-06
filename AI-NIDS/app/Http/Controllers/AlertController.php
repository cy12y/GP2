<?php

namespace App\Http\Controllers;

use App\Models\Alert;
use Illuminate\Http\Request;

class AlertController extends Controller
{
    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

        // Create a new Alert instance
        $alert = Alert::create($validatedData);

        // Return a response indicating success
        return response()->json(['message' => 'Alert created successfully', 'data' => $alert], 201);
    }
    public function upload(Request $request)
    {
        $request->validate([
            'json_file' => 'required|mimes:json',
        ]);

        $file = $request->file('json_file');
        $data = json_decode(file_get_contents($file), true);

        foreach ($data as $item) {
            // Assuming your JSON structure matches the Alert model fields
            Alert::create($item);
        }

        return redirect()->back()->with('success', 'JSON file uploaded successfully.');
    }
}
