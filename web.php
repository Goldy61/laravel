<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Login;
use App\Http\Controllers\DBcontroller;
use App\Http\Controllers\ABcontroller;
use App\Http\Controllers\userController;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/Admin', function () {
    return view('Admin');
    });
Route::get('/Nandini', function () {
        return view('Nandini');
        });
Route::get('/First', function (){
    return view('first');
});    
Route::get('user',[Login::class,'hii']);
Route::get('admins/{name}',[Login::class,'hello']);

Route::get('/about/{name}', function ($name) {
   // return view('about' ,['user'=>$name]);
   return "hello";
});

{
    Route::get('newcn',[ABcontroller::class,'jett']);
}
{
    Route::get('CN',[DBcontroller::class,'connection']);
}
Route::view('Admin','Admin');
{
    Route::post('adduser',[userController::class,'adduser']);
}
Route::get('Admin',[userController::class,'getuser1']);
Route::get('query',[userController::class,'getquery']);
Route::get('query_b',[userController::class,'query_b']);
Route::get('stud',[userController::class,'student_data']);
Route::view('add_stud','add_student');
Route::post('add_stud',[userController::class,'add_student']);
