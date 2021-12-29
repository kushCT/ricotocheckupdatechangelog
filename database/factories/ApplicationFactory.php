<?php

namespace Database\Factories;

use App\Models\Application;
use App\Models\Profile;
use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;
use JetBrains\PhpStorm\ArrayShape;

class ApplicationFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Application::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition(): array
    {
        return [
            'name' => $name = $this->faker->company,
            'slug' => Str::Slug($name),
            'user_id' => User::factory()->hasProfile(1)->create()
        ];
    }
}
