{{--  index page  --}}

{{-- site essential frame extend --}}
@extends('yasna.frame.general-assets')

{{--page title--}}
@section('page_title' , $switches['site_title'])

{{--page essencial head content--}}
@section('header-links')
    {{--slider plugin stylesheets --}}
    {{ Html::style('assets/libs/owlcarousel/dist/assets/owl.carousel.min.css') }}
    {{ Html::style('assets/libs/owlcarousel/dist/assets/owl.theme.default.min.css') }}
    {{-- slider custom stylesheets --}}
    {{ Html::style('assets/css/slider-style.css') }}
    {{ Html::style('assets/css/btn-style.css') }}

    {{--google map initiation--}}
    <script>
        function initMap() {
            var yasna = {lat: 35.740006, lng: 51.467572};
            var map = new google.maps.Map(document.getElementById('map'), {
                zoom: 19,
                center: yasna
            });
            var marker = new google.maps.Marker({
                position: yasna,
                map: map
            });
        }
    </script>
@append


{{--
page inner body
header and contents of the page
--}}
@section('inner-body')

    {{--
    Default heading
    gets "has-dark-bg" class or no class
    --}}
  @include('yasna.header.0header',[
    'class'=> $header_class
  ])

    {{--index page sections--}}
  @include('yasna.index.home.0home')

  @include('yasna.index.intro.0intro')

  @include('yasna.index.services.0services')

  @include('yasna.index.customers.0customers')

    @include('yasna.index.whyus.0whyus')

  @include('yasna.index.about.0about')

@endsection

{{--page end body scripts --}}
@section('endbody-script')
    <script async defer
            src="https://maps.googleapis.com/maps/api/js?key=AIzaSyD9V7ArENsbs678XLPRJplwzdcVEgO0UBI&callback=initMap">
    </script>
    {!! Html::script ('assets/libs/owlcarousel/dist/owl.carousel.min.js') !!}
    @if(isLangRtl())
        {!! Html::script ('assets/js/slider-custom-rtl.js') !!}
    @else
        {!! Html::script ('assets/js/slider-custom.js') !!}
    @endif
    {!! Html::script ('assets/js/btn.js') !!}

@append

