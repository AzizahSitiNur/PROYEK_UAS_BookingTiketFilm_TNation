<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Your Tickets</title>
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
    <style>
        body {
            background-color: #f8f9fa;
            font-family: Arial, sans-serif;
        }

        h1 {
            margin-top: 20px;
            text-align: center;
            color: #343a40;
        }

        .ticket-container {
            background-color: #f4f4f9;
            padding: 30px;
            border-radius: 8px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
        }

        .list-group-item {
            background-color: #ffffff;
            border: 1px solid #ddd;
            border-radius: 8px;
            margin-bottom: 15px;
            padding: 20px;
        }

        .poster-img {
            max-width: 150px;
            max-height: 200px;
            object-fit: cover;
            border-radius: 8px;
            box-shadow: 0 2px 5px rgba(0, 0, 0, 0.1);
        }

        .ticket-details {
            flex: 1;
        }

        .btn-success,
        .btn-danger {
            border-radius: 25px;
        }

        .btn-success {
            margin-top: 20px;
            display: block;
            width: 200px;
            margin-left: auto;
            margin-right: 5px;
        }
    </style>
</head>

<body>
    <div class="container">
        <h1>Your Tickets</h1>
        <div class="ticket-container">
            @if ($tickets->isEmpty())
                <p class="text-center">You have no tickets yet.</p>
            @else
                <ul class="list-group mt-4">
                    @foreach ($tickets as $ticket)
                        <li class="list-group-item d-flex align-items-center">
                            <!-- Detail Tiket -->
                            <div class="ticket-details">
                                <strong>Movie:</strong> {{ $ticket->showtime->movie->title }} <br>
                                <strong>Mall:</strong> {{ $ticket->showtime->mall->name }} <br>
                                <strong>Showtime:</strong> {{ $ticket->showtime->start_time }} <br>
                                <strong>Seat:</strong> {{ $ticket->seat }} <br>
                                <form action="{{ route('tickets.refund', ['ticket' => $ticket->id]) }}" method="POST"
                                    class="mt-2">
                                    @csrf
                                    <button type="submit" class="btn btn-danger">Refund Ticket</button>
                                </form>
                            </div>
                            <!-- Poster -->
                            <div class="ml-4">
                                <img src="{{ $ticket->showtime->movie->image_url }}" alt="Poster" class="poster-img">
                            </div>
                        </li>
                    @endforeach
                </ul>
            @endif

            <a href="{{ route('home.index') }}" class="btn btn-success">Back to Home</a>
        </div>
    </div>

    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.1/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>

</html>
