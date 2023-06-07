<?php

namespace Database\Seeders;

use App\Models\Movie;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Date;

class MovieSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $movies = [
            [
                "title" => "Inception",
                "director" => "Christopher Nolan",
                "image_url" => "asd",
                "duration" => '148',
                'release_date' => "2010-07-16",
                'genre' => "Sci-Fi, Action"
            ],
            [
                "title" => "Inception",
                "director" => "Christopher Nolan",
                "image_url" => "asd",
                "duration" => '148',
                'release_date' => "2010-07-16",
                'genre' => "Sci-Fi, Action"
            ],
            [
                "title" => "Inception",
                "director" => "Christopher Nolan",
                "image_url" => "asd",
                "duration" => '148',
                'release_date' => "2010-07-16",
                'genre' => "Sci-Fi, Action"
            ],
            [
                "title" => "Inception",
                "director" => "Christopher Nolan",
                "image_url" => "asd",
                "duration" => '148',
                'release_date' => "2010-07-16",
                'genre' => "Sci-Fi, Action"
            ],
            [
                "title" => "Inception",
                "director" => "Christopher Nolan",
                "image_url" => "asd",
                "duration" => '148',
                'release_date' => "2010-07-16",
                'genre' => "Sci-Fi, Action"
            ],
            [
                "title" => "Inception",
                "director" => "Christopher Nolan",
                "image_url" => "asd",
                "duration" => '148',
                'release_date' => "2010-07-16",
                'genre' => "Sci-Fi, Action"
            ],
            [
                "title" => "Inception",
                "director" => "Christopher Nolan",
                "image_url" => "asd",
                "duration" => '148',
                'release_date' => "2010-07-16",
                'genre' => "Sci-Fi, Action"
            ]
        ];
        foreach ($movies as $movie) {
            Movie::create($movie);
        }


    }
}
