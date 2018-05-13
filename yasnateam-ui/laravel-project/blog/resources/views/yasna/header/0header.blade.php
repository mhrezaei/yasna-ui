{{--site header--}}

<header id="fixed-header" class="header-style {{ $class or "" }}">

    <div class="container-fluid">
        <div class="header-content">
            @if($class==="has-dark-bg")
                @include('yasna.header.header-inner',[
                    'btn_class'=>'dark-bg',
                    'logo_src'=>$switches['site_logo_white'],
                    'site_name'=>$switches['site_title']
                ])
            @else
                @include('yasna.header.header-inner',[
                    'btn_class'=>'light-bg',
                    'logo_src'=>$switches['site_logo_black'],
                    'site_name'=>$switches['site_title']
                ])
            @endif

        </div>
    </div>

</header>

