@extends('layouts.main-layout')

@section('index.blade')
    <div class="text-center">
        <h1>{{ $comic->title }}</h1>
        <img src="{{ $comic->thumb }}" width="300px">
        <div> {{ $comic->price }}</div>
        <div> {{ $comic->series }}</div>
        <div> {{ $comic->type }}</div>
    </div>
@endsection
