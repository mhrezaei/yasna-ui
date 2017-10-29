{{--blog posts list view _ single post--}}

<div class="post">
    <a href="{{ $post_link or "" }}">
        <div class="thumbnail-img">
            {{--thumbnail image of the post --}}
            @include('yasna.frame.widgets.image',[
                'src'=>$thumbnail_img,
                'alt'=>""
            ])
        </div>
        {{-- post text details --}}
        <div class="post-details">
            {{-- post category --}}
            <h4 data-category="{{ $category or "" }}" class="eyebrow category">
                <a href="{{ $category_link or "#"}}">{{ $category or "" }}</a>
            </h4>
            {{-- post title --}}
            <h3>{{ $title or "" }}</h3>
            {{--post abstract--}}
            <p>
                {{ $abstract or "" }}
            </p>

            <div class="posts-publication-meta">
                {{-- author image --}}
                @include('yasna.frame.widgets.image',[
                    'class'=>"post-author",
                    'src'=>$author_img,
                    'alt'=>''
                ])
                {{-- author name and post date--}}
                <div class="post-info">
                    <p class="author-name">{{ $author_name or "" }}</p>
                    <p class="date">{{ $date or "" }}</p>
                </div>
            </div>


        </div>
    </a>
</div>
