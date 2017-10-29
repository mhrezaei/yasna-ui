{{--navigation--}}

{{--laptop view nav--}}
<nav class="nav-tab">
    <ul class="container clearfix">
        @foreach($navbar as $item)
            <li class="subnav">
                <a href="{{ $item['href'] or "#" }}">{{ $item['title'] or "" }}</a>
            </li>
        @endforeach

    </ul>
</nav>

{{--tablet view nav--}}
<nav class="select-nav is-hidden">
    <select class="select-subnav">
        @foreach($navbar as $item)
            <option value="{{ $item['title'] or "" }}" data-href="{{ $item['href'] or "#" }}" >{{ $item['title'] or "" }}</option>
        @endforeach
    </select>
</nav>