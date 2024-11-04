<?php

namespace Database\Factories;

use App\Models\Leaning;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Leaning>
 */
class LeaningFactory extends Factory
{
    protected $model = Leaning::class;
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            "name" => $this->faker->name,
            "facultet_id" => $this->faker->numberBetween(1,10),
        ];
    }
}
