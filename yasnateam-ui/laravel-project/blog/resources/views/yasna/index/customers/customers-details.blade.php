{{-- customer's details --}}

<div class="product">
    {{-- browser view (design related) --}}
    @include('yasna.frame.browser-top')

    {{-- Product datails container (filled with js) --}}
    <div class="container-fluid" id="product-view">
        <div class="row">
            <div class="col-lg-6 col-lg-push-6">
                <div class="product-pic">
                    <img src="">
                    <h2 class="name overlayer product-title"></h2>
                </div>
            </div>
            <div class="col-lg-6 col-lg-pull-6 product-detail">
                <div class="product-content">
                    <h2 class="name product-title"></h2>
                    <p class="description">

                    </p>

                    @include('yasna.frame.button-atag',[
                        "class"=>"black-border product-link",
                        "text"=>trans('yasna.template.view_product')
                    ])

                </div>
            </div>
        </div>
    </div>
</div>