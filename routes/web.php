<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('home');
})->name('/');

Route::get('contacto', function () {
    return view('contact');
})->name('contacto');

Route::get('nosotros', function () {
    return view('about');
})->name('nosotros');

// Route::get('admin/', function () {
//     return view('admin.dashboard');
// })->name('admin.home');
// middleware(['auth:sanctum', 'verified'])->





Route::get('panel', function () {
    return view('panel.dashboard');
})->name('panel');