{{-- About section --}}

<section class="about hiddenDiv">
    <div class="container-fluid">
        {{-- Section main heading --}}
        {{-- accepts a heading text--}}
        @include('yasna.frame.heading-main',[
            "text"=> $switches["about_title"]
        ])
        {{-- About story section --}}
        @include('yasna.index.about.about-story')
        {{-- About profile card slider --}}
        @include('yasna.index.about.about-profiles')
    </div>
</section>