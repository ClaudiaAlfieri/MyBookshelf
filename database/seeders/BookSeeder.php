<?php

namespace Database\Seeders;

use App\Models\Book;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class BookSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Book::create([
            'title' => 'A Menina do Mar',
            'author' => 'Sophia de Mello Breyner',
            'year_read' => 2022,
            'rating' => 5,
            'notes' => 'Uma história encantadora, perfeita para reler.',
            'genre_id' => 3, // Fantasia
        ]);

        Book::create([
            'title' => 'Ensaio sobre a Cegueira',
            'author' => 'José Saramago',
            'year_read' => 2023,
            'rating' => 4,
            'notes' => 'Um livro que me marcou pela forma como retrata o comportamento humano em situações extremas.',
            'genre_id' => 1, // Ficção
        ]);

        Book::create([
            'title' => 'Os Maias',
            'author' => 'Eça de Queirós',
            'year_read' => 2021,
            'rating' => 5,
            'notes' => 'Clássico português, denso mas vale muito a pena.',
            'genre_id' => 2, // Clássico
        ]);

        Book::create([
            'title' => 'Mensagem',
            'author' => 'Fernando Pessoa',
            'year_read' => 2024,
            'rating' => 4,
            'notes' => 'Poesia que fala sobre identidade e o destino de Portugal.',
            'genre_id' => 4, // Poesia
        ]);

        Book::create([
            'title' => 'Memorial do Convento',
            'author' => 'José Saramago',
            'year_read' => 2023,
            'rating' => 3,
            'notes' => 'Gostei, mas achei o ritmo mais lento que Ensaio sobre a Cegueira.',
            'genre_id' => 1, // Ficção
        ]);

    }
}
