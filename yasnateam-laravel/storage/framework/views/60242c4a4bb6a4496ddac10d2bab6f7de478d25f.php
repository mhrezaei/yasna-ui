<div class="small-slider owl-carousel">

    <?php $__currentLoopData = $services['small_slider']; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $img): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
        <div class="small-slide">
            <img src="<?php echo e($img); ?>">
        </div>
    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

</div>