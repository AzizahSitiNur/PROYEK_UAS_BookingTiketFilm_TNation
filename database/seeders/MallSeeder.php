<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Mall;

class MallSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Mall::create(['name' => 'Mall 1', 'location' => 'Location 1']);
        Mall::create(['name' => 'Mall 2', 'location' => 'Location 2']);
    }
}
