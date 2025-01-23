<?php

namespace Database\Seeders;

use App\Models\Post;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\File;

class PostSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
//        $json = File::get(database_path('seeders/json/posts.json'));
//        $posts = collect(json_decode($json));
//
//        $posts->each(function ($post) {
//            Post::create([
//                'user_id' => $post->user_id,
//                'title' => $post->title,
//                'slug' => $post->slug,
//                'excerpt' => $post->excerpt,
//                'body' => $post->body,
//                'image' => $post->image,
//                'published_at' => $post->published_at,
//                'published_through' => $post->published_through,
//                'min_to_read' => $post->min_to_read,
//                'created_at' => $post->created_at,
//                'updated_at' => $post->updated_at,
//            ]);
//        });

        Post::factory()
            ->count(10)
//            ->hasComments(12)
            ->create();
    }
}
