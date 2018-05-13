{{-- logo slider row --}}

<div class="logo-row">
    <ul class="logo-container owl-carousel">
        {{-- gets data of each logo slide --}}
        {{-- accepts: tooltip title, logo image, customer's name, customer's product description, link to the product--}}
        @foreach($logobar as $logo)
            @include('yasna.index.customers.logobar-single',[
                'tooltip_title'=> $logo['product-name'],
                'logo_src' => $logo['logo-src'],
                'product_src'=> $logo['product-src'],
                'product_name'=>$logo['product-name'],
                'product_data'=> $logo['product-data'],
                'product_link'=> $logo['product-link'] //optional
            ])
        @endforeach
    </ul>
</div>