@extends('layouts.main-layout')

@section('index.blade')
    <div class="text-center">
        <h1 class="text-center">Comics</h1>
        <a href="{{ route('comic.create') }}">
            <h2 class="bg-light text-success">Create new comic</h2>
        </a>
        <ul class="list-unstyled text-center">
            @foreach ($comics as $comic)
                <a href="{{ route('comic.show', $comic->id) }}">
                    <li>{{ $comic->title }}</li>
                </a>
            @endforeach
        </ul>
    </div>
@endsection
