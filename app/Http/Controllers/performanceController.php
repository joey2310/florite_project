<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Maindata;
use Illuminate\Http\Request;

class performanceController extends Controller
{
    public function show($id)
    {
        // Retrieve the record by ID
        $performancedata = Maindata::find($id);

        // Check if data exists
        if (!$performancedata) {
            return redirect()->route('home1')->with('error', 'Data not found.');
        }

        // Pass the data to the view
        return view('performance', compact('performancedata'));
    }
}
