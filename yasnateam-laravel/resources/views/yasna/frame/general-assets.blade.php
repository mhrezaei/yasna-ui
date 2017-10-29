@extends('yasna.frame.0base')

{{-- html head general assets --}}


{{--header general assets--}}
@section('header_assets')

    <!-- Bootstrap -->
    {{ Html::style('assets/css/bootstrap.min.css') }}

    @if(isLangRtl())
        <!-- Bootstrap rtl -->
        {{ Html::style('assets/css/bootstrap.rtl.min.css') }}
    @endif

    {{-- Main Font --}}
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700" rel="stylesheet">

    {{--General style--}}
    {{ Html::style('assets/css/style.min.css') }}

    {{--Other header links--}}
    @yield('header-links')

    {{--custom rtl stylesheet--}}
    {{--always should be the last stylesheet--}}
    @if(isLangRtl())
        {{ Html::style('assets/css/typography.rtl.css') }}
    @endif


    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
@endsection



{{-- end body general scripts --}}
@section('footer_assets')
    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://code.jquery.com/jquery-3.2.1.min.js" integrity="sha256-hwg4gsxgFZhOsEEamdOYGBf13FyQuiTwlAQgxVSNgt4=" crossorigin="anonymous"></script>
    <script>
        window.jQuery || document.write('<script src="js/jquery-3.2.1.min.js">\x3C/script>')
    </script>
    <!-- Bootstrap -->
    {!! Html::script ('assets/js/bootstrap.min.js') !!}
    <!-- Fontawesome cdn -->
    {!! Html::script ('https://use.fontawesome.com/f4fcfb493d.js') !!}

    {{--other scripts --}}
    @yield('endbody-script')


    {{--main script--}}
    {{--always should be the last--}}
    {!! Html::script ('assets/js/custom.js') !!}
    <script src="assets/libs/particlesjs/particles.min.js"></script>
    <script src="assets/libs/particlesjs/demo/js/app.js"></script>
@endsection


{{-- Body Joint sections and tags in whole project--}}
@section('body')
    <div class="wrapper">
        {{--Other body sections--}}
        @yield('inner-body')

        {{--contact section - Modifies based on the page route--}}
        @include('yasna.contact.0contact',[
            'type'=> isIndex()
        ])

        {{--footer section - contains social links and credit --}}
        @include('yasna.footer.0footer')

        {{--changing language modal window--}}
        @include('yasna.lang.0lang')
    </div>
@endsection
