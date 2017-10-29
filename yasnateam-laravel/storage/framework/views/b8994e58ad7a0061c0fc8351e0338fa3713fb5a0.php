<div class="row">
    <div class="col-lg-5 col-lg-push-7">
        <?php echo $__env->make('yasna.services-content', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
    </div>
    <div class="col-lg-7 col-lg-pull-5">
        <div class="browser-window">

            <?php echo $__env->make('yasna.browser-top', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>

            <div class="slider-container">
                <?php echo $__env->make('yasna.services-slider', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
                <div class="hover-slide light-bg">
                    <p>
                        <?php echo $__env->make('yasna.button-default',[
                            "href"=>$services['href'],
                            "class"=>"center-btn",
                            "text" => trans('yasna.template.view_project')
                        ], array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
                    </p>
                </div>

            </div>
        </div>
    </div>

</div>