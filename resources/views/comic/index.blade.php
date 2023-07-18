@extends('layouts.main-layout')

@section('index.blade')
    <div class="text-center">
        <h1 class="text-center">Comics</h1>
        <a href="{{ route('comic.create') }}">
            <h2 class="bg-light text-success">Create new comic</h2>
        </a>
        <ul class="list-unstyled text-center">
            @foreach ($comics as $comic)
                <li>
                    <a href="{{ route('comic.show', $comic->id) }}">
                        {{ $comic->title }}
                    </a>

                    <a href="{{ route('comic.edit', $comic->id) }}">
                        - <i>EDIT</i>
                    </a>

                    <form method="POST" action="{{ route('comic.delete', $comic->id) }}">
                        @csrf
                        @method('DELETE')
                        <input type="submit" value="DELETE">
                    </form>

                </li>
            @endforeach
        </ul>
    </div>
@endsection
