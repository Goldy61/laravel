<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class DBcontroller extends Controller
{
    function connection()
    {
        
         return DB::select('select * from users');
    }
    
}
