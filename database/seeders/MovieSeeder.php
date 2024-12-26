<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Movie;

class MovieSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
       
        
        Movie::create(['title' => 'Ipar Adalah Maut','image_url'=>'img/gambar1.webp']);
        Movie::create(['title' => 'Inside Out 2','image_url'=>'img/gambar2.webp"']);
        Movie::create(['title' => 'Sengkolo','image_url'=>'img/gambar3.webp"']);
    }
}
