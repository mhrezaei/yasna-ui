<div class="row">

    <div class="col-md-12 motto">
        <?php $__currentLoopData = $text; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <h2>
                <?php echo e(isset($item) ? $item : ""); ?>

            </h2>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
    </div>

</div>