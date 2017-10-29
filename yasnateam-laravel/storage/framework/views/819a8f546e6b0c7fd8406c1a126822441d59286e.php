

<header id="fixed-header" class="header-style <?php echo e(isset($class) ? $class : ""); ?>">

    <div class="container-fluid">
        <div class="header-content">
            <?php if($class==="has-dark-bg"): ?>
                <?php echo $__env->make('yasna.header.header-inner',[
                    'btn_class'=>'dark-bg',
                    'logo_src'=>$switches['site_logo_white'],
                    'site_name'=>$switches['site_title']
                ], array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
            <?php else: ?>
                <?php echo $__env->make('yasna.header.header-inner',[
                    'btn_class'=>'light-bg',
                    'logo_src'=>$switches['site_logo_black'],
                    'site_name'=>$switches['site_title']
                ], array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
            <?php endif; ?>

        </div>
    </div>

</header>

