@extends('layouts.app')

@section('title', $movie->title)

@section('content')
    <div class="container">
        <h3>{{ $movie->title }}</h3>
        <div class="row">
            <div class="col-4 single-image">
                <img src="{{ $movie->image }}" alt="{{ $movie->title }}">
            </div>
            <div class="col-6">
                <h5>{{ $movie->original_title }}</h5>
                <p>Language: {{ $movie->language }}</p>
                <p>Vote: {{ $movie->vote }}</p>
                <a href="{{ route('movies.index') }}" class="btn btn-dark">Indietro</a>
            </div>
        </div>
    </div>

    </div>
@endsection
