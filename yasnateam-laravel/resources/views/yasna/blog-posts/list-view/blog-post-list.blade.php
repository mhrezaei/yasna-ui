{{--blog posts list view--}}

<div class="row">
    {{-- creates blog post abstract cards --}}
    @foreach($posts as $post)
        {{--checkes cards column view--}}
        @if($post['column'] === 1)
            @php
                $col_class = "col-lg-12";
            @endphp
        @elseif($post['column'] === 2)
            @php
                $col_class = "col-lg-6";
            @endphp
        @endif

             {{--blog post cards accept: post link, post thumbnail image, post category, post category link,
            post title, post abstract, author image src, author name, date--}}
            <div class="{{ $col_class }}">
                @include('yasna.blog-posts.list-view.post',[
                    'post_link'=>$post['post_link'],
                    'thumbnail_img'=> $post['thumbnail-img'],
                    'category'=> $post['category'],
                    'category_link'=> $post['category-link'],
                    'title'=> $post['title'],
                    'abstract'=> $post['abstract'],
                    'author_img'=> $post['author_img'],
                    'author_name'=> $post['author-name'],
                    'date'=> $post['date']
                ])
            </div>

    @endforeach

    {{--@include('yasna.blog-posts.frame.posts.no-post',[
        'massage' => "There is no post to view."
    ])--}}

</div>