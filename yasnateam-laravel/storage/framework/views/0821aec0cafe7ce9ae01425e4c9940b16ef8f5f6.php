

<section class="contact" id="contact">
    <div class="container">
        <?php echo $__env->make('yasna.contact.contact-inner',[
            "type"=>$type
        ], array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
    </div>
</section>