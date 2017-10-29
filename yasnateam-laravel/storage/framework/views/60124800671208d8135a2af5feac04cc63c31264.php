
<div class="row footer-info">
    <div class="col-md-3 col-sm-4 col-xs-12">
        <?php echo $__env->make('yasna.contact.contact-info',[
            "address"=> $switches['contact_info']["address"],
            "phone"=> $switches['contact_info']["phone"],
            "email"=> $switches['contact_info']["email"],
        ], array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
    </div>
    <div class="col-md-3 col-sm-4 col-xs-6">
       <?php echo $__env->make('yasna.contact.contact-link-list',[
       "title"=> trans('yasna.template.related_links'),
       "links"=>$switches['related_links1']
       ], array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
    </div>
    <div class="col-md-3 col-sm-4 col-xs-6">
        <?php echo $__env->make('yasna.contact.contact-link-list',[
        "title"=> trans('yasna.template.related_links'),
        "links"=>$switches['related_links2']
        ], array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
    </div>
    <div class="col-md-3 col-sm-12">
        <?php echo $__env->make('yasna.frame.button-atag',[
            'class'=>'white-border lang-btn',
            'text'=>"language",
            'icon'=>'globe'
        ], array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
    </div>
</div>