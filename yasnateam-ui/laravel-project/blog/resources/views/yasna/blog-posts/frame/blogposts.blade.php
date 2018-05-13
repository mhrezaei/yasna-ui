{{-- general assets of the site --}}
@extends('yasna.frame.general-assets')

{{--title of the page --}}
@section('page_title', $data['site_title'])

{{-- blog pages general stylesheet--}}
@section('header-links')
    {{ Html::style('assets/css/blog.min.css') }}
@append

{{--blog body inner sections--}}
@section('inner-body')

    {{--general heading of site: accepts a class for styling--}}
    @include('yasna.header.0header',[
        'class'=>$header_class
    ])

    {{--blog headings: accepts a class for styling--}}
    @include('yasna.blog-posts.frame.heading.0heading',[
        'class'=>$header_class
    ])

    {{--navbar of blog pages--}}
    @include('yasna.blog-posts.frame.navbar.0navbar')

    {{-- blog contents--}}
    @include('yasna.blog-posts.frame.posts.0blog')

@endsection


@section('endbody-script')
    {!! Html::script ('assets/js/blog.js') !!}
@endsection