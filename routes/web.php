<?php

// use Post;
use App\Models\Post;
use Illuminate\Support\Arr;
use Illuminate\Support\Facades\Route;



Route::get('/', function () {
    return view('home', ['title' => 'Welcome to My Blog', 'header' => 'Home']);
});

Route::get('/about', function () {
    return view('about', ['title' => 'About Me', 'header' => 'About']);
});
Route::get('/posts', function () {
    return view('posts', ['title' => 'Blog', 'header' => 'Blog', 'posts' => Post::all()]);
});

Route::get('/posts/{slug}',  function ($slug) {
    $post = Post::find($slug);

    return view('post', [
        'title' => 'Single Post',
        'header' => 'Single Post',
        'post' => $post,

    ]);
});

Route::get('/contact', function () {
    return view('contact', ['title' => 'Contact', 'header' => 'Contact']);
});
