<li class="logo" data-slide="slide1" data-toggle="tooltip" data-placement="left" title="Hooray!">
    <a href="#">
        <img src="<?php echo e(isset($logo['logo-src']) ? $logo['logo-src'] : ''); ?>">
    </a>
    <div class="product-data">
        <img src="<?php echo e(isset($logo['product-src']) ? $logo['product-src'] : ''); ?>">
        <h1><?php echo e(isset($logo['product-name']) ? $logo['product-name'] : ''); ?></h1>
        <p>
            <?php echo e(isset($logo['product-data']) ? $logo['product-data'] : ''); ?>

        </p>
        <a href="<?php echo e(isset($logo['product-link']) ? $logo['product-link'] : ''); ?>"></a>
    </div>
</li>