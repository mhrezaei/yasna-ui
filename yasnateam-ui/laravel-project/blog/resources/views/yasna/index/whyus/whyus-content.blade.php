<div class="row">


    @foreach($reasons as $reason)
        <div class="col-md-4">
            <div class="whyus-container">
                <div class="whyus-img">

                    @if($reason['image'])
                        @include('yasna.frame.widgets.image',[
                            'src'=> $reason['image']
                        ])
                    @else
                        <span class="icon">
                            <i class="fa fa-{{ $reason['icon_name'] }}" aria-hidden="true"></i>
                        </span>
                    @endif

                </div>
                <div class="whyus-text">
                    <h2>

                        {{ $reason['title'] or "" }}
                    </h2>
                    <p>{{ $reason['text'] or "" }}</p>
                </div>
            </div>
        </div>
    @endforeach


</div>