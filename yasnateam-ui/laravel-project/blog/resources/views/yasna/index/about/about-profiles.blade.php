
{{--profile cards list--}}

<div class="row">
    <div class="cards-container">
        <ul class="cards owl-carousel">
            {{-- creates a card for each group member--}}
            @foreach($profile_cards as $card)
                @include('yasna.index.about.profile-card')
            @endforeach

        </ul>
    </div>
</div>