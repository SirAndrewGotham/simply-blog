<?php

namespace Database\Factories;

use App\Models\Language;
use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Post>
 */
class PostFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        $languages = Language::where('is_active', true)->pluck('id')->toArray();
//        $user_count = User::all()->count();
        $title = $this->faker->unique()->sentence();
        return [
            'language_id' => $this->faker->randomElement($languages),
//            'user_id' => $this->faker->numberBetween(1, $user_count),
            'user_id' => User::inRandomOrder()->first()->id,
//            'user_id' => User::factory(),
            'title' => $title,
            'slug' => Str::slug($title),
            'excerpt' => $this->faker->text(),
            'body' => $this->faker->paragraphs(5, true),
            'image' => $this->faker->imageUrl(),
            'published_at' => $this->faker->dateTime,
            'published_through' => $this->faker->dateTimeBetween('-1 month', '+1 month'),
            'min_to_read' => $this->faker->numberBetween(1, 29),
            'views' => $this->faker->numberBetween(0, 1000),
            'created_at' => $this->faker->dateTime(),
            'updated_at' => $this->faker->dateTime(),
        ];
    }
}
