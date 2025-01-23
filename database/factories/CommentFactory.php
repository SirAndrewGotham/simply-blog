<?php

namespace Database\Factories;

use App\Models\Post;
use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Comment>
 */
class CommentFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        $posts = Post::all();
        foreach ($posts as $post)
        {
            return [
                'user_id' => User::inRandomOrder()->first()->id,
                'post_id' => $post->id,
//                'post_id' => Post::inRandomOrder()->first()->id,
                'comment_id' => null,
                'body' => $this->faker->paragraphs(3, true),
                'created_at' => now(),
                'updated_at' => now(),
            ];
        }
    }
}
