{{--Fullscreen Slider--}}

<div class="owl-carousel big-slider owl-theme">
    {{-- Creating each slide based on its type--}}
   @foreach($slideshow as $slide)
        @if($slide['type']==='normal')
            @include('yasna.index.home.home-slide-single')
        @elseif($slide['type']==='btn')
            @include('yasna.index.home.home-slide-single-btn')
        @endif

   @endforeach


</div>