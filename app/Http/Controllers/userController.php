<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Login;
use App\Models\Maindata;


class userController extends Controller
{    
    function addData(Request $req){
        $login = new login;
        $login->username=$req->username;
        $login->email=$req->email;
        $login->password=$req->password;
        $login->save();
        return redirect('welcome');
    }

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
}