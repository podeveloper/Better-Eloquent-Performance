<?php

namespace Database\Seeders;

use App\Models\Post;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class PostSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // $posts = Post::factory(5000)->create(); 27 seconds

        // 4.5 seconds
        $posts = Post::factory(5000)->make();
        $posts->chunk(500)->each(function ($chunk){
           Post::insert($chunk->toArray());
        });
    }
}
