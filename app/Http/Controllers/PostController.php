<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;

class PostController extends Controller
{
    public function posts()
    {
        $posts = Post::orderBy('created_at', 'desc')->paginate(3);
        return view(
            'pages.posts',
            ['title' => 'Blog', 'header' => 'Blog', 'posts' => $posts]
        );
    }
}
