<ul class="lang-list">
    <?php $__currentLoopData = $switches['languages']; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $language): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
        <?php if($language['data']=== $locale): ?>
            <li class="active-lang" data-lang="<?php echo e($language['data']); ?>"><?php echo e($language['name']); ?></li>
        <?php else: ?>
            <li class="" data-lang="<?php echo e($language['data']); ?>"><?php echo e($language['name']); ?></li>
        <?php endif; ?>
    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

</ul>