{{--including sharing plugins --}}

<div class="share-post">
    {{--plugin blade --}}
    {{--accepts a title and url of sharing content--}}
    @include('yasna.frame.addtoany',[
        'title'=>$title,
        'url'=>$url
    ])
</div>