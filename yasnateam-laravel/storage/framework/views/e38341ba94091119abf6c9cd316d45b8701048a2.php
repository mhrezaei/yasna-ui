

<a
        href="<?php echo e(isset($href) ? $href : "#"); ?>"
        class="<?php echo e(isset($class) ? $class : ""); ?> btn-default "
        id="<?php echo e(isset($id) ? $id : ""); ?>"
        target="<?php echo e(isset($target) ? $target : ""); ?>"
        <?php echo e(isset($other) ? $other : ""); ?>

>

        <?php if( isset($class) and str_contains($class,'black-border') || str_contains($class,'white-border')): ?>
                <span class="text-deactive">
                        <?php echo e(isset($text) ? $text : ""); ?>

                    <?php if( isset($icon)): ?>
                        <i class="fa fa-<?php echo e($icon); ?>" aria-hidden="true"></i>
                    <?php endif; ?>
                </span>
        <?php else: ?>
                <?php echo e(isset($text) ? $text : ""); ?>

                <?php if( isset($icon)): ?>
                    <i class="fa fa-<?php echo e($icon); ?>" aria-hidden="true"></i>
                <?php endif; ?>
        <?php endif; ?>
</a>