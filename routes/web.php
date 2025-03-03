<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\Api\BookController;



Route::get('/', function () {
    return view('welcome');
});


Route::get('/home', function(){
    return view('home');
});

Route::resource('contacts', ContactController::class);

