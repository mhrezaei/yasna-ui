<div class="row">


    <?php $__currentLoopData = $reasons; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $reason): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
        <div class="col-md-4">
            <div class="whyus-container">
                <div class="whyus-img">

                    <?php if($reason['image']): ?>
                        <?php echo $__env->make('yasna.frame.widgets.image',[
                            'src'=> $reason['image']
                        ], array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
                    <?php else: ?>
                        <span class="icon">
                            <i class="fa fa-<?php echo e($reason['icon_name']); ?>" aria-hidden="true"></i>
                        </span>
                    <?php endif; ?>

                </div>
                <div class="whyus-text">
                    <h2>

                        <?php echo e(isset($reason['title']) ? $reason['title'] : ""); ?>

                    </h2>
                    <p><?php echo e(isset($reason['text']) ? $reason['text'] : ""); ?></p>
                </div>
            </div>
        </div>
    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>


</div>