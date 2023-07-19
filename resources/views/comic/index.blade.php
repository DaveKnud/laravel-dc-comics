@extends('layouts.main-layout')

@section('index.blade')
    <div class="text-center">
        <h1 class="text-center">Comics</h1>
        <a href="{{ route('comic.create') }}">
            <h2 class="bg-light text-success">Create new comic</h2>
        </a>
        <ul class="list-unstyled text-center">
            @foreach ($comics as $comic)
                <div class="">


                    <li class="bg-light my-3">

                        <div class="my-2">
                            <a class="text-decoration-none text-uppercase text-info "
                                href="{{ route('comic.show', $comic->id) }}">
                                COMIC:
                                {{ $comic->title }}
                            </a>
                        </div>

                        <div class="d-flex justify-content-center ">
                            <a class="btn btn-dark text-decoration-none my-3 " href="{{ route('comic.edit', $comic->id) }}">
                                <i>Edit</i>
                            </a>

                            <form method="POST" action="{{ route('comic.delete', $comic->id) }}">
                                @csrf
                                @method('DELETE')
                                <input class="btn btn btn-danger my-3" type="submit" value="Remove">
                            </form>
                        </div>

                    </li>
                </div>
            @endforeach
        </ul>
    </div>
@endsection
