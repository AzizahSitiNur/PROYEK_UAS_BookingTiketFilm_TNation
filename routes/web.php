<?php

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\TicketController;

use Illuminate\Support\Facades\Route;



Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

Route::get('/', [HomeController::class, 'index'])->name('home.index');
Route::get('/movies/{movie}/malls', [TicketController::class, 'showMalls'])->name('movies.malls');
Route::get('/movies/{movie}/malls/{mall}/showtimes', [TicketController::class, 'showShowtimes'])->name('movies.showtimes');
Route::get('/movies/{movie}/showtimes/{showtime}/seats', [TicketController::class, 'showSeats'])->name('movies.seats');
Route::post('/showtimes/{showtime}/buy-ticket', [TicketController::class, 'buyTicket'])->name('showtimes.buy-ticket');
Route::get('/tickets', [TicketController::class, 'showUserTickets'])->name('tickets.index');
Route::post('/tickets/{ticket}/refund', [TicketController::class, 'refundTicket'])->name('tickets.refund');
require __DIR__.'/auth.php';
