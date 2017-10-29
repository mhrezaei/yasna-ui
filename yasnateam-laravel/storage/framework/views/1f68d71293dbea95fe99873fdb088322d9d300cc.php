<footer>
    <div class="container">
        <div class="row border-line">
            <div class="col-md-6 col-md-push-6">
                <?php echo $__env->make('yasna.footer-social-links',[
                    "links"=>$switches['footer-links']
                ], array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
            </div>
            <div class="col-md-6 col-md-pull-6">
                <?php echo $__env->make('yasna.credit',[
                    "credit"=> trans('yasna.template.credit')
                ], array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
            </div>
        </div>
    </div>
</footer>