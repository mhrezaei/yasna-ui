

<section class="customers hiddenDiv">
    <div class="container-fluid">
        
        <?php echo $__env->make('yasna.frame.heading-main',[
            "text"=> $switches["customers_title"]
        ], array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
        
        <?php echo $__env->make('yasna.index.customers.customers', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
    </div>
</section>