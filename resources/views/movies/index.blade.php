@extends('layouts.app')

@section('title', 'All movies')

@section('content')
    @foreach ($movies as $movie)
        <div>{{ $movie->title }}</div>
    @endforeach
@endsection
