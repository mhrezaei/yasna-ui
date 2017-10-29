{{--smaller subtitle (eyebrow)--}}

<h4
        class="eyebrow {{ $class or "" }}"
        id="{{ $id or "" }}
        {{ $other or "" }}"
>

    <span class="text-bg {{$span_Class or ""}}">
        {{ $text or "" }}
    </span>

</h4>