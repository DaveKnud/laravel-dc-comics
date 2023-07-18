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
                    <li>{{ $comic->title }}
                </a>

                <a href="{{ route('comic.edit', $comic->id) }}">
                    - <i>EDIT</i></li>
                </a>
            @endforeach
        </ul>
    </div>
@endsection
