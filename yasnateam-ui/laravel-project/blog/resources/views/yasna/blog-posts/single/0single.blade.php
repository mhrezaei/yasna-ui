{{-- Single page for blog posts --}}

{{--
extending blog frame, gets page main title and hero image
containing header and footer
--}}
@extends('yasna.blog-posts.frame.blogposts',[
    "main_title"=>$listview["main_title"],
    "hero_img"=>""
])

{{-- post specific title --}}
@section('blog-post-title')
    {{ $listview['post_title'] or "" }}
@endsection


{{--blog page inner contents--}}
@section('blog-content')

    @include('yasna.blog-posts.single.single-post')

@endsection