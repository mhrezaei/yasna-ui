<?php $__env->startSection('blog-post-title'); ?>
    <?php echo e(isset($listview['post_title']) ? $listview['post_title'] : ""); ?>

<?php $__env->stopSection(); ?>



<?php $__env->startSection('blog-content'); ?>

    <?php echo $__env->make('yasna.blog-posts.single.single-post', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('yasna.blog-posts.frame.blogposts',[
    "main_title"=>$listview["main_title"],
    "hero_img"=>""
], array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>