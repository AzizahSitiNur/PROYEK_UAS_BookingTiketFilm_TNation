<?php
namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Movie;
use App\Models\Showtime;
use App\Models\Mall;
use Illuminate\Http\Request;

class TicketApiController extends Controller
{
    // Mengambil daftar film dari database
    public function getMovies()
    {
        // Ambil data film dari database
        $movies = Movie::all();

        // Kembalikan data film dalam format JSON
        return response()->json($movies);
    }

    // Mengambil jadwal tayang film berdasarkan ID movie dan mall
    public function getShowtimes($movie, $mall)
    {
        // Ambil data showtime berdasarkan movie_id dan mall_id
        $showtimes = Showtime::where('movie_id', $movie)
                             ->where('mall_id', $mall)
                             ->with('movie', 'mall') // Mengambil data movie dan mall terkait
                             ->get();

        // Kembalikan data showtime dalam format JSON
        return response()->json($showtimes);
    }

    // Proses pembelian tiket
    public function buyTicket(Request $request, $showtime)
    {
        // Lakukan logika pembelian tiket, misalnya mengurangi jumlah kursi yang tersedia
        $showtime = Showtime::find($showtime);

        if ($showtime) {

            return response()->json(['message' => 'Ticket purchased successfully!']);
        }

        return response()->json(['message' => 'Showtime not found!'], 404);
    }
}