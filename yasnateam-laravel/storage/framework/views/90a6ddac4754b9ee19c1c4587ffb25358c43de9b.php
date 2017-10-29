<h4 class="list-title"><?php echo e($title); ?></h4>
<ul class="related-links">
    <?php $__currentLoopData = $links; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $link): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
        <li>
            <a href="<?php echo e(isset($link['href']) ? $link['href'] : ""); ?>"><?php echo e(isset($link['title']) ? $link['title'] : "link"); ?></a>
        </li>
    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
</ul>