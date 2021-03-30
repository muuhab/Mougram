<?php

namespace Database\Factories;

use App\Like;
use App\User;
use App\Post;
use Illuminate\Database\Eloquent\Factories\Factory;

class LikeFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Like::class;

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
            'like' => 1,
            

        ];
    }
}
