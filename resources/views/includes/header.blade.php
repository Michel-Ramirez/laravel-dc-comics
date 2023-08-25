<div class="header-top">
    <div class="container">
        <a href="#">DC POWER VISA</a>
        <a href="#">ADDITIONAL DC SITES</a>
    </div>
</div>
<header>
    <div class="container">
        <a href="{{ route('home') }}" class="logo">
            <figure>
                <img src="{{ Vite::asset('resources/img/dc-logo.png') }}" alt="logo_dc">
            </figure>
        </a>
        <div class="nav">
            <ul>
                @foreach ($main_links as $links)
                    @foreach ($links['h_links'] as $h_link)
                        <li>
                            <a href="#">{{ $h_link }}</a>
                        </li>
                    @endforeach
                @endforeach
            </ul>
        </div>
        <div class="search-bar">
            <input type="text" placeholder="search">
        </div>
    </div>
    <div class="jumbotron">
        <img src="{{ Vite::asset('resources/img/jumbotron.jpg') }}" alt="">
    </div>
</header>
