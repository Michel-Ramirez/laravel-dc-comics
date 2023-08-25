<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://fonts.googleapis.com/css2?family=Monoton&family=PT+Sans+Narrow:wght@400;700&display=swap"
        rel="stylesheet">
    <title>{{ env('APP_NAME') }} | @yield('title')</title>

    {{-- IMPORT SCSS AND JS --}}
    @vite('resources/js/app.js')
</head>
