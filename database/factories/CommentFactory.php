<?php

namespace Database\Factories;

use App\Comment;
use App\User;
use App\Post;
use Illuminate\Database\Eloquent\Factories\Factory;

class CommentFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Comment::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'created_at' => now(),
            'updated_at' => now(),
            'user_id' => User::all()->random()->id,
            'post_id' => Post::all()->random()->id,
            'comment' => $this->faker->sentence,
        ];
    }
}
