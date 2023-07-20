@extends('layouts.main-layout')

@section('index.blade')
    <div class="text-center">
        <h1>New Comic</h1>
        <form method="POST" action="{{ route('comic.update', $comic->id) }}">
            @csrf
            @method('PUT')

            <label for="title">title</label>
            <br>
            <input id="title" type="text" name="title" value="{{ $comic->title }} "
                class="@error('title') is-invalid @enderror">

            @error('title')
                <div class="alert alert-danger">{{ $message }}</div>
            @enderror

            <br>

            <label for="description">description</label>
            <br>
            <input type="text" name="description" value="{{ $comic->description }}">
            <br>

            <label for="thumb">thumb</label>
            <br>
            <input type="text" name="thumb" value="{{ $comic->thumb }}">
            <br>

            <label for="price">price</label>
            <br>
            <input type="text" name="price" value="{{ $comic->price }}">
            <br>

            <label for="series">series</label>
            <br>
            <input type="text" name="series" value="{{ $comic->series }}">
            <br>

            <label for="sale_date">sale_date</label>
            <br>
            <input type="date" name="sale_date" value="{{ $comic->sale_date }}">
            <br>

            <label for="type">type</label>
            <br>
            <input type="text" name="type" value="{{ $comic->type }}">
            <br>

            <input class="my-3" type="submit" name="" id="" value="Update">
        </form>
    </div>
@endsection
