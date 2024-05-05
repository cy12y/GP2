<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Email;

class EmailController extends Controller
{
    public function store(Request $request)
    {
        $request->validate([
            'email' => 'required|email|unique:emails',
        ]);

        Email::create([
            'email' => $request->email,
        ]);

        return redirect()->back()->with('success', 'Email stored successfully.');
    }
}
