<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ABcontroller extends Controller
{
    function jett()
    {
        return DB::select('select * from jobs');
    }
}
