<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Post;
use App\Models\Tag;

class PostSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run()
    {
        // Create posts
        $posts = Post::factory()->count(10)->create(); // Create 10 example posts

        // Attach random tags to each post
        $posts->each(function ($post) {
            $tags = Tag::inRandomOrder()->take(rand(1, 5))->pluck('id'); // Attach 1 to 5 random tags
            $post->tags()->sync($tags);
        });
    }
}
