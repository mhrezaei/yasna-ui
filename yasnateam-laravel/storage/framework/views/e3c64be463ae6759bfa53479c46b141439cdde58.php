<?php $__env->startSection('page_title', $data['site_title']); ?>

<?php $__env->startSection('header-links'); ?>
    <?php echo e(Html::style('assets/css/list.min.css')); ?>

    <?php echo e(Html::style('assets/css/blog.min.css')); ?>

<?php $__env->stopSection(); ?>

<?php $__env->startSection('inner-body'); ?>

    <?php echo $__env->make('yasna.header.0header',[
        'class'=>$header_class
    ], array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>

    <?php echo $__env->make('yasna.blog-posts.heading.0heading',[
        'class'=>$header_class
    ], array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>

    <?php echo $__env->make('yasna.blog-posts.navbar.0navbar', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>

    <?php echo $__env->make('yasna.blog-posts.posts.0blog', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>

    <?php echo $__env->make('yasna.contact.0contact',[
        'type'=> $contact_type
    ], array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>

    <?php echo $__env->make('yasna.footer.0footer', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>

    <?php echo $__env->make('yasna.lang.0lang', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>

<?php $__env->stopSection(); ?>


<?php $__env->startSection('endbody-script'); ?>
    <?php echo Html::script ('assets/js/blog.js'); ?>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('yasna.frame.general-assets', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>