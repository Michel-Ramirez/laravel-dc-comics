@extends('layouts.main_layout')

@section('title', 'Comics')


@section('main-content')

    <div class="separator-jumbo">
        <div class="wrapper">
            <img src="{{ $comic['thumb'] }}" alt="">
        </div>
    </div>


    <section>
        <div class="wrapper">
            <div class="my-3 d-flex justify-conten-end">
                <a href="{{ route('comics.edit', $comic) }}" class="btn btn-success me-3">MODIFICA</a>
                <form method="POST" action="{{ route('comics.destroy', $comic) }}">
                    @csrf
                    @method('DELETE')
                    <button class="btn btn-danger">ELIMINA</button>
                </form>
            </div>
            <div class="container-content">
                <div class="content">
                    <h1>{{ $comic['title'] }}</h1>
                    <div class="price-section">
                        <h6>U.S. Price: <span class="price">{{ $comic['price'] }}</span></h6>
                        <button>Check Availability</button>
                    </div>
                    <p>{{ $comic['description'] }}</p>
                </div>
                <div class="advertisement">
                    <img src="{{ Vite::asset('resources/img/adv.jpg') }}" alt="">
                </div>
            </div>
        </div>

        <div class="details">
            <div class="wrapper">
                <div class="talents">
                    <h2>Talent</h2>
                    <table>
                        <tr>
                            <td>
                                <div>Art by:</div>
                                <div>

                                    <span>{{ $comic['artists'] }}</span>

                                </div>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <div>Written by:</div>
                                <div>

                                    <span>{{ $comic['writers'] }}</span>

                                </div>
                            </td>
                        </tr>
                    </table>
                </div>
                <div class="specs">

                    <h2>Specs</h2>
                    <table>
                        <tr>
                            <td>
                                <div>Series:</div>
                                <div class="series">
                                    {{ $comic['series'] }}
                                </div>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <div>U.S. Price:</div>
                                <div>
                                    {{ $comic['price'] }}
                                </div>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <div>On Sale Date:</div>
                                <div>
                                    {{ $comic['sale_date'] }}
                                </div>
                            </td>
                        </tr>
                    </table>

                </div>
            </div>
        </div>
    </section>

@endsection
