@extends('layouts.main_layout')

@section('title', 'Modifica')


@section('main-content')

    <div class="wrapper my-5">
        <h1 class="my-5 text-center">Sezione di modica</h1>
        @include('includes.comic.form')
    </div>
    <section>

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

@endsection
