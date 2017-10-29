{{-- media inner--}}

<div class="slider-container">
    {{--media--}}
    @include('yasna.index.services.service-small-slider')

    {{--hover effect--}}
    <div class="hover-slide light-bg">
        <p>
            @include('yasna.frame.button-atag',[
                "href"=>$services['href'],
                "class"=>"center-btn",
                "text" => trans('yasna.template.view_project')
            ])
        </p>
    </div>
</div>