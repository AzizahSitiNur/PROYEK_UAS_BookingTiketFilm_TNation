<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Movie;
use App\Models\Ticket;
use App\Models\Mall;
use App\Models\Showtime;

class TicketController extends Controller
{
    public function showMalls(Movie $movie)
    {
        if (!auth()->check()) {
            return redirect()->route('login'); // Redirect ke halaman register jika belum login
        }

        $malls = Mall::all();
        $showtimesByMall = [];

        foreach ($malls as $mall) {
            $showtimes = Showtime::where('movie_id', $movie->id)->where('mall_id', $mall->id)->get();
            $showtimesByMall[$mall->id] = $showtimes;
        }
    
        return view('movies.malls', compact('movie', 'malls','showtimesByMall'));
    }

    public function showSeats(Movie $movie, Showtime $showtime)
    {
        $allSeats = range(1, 80); // Example: 100 seats
        $occupiedSeats = Ticket::where('showtime_id', $showtime->id)->pluck('seat')->toArray();

        return view('movies.seats', compact('movie', 'showtime', 'allSeats', 'occupiedSeats'));
    }

    public function buyTicket(Request $request, Showtime $showtime)
    {
        $request->validate([
            'seat' => 'required|integer',
        ]);

        $seat = $request->input('seat');
        $isTaken = Ticket::where('showtime_id', $showtime->id)->where('seat', $seat)->exists();

        if ($isTaken) {
            return back()->with('error', 'Seat is already taken. Please choose another seat.');
        }

        $ticket = new Ticket();
        $ticket->seat = $seat;
        $ticket->showtime_id = $showtime->id;
        $ticket->user_id = auth()->id();
        $ticket->save();

        return redirect()->route('user.tickets')->with('success', 'Ticket booked successfully!');
    }

    public function showUserTickets()
    {
        $user = auth()->user(); // Fetch the authenticated user
        $tickets = $user->tickets; // Retrieve tickets associated with the user

      

        return view('user.tickets', compact('tickets'));
    }

    public function refundTicket(Request $request, Ticket $ticket)
    {
        // Ensure the logged-in user is the owner of the ticket
        if ($ticket->user_id !== auth()->id()) {
            return back()->with('error', 'You are not authorized to refund this ticket.');
        }

        // Delete the ticket to free up the seat
        $ticket->delete();

        return back()->with('success', 'Ticket refunded successfully!');
    }
}
