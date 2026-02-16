<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    $name = 'Federico';

    return view('home', compact('name'));
});
