@extends('layouts.main_layout')

@section('title', 'Modifica')


@section('main-content')

    <div class="wrapper my-5">
        <h1 class="my-5 text-center">Sezione di modica</h1>
        <form method="POST" action="{{ route('comics.update', $comic) }}">
            @csrf
            @method('PUT')
            <div class="row">
                {{-- TITLE --}}
                <div class="col-4">
                    <div class="mb-3">
                        <label for="title" class="form-label"><strong>Titolo</strong></label>
                        <input type="text" class="form-control" id="title" name="title"
                            value="{{ old('title', $comic->title) }}" autofocus>
                    </div>
                </div>
                {{-- TYPE --}}
                <div class="col-2">
                    <div class="mb-3">
                        <label for="type" class="form-label"><strong>Tipo</strong></label>
                        <input type="text" class="form-control" id="type" name="type"
                            value="{{ old('title', $comic->type) }}" placeholder="es: Comic book">
                    </div>
                </div>
                {{-- SERIES --}}
                <div class="col-3">
                    <div class="mb-3">
                        <label for="series" class="form-label"><strong>Serie</strong></label>
                        <input type="text" class="form-control" id="series" name="series"
                            value="{{ old('title', $comic->series) }}" placeholder="es: Batgirl">
                    </div>
                </div>
                {{-- SALE DATE --}}
                <div class="col-3">
                    <div class="mb-3">
                        <label for="date" class="form-label"><strong>Data di pubblicazione</strong></label>
                        <input type="date" class="form-control" id="date" name="date"
                            value="{{ old('title', $comic->sale_date) }}">
                    </div>
                </div>
            </div>

            {{-- THUMB --}}

            <div class="row">
                <div class="col-9">
                    <div class="mb-3">
                        <label for="logo" class="form-label"><strong>Copertina</strong></label>
                        <input type="text" class="form-control" id="logo" name="thumb"
                            value="{{ old('title', $comic->thumb) }}" placeholder="https://">

                        {{-- ARTISTS & WRITERS --}}
                        <div class="row my-3">
                            <div class="col-6">
                                <div class="mb-3">
                                    <label for="artists" class="form-label"><strong>Artisti</strong></label>
                                    <textarea class="form-control" id="artists" name="artists">{{ old('title', $comic->artists) }}</textarea>
                                </div>
                            </div>
                            <div class="col-6">
                                <div class="mb-3">
                                    <label for="writers" class="form-label"><strong>Scrittori</strong></label>
                                    <textarea class="form-control" id="writers" name="writers">{{ old('title', $comic->artists) }}</textarea>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-3">
                    <img src="https://marcolanci.it/utils/placeholder.jpg" class="img-fluid" alt="preview"
                        id="img-preview">
                </div>
            </div>
            {{-- DESCRIPTIONS --}}
            <div class="row">
                <div class="col">
                    <div class="mb-3">
                        <label for="description" class="form-label"><strong>Descrizione</strong></label>
                        <textarea class="form-control" id="description" name="description">{{ old('title', $comic->description) }}</textarea>
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
    <section>
    @endsection

    @section('script-js')
        <script>
            const placeholder = "https://marcolanci.it/utils/placeholder.jpg";
            const logoInput = document.getElementById('logo');
            const imgPreview = document.getElementById('img-preview');

            logoInput.addEventListener('input', () => {
                imgPreview.src = logoInput ? logoInput.value : placeholder;
            });
        </script>
    @endsection
