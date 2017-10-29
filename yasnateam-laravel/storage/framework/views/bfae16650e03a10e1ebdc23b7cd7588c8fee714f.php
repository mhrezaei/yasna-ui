

    <?php echo $__env->make('yasna.header.header-logo',[
    'logo_src'=>$logo_src,
    'site_name'=>$site_name
], array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
    <?php echo $__env->make('yasna.header.header-buttons',[
        'btn_class'=>$btn_class
    ], array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>