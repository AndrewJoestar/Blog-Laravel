<?php

// use Post;

use App\Http\Controllers\GenreController;
use App\Http\Controllers\PostController;
use App\Models\Post;
use Illuminate\Support\Arr;
use Illuminate\Support\Facades\Route;



Route::get('/', function () {
    return view('pages.home', ['title' => 'Welcome to My Blog', 'header' => 'Home']);
});

Route::get('/about', function () {
    return view('pages.about', ['title' => 'About Me', 'header' => 'About']);
});
Route::get('/posts', [PostController::class, 'posts']);

Route::get('/posts/{post:slug}',  function (Post $post) {
    // $post = Post::find($post);
    // dd($post);

    return view('pages.post', [
        'title' => 'Single Post',
        'header' => 'Single Post',
        'post' => $post,

    ]);
});

Route::get('/contact', function () {
    return view('pages.contact', ['title' => 'Contact', 'header' => 'Contact']);
});


Route::get('/categories', [
    GenreController::class,
    'index'
]);


Route::get('/categories/{genre:slug}', [
    GenreController::class,
    'show'
]);
