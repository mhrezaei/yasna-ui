

<div class="slider-container">
    
    <?php echo $__env->make('yasna.index.services.service-small-slider', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>

    
    <div class="hover-slide light-bg">
        <p>
            <?php echo $__env->make('yasna.frame.button-atag',[
                "href"=>$services['href'],
                "class"=>"center-btn",
                "text" => trans('yasna.template.view_project')
            ], array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
        </p>
    </div>
</div>