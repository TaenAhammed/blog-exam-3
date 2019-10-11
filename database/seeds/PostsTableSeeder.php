<?php

use App\Post;
use Illuminate\Database\Seeder;

class PostsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Post::create([
            'user_id' => 2,
            'title' => "First Blog Post",
            'description' => "First Blog Post Description"
        ]);

        Post::create([
            'user_id' => 2,
            'title' => "Second Blog Post",
            'description' => "Second Blog Post Description"
        ]);
    }
}
