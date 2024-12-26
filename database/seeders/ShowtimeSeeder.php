<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Showtime;
class ShowtimeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Showtime::create([
            'movie_id' => 1,
            'mall_id' => 1,
            'start_time' => now()->addDay(),
        ]);

        Showtime::create([
            'movie_id' => 1,
            'mall_id' => 2,
            'start_time' => now()->addDay(),
        ]);
    }
}
