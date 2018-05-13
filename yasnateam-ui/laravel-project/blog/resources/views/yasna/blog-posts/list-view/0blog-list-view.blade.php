{{-- list view page of blog --}}

{{--
extending blog frame, gets page main title and hero image
containing header and footer
--}}
@extends('yasna.blog-posts.frame.blogposts',[
    "main_title"=>$listview['main_title'],
    "hero_img"=>'assets/images/slide2.jpg'
])

{{-- styesheets of list-view blog page --}}
@section('header-links')
    {{ Html::style('assets/css/list.min.css') }}
@endsection

{{-- post's specific title --}}
@section('blog-post-title')
    {{ $listview['post_title'] or "" }}
@endsection

{{--blog page inner content--}}
@section('blog-content')
    {{-- content of a list view blog page --}}
    @include('yasna.blog-posts.list-view.blog-post-list')
    {{--bottom page pagination--}}
    @include('yasna.blog-posts.list-view.blog-page-navigation')

@endsection


