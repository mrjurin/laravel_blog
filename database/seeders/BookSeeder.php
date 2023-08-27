<?php

namespace Database\Seeders;

use App\Models\Book;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class BookSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Book::truncate();
        for ($i = 0; $i < 10; $i++) {
            Book::create([
                'title' => fake()->text(30),
                'author_id' => fake()->numberBetween(1, 3)
            ]);
        }
    }
}
