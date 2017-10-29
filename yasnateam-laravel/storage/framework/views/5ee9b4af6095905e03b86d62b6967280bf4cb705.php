

<section class="<?php echo e(isset($class) ? $class : ""); ?> generic-hero">

    <?php echo $__env->make('yasna.blog-posts.heading.heading-inner',[
        "image_src"=>$data['heading']['img_src'],
        "page_title" => $data['heading']['page_title']
    ], array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>

</section>