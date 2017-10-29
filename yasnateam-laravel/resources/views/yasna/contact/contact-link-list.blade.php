<h4 class="list-title">{{ $title }}</h4>
<ul class="related-links">
    @foreach($links as $link)
        <li>
            <a href="{{ $link['href'] or "" }}">{{ $link['title'] or "link" }}</a>
        </li>
    @endforeach
</ul>