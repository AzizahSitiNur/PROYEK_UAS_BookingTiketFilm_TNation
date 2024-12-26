<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Ticket;

class TicketSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Ticket::create([
            'seat' => 1,
          
            'user_id' => 1,
            'showtime_id' => 1,
        ]);

        Ticket::create([
            'seat' => 2,
         
            'user_id' => 2,
            'showtime_id' => 1,
        ]);
    }
}
