<li class="logo" data-slide="slide1" data-toggle="tooltip" data-placement="left" title="Hooray!">
    <a href="#">
        <?php echo $__env->make('yasna.frame.widgets.image',[
            'src'=>$logo['logo-src']
        ], array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
    </a>
    <div class="product-data">
        <?php echo $__env->make('yasna.frame.widgets.image',[
            'src'=> $logo['product-src']
        ], array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
        <h1><?php echo e(isset($logo['product-name']) ? $logo['product-name'] : ''); ?></h1>
        <p>
            <?php echo e(isset($logo['product-data']) ? $logo['product-data'] : ''); ?>

        </p>
        <a href="<?php echo e(isset($logo['product-link']) ? $logo['product-link'] : ''); ?>"></a>
    </div>
</li>