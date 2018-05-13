<section class="whyus hiddenDiv">
    <div class="container">
        {{--into section main heading--}}
        {{--accepts main heading and class--}}
        @include('yasna.frame.heading-main',[
             "text"=> $whyus["main_heading"],
             "class"=>'dark-bg'
        ])

        {{--whyus columns of reasons--}}
        @include('yasna.index.whyus.whyus-content',[
            'reasons'=>$whyus['reasons']
        ])
    </div>
</section>