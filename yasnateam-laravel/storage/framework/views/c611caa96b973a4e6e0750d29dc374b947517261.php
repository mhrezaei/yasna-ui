<section class="about hiddenDiv">
    <div class="container-fluid">
        <?php echo $__env->make('yasna.frame.heading-posts',[
            "text"=> $switches["about_title"]
        ], array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
        <?php echo $__env->make('yasna.about.about-story', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
        <?php echo $__env->make('yasna.about.about-profiles', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
    </div>
</section>