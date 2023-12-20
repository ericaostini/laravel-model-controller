@extends('layouts.app')

@section('title', 'All books')

@section('content')
    <div class="container">
        <h3>All books available</h3>
        <div class="row">
            @foreach ($books as $book)
                <div class="col-12 col-md-4 col-lg-3">
                    <div class="card">
                        <img src="{{ $book->cover_image }}" class="card-img-top" alt="...">
                        <div class="card-body">
                            <h5 class="card-title">{{ $book->title }}</h5>
                            <a href="{{ route('books.show', $book->id) }}" class="btn btn-dark">Info</a>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>

    </div>
@endsection
