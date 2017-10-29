


<div class="row">
    <div class="cards-container">
        <ul class="cards owl-carousel">

            <?php $__currentLoopData = $profile_cards; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $card): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <?php echo $__env->make('yasna.about.profile-card', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

        </ul>
    </div>
</div>