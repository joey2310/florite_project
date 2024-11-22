<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Signup;
use App\Models\Maindata;
use Illuminate\Auth\Events\Login;
use Illuminate\Support\Facades\Hash;


class userController extends Controller
{   
    function homeData(Request $req){
        // dd($req->all());
        try{
            $client = new Maindata();
            $client->clientName=$req->clientName;
            $client->location=$req->location;
            $client->contactName=$req->contactName;
            $client->email=$req->email;
            $client->contactNo=$req->contactNo;
            $client->q1p=$req->q1p;
            $client->q1pDate=$req->q1pDate;
            $client->gemNo=$req->gemNo;
            $client->gemDate=$req->gemDate;
            $client->docNo=$req->docNo;
            $client->docDate=$req->docDate;
            $client->prepby=$req->prepby;
            $client->checkby=$req->checkby;
            $client->appby=$req->appby;
            $client->date=$req->date;
            $client->pumpModel=$req->pumpModel;
            $client->liquid=$req->liquid;
            $client->spGr=$req->spGr;
            $client->eff=$req->eff;
            $client->temp=$req->temp;
            $client->qty=$req->qty;
            $client->capacity=$req->capacity;
            $client->head=$req->head;
            $client->sucLift=$req->sucLift;
            $client->npsha=$req->npsha;
            $client->npshr=$req->npshr;
            $client->seal=$req->seal;
            $client->abpower=round(($req->capacity*$req->head*$req->spGr)/(1.34*45*$req->eff),2);
            // dd($client);
            $client->save();
            return redirect('home');
        }
        catch(\Exception $e){
            return $e->getMessage();
        } 
    }

    function show(){
        $data= Maindata::all();
        return view('home1',['maindata'=>$data]);
    }

    function showapi(){
        $apidata= Maindata::all();
        return view('apids',['maindata'=>$apidata]);
    }

    function addData(Request $req){
        $validateData = $req->validate([
            'username' => 'required|string|max: 255',
            'email' => 'required|string|email|max: 255|unique:signup,email',
            'password' => 'required|string|min:8',
        ]);
        // dd($validateData);
        if(!$validateData){
            return redirect()->route('users')->with('error', 'Invalid username or password');
        }
        
        $signup = Signup::create([
            'username' => $validateData['username'],
            'email' => $validateData['email'],
            'password' => Hash::make($validateData['password']),
        ]);

        return redirect()->route('users')->with('success', 'Signup Successfull, Please Login');
    }
    
    public function login(Request $request)
{
    // Validate incoming request data
    $validatedData = $request->validate([
        'email' => 'required|email',
        'password' => 'required|string|min:8',
    ]);

    // Find user by email
    $user = Signup::where('email', $validatedData['email'])->first();

    // Debugging and validation
    if (!$user) {
        return response()->json(['message' => 'User not found.'], 404);
    }

    // Check if the password is correct
    if (!Hash::check($validatedData['password'], $user->password)) {
        return response()->json(['message' => 'Invalid credentials.'], 401);
    }

    // Check if user is active
    if (isset($user->is_active) && !$user->is_active) {
        return response()->json(['message' => 'Your account is inactive. Please contact support.'], 403);
    }

    // Generate token
    try {
        $token = $user->createToken('auth_token')->plainTextToken;
    } catch (\Exception $e) {
        return response()->json(['message' => 'Unable to generate token. Please try again later.'], 500);
    }

    // Return response
    return redirect()->route('welcome');
}
}