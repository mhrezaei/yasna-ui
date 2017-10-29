<?php $__env->startSection('header-links'); ?>
    <?php echo e(Html::style('assets/css/list.min.css')); ?>

<?php $__env->stopSection(); ?>


<?php $__env->startSection('blog-post-title'); ?>
    <?php echo e(isset($listview['post_title']) ? $listview['post_title'] : ""); ?>

<?php $__env->stopSection(); ?>


<?php $__env->startSection('blog-content'); ?>
    
    <?php echo $__env->make('yasna.blog-posts.list-view.blog-post-list', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
    
    <?php echo $__env->make('yasna.blog-posts.list-view.blog-page-navigation', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>

<?php $__env->stopSection(); ?>



<?php echo $__env->make('yasna.blog-posts.frame.blogposts',[
    "main_title"=>$listview['main_title'],
    "hero_img"=>'assets/images/slide2.jpg'
], array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>