<?php

namespace App\Blog\Post\Database\Factories;

use App\Blog\Category\Models\Category;
use App\Blog\Post\Models\Post;
use App\Ship\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;

class PostFactory extends Factory
{
    protected $model = Post::class;

    public function definition()
    {
        $categoryIds = Category::pluck('id')->toArray();
        $userIds = User::pluck('id')->toArray();

        return [
            'title' => $this->faker->sentence(5),
            'content' => $this->faker->paragraphs(3, true),
            'published_at' => $this->faker->dateTimeBetween('-1 year'),
            'category_id' => $this->faker->randomElement($categoryIds),
            'user_id' => $this->faker->randomElement($userIds),
            'slug' => $this->faker->slug(),
        ];
    }
}
