{{-- a tag button with class of btn-default --}}
{{-- accepts: href, class, id, target, icon(fontawesome icon name) or custom attr--}}
<a
        href="{{ $href or "#" }}"
        class="{{ $class or ""}} btn-default "
        id="{{ $id or "" }}"
        target="{{ $target or "" }}"
        {{ $other or "" }}
>

        @if( isset($class) and str_contains($class,'black-border') || str_contains($class,'white-border'))
                <span class="text-deactive">
                        {{ $text or "" }}
                    @if( isset($icon))
                        <i class="fa fa-{{ $icon }}" aria-hidden="true"></i>
                    @endif
                </span>
        @else
                {{ $text or "" }}
                @if( isset($icon))
                    <i class="fa fa-{{ $icon }}" aria-hidden="true"></i>
                @endif
        @endif
</a>