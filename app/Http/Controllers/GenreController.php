<?php

namespace App\Http\Controllers;

use App\Models\Genre;
use App\Http\Requests\StoreGenreRequest;
use App\Http\Requests\UpdateGenreRequest;
use App\Models\Post;

class GenreController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $data = Genre::all();

        return view('pages.categories', [
            'title' => 'Categories',
            'header' => 'Categories',
            'genres' => $data
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreGenreRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(Genre $genre)
    {
        $genre = Genre::where('slug', $genre->slug)->firstOrFail();
        $posts = Post::where('genre_id', $genre->id)->get();

        return view('pages.posts', [
            'title'  => "Posts by Genre : $genre->name",
            'header' => "Posts by Genre : $genre->name",
            'posts'  => $posts,
        ]);
    }


    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Genre $genre)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateGenreRequest $request, Genre $genre)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Genre $genre)
    {
        //
    }
}
