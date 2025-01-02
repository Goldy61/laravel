<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\Student;

class userController extends Controller
{
    function getuser1()
    {
        $xyz=DB::select('select * from users');
        return view('Admin',['abc'=>$xyz]);
    }
   /* function adduser(Request $request)
    {
       $request->validate(['username'=>'requied'
    ]);
        return $request;
    }*/

    function query_b()
    {
        $data = DB::table('users')->insert([
            'name' => 'Keyur',
            'password' => 'keyur123',
            'email' => 'keyur1234@.com'
        ]);
        //return $data;
        $data1=DB::table('users')->get();
        return $data1;
    }
 function student_data(){

    $data= \App\Models\Student::all();
    return view('Admin',['abc'=>$data]);
 }

 function add_student(Request $request ){

    
    $student=new Student();
    $student->name=$request->username;
    $student->id=$request->id;
    $student->email=$request->email;
    $student->phonenumber=$request->phonenumber;
    $student->save();
    if($student){
        echo"Student successfully inserted";
        return $request->input();
    }
    else{
        echo"Student not inserted";
    }

    // return $request->username;
 }
  

}
