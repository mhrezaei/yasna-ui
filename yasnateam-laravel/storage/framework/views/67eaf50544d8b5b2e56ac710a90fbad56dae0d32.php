


<?php echo $__env->make('yasna.frame.widgets.image',[
    'src'=>$image_src,
    'class'=>"cover-img"
], array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>

<?php echo $__env->make('yasna.blog-posts.frame.heading.heading-title',[
    'title'=>$page_title
], array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
