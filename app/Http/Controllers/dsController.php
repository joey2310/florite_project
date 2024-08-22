<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Maindata;
use Illuminate\Http\Request;

class dsController extends Controller
{
    public function show($id)
{
    // Retrieve the record by ID
    $data = Maindata::find($id);

    // Check if data exists
    if (!$data) {
        return redirect()->route('list')->with('error', 'Data not found.');
    }

    // Pass the data to the view
    return view('datasheet', compact('data'));
}

}