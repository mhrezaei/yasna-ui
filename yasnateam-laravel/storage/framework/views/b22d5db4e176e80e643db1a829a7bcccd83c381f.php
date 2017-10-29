<section class="customers hiddenDiv">
    <div class="container-fluid">
        <?php echo $__env->make('yasna.heading-default',[
            "text"=> $switches["customers_title"]
        ], array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>

        <?php echo $__env->make('yasna.customers', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
    </div>
</section>