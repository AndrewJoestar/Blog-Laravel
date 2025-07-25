<?php

namespace App\Models;

use Illuminate\Support\Arr;

class Post
{
    public static function all()
    {
        return [
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
    }

    public static function find($slug): array
    {
        // return Arr::first(static::all(), function ($post) use ($slug) {
        //     return $post['slug'] == $slug;
        // });

        $post =  Arr::first(static::all(), fn($post) => $post['slug'] == $slug);

        if (!$post) {
            abort(404, 'Post not found');
        }

        return $post;
    }
}
