@extends('layouts.app')

@section('title', 'All movies')

@section('content')
    <div class="container">
        <h3>All films available</h3>
        <div class="row">
            @foreach ($movies as $movie)
                <div class="col-12 col-md-4 col-lg-3">
                    <div class="card">
                        <img src="{{ $movie->image }}" class="card-img-top" alt="...">
                        <div class="card-body">
                            <h5 class="card-title">{{ $movie->title }}</h5>
                            <a href="{{ route('movies.show', $movie->id) }}" class="btn btn-dark">Info</a>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>

    </div>
@endsection
