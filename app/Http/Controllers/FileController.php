<?php
namespace App\Http\Controllers;

use App\Models\File;
use App\Models\ProjectGroup;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class FileController extends Controller
{

    public function store(Request $request, ProjectGroup $projectGroup)
    {
        $request->validate([
            'file' => 'required|file|max:10240', // max 10MB
        ]);

        $clientId = $projectGroup->client_id;
        $uploadedFile = $request->file('file');
        $filename = $uploadedFile->getClientOriginalName();

        $storedPath = $uploadedFile->storeAs(
            "uploads/{$clientId}/{$projectGroup->id}",
            $filename
        );

        File::create([
            'project_group_id' => $projectGroup->id,
            'filename' => $filename,
            'path' => $storedPath,
            'type' => $uploadedFile->getClientMimeType(),
        ]);

        return back()->with('success', 'File uploaded successfully.');
    }
}
