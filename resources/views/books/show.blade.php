@extends('layouts.app')

@section('title', $book->title)

@section('content')
    <div class="container">
        <h3>{{ $book->title }}</h3>
        <div class="row">
            <div class="col-4 single-image">
                <img src="{{ $book->cover_image }}" alt="{{ $book->title }}">
            </div>
            <div class="col-6">
                <p>{{ $book->plot }}</p>
                <a href="{{ route('books.index') }}" class="btn btn-dark">Indietro</a>
            </div>
        </div>
    </div>

    </div>
@endsection
