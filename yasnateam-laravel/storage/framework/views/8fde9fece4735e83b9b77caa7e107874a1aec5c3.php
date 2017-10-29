<?php $__env->startSection('page_title', $data['site_title']); ?>


<?php $__env->startSection('header-links'); ?>
    <?php echo e(Html::style('assets/css/blog.min.css')); ?>

<?php $__env->appendSection(); ?>


<?php $__env->startSection('inner-body'); ?>

    
    <?php echo $__env->make('yasna.header.0header',[
        'class'=>$header_class
    ], array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>

    
    <?php echo $__env->make('yasna.blog-posts.frame.heading.0heading',[
        'class'=>$header_class
    ], array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>

    
    <?php echo $__env->make('yasna.blog-posts.frame.navbar.0navbar', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>

    
    <?php echo $__env->make('yasna.blog-posts.frame.posts.0blog', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>

<?php $__env->stopSection(); ?>


<?php $__env->startSection('endbody-script'); ?>
    <?php echo Html::script ('assets/js/blog.js'); ?>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('yasna.frame.general-assets', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>