<div class="row intro-cards">
    {{--into section main heading--}}
    {{--accepts main heading and class--}}
    @include('yasna.frame.heading-main',[
         "text"=> $introData["main_heading"],
         "class"=>'dark-bg'
    ])

    @foreach($services as $service)
        <div class="col-md-4 col-sm-6">
            <div class="intro-card">
                <a href="{{ $href or "#" }}">
                    <div class="intro-card-img">
                        @include('yasna.frame.widgets.image',[
                            'src'=>$service['service_icon'],
                        ])
                    </div>
                    <div class="intro-text">
                        <h2>
                            {{ $service['service_title'] or ""}}
                        </h2>
                        <p>
                            {{ $service['service_caption'] or ""}}
                        </p>
                    </div>
                </a>
            </div>
        </div>
    @endforeach
</div>