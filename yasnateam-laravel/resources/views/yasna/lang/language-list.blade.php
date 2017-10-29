<ul class="lang-list">
    @foreach($switches['languages'] as $language)
        @if($language['data']=== getLocale())
            <li class="active-lang" data-lang="{{ $language['data'] }}">
                <a href="{{$language['link']}}">{{ $language['name'] }}</a>
            </li>
        @else
            <li class="" data-lang="{{ $language['data'] }}">
                <a href="{{$language['link']}}">{{ $language['name'] }}</a>
            </li>
        @endif
    @endforeach

</ul>