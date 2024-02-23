<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Model>
 */
class AssociateFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'user_id' => 1,
            'associate_name' => $this->faker->name(),
            'associate_email' => $this->faker->unique()->safeEmail(),
            'associate_phone' => $this->faker->phoneNumber(),
            'associate_address' => $this->faker->address(),
            'associate_city' => $this->faker->city(),
            'associate_image' => $this->faker->imageUrl(),
            'created_at' => now(),
            'updated_at' => now(),
        ];
    }
}
