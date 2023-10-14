<?php

namespace Database\Seeders;

use App\Models\Author;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class AuthorSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $authors = [
            'Mr. Black',
            'Mr. Red',
            'Mr. Green',
            'Mr. White',
        ];

        foreach ($authors as $authorName) {
            Author::create(['name' => $authorName]);
        }
    }
}
