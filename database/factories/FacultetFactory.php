<?php

namespace Database\Factories;

use App\Models\Facultet;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Facultet>
 */
class FacultetFactory extends Factory
{
    protected $model = Facultet::class;
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            "name" => $this->faker->name,
            "universitet_id" => $this->faker->numberBetween(1,10),
        ];
    }
}
