<div class="head-footer">
    <ul class="container">
        @foreach ($footer_items as $item)
            <li>
                <img src="{{ Vite::asset($item['img']) }}" alt="{{ $item['text'] }}">
                <a href="#">{{ $item['text'] }}</a>
            </li>
        @endforeach
    </ul>
</div>
