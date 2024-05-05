<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;

class TryNowController extends Controller
{
    /**
     * Display the Try Now page.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
       
        return view('trynow');
    }

    /**
     * Handle file upload.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function upload(Request $request)
    {
        // Store the uploaded file in the storage directory
      //  $path = $request->file('file')->store('pcap_files');
      dd('Reached TryNowController@upload');
        // Redirect back to the Try Now page
        return redirect()->back()->with('success', 'PCAP file uploaded successfully');
    } 
}

