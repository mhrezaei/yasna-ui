
<p class="date">
    <em>
        <?php echo e(trans('yasna.template.by')); ?>


        
        <a href="<?php echo e(isset($href) ? $href : ""); ?>"><?php echo e(isset($name) ? $name : ""); ?></a>

        <?php echo e(trans('yasna.template.ondate')); ?>

        <?php echo e(isset($date) ? $date : ""); ?>

    </em>
</p>