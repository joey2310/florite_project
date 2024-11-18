<?php

namespace App\Http\Controllers;

use App\Models\Maindata;
use Illuminate\Http\Request;

class apidsController extends Controller
{
    public function show($id)
    {
        // Retrieve the record by ID
        $apidata = Maindata::find($id);

        // Check if data exists
        if (!$apidata) {
            return redirect()->route('home1')->with('error', 'Data not found.');
        }

        // Pass the data to the view
        return view('apids', compact('apidata'));
    }
}