<div class="slide-caption">
    <h1 class="cap-heading"><?php echo e(isset($title) ? $title : ''); ?></h1>
    <p class="cap-p"><?php echo e(isset($headline) ? $headline : ''); ?></p>

    <?php echo $__env->make('yasna.frame.button-atag',[
        "href"=>$href,
        "text" => $link_text
    ], array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>

</div>