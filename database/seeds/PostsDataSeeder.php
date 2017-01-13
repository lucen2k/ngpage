<?php

use Illuminate\Database\Seeder;
use App\Post;

class PostsDataSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('posts')->delete();
        
        Post::create([
            'title' => 'Best PHP framework 1',
            'content' => 'Best PHP framework Best PHP framework Best PHP framework Best PHP framework'
        ]);
        Post::create([
            'title' => 'Best PHP framework 2',
            'content' => 'Best PHP framework Best PHP framework Best PHP framework Best PHP framework'
        ]);
        Post::create([
            'title' => 'Best PHP framework 3',
            'content' => 'Best PHP framework Best PHP framework Best PHP framework Best PHP framework'
        ]);
        Post::create([
            'title' => 'Best PHP framework 4',
            'content' => 'Best PHP framework Best PHP framework Best PHP framework Best PHP framework'
        ]);
        Post::create([
            'title' => 'Best PHP framework 5',
            'content' => 'Best PHP framework Best PHP framework Best PHP framework Best PHP framework'
        ]);
        Post::create([
            'title' => 'Best PHP framework 6',
            'content' => 'Best PHP framework Best PHP framework Best PHP framework Best PHP framework'
        ]);
    }
}
