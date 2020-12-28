<?php

namespace Database\Factories;

use App\Models\Country;
use App\Models\Profile;
use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;

class ProfileFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Profile::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition(): array
    {
        return [
            'country_id' => Country::factory()->create(),
            'first_name' => $this->faker->firstName,
            'last_name' => $this->faker->lastName,
            'phone_number' => $this->faker->phoneNumber,
            'username' => $this->faker->userName,
            'twitter' => '@'.$this->faker->userName,
            'github' => '@'.$this->faker->userName,
            'avatar' => $this->faker->imageUrl()
        ];
    }
}
