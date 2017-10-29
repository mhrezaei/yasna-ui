<?php $__env->startSection('header_assets'); ?>

    <!-- Bootstrap -->
    <?php echo e(Html::style('assets/css/bootstrap.min.css')); ?>


    <?php if(isLangRtl()): ?>
        <!-- Bootstrap rtl -->
        <?php echo e(Html::style('assets/css/bootstrap.rtl.min.css')); ?>

    <?php endif; ?>

    
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700" rel="stylesheet">

    
    <?php echo e(Html::style('assets/css/style.min.css')); ?>


    
    <?php echo $__env->yieldContent('header-links'); ?>

    
    
    <?php if(isLangRtl()): ?>
        <?php echo e(Html::style('assets/css/typography.rtl.css')); ?>

    <?php endif; ?>


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
    <script>
        window.jQuery || document.write('<script src="js/jquery-3.2.1.min.js">\x3C/script>')
    </script>
    <!-- Bootstrap -->
    <?php echo Html::script ('assets/js/bootstrap.min.js'); ?>

    <!-- Fontawesome cdn -->
    <?php echo Html::script ('https://use.fontawesome.com/f4fcfb493d.js'); ?>


    
    <?php echo $__env->yieldContent('endbody-script'); ?>


    
    
    <?php echo Html::script ('assets/js/custom.js'); ?>

    <script src="assets/libs/particlesjs/particles.min.js"></script>
    <script src="assets/libs/particlesjs/demo/js/app.js"></script>
<?php $__env->stopSection(); ?>



<?php $__env->startSection('body'); ?>
    <div class="wrapper">
        
        <?php echo $__env->yieldContent('inner-body'); ?>

        
        <?php echo $__env->make('yasna.contact.0contact',[
            'type'=> isIndex()
        ], array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>

        
        <?php echo $__env->make('yasna.footer.0footer', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>

        
        <?php echo $__env->make('yasna.lang.0lang', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
    </div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('yasna.frame.0base', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>