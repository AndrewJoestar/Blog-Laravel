<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Genre>
 */
class GenreFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            [
                'name' => 'Fiksi',
                'image_url' => 'https://images.unsplash.com/photo-1533800087956-0f251616e18e?q=80&w=1074&auto=format&fit=crop&ixlib=rb-4.1.0&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D',
                'description' => 'A genre that encompasses imaginative or invented stories, often involving fantastical elements, magical creatures, or supernatural phenomena. Fictional works can transport readers to other worlds, explore complex characters, and delve into themes beyond the boundaries of reality.',
                'color' => 'blue',
            ],
            [
                'name' => 'Sejarah',
                'image_url' => 'https://images.unsplash.com/photo-1461360370896-922624d12aa1?q=80&w=1174&auto=format&fit=crop&ixlib=rb-4.1.0&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D',
                'description' => 'Sejarah rek',
                'color' => 'green',
            ],
            [
                'name' => 'Otomotif',
                'image_url' => 'https://images.unsplash.com/photo-1556982962-dc0ee0f77f47?q=80&w=687&auto=format&fit=crop&ixlib=rb-4.1.0&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D',
                'description' => 'Otomotif rek',
                'color' => 'red',
            ],
            [
                'name' => 'Gooning',
                'image_url' => 'https://images.unsplash.com/photo-1669026778121-2a04f3918b60?q=80&w=687&auto=format&fit=crop&ixlib=rb-4.1.0&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D',
                'description' => 'Gooning rek',
                'color' => 'purple',
            ],
            [
                'name' => 'Music',
                'image_url' => 'https://images.unsplash.com/photo-1514320291840-2e0a9bf2a9ae?q=80&w=1170&auto=format&fit=crop&ixlib=rb-4.1.0&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D',
                'description' => 'Music rek',
                'color' => 'pink',
            ],
            [
                'name' => 'Nerdy',
                'image_url' => 'https://images.unsplash.com/photo-1590796583326-afd3bb20d22d?q=80&w=687&auto=format&fit=crop&ixlib=rb-4.1.0&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D',
                'description' => 'Nerdy rek',
                'color' => 'gray',
            ],
        ];
    }
}
