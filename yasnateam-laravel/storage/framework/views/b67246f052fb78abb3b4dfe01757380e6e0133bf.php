

<div class="<?php echo e(isset($btn_class) ? $btn_class : ""); ?> header-btns">
    <?php echo $__env->make('yasna.frame.button-atag',[
        "href"=>$switches['login'],
        "class"=>"btn-login",
        "text"=>trans('yasna.template.login')
    ], array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
    <?php echo $__env->make('yasna.frame.button-atag',[
        "href"=>"#contact",
        "class"=>"start-btn",
        "text"=>trans('yasna.template.get_started')
    ], array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>

</div>