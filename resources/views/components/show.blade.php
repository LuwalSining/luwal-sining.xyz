<div class="sc-card">

    <div class="sc-card__media">
        <img src="{{ asset('img/shows') }}/{{ $show->poster }}" alt="show_media">
    </div>

    <div class="sc-card__content">
        <h3 class="show__name">{{ $show->name }}</h3>
        <h5 class="show__date">({{ $show->date }})</h5>
    </div>

    <div class="sc-card__actions">
        <a href="{{ route('shows', App::getLocale()) }}/{{ str_replace(' ', '+', $show->slug) }}">
            <button class="sc-button sc-card__action">
                <span class="sc-button__label">{{ __('def.detmore') }}</span>
            </button>
        </a>
    </div>

</div>
