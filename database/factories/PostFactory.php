<?php

namespace Database\Factories;

use App\Post;
use App\User;
use Illuminate\Database\Eloquent\Factories\Factory;

class PostFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Post::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'body' => $this->faker->sentence,
            // 'cover_image' => 'http://lorempixel.com/400/200/',
            // 'cover_image' => 'https://source.unsplash.com/random',
            'cover_image' => 'https://picsum.photos/500/300',
            'user_id' => User::all()->random()->id,
            'created_at'=>now()
        ];
    }
}
