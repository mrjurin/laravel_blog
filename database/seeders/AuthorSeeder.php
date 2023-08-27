<?php

namespace Database\Seeders;

use App\Models\Author;
use App\Models\Book;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class AuthorSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Author::truncate();
        for ($i = 0; $i < 10; $i++) {
            Author::create([
                'name' => fake()->name(),
                'address' => fake()->address()
            ]);
        }
        
    }
}
