<?php

namespace Database\Seeders;

use App\Models\User;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Movie;
use App\Models\Mall;
use App\Models\Showtime;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // User::factory(10)->create();

        User::factory()->create([
            'name' => 'Test User',
            'email' => 't@g.com',
            'password'=>'1'
        ]);
        User::factory()->create([
            'name' => 'Test User',
            'email' => 'r@g.com',
            'password'=>'1'
        ]);

        // User::factory(10)->create([
        // ]);

       

      
        //  Movie::factory()->count(5)->create();


        //  Mall::factory()->count(3)->create();
 

        //  // Create showtimes for every combination of movie and mall
        // $movies = Movie::all();
        // $malls = Mall::all();

        // foreach ($movies as $movie) {
        //     foreach ($malls as $mall) {
        //         Showtime::factory()->create([
        //             'movie_id' => $movie->id,
        //             'mall_id' => $mall->id,
        //         ]);
        //     }
        // }

        Movie::create(['id'=>1,'title' => 'Ipar Adalah Maut','image_url'=>'img/gambar1.webp']);
        Movie::create(['id'=>2,'title' => 'Inside Out 2','image_url'=>'img/gambar2.webp']);
        Movie::create(['id'=>3,'title' => 'Sengkolo','image_url'=>'img/gambar3.webp']);
        Movie::create(['id'=>4,'title' => 'The BikeRiders','image_url'=>'img/gambar4.webp']);
        Movie::create(['id'=>5,'title' => 'Crayon Sinchan','image_url'=>'img/gambar5.webp']);

        Mall::create(['id'=>1,'name' => 'Cilegon Center', 'location' => 'Cilegon']);
        Mall::create(['id'=>2,'name' => 'Mall of Serang', 'location' => 'serang']);

        $movies = Movie::all();
        $malls = Mall::all();

        foreach ($movies as $movie) {
            foreach ($malls as $mall) {
                Showtime::factory()->create([
                    'movie_id' => $movie->id,
                    'mall_id' => $mall->id,
                ]);
            }
        }

    }
}
