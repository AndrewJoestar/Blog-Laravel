<?php

namespace Database\Seeders;

use App\Models\Genre;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class GenreSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $genres = [
            [
                'name' => 'Fiksi',
                'image_url' => 'https://images.unsplash.com/photo-1533800087956-0f251616e18e?q=80&w=1074&auto=format&fit=crop',
                'description' => 'A genre that encompasses imaginative or invented stories, often involving fantastical elements, magical creatures, or supernatural phenomena.',
                'color' => 'blue',
            ],
            [
                'name' => 'Sejarah',
                'image_url' => 'https://images.unsplash.com/photo-1461360370896-922624d12aa1?q=80&w=1174&auto=format&fit=crop',
                'description' => 'Sejarah rek',
                'color' => 'green',
            ],
            [
                'name' => 'Otomotif',
                'image_url' => 'https://images.unsplash.com/photo-1556982962-dc0ee0f77f47?q=80&w=687&auto=format&fit=crop',
                'description' => 'Otomotif rek',
                'color' => 'red',
            ],
            [
                'name' => 'Gooning',
                'image_url' => 'https://images.unsplash.com/photo-1669026778121-2a04f3918b60?q=80&w=687&auto=format&fit=crop',
                'description' => 'Gooning rek',
                'color' => 'purple',
            ],
            [
                'name' => 'Music',
                'image_url' => 'https://images.unsplash.com/photo-1514320291840-2e0a9bf2a9ae?q=80&w=1170&auto=format&fit=crop',
                'description' => 'Music rek',
                'color' => 'pink',
            ],
            [
                'name' => 'Nerdy',
                'image_url' => 'https://images.unsplash.com/photo-1590796583326-afd3bb20d22d?q=80&w=687&auto=format&fit=crop',
                'description' => 'Nerdy rek',
                'color' => 'gray',
            ],
        ];

        foreach ($genres as $genre) {
            Genre::create($genre);
        }
    }
}
