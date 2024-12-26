<x-app-layout>
    <div class="container">
        <h1>Malls and Showtimes for {{ $movie->title }}</h1>
        <div class="row">
            @foreach($malls as $mall)
                <div class="col-md-6">
                    <div class="card mb-4">
                        <div class="card-body">
                            <h5 class="card-title">{{ $mall->name }}</h5>
                            <p class="card-text">{{ $mall->location }}</p>
                            <h6>Showtimes:</h6>
                            <ul class="list-group">
                                @foreach($showtimesByMall[$mall->id] as $showtime)
                                    <li class="list-group-item">
                                        {{ $showtime->start_time }}
                                        <a href="{{ route('movies.seats', ['movie' => $movie->id, 'showtime' => $showtime->id]) }}" class="btn btn-primary float-right">Select Seat</a>
                                    </li>
                                @endforeach
                            </ul>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
</x-app-layout>
