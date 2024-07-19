<?php

namespace Database\Factories;

use App\Enums\SimStatus;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\SimCard>
 */
class SimCardFactory extends Factory
{
    public function definition(): array
    {
        return [
            'phone_number' => fake()->bothify('554799#######'),
            'status' => fake()->randomElement(SimStatus::class),
        ];
    }
}
