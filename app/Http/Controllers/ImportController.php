<?php

namespace App\Http\Controllers;

use App\Models\Data;
use Illuminate\Http\Request;

class ImportController extends Controller
{
    public function show()
    {
        return view('admin.news.import');
    }

    public function store(Request $request)
    {
        $request->validate([
            'file' => 'required|mimes:csv,txt'
        ]);

        $file = $request->file('file');
        $fileContents = file($file->getPathname());

        // Skip the header row
        $isHeader = true;
        foreach ($fileContents as $line) {
            if ($isHeader) {
                $isHeader = false;
                continue;
            }

            $data = str_getcsv($line);
            // Find existing data by category or create a new one
            $category = trim($data[0]); // Trim to remove BOM
            $record = Data::firstOrNew(['category' => $category]);
            $record->value = $data[1];
            $record->save();
        }

        return redirect()->route('admin.dashboard')->with('success', 'Data imported successfully');
    }
}

