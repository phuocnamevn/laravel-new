<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\School>
 */
class SchoolFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'name' => fake()->unique()->name(),
            'email' => fake()->unique()->safeEmail(),
            'code' => fake()->unique()->word(),
            'address' => fake()->unique()->sentence(),
            'type' => fake()->randomNumber(5, false),
            'phone' => fake()->phoneNumber(),
            'hotline' => fake()->phoneNumber(),
            'province_code' => fake()->randomNumber(4, true),
            'insitution_code' => fake()->randomNumber(4, true),
            'main_branch' => fake()->randomDigit(),
            'zip_code' => fake()->randomNumber(6, true),
            'atribute_information_setting_date' => now(),
            'old_school_investigation_number' => fake()->phoneNumber(),
            'facebook_url' => fake()->url(),
            'twitter_url' => fake()->url(),
            'youtube_url' => fake()->url(),
            'fax_number' => fake()->phoneNumber(),
            'deleted_at' => now()
        ];
    }
}
