<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Login extends Controller
{
    function hii()
    {
        //return view('Nandini');
        return "Welcome";
}
function hello($name){
    //return view('',['name'=> $name]);
    return "Hello ".$name ;
}

}