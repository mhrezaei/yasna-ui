

<a href="#" class="logo">
    
    <?php if($logo_src): ?>
        <span class="logo-icon">
            <?php echo $__env->make('yasna.frame.widgets.image',[
                'src'=>$logo_src
            ], array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
        </span>
    <?php endif; ?>

    
    <?php if($site_name): ?>
        <span class="title"><?php echo e(isset($site_name) ? $site_name : ''); ?></span>
    <?php endif; ?>

</a>