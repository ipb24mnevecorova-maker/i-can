<?php

use Illuminate\Support\Facades\Route;

Route::get('/archives', function () {
    return view('archives');
});
Route::get('/cheatsheet', function () {
    return view('cheatsheet');
});
Route::get('/topics', function () {
    return view('topics');
});
Route::get('/calculus', function () {
    return view('calculus');
});
Route::get('/feedback', function () {
    return view('feedback');
});
Route::get('/contact', function () {
    return view('contact');
});
Route::get('/about', function () {
    return view('about');
});
Route::get('/newsletter', function () {
    return view('newsletter');
});