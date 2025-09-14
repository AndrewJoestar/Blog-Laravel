<?php

// use Post;
use App\Models\Post;
use Illuminate\Support\Arr;
use Illuminate\Support\Facades\Route;



Route::get('/', function () {
    return view('pages.home', ['title' => 'Welcome to My Blog', 'header' => 'Home']);
});

Route::get('/about', function () {
    return view('pages.about', ['title' => 'About Me', 'header' => 'About']);
});
Route::get('/posts', function () {
    return view('pages.posts', ['title' => 'Blog', 'header' => 'Blog', 'posts' => Post::all()]);
});

Route::get('/posts/{post:slug}',  function (Post $post) {
    // $post = Post::find($post);
    // dd($post);

    return view('post', [
        'title' => 'Single Post',
        'header' => 'Single Post',
        'post' => $post,

    ]);
});

Route::get('/contact', function () {
    return view('pages.contact', ['title' => 'Contact', 'header' => 'Contact']);
});


Route::get('/categories', function () {
    return view('pages.categories', [
        'title' => 'Categories',
        'header' => 'Categories',
    ]);
});
