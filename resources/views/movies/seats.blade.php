<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Pilihan Jam Tayang dan Lokasi Bioskop</title>
  <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
<div class="container">
    <h1 class="movie-title">{{ $movie->title }}</h1>
    <h3 class="showtime-info">Pick a Seat for {{ $showtime->start_time }} at {{ $showtime->mall->name }}</h3>

    @if(session('error'))
        <div class="alert alert-danger">
            {{ session('error') }}
        </div>
    @endif

    @if(session('success'))
        <div class="alert alert-success">
            {{ session('success') }}
        </div>
    @endif

    <form action="{{ route('showtimes.buy-ticket', $showtime->id) }}" method="POST" class="seat-form">
        @csrf
        <div class="form-group">
            <label for="seat">Select Seat:</label>
            <input type="hidden" name="seat" id="seat">
            <div class="seat-grid">
                @foreach($allSeats as $seat)
                    <div class="seat {{ in_array($seat, $occupiedSeats) ? 'occupied' : 'available' }}" data-seat="{{ $seat }}">
                        {{ $seat }}
                    </div>
                @endforeach
            </div>
        </div>
        <div class="button-group">
            <a href="{{ route('home.index') }}" class="btn btn-success">Back to Home</a>
            <button type="submit" class="btn btn-primary">Buy Ticket</button>
        </div>
    </form>
</div>

<style>
     body {
      background: url('{{ asset('img/the-town-bg-02.jpg') }}') no-repeat center center fixed; /* Change URL to your background image */
      background-size: cover;
      font-family: Arial, sans-serif;
    }
    .container {
        max-width: 800px;
        margin: 0 auto;
        padding: 20px;
        background-color: #f9f9f9;
        border-radius: 8px;
        box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
    }
    .movie-title {
        font-size: 2.5em;
        margin-bottom: 10px;
        text-align: center;
        color: #333;
    }
    .showtime-info {
        font-size: 1.2em;
        margin-bottom: 20px;
        text-align: center;
        color: #666;
    }
    .seat-form {
        display: flex;
        flex-direction: column;
        align-items: center;
    }
    .form-group {
        width: 100%;
    }
    .form-group label {
        display: block;
        margin-bottom: 10px;
        font-weight: bold;
    }
    .seat-grid {
        display: grid;
        grid-template-columns: repeat(10, 1fr);
        gap: 10px;
        margin-bottom: 20px;
    }
    .seat {
        width: 40px;
        height: 40px;
        display: flex;
        align-items: center;
        justify-content: center;
        cursor: pointer;
        border: 1px solid #ccc;
        border-radius: 4px;
        transition: background-color 0.3s;
    }
    .seat.available {
        background-color: #28a745;
        color: white;
    }
    .seat.occupied {
        background-color: #dc3545;
        color: white;
        cursor: not-allowed;
    }
    .seat.selected {
        background-color: #ffc107;
        color: white;
    }
    .btn-primary {
        background-color:rgb(1, 92, 190);
        margin-top: 20px;
        display: block;
        width: 200px;
        margin-left: auto;
        margin-right: auto;
        border-radius: 25px;
    }
    .btn-primary:hover {
        background-color:rgb(7, 127, 255);
    }
    .btn-success {
      margin-top: 20px;
      display: block;
      width: 200px;
      margin-left: auto;
      margin-right: 5px;
      border-radius: 25px;
      background-color:rgb(135, 9, 9);
    }
    .btn-success:hover {
        background-color:rgb(203, 10, 10);
    }
    .button-group {
        display: flex;
        gap: 10px; /* Memberikan jarak antara tombol */
    }
</style>

<script>
    document.addEventListener('DOMContentLoaded', function() {
        const seats = document.querySelectorAll('.seat.available');
        seats.forEach(seat => {
            seat.addEventListener('click', function() {
                // Remove selected class from all seats
                seats.forEach(s => s.classList.remove('selected'));
                // Add selected class to the clicked seat
                seat.classList.add('selected');
                // Set the hidden input value to the selected seat number
                document.getElementById('seat').value = seat.getAttribute('data-seat');
            });
        });
    });
</script>
</body>
</html>