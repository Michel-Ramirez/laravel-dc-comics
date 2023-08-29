@extends('layouts.main_layout')

@section('title', 'Home')

@section('main-content')


    <div class="cards">
        <div class="wrapper">
            <div class="banner">CURRENT SERIES</div>
            <div class="d-flex justify-content-center">
                <a href="{{ route('comics.create') }}" class="btn btn-success">AGGIUNGI UN NUOVO FUMETTO</a>
            </div>
            <ul class="card-body">
                @foreach ($comics as $comic)
                    <li>
                        <div class="card">
                            <figure>
                                <a href="{{ route('comics.show', $comic) }}" class="series">
                                    <img src="{{ $comic['thumb'] }}" alt="">
                                </a>
                            </figure>
                            <a href="{{ route('comics.show', $comic->id) }}" class="series">{{ $comic['title'] }}</a>
                        </div>
                    </li>
                @endforeach
            </ul>
        </div>
    </div>

@endsection
