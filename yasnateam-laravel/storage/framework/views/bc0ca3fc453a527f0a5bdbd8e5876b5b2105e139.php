<?php $__env->startSection('page_title' , $switches['site_title']); ?>


<?php $__env->startSection('header-links'); ?>
    
    <?php echo e(Html::style('assets/libs/owlcarousel/dist/assets/owl.carousel.min.css')); ?>

    <?php echo e(Html::style('assets/libs/owlcarousel/dist/assets/owl.theme.default.min.css')); ?>

    
    <?php echo e(Html::style('assets/css/slider-style.css')); ?>

    <?php echo e(Html::style('assets/css/btn-style.css')); ?>


    
    <script>
        function initMap() {
            var yasna = {lat: 35.740006, lng: 51.467572};
            var map = new google.maps.Map(document.getElementById('map'), {
                zoom: 19,
                center: yasna
            });
            var marker = new google.maps.Marker({
                position: yasna,
                map: map
            });
        }
    </script>
<?php $__env->appendSection(); ?>



<?php $__env->startSection('inner-body'); ?>

    
  <?php echo $__env->make('yasna.header.0header',[
    'class'=> $header_class
  ], array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>

    
  <?php echo $__env->make('yasna.index.home.0home', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>

  <?php echo $__env->make('yasna.index.intro.0intro', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>

  <?php echo $__env->make('yasna.index.services.0services', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>

  <?php echo $__env->make('yasna.index.customers.0customers', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>

    <?php echo $__env->make('yasna.index.whyus.0whyus', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>

  <?php echo $__env->make('yasna.index.about.0about', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>

<?php $__env->stopSection(); ?>


<?php $__env->startSection('endbody-script'); ?>
    <script async defer
            src="https://maps.googleapis.com/maps/api/js?key=AIzaSyD9V7ArENsbs678XLPRJplwzdcVEgO0UBI&callback=initMap">
    </script>
    <?php echo Html::script ('assets/libs/owlcarousel/dist/owl.carousel.min.js'); ?>

    <?php if(isLangRtl()): ?>
        <?php echo Html::script ('assets/js/slider-custom-rtl.js'); ?>

    <?php else: ?>
        <?php echo Html::script ('assets/js/slider-custom.js'); ?>

    <?php endif; ?>
    <?php echo Html::script ('assets/js/btn.js'); ?>


<?php $__env->appendSection(); ?>


<?php echo $__env->make('yasna.frame.general-assets', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>