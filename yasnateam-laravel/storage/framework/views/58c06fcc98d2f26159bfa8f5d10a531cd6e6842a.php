<div class="row">
    <div class="col-lg-5 col-lg-push-7">
        <?php echo $__env->make('yasna.services.services-content', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
    </div>
    <div class="col-lg-7 col-lg-pull-5">
        <?php echo $__env->make('yasna.services.service-media', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>;
    </div>

</div>