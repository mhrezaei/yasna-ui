
<div class="row footer-info">
    <div class="col-md-3 col-sm-4 col-xs-12">
        @include('yasna.contact.contact-info',[
            "address"=> $switches['contact_info']["address"],
            "phone"=> $switches['contact_info']["phone"],
            "email"=> $switches['contact_info']["email"],
        ])
    </div>
    <div class="col-md-3 col-sm-4 col-xs-6">
       @include('yasna.contact.contact-link-list',[
       "title"=> trans('yasna.template.related_links'),
       "links"=>$switches['related_links1']
       ])
    </div>
    <div class="col-md-3 col-sm-4 col-xs-6">
        @include('yasna.contact.contact-link-list',[
        "title"=> trans('yasna.template.related_links'),
        "links"=>$switches['related_links2']
        ])
    </div>
    <div class="col-md-3 col-sm-12">
        @include('yasna.frame.button-atag',[
            'class'=>'white-border lang-btn',
            'text'=>"language",
            'icon'=>'globe'
        ])
    </div>
</div>