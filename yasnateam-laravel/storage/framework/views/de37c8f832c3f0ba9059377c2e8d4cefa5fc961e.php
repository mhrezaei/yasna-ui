<div class="text">

    <?php echo $__env->make('yasna.frame.eyebrow',[
        'text'=>$services['subtitle']
    ], array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
    <?php echo $__env->make('yasna.frame.heading-h2',[
        'text'=>$services['title']
    ], array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
    <?php echo $__env->make('yasna.frame.paragraph',[
        'text'=>$services['text'],
        'class'=>"paragraph"
    ], array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
    <?php echo $__env->make('yasna.frame.button-atag',[
        "href"=> $services['href'],
        "class"=> "black-border",
        "text" => trans('yasna.template.read_more')
    ], array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>

</div>