<?php

use Illuminate\Support\Arr;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('home', ['title' => 'Welcome to My Blog', 'header' => 'Home']);
});

Route::get('/about', function () {
    return view('about', ['title' => 'About Me', 'header' => 'About']);
});
Route::get('/posts', function () {
    return view('posts', ['title' => 'Blog', 'header' => 'Blog', 'posts' => [
        [
            'id' => 1,
            'slug' => 'judul-artikel-1',
            'title' => 'Judul Artikel 1',
            'author' => 'Author 1',
            'body' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Laudantium blanditiis
            cupiditate officiis
            reprehenderit, ullam nisi soluta quibusdam eius molestiae dolores eos, tenetur magnam laboriosam tempora
            doloremque, illo sit mollitia. Provident?'
        ],
        [
            'id' => 2,
            'slug' => 'judul-artikel-2',
            'title' => 'Judul Artikel 2',
            'author' => 'Author 2',
            'body' => 'Sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.'
        ],
    ]]);
});

Route::get('/posts/{slug}', function ($slug) {
    $posts = [
        [
            'id' => 1,
            'slug' => 'judul-artikel-1',
            'title' => 'Judul Artikel 1',
            'author' => 'Author 1',
            'body' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Laudantium blanditiis
            cupiditate officiis
            reprehenderit, ullam nisi soluta quibusdam eius molestiae dolores eos, tenetur magnam laboriosam tempora
            doloremque, illo sit mollitia. Provident?'
        ],
        [
            'id' => 2,
            'slug' => 'judul-artikel-2',
            'title' => 'Judul Artikel 2',
            'author' => 'Author 2',
            'body' => 'Sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.'
        ],
    ];

    $post = Arr::first($posts, function ($post) use ($slug) {
        return $post['slug'] == $slug;
    });

    return view('post', [
        'title' => 'Single Post',
        'header' => 'Single Post',
        'post' => $post,

    ]);
});

Route::get('/contact', function () {
    return view('contact', ['title' => 'Contact', 'header' => 'Contact']);
});
