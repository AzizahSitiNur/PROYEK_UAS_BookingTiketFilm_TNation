<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\Mall;
use App\Models\Movie;
/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\odel=Showtime>
 */
class ShowtimeFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        $movieId = Movie::inRandomOrder()->first()->id;
        $mallId = Mall::inRandomOrder()->first()->id;

        $faker = \Faker\Factory::create();

        return [
            'movie_id' => $movieId,
            'mall_id' => $mallId,
            'start_time' => $faker->dateTimeBetween('+1 day', '+1 week'),
            // Add other fields as needed
        ];
    }
}
