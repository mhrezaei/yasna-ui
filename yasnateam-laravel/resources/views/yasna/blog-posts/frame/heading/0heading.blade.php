{{--Heading ( inner page type )--}}

<section class="{{ $class or "" }} generic-hero">

    {{-- $main_title and $hero_img sets when extending blogpost.blade--}}
    @include('yasna.blog-posts.frame.heading.heading-inner',[
        "image_src"=>$hero_img,
        "page_title" => $main_title
    ])

</section>