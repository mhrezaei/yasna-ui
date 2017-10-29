<ul class="lang-list">
    <?php $__currentLoopData = $switches['languages']; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $language): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
        <?php if($language['data']=== getLocale()): ?>
            <li class="active-lang" data-lang="<?php echo e($language['data']); ?>">
                <a href="<?php echo e($language['link']); ?>"><?php echo e($language['name']); ?></a>
            </li>
        <?php else: ?>
            <li class="" data-lang="<?php echo e($language['data']); ?>">
                <a href="<?php echo e($language['link']); ?>"><?php echo e($language['name']); ?></a>
            </li>
        <?php endif; ?>
    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

</ul>