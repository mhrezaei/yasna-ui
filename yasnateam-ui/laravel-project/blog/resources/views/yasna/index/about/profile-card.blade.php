
{{--profile card--}}

<li class="card">
    <header class="card-image">
        {{--profile image thumbnail--}}
        <img src="{{ $card['thumbnail_src'] or '' }}">
    </header>
    {{--member name--}}
    <h1 class="profile-name">{{ $card['name'] }}</h1>
    {{--member job title--}}
    <h4 class="profile-title">{{ $card['title'] }}</h4>
    {{--member social links--}}
    <div class="profile-links">
        {{--creates button for each link--}}
        @foreach( $card['socials'] as $key => $value )

            {{--accepts a link to social and a fontawesome icon name--}}
            @include('yasna.frame.social-link',
            [
            'link' => $value['link'],
            'class' => $value['font-o'],
            ])

        @endforeach
    </div>
    {{--display is none - will be appended to "about-story" by js--}}
    <div class="profile-data">
        {{-- large profile image --}}
        <img src="{{ $card['original_src'] }}">
        {{-- story of the member--}}
        <p>
            {{ $card['story'] }}
        </p>
    </div>
</li>