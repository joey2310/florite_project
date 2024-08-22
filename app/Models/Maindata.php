<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Maindata extends Model
{
    use HasFactory;
    protected $table = 'maindata';
    protected $fillable = ['clientName','location','contactName','email','contactNo','q1p','q1pDate','gemNo','gemDate','docNo','docDate','prepby','checkby','appby','date','pumpModel','liquid','spGr','temp','qty','capacity','head','sucLift','npsha','npshr','seal'];
    
}