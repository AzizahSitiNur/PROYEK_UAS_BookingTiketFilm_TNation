<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Pilihan Jam Tayang dan Lokasi Bioskop</title>
  <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    <div class="container">
        <h1>Your Tickets</h1>
        @if($tickets->isEmpty())
            <p>You have no tickets yet.</p>
        @else
            <ul class="list-group">
                @foreach($tickets as $ticket)
                    <li class="list-group-item">
                        <strong>Movie:</strong> {{ $ticket->showtime->movie->title }} <br>
                        <strong>Mall:</strong> {{ $ticket->showtime->mall->name }} <br>
                        <strong>Showtime:</strong> {{ $ticket->showtime->start_time }} <br>
                        <strong>Seat:</strong> {{ $ticket->seat }} <br>
                        <form action="{{ route('tickets.refund', ['ticket' => $ticket->id]) }}" method="POST">
                            @csrf
                            <button type="submit" class="btn btn-danger">Refund Ticket</button>
                        </form>
                    </li>
                @endforeach
            </ul>
        @endif
    </div>
    </body>
    </html>
