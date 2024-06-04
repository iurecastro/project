<?php

use Illuminate\Support\Facades\Route;
/*
Route::get('/', function () {
    return view('home');
});

Route::get('/second', function () { 
    return view('second');
});
*/
Route::view('/', 'home')->name('home'); 
Route::view('/about', 'about')->name('about'); 
Route::view('/contact', 'contact')->name('contact'); 

//short version
//Route::view('/second', 'second'); 