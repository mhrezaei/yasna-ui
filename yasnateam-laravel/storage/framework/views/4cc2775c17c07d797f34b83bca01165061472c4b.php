<section class="whyus hiddenDiv">
    <div class="container">
        
        
        <?php echo $__env->make('yasna.frame.heading-main',[
             "text"=> $whyus["main_heading"],
             "class"=>'dark-bg'
        ], array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>

        
        <?php echo $__env->make('yasna.index.whyus.whyus-content',[
            'reasons'=>$whyus['reasons']
        ], array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
    </div>
</section>