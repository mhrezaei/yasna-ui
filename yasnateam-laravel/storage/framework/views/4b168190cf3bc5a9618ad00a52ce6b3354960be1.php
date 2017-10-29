

<div class="slide-owl <?php echo e(isset($slide['class']) ? $slide['class'] : ''); ?>">
    
    <?php echo $__env->make('yasna.frame.widgets.image',[
        'src'=> $slide['src'],
        'alt'=> $slide['alt']
    ], array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
    
   <?php echo $__env->make('yasna.index.home.home-slide-caption',[
        'title'=>$slide['title'],
        'headline'=>$slide['headline'], // a short sentence (optional)
        'href'=>$slide['href'], //link of slide (optional)
        'link_text'=> trans('yasna.template.read_more') //text of the button
   ], array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>

</div>