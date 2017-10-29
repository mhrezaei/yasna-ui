

<section class="<?php echo e(isset($class) ? $class : ""); ?> generic-hero">

    
    <?php echo $__env->make('yasna.blog-posts.frame.heading.heading-inner',[
        "image_src"=>$hero_img,
        "page_title" => $main_title
    ], array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>

</section>