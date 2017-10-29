

<li class="logo" data-slide="slide1" data-toggle="tooltip" data-placement="left" title="<?php echo e(isset($tooltip_title) ? $tooltip_title : ''); ?>">
    
    <a href="#">
        <?php echo $__env->make('yasna.frame.widgets.image',[
            'src'=>$logo_src
        ], array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
    </a>

    
    <div class="product-data">
        <?php echo $__env->make('yasna.frame.widgets.image',[
            'src'=> $product_src
        ], array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
        <h1><?php echo e(isset($product_name) ? $product_name : ''); ?></h1>
        <p>
            <?php echo e(isset($product_data) ? $product_data : ''); ?>

        </p>

        <a href="<?php echo e(isset($product_link) ? $product_link : ''); ?>"></a>
    </div>
</li>