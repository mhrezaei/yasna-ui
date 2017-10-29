<div class="product">
    <?php echo $__env->make('yasna.browser-top', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>

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

                    <?php echo $__env->make('yasna.button-border',[
                        "class"=>"black-border product-link",
                        "text"=>trans('yasna.template.view_product')
                    ], array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>

                </div>
            </div>
        </div>
    </div>
</div>