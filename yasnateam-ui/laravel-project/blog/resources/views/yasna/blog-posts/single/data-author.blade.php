{{-- article author name and date --}}
<p class="date">
    <em>
        {{ trans('yasna.template.by') }}

        {{--link to author's other posts --}}
        <a href="{{ $href or "" }}">{{ $name or "" }}</a>

        {{ trans('yasna.template.ondate') }}
        {{ $date or "" }}
    </em>
</p>