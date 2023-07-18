@extends('layouts.main-layout')

@section('index.blade')
    <div class="text-center">
        <h1>New Comic</h1>
        <form method="POST" action="{{ route('comic.store') }}">
            @csrf

            <label for="title">title</label>
            <br>
            <input type="text" name="title" value="{{ $comic->title }}">
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

            <input class="my-3" type="submit" name="" id="" value="Create">
        </form>
    </div>
@endsection
