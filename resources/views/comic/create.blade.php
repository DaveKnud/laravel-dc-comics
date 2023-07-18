@extends('layouts.main-layout')

@section('index.blade')
    <div class="text-center">
        <h1>New Comic</h1>
        <form>
            <label for="title"></label>
            <input type="text" name="title">

            <label for="description"></label>
            <input type="text" name="description">

            <label for="thumb"></label>
            <input type="text" name="thumb">

            <label for="price"></label>
            <input type="text" name="price">

            <label for="series"></label>
            <input type="text" name="series">

            <label for="sale_date"></label>
            <input type="text" name="sale_date">

            <label for="type"></label>
            <input type="text" name="type">
        </form>
    </div>
@endsection
