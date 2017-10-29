<?php $__env->startSection('page_title' , $switches['site_title']); ?>

<?php $__env->startSection('header_assets'); ?>
    <!-- Bootstrap -->
    <?php echo e(Html::style('assets/css/bootstrap.min.css')); ?>

    <?php if(isLangRtl()): ?>
        <?php echo e(Html::style('assets/css/front-style.min.css')); ?>

    <?php endif; ?>
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="css/style.min.css">
    <link rel="stylesheet" href="owlcarousel/dist/assets/owl.carousel.min.css">
    <link rel="stylesheet" href="owlcarousel/dist/assets/owl.theme.default.min.css">
    <link rel="stylesheet" type="text/css" href="css/slider-style.css">
    <link rel="stylesheet" type="text/css" href="css/btn-style.css">
    

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->

<?php $__env->stopSection(); ?>


<?php $__env->startSection('footer_assets'); ?>
    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://code.jquery.com/jquery-3.2.1.min.js" integrity="sha256-hwg4gsxgFZhOsEEamdOYGBf13FyQuiTwlAQgxVSNgt4=" crossorigin="anonymous"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script>
        window.jQuery || document.write('<script src="js/jquery-3.2.1.min.js">\x3C/script>')
    </script>
    <script src="js/bootstrap.min.js"></script>
    <script src="owlcarousel/dist/owl.carousel.min.js"></script>
    <script src="https://use.fontawesome.com/f4fcfb493d.js"></script>
    
    <script src="js/slider-custom.js"></script>
    <script src="js/btn.js"></script>
    <script src="js/custom.js"></script>

    <!-- <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBu-916DdpKAjTmJNIgngS6HL_kDIKU0aU&callback=myMap"></script> -->

<?php $__env->stopSection(); ?>




<?php $__env->startSection('body'); ?>
    <div class="wrapper">
        <?php echo $__env->yieldContent('inner-body'); ?>
    </div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('yasna.template', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>