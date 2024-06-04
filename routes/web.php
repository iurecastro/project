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
//Route::view('/', 'home')->name('home'); 
Route::get('/', [\App\Http\Controllers\HomeController::class, 'index'])->name('home'); 
Route::view('/about', 'about')->name('about'); 
Route::view('/contact', 'contact')->name('contact'); 
Route::get('posts/{post}', [\App\Http\Controllers\PostController::class, 'show'])->name('post.show');

//short version
//Route::view('/second', 'second'); 