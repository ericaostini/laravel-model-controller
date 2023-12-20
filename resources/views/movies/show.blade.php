@extends('layouts.app');

@section('title', $movie->title)

@section('content')
    <div>{{ $movie->title }}</div>
@endsection
