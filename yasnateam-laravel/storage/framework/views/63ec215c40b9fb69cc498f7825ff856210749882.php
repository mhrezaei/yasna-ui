<section class="intro hiddenDiv">
    <div id="particles-js" class="particles"></div>
    <div class="container">

        
        
        <?php echo $__env->make('yasna.index.intro.intro-services',[
            "services"=>$introData["services"]
        ], array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>

    </div>
</section>