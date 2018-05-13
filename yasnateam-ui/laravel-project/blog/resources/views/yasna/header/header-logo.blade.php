{{--header logo--}}

<a href="#" class="logo">
    {{--logo image--}}
    @if($logo_src)
        <span class="logo-icon">
            @include('yasna.frame.widgets.image',[
                'src'=>$logo_src
            ])
        </span>
    @endif

    {{--site title--}}
    @if($site_name)
        <span class="title">{{ $site_name or '' }}</span>
    @endif

</a>