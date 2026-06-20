<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Genre;

class GenreSeeder extends Seeder
{
    public function run(): void
    {
        $genres = [
            'Pop',
            'Rock',
            'Jazz',
            'Hip Hop'
        ];

        foreach ($genres as $genre) {
            Genre::create([
                'name' => $genre
            ]);
        }
    }
}