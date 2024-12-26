<x-app-layout>
    <div class="container">
        <h1>Movies</h1>
        <div class="row">
            @foreach($movies as $movie)
                <div class="col-md-4">
                    <div class="card mb-4">
                        <img src="" class="card-img-top" alt="{{ $movie->title }}">
                        <div class="card-body">
                            <h5 class="card-title">{{ $movie->title }}</h5>
                            <p class="card-text">{{ $movie->description }}</p>
                            <a href="{{ route('movies.malls', ['movie' => $movie->id]) }}" class="btn btn-primary">Buy Ticket</a>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
</x-app-layout>
