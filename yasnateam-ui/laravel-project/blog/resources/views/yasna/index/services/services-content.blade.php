{{--service detail text--}}

<div class="text">
    {{--subtitle: small text shown on top of title--}}
    @include('yasna.frame.eyebrow',[
        'text'=>$services['subtitle']
    ])
    {{-- title or motto of the service--}}
    @include('yasna.frame.heading-h2',[
        'text'=>$services['title']
    ])
    {{-- short description of the service --}}
    @include('yasna.frame.paragraph',[
        'text'=>$services['text'],
        'class'=>"paragraph"
    ])
    {{--link to complete introduction of the service --}}
    @include('yasna.frame.button-atag',[
        "href"=> $services['href'],
        "class"=> "black-border",
        "text" => trans('yasna.template.read_more')
    ])

</div>