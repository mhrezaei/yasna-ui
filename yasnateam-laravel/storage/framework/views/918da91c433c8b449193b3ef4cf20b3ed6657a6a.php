



<?php if($type): ?>
    <?php echo $__env->make('yasna.frame.heading-main',[
            "text"=>trans('yasna.template.contact_us'),
            "class" =>"dark-bg"
        ], array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
    <?php echo $__env->make('yasna.contact.map', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
<?php endif; ?>


<?php echo $__env->make('yasna.contact.contact-content', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>