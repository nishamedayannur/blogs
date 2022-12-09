<?php

namespace Database\Factories;

use App\Models\Blog;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Blog>
 */
class BlogFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    protected $model = \App\Models\Blog::class;
    public function definition()
    {

        return [
            'category_id' => App\Category::all()->random()->id,
            'blog' => $this->faker->paragraph,
            'description' => $this->faker->paragraph,
        ];
    }
}
