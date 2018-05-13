{{--inner heading --}}

{{--hero image is optional--}}
@include('yasna.frame.widgets.image',[
    'src'=>$image_src,
    'class'=>"cover-img"
])

@include('yasna.blog-posts.frame.heading.heading-title',[
    'title'=>$page_title
])
