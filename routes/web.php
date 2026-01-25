<?php

use Illuminate\Support\Facades\Route;

Route::prefix('admin')->group(function () {
    require('admin.php');
});

Route::prefix('teacher')->group(function () {
    require('teacher.php');
});

Route::get('/', function () {
    return view('dashbord');
});

Route::get('/notifications', function () {
    return view('Notifications');
});

Route::get('/mycourses', function () {
    return view('myCourse');
});

Route::get('/course/{course}', function ($course) {
    return view('courseplayer');
});


Route::get('/login' , function(){
    return view('authentication.login');
});

Route::get('/register' , function(){
    return view('authentication.register');
});

Route::get('/fogotepasword' , function(){
    return view('authentication.fogotepassword');
});

Route::get('/verify' , function(){
    return view('authentication.Verify');
});