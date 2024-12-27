<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class TicketApiController extends Controller
{
    public function getMovies()
    {
        // Contoh response JSON (nanti ganti dengan data dari database)
        return response()->json([
            ['id' => 1, 'title' => 'Movie 1'],
            ['id' => 2, 'title' => 'Movie 2'],
        ]);
    }

    public function getShowtimes($movie, $mall)
    {
        // Contoh response JSON
        return response()->json([
            ['id' => 1, 'time' => '14:00', 'available_seats' => 50],
            ['id' => 2, 'time' => '16:00', 'available_seats' => 30],
        ]);
    }

    public function buyTicket(Request $request, $showtime)
    {
        // Proses pembelian tiket
        return response()->json(['message' => 'Ticket purchased successfully!']);
    }
}
