<div class="text">
    <h4 class="eyebrow"><span class="text-bg"><?php echo e(isset($services['subtitle']) ? $services['subtitle'] : ""); ?></span></h4>
    <h2 class="heading"><?php echo e(isset($services['title']) ? $services['title'] : ""); ?></h2>
    <p class="paragraph"><?php echo e(isset($services['text']) ? $services['text'] : ""); ?></p>
    <?php echo $__env->make('yasna.button-border',[
        "href"=> $services['href'],
        "class"=> "black-border",
        "text" => trans('yasna.template.read_more')
    ], array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>

</div>