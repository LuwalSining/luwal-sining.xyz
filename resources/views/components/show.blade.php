
<a href="{{ route('shows', App::getLocale()) }}/{{ str_replace(' ', '+', $show->slug) }}">
    <div class="card mdc-elevation--z2">

        <div class="card__img">
            <img src="{{ asset('img/shows') }}/{{ $show->poster }}" alt="show_media">
        </div>

        <div class="card__info">
            <h3 class="show__name">{{ $show->name }}</h3>
            <p class="show__date">({{ $show->date }})</p>
            <p>{{ __('def.detmore') }}</p>
        </div>

    </div>
</a>
