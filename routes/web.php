<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('home', ['title' => 'Welcome to My Blog', 'header' => 'Home']);
});

Route::get('/about', function () {
    return view('about', ['title' => 'About Me', 'header' => 'About']);
});
Route::get('/blog', function () {
    return view('blog', ['title' => 'Blog', 'header' => 'Blog']);
});
Route::get('/contact', function () {
    return view('contact', ['title' => 'Contact', 'header' => 'Contact']);
});
