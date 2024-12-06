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
    public function performance()
    {
        return view('performance');
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
    public function good()
    {
        return view('home1');
    }
  public function formula()
    {
        return view('formula');
    }
    public function contact()
    {
        return view('contact');
    }
    public function about()
    {
        return view('about');
    }
}