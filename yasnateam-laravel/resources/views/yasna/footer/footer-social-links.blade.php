<ul class="social">

    @foreach($links as $link)
        <li>
            @include('yasna.frame.social-link',[
                "link"=>$link['link'],
                "class"=>$link['font-o']
            ])
        </li>
    @endforeach


</ul>