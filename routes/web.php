<?php

use App\Http\Controllers\PagesController;
use Illuminate\Support\Facades\Route;

Route::get("/", [PagesController::class, "landing"]);

// Route::get('/about', function () {
//     return view('pages.about');
// });

Route::get('/about',[PagesController::class,'about']);

// Route::get('/contact', function () {
//     return view('pages.contact');
// });
Route::get('/contact',[PagesController::class,"contact"]);

// Route::get('/Blog', function () {
//     return view('pages.Blog');
// });
Route::get('/Blog',[PagesController::class,"BLog"]);

// Route::get('/report', function () {
//     return view('pages.report');
// });
Route::get('/report',[PagesController::class,"report"]);


// Route::get('/profile', function () {
//     $first_name = "Sakmai";
//     $last_name = "Somnang";
//     $full_name = "Sakmai Somnang";
//     $major = "Computer Science";
//     $subject = "Web_Framework";
//     return view('pages.profile', compact('first_name', 'last_name', 'full_name', 'major', 'subject'));

// });
Route::get('/profile',[PagesController::class,"profile"]);