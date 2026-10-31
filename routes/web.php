<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('header');
});

Route::get('/about', function(){
    return view('about');
});

Route::get('/contact', function(){
    return view('contact');
});

Route::get('/Blog', function(){
    return view('Blog');
});

Route::get('/report', function(){
    return view('report');
});