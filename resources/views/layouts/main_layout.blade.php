<!DOCTYPE html>
<html lang="en">

{{-- HEAD --}}

@include('includes.head')

<body>
    {{-- HEADER --}}
    @include('includes.header')

    {{-- MAIN --}}
    <main>
        @yield('main-content')
    </main>

    {{-- FOOTER --}}
    @include('includes.footer')

</body>

</html>
