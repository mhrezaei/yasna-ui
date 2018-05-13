<footer>
    <div class="container">
        <div class="row border-line">
            <div class="col-md-6 col-md-push-6">
                @include('yasna.footer.footer-social-links',[
                    "links"=>$switches['footer-links']
                ])
            </div>
            <div class="col-md-6 col-md-pull-6">
                @include('yasna.frame.paragraph',[
                    "text"=> trans('yasna.template.credit'),
                    'class'=>'credit'
                ])
            </div>
        </div>
    </div>
</footer>