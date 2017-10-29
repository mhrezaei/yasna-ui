

<div class="small-slider owl-carousel">
        
    <?php $__currentLoopData = $services['small_slider']; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $img): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
        <div class="small-slide">
            <?php echo $__env->make('yasna.frame.widgets.image',[
                "src"=>$img
            ], array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
        </div>
    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

</div>