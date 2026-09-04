<?php

namespace Database\Seeders;

use App\Models\Genre;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;


class GenreSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Genre::create(['name' => 'Ficção']);
        Genre::create(['name' => 'Clássico']);
        Genre::create(['name' => 'Fantasia']);
        Genre::create(['name' => 'Poesia']);
        Genre::create(['name' => 'Romance']);
        Genre::create(['name' => 'Infantil']);
        Genre::create(['name' => 'Biografia']);
        Genre::create(['name' => 'Autoajuda']);
        Genre::create(['name' => 'Ficção Científica']);
    }
}
