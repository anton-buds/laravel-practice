<?php

use Illuminate\Support\Facades\Route;

//ROUTING FOR resources/views to load its PAGE.

Route::get('/', function () {
    return view('home');
});

Route::get('/about', function(){
    return view('about');
});

Route::get('/contact', function() {
    return view('contact');
});