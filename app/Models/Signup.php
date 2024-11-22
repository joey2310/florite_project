<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Laravel\Sanctum\HasApiTokens;

class Signup extends Model
{
    use HasFactory;
 
    use HasApiTokens;
    protected $table = 'signup';
    protected $fillable = ['username','email','password'];

}