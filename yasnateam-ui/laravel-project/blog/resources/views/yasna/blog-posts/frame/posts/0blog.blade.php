{{-- blog inner content --}}

<main>
    <div class="container">
        {{-- post title --}}
        @include('yasna.blog-posts.frame.posts.blog-post-title')

        {{--blog inner content--}}
        @yield('blog-content')
    </div>
</main>