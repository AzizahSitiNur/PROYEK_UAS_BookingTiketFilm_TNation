<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Pilihan Jam Tayang dan Lokasi Bioskop</title>
  <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
  <style>
    body {
      background: url('{{ asset('img/the-town-bg-02.jpg') }}') no-repeat center center fixed; /* Change URL to your background image */
      background-size: cover;
      font-family: Arial, sans-serif;
    }
    .container {
      background-color: rgba(255, 255, 255, 0.9);
      padding: 20px;
      border-radius: 8px;
      box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
    }
    .card {
      margin-top: 20px;
    }
    .card-header {
      background-color: #007bff;
      color: white;
      font-weight: bold;
    }
    .list-group-item {
      background-color: rgba(255, 255, 255, 0.9);
    }
    h1 {
      color: #333;
      font-size: 2.5em;
      margin-bottom: 20px;
    }
    h5 {
      color: #007bff;
    }
    .btn-primary {
      background-color: #007bff;
      border: none;
      transition: background-color 0.3s;
    }
    .btn-primary:hover {
      background-color: #0056b3;
    }
  </style>
</head>
<body>
  <div class="container mt-5">
    <h1 class="text-center mb-4">{{ $movie->title }}</h1>
    <div class="card">
      <div class="card-header">
        Jam Tayang dan Lokasi
      </div>
      <ul class="list-group list-group-flush">
        @foreach($malls as $mall)
          <li class="list-group-item">
            <div class="d-flex justify-content-between">
              <div>
                <h5>{{ $mall->name }}</h5>
                <p>{{ $mall->location }}</p>
                <p>Jam Tayang:</p>
                <ul>
                  @foreach($showtimesByMall[$mall->id] as $showtime)
                    <a href="{{ route('movies.seats', ['movie' => $movie->id, 'showtime' => $showtime->id]) }}" type="button" class="btn btn-primary">{{ $showtime->start_time }}</a>
                  @endforeach
                </ul>
              </div>
            </div>
          </li>
        @endforeach
        <!-- Tambahkan pilihan jam tayang dan lokasi lainnya di sini -->
      </ul>
    </div>
  </div>

  <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>
