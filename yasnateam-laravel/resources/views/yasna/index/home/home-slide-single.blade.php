{{--Single Slides: Type Normal--}}

<div class="slide-owl {{ $slide['class'] or '' }}">
    {{-- slide image --}}
    @include('yasna.frame.widgets.image',[
        'src'=> $slide['src'],
        'alt'=> $slide['alt']
    ])
    {{-- slide caption: gets title, headline, link --}}
   @include('yasna.index.home.home-slide-caption',[
        'title'=>$slide['title'],
        'headline'=>$slide['headline'], // a short sentence (optional)
        'href'=>$slide['href'], //link of slide (optional)
        'link_text'=> trans('yasna.template.read_more') //text of the button
   ])

</div>