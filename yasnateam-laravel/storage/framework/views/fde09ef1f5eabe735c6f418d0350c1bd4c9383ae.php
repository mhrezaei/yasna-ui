<?php $__env->startSection('page_title' , $switches['site_title']); ?>

<?php $__env->startSection('header-links'); ?>
    <?php echo e(Html::style('assets/libs/owlcarousel/dist/assets/owl.carousel.min.css')); ?>

    <?php echo e(Html::style('assets/libs/owlcarousel/dist/assets/owl.theme.default.min.css')); ?>

    <?php echo e(Html::style('assets/css/slider-style.css')); ?>

    <?php echo e(Html::style('assets/css/btn-style.css')); ?>

<?php $__env->stopSection(); ?>

<?php $__env->startSection('inner-body'); ?>

  <?php echo $__env->make('yasna.header.0header', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>

  <?php echo $__env->make('yasna.home.0home', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>

  <?php echo $__env->make('yasna.services.0services', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>

  <?php echo $__env->make('yasna.customers.0customers', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>

  <?php echo $__env->make('yasna.about.0about', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>

  <?php echo $__env->make('yasna.contact.0contact', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>

  <?php echo $__env->make('yasna.footer.0footer', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>

  <?php echo $__env->make('yasna.lang.0lang', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>

<?php $__env->stopSection(); ?>

<?php $__env->startSection('endbody-script'); ?>
    <?php echo Html::script ('assets/libs/owlcarousel/dist/owl.carousel.min.js'); ?>

    <?php if(isLangRtl()): ?>
        <?php echo Html::script ('assets/js/slider-custom-rtl.js'); ?>

    <?php else: ?>
        <?php echo Html::script ('assets/js/slider-custom.js'); ?>

    <?php endif; ?>
    <?php echo Html::script ('assets/js/btn.js'); ?>


<?php $__env->stopSection(); ?>


<?php echo $__env->make('yasna.frame.general-assets', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>