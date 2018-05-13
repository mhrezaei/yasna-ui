{{--Single Slide Type btn--}}

<div class="slide-owl mobile-scroll">
    <img src="{{$slide['src']}}" alt="{{$slide['alt']}}">
    <div class="btn-wrapper">
        <button class="circle pulse-btn"><i class="fa fa-plus" aria-hidden="true"></i></button>
        <div class="popup pop-msg">
            <div class="popup-content light-bg">
                <h1 class="cap-heading pop-heading">{{$slide['title']}}</h1>
                <p class="cap-p">{{$slide['description']}}</p>
                <a class="pop-link" href="{{$slide['href']}}">{{ trans('yasna.template.read_more') }}</a>
            </div>
        </div>
    </div>
</div>