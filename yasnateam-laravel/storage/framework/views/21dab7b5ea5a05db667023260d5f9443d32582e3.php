
<a href="<?php echo e(isset($href) ? $href : ""); ?>" class="<?php echo e(isset($class) ? $class : ""); ?> btn-default ">
    <?php if( isset($class) and str_contains($class,'black-border')): ?>
        <span class="text-deactive">
            <?php echo e(isset($text) ? $text : ""); ?>

        </span>
    <?php else: ?>
        <?php echo e(isset($text) ? $text : ""); ?>

    <?php endif; ?>
</a>