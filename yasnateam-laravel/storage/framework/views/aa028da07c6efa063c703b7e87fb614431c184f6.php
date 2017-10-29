<header  id="fixed-header" class="header-style">

    <div class="container-fluid">
        <div class="header-content">
            <a href="#" class="logo">
              <span class="logo-icon">
                <img src="<?php echo e($switches['site_logo']); ?>">
              </span>
                <span class="title"><?php echo e(isset($switches['site_title']) ? $switches['site_title'] : ''); ?></span>
            </a>

            <div class="light-bg header-btns">
                <?php echo $__env->make('yasna.button-default',[
                    "href"=>$switches['login'],
                    "class"=>"btn-login",
                    "text"=>trans('yasna.template.login')
                ], array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
                <?php echo $__env->make('yasna.button-default',[
                    "href"=>"#contact",
                    "class"=>"start-btn",
                    "text"=>trans('yasna.template.get_started')
                ], array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>

            </div>
        </div>
    </div>

</header>

