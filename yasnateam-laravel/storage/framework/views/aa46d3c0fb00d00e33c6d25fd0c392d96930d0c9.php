

<div class="row">
    <div class="story-container">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-6">
                    
                    
                    <div class="about-image-lg">
                        <?php echo $__env->make('yasna.frame.widgets.image',[
                            'src'=> $switches["about-group"]["src"]
                        ], array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
                    </div>
                </div>
                <div class="col-lg-6">
                    
                    <div class="story-content">
                        
                        <?php echo $__env->make('yasna.frame.eyebrow',[
                            'text'=>$switches["about-group"]["subtitle"],
                            'span_class'=> "job-title"
                        ], array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
                        
                        <h2 class="about-name-lg name"><?php echo e(isset($switches["about-group"]["title"]) ? $switches["about-group"]["title"] : ""); ?></h2>
                        
                        <p class="story description">
                            <?php echo e(isset($switches["about-group"]["story"]) ? $switches["about-group"]["story"] : ""); ?>

                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>