<?php

namespace Database\Factories;

use App\User;
use App\Post;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

class UserFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = User::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'first_name' => $this->faker->firstname,
            'last_name' => $this->faker->lastname,
            'email' => $this->faker->unique()->safeEmail,
            'about' => $this->faker->sentence(20),
            'phone' => $this->faker->phoneNumber,
            'profession' => $this->faker->randomElement(['UI/UX Designer', 'Frontend Developer', 'Fullstack Developer', 'Wordpress developer', 'Data Entry', 'Engineer', 'Poet']),
            'password' => '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', // password
            'remember_token' => Str::random(10),
            'profile_image'=>'https://picsum.photos/45/45'
        ];
    }
}
