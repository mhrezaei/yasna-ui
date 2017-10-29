


<li class="card">
    <header class="card-image">
        
        <img src="<?php echo e(isset($card['thumbnail_src']) ? $card['thumbnail_src'] : ''); ?>">
    </header>
    
    <h1 class="profile-name"><?php echo e($card['name']); ?></h1>
    
    <h4 class="profile-title"><?php echo e($card['title']); ?></h4>
    
    <div class="profile-links">
        
        <?php $__currentLoopData = $card['socials']; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key => $value): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>

            
            <?php echo $__env->make('yasna.frame.social-link',
            [
            'link' => $value['link'],
            'class' => $value['font-o'],
            ], array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>

        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
    </div>
    
    <div class="profile-data">
        
        <img src="<?php echo e($card['original_src']); ?>">
        
        <p>
            <?php echo e($card['story']); ?>

        </p>
    </div>
</li>