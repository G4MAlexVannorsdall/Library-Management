<?php

namespace Database\Seeders;

use App\Models\Book;
use Illuminate\Database\Seeder;

class BooksDatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run(): void
    {
         Book::factory(10)->create();

         Book::factory()->create([
             'title' => 'A Christmas Carol',
             'author' => 'Charles Dickens',
             'genre' => 'classic',
             'number of pages' => 82,
             'year published' => 1843,
         ]);
    }
}
