<div class="row intro-cards">
    
    
    <?php echo $__env->make('yasna.frame.heading-main',[
         "text"=> $introData["main_heading"],
         "class"=>'dark-bg'
    ], array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>

    <?php $__currentLoopData = $services; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $service): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
        <div class="col-md-4 col-sm-6">
            <div class="intro-card">
                <a href="<?php echo e(isset($href) ? $href : "#"); ?>">
                    <div class="intro-card-img">
                        <?php echo $__env->make('yasna.frame.widgets.image',[
                            'src'=>$service['service_icon'],
                        ], array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
                    </div>
                    <div class="intro-text">
                        <h2>
                            <?php echo e(isset($service['service_title']) ? $service['service_title'] : ""); ?>

                        </h2>
                        <p>
                            <?php echo e(isset($service['service_caption']) ? $service['service_caption'] : ""); ?>

                        </p>
                    </div>
                </a>
            </div>
        </div>
    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
</div>