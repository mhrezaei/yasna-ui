<section class="contact" id="contact">
    <div class="container">
        <?php echo $__env->make('yasna.heading-default',[
            "text"=>trans('yasna.template.contact_us'),
            "class" =>"dark-bg"
        ], array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
        <?php echo $__env->make('yasna.map', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
        <?php echo $__env->make('yasna.contact-content', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
    </div>
</section>