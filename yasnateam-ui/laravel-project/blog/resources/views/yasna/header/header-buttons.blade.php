{{--header buttons--}}

<div class="{{ $btn_class or "" }} header-btns">
    @include('yasna.frame.button-atag',[
        "href"=>$switches['login'],
        "class"=>"btn-login",
        "text"=>trans('yasna.template.login')
    ])
    @include('yasna.frame.button-atag',[
        "href"=>"#contact",
        "class"=>"start-btn",
        "text"=>trans('yasna.template.get_started')
    ])

</div>