

<div class="slide-owl <?php echo e(isset($slide['class']) ? $slide['class'] : ''); ?>">

    <?php echo $__env->make('yasna.frame.widgets.image',[
        'src'=> $slide['src'],
        'alt'=> $slide['alt']
    ], array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
   <?php echo $__env->make('yasna.home.home-slide-caption',[
        'title'=>$slide['title'],
        'headline'=>$slide['headline'],
        'href'=>$slide['href'],
        'link_text'=> trans('yasna.template.read_more')
   ], array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>

</div>