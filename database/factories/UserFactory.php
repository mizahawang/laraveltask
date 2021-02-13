<?php

namespace Database\Factories;

use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

class UserFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = \App\Models\User::class;

    //protected $model = \App\Models\Article::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {

        $factory->define(\App\Models\User::class, function (Faker\Generator $faker) {
            static $password;

         
            
        return [
            'name' => $this->faker->name,
        'display_name' => $this->faker->name,
        'photo' => '',
        'birth_year' => 1999,
        'email' => $this->faker->safeEmail,
        'password' => $password ?: $password = bcrypt('secret'),
        'remember_token' => str_random(10),
        ];
    });
}
}
