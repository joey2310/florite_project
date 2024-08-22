<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Http\Models\MainData;

class homeController extends Controller
{
    //
    public function home()
    {
        return view('home');
    }

    public function ds()
    {
        return view('datasheet');
    }

    public function apids()
    {
        return view('apids');
    }
    
    public function gad()
    {
        return view('gad');
    }
    public function users()
    {
        return view('users');
    }
    public function list()
    {
        return view('list');
    }
  }