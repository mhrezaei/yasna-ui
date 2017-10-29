

<div class="slide-owl <?php echo e(isset($slide['class']) ? $slide['class'] : ''); ?>">
    <img src="<?php echo e(isset($slide['src']) ? $slide['src'] : ''); ?>" alt="<?php echo e(isset($slide['alt']) ? $slide['alt'] : ''); ?>">
    <div class="slide-caption">
        <h1 class="cap-heading"><?php echo e(isset($slide['title']) ? $slide['title'] : ''); ?></h1>
        <p class="cap-p"><?php echo e(isset($slide['headline']) ? $slide['headline'] : ''); ?></p>
        <?php echo $__env->make('yasna.button-default',[
            "href"=>$slide['href'],
            "text" => trans('yasna.template.read_more')
        ], array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>

    </div>

</div>