<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Book;

class BookSeeder extends Seeder
{
    public function run(): void
    {
        Book::insert([
            [
                'title' => 'Harry Potter and the Sorcerer\'s Stone',
                'author_id' => 2, // J.K. Rowling
                'genre_id' => 2, // Fantasy
            ],
            [
                'title' => 'Murder on the Orient Express',
                'author_id' => 1, // Agatha Christie
                'genre_id' => 3, // Mystery
            ],
            [
                'title' => 'It',
                'author_id' => 3, // Stephen King
                'genre_id' => 5, // Horror
            ],
            [
                'title' => '1984',
                'author_id' => 4, // George Orwell
                'genre_id' => 1, // Science Fiction
            ],
            [
                'title' => 'Bumi',
                'author_id' => 5, // Tere Liye
                'genre_id' => 2, // Fantasy
            ],
        ]);
    }
}
