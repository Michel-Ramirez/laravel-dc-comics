@extends('layouts.main_layout')

@section('title', 'Modifica')


@section('main-content')

    <div class="wrapper my-5">
        <h1 class="my-5 text-center">Aggiungi un nuovo fumetto</h1>
        <form>
            <div class="row">
                {{-- TITLE --}}
                <div class="col-4">
                    <div class="mb-3">
                        <label for="title" class="form-label"><strong>Titolo</strong></label>
                        <input type="text" class="form-control" id="title" name="title" autofocus>
                    </div>
                </div>
                {{-- TYPE --}}
                <div class="col-2">
                    <div class="mb-3">
                        <label for="type" class="form-label"><strong>Tipo</strong></label>
                        <input type="text" class="form-control" id="type" name="type"
                            placeholder="es: Comic book">
                    </div>
                </div>
                {{-- SERIES --}}
                <div class="col-3">
                    <div class="mb-3">
                        <label for="type" class="form-label"><strong>Serie</strong></label>
                        <input type="text" class="form-control" id="type" name="series" placeholder="es: Batgirl">
                    </div>
                </div>
                {{-- SALE DATE --}}
                <div class="col-3">
                    <div class="mb-3">
                        <label for="date" class="form-label"><strong>Data di pubblicazione</strong></label>
                        <input type="date" class="form-control" id="date" name="thumb" placeholder="https://">
                    </div>
                </div>
            </div>

            {{-- THUMB --}}

            <div class="row">
                <div class="col-9">
                    <div class="mb-3">
                        <label for="img" class="form-label"><strong>Copertina</strong></label>
                        <input type="text" class="form-control" id="img" name="thumb" placeholder="https://">

                        {{-- ARTISTS & WRITERS --}}
                        <div class="row my-3">
                            <div class="col-6">
                                <div class="mb-3">
                                    <label for="artists" class="form-label"><strong>Artisti</strong></label>
                                    <textarea class="form-control" id="artists" name="artists"></textarea>
                                </div>
                            </div>
                            <div class="col-6">
                                <div class="mb-3">
                                    <label for="writers" class="form-label"><strong>Scrittori</strong></label>
                                    <textarea class="form-control" id="writers" name="writers"></textarea>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-3">
                    <img src="https://marcolanci.it/utils/placeholder.jpg" class="img-fluid" alt="preview">
                </div>
            </div>
            {{-- DESCRIPTIONS --}}
            <div class="row">
                <div class="col">
                    <div class="mb-3">
                        <label for="description" class="form-label"><strong>Descrizione</strong></label>
                        <textarea class="form-control" id="description" name="description"></textarea>
                    </div>
                </div>
            </div>
            {{-- BUTTONS --}}
            <div class="d-flex justify-content-center">
                <button type="reset" class="btn btn-warning me-3">Reset</button>
                <button type="submit" class="btn btn-primary">Invia</button>
            </div>
        </form>
    </div>
@endsection
