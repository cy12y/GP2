<?php
use Illuminate\Support\Facades\Storage;
use App\Models\JsonFile;
use Illuminate\Http\Request;

function uploadJsonFile(Request $request)
{
    $request->validate([
        'file' => 'required|mimes:json',
    ]);
    if(!$request->file){
        return 404;
    }
    $file = $request->file('file');
    $filename = $file->getClientOriginalName(); // Or generate a unique filename
    $userId = auth()->id();

    // Create directory if it doesn't exist
    $userDirectory = 'json_files/' . $userId;
    if (!Storage::exists($userDirectory)) {
        Storage::makeDirectory($userDirectory);
    }

    // Store file in user's directory
    $filePath = $file->storeAs($userDirectory, $filename);

    // Store file information in database
    $jsonFile = new JsonFile();
    $jsonFile->user_id = $userId;
    $jsonFile->filename = $filename;
    $jsonFile->path = $filePath;
    $jsonFile->save();

    return redirect()->back()->with('success', 'JSON file uploaded successfully.');

    // Get user's directory
    $userDirectory = 'json_files/' . auth()->id();

// Get list of files in the directory
$jsonFiles = Storage::files($userDirectory);

// Do something with the files
foreach ($jsonFiles as $filePath) {
    // Extract file name from path
    $filename = pathinfo($filePath, PATHINFO_FILENAME);
    
    // Process the file
}
}

?>