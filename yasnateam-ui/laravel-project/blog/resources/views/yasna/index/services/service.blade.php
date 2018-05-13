{{-- service introducing content --}}

<div class="row">
    <div class="col-lg-5 col-lg-push-7">
        {{-- service details (title, short description and a link to service)--}}
        @include('yasna.index.services.services-content')
    </div>
    <div class="col-lg-7 col-lg-pull-5">
        {{-- service media (image, slider, video) --}}
        @include('yasna.index.services.service-media')
    </div>

</div>