

<div class="logo-row">
    <ul class="logo-container owl-carousel">
        
        
        <?php $__currentLoopData = $logobar; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $logo): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <?php echo $__env->make('yasna.index.customers.logobar-single',[
                'tooltip_title'=> $logo['product-name'],
                'logo_src' => $logo['logo-src'],
                'product_src'=> $logo['product-src'],
                'product_name'=>$logo['product-name'],
                'product_data'=> $logo['product-data'],
                'product_link'=> $logo['product-link'] //optional
            ], array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
    </ul>
</div>