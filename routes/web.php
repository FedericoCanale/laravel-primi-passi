<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    $name = 'Federico';

    return view('home', compact('name'));
})->name('home');

Route::get('/about', function () {
    return view('about');
})->name('about');

Route::get('/contact', function () {
    return view('contact');
})->name('contact');
