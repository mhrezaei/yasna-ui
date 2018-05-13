{{-- slider caption --}}

<div class="slide-caption">
    {{--slide heading--}}
    <h1 class="cap-heading">{{ $title or '' }}</h1>
    {{-- slide headline optional--}}
    @if($headline)
        <p class="cap-p">{{ $headline or '' }}</p>
    @endif

    {{-- slide link optional --}}
    @if($href)
        @include('yasna.frame.button-atag',[
         "href"=>$href,
         "text" => $link_text
        ])
    @endif


</div>