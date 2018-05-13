<section class="intro hiddenDiv">
    <div id="particles-js" class="particles"></div>
    <div class="container">

        {{-- service cards--}}
        {{-- accepts cards data as an array--}}
        @include('yasna.index.intro.intro-services',[
            "services"=>$introData["services"]
        ])

    </div>
</section>