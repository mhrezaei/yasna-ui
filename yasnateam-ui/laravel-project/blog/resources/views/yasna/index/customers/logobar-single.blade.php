{{-- Logo slider single slide --}}

<li class="logo" data-slide="slide1" data-toggle="tooltip" data-placement="left" title="{{ $tooltip_title or ''}}">
    {{-- slide image  --}}
    <a href="#">
        @include('yasna.frame.widgets.image',[
            'src'=>$logo_src
        ])
    </a>

    {{-- product data container: will be appended to "customers-details" blade with js --}}
    <div class="product-data">
        @include('yasna.frame.widgets.image',[
            'src'=> $product_src
        ])
        <h1>{{ $product_name or ''}}</h1>
        <p>
            {{ $product_data or ''}}
        </p>

        <a href="{{ $product_link or ''}}"></a>
    </div>
</li>