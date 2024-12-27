<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Http\Request;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/form', function(){
    return view('signup');
});

//Define the route to handle form submission
Route::post('/submit', function(Request $request) {
    //Retrieve the form data
    $email = $request->input('email');
    $password = $request->input('password');

    //Return a response with the email and password
    return "Your email is: $email and your password is: $password";
});