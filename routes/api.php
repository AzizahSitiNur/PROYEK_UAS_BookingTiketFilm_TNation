<?php
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Api\TicketApiController;

// Route untuk mengambil semua film
Route::get('/movies', [TicketApiController::class, 'getMovies']);

// Route untuk mengambil jadwal film di mall tertentu
Route::get('/movies/{movie}/malls/{mall}/showtimes', [TicketApiController::class, 'getShowtimes']);

// Route untuk membeli tiket
Route::post('/showtimes/{showtime}/buy', [TicketApiController::class, 'buyTicket']);
