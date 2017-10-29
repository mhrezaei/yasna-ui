{{-- About section story --}}

<div class="row">
    <div class="story-container">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-6">
                    {{-- About story large image --}}
                    {{--accepts image src--}}
                    <div class="about-image-lg">
                        @include('yasna.frame.widgets.image',[
                            'src'=> $switches["about-group"]["src"]
                        ])
                    </div>
                </div>
                <div class="col-lg-6">
                    {{-- About story default content --}}
                    <div class="story-content">
                        {{--accepts subtitle text--}}
                        @include('yasna.frame.eyebrow',[
                            'text'=>$switches["about-group"]["subtitle"],
                            'span_class'=> "job-title"
                        ])
                        {{--echoing main title text--}}
                        <h2 class="about-name-lg name">{{ $switches["about-group"]["title"] or "" }}</h2>
                        {{--echoing story text--}}
                        <p class="story description">
                            {{ $switches["about-group"]["story"] or "" }}
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>