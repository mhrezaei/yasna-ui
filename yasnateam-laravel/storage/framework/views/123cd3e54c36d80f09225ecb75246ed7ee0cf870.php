

<div class="owl-carousel big-slider owl-theme">
    
   <?php $__currentLoopData = $slideshow; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $slide): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
        <?php if($slide['type']==='normal'): ?>
            <?php echo $__env->make('yasna.index.home.home-slide-single', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
        <?php elseif($slide['type']==='btn'): ?>
            <?php echo $__env->make('yasna.index.home.home-slide-single-btn', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
        <?php endif; ?>

   <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>


</div>