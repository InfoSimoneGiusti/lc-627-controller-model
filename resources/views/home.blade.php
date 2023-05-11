@extends('layouts.app')

@section('title', 'Home page')

@section('content')
    <h1>Elenco dei libri</h1>

    <ul>
        @foreach ($books as $book)
            <li>{{$book->id}} - {{$book->title}} - {{$book->vote}}</li>
        @endforeach
    </ul>


@endsection
