{{--contact inner--}}


{{--includes contanct heading and map only on index page--}}
@if($type)
    @include('yasna.frame.heading-main',[
            "text"=>trans('yasna.template.contact_us'),
            "class" =>"dark-bg"
        ])
    @include('yasna.contact.map')
@endif


@include('yasna.contact.contact-content')