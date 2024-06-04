<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/second', function () { 
    return view('second');
});

//short version
//Route::view('/second', 'second'); 