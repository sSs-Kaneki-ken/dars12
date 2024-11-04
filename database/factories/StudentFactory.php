<?php

namespace Database\Factories;

use App\Models\Student;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Student>
 */
class StudentFactory extends Factory
{
    protected $model = Student::class;
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            "name" => $this->faker->name,
            "phone" => $this->faker->phoneNumber,
            "image" => $this->faker->imageUrl(200, 200, "Students"),
            "group_id" => $this->faker->numberBetween(1,3),
            "address_id" => $this->faker->numberBetween(1,5),
        ];
    }
}
