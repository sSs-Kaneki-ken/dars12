<?php

namespace Database\Factories;

use App\Models\Universitet;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Universitet>
 */
class UniversitetFactory extends Factory
{
    protected $model = Universitet::class;
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            "name" => $this->faker->name,
            "phone_number" => $this->faker->phoneNumber,
        ];
    }
}
