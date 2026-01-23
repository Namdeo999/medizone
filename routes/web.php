<?php

use Illuminate\Support\Facades\Route;

// Route::get('/', function () {
//     return view('welcome');
// });


Route::get('/', function () {
    return view('home');
})->name('home');

Route::get('/about', function () {
    return view('about');
})->name('about');

Route::get('/specilities', function () {
    return view('specilities');
})->name('specilities');

Route::get('/services', function () {
    return view('services');
})->name('services');

Route::get('/contact', function () {
    return view('contact');
})->name('contact');

Route::get('/doctors', function () {
    return view('doctors');
})->name('doctors');
Route::get('/facilities', function () {
    return view('facilities');
})->name('facilities');