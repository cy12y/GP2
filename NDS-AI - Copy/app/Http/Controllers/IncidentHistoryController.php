<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Alert;
use App\Models\IncidentHistory;

class IncidentHistoryController extends Controller
{
    /**
     * Display the incident history for a specific alert.
     
      @param  int  $alertId
     @return \Illuminate\Http\Response
     */
    public function index($alertId)
    {
        // Get the alert associated with the provided alert ID
        $alert = Alert::findOrFail($alertId);

        // Get the incident history related to the alert
        $incidentHistory = $alert->incidentHistory;

        // Pass the incident history data to the view
        return view('/IncidentHistory', ['IncidentHistory' => $incidentHistory]);
    }

    /**
     * Store a new incident history record for a specific alert.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $alertId
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request, $alertId)
    {
        // Validate the request data
        $validatedData = $request->validate([
            'description' => 'required|string',
            // Add more validation rules as needed
        ]);


        // Redirect back to the alerts page or any other appropriate page
        return redirect()->route('alerts.index');
    }
}
