@extends('layouts.main-layout')

@section('index.blade')
    <h1 class="text-center">Comics</h1>
    <ul class="list-unstyled text-center">
        @foreach ($comics as $comic)
            <a href="{{ route('comic.show', $comic->id) }}">
                <li>{{ $comic->title }}</li>
            </a>
        @endforeach
    </ul>
@endsection
