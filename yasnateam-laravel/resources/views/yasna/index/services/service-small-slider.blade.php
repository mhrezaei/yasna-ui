{{--small slider--}}

<div class="small-slider owl-carousel">
        {{--slider images--}}
    @foreach($services['small_slider'] as $img)
        <div class="small-slide">
            @include('yasna.frame.widgets.image',[
                "src"=>$img
            ])
        </div>
    @endforeach

</div>