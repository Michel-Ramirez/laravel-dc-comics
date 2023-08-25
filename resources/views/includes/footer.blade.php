<footer>
    @include('includes.footer_top')
    <div class="main-footer">
        <div class="wrapper">
            <div class="nav-site">
                <div class="wrapper-col">
                    <div class="col col-left">
                        <h4>DC COMICS</h4>
                        <ul>
                            @foreach ($main_links as $links)
                                @foreach ($links['ft_dc_links'] as $ft_dc_link)
                                    <li>
                                        <a href="{{ $ft_dc_link['url'] }}">
                                            {{ $ft_dc_link['text'] }}</a>
                                    </li>
                                @endforeach
                            @endforeach
                        </ul>

                        <h4>SHOP</h4>
                        <ul>
                            @foreach ($main_links as $links)
                                @foreach ($links['ft_shop_links'] as $ft_shop_link)
                                    <li>
                                        <a href="{{ $ft_shop_link['url'] }}">
                                            {{ $ft_shop_link['text'] }}</a>
                                    </li>
                                @endforeach
                            @endforeach
                        </ul>
                    </div>
                    <div class="col col-center">
                        <h4>DC</h4>
                        <ul>
                            @foreach ($main_links as $links)
                                @foreach ($links['links_dc'] as $link_dc)
                                    <li>
                                        <a href="{{ $link_dc['url'] }}">
                                            {{ $link_dc['text'] }}</a>
                                    </li>
                                @endforeach
                            @endforeach
                        </ul>
                    </div>
                    <div class="col col-right">
                        <h4>SITE</h4>
                        <ul>
                            @foreach ($main_links as $links)
                                @foreach ($links['links_site'] as $link_site)
                                    <li>
                                        <a href="{{ $link_site['url'] }}">
                                            {{ $link_site['text'] }}</a>
                                    </li>
                                @endforeach
                            @endforeach
                        </ul>
                    </div>
                </div>
            </div>
            <div class="logo-bg">
                <img src="{{ Vite::asset('resources/img/dc-logo-bg.png') }}" alt="">
            </div>
        </div>
    </div>
    {{-- footerBottom  --}}
</footer>
