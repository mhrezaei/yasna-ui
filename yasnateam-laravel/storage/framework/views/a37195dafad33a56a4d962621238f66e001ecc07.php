<aside>
    <div class="cover-container">
          <span class="close-btn">
            <i class="fa fa-times" aria-hidden="true"></i>
          </span>
        <div class="list-container">
            <h1 class="aside-title heading main">
                <?php echo e(trans("yasna.template.languages")); ?>

            </h1>
            <?php echo $__env->make('yasna.lang.language-list', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
        </div>
    </div>
</aside>