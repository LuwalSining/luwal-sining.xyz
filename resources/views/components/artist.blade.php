<a href="{{ route('dir', app()->getLocale()) }}/{{ str_replace(' ', '+', $user->name) }}">
    <div class="card mdc-elevation--z2">

        <div class="card__img">
            <img src="{{ $user->image }}" alt="show_media">
        </div>

        <div class="card__info">
            <h3>{{ $user->name }}</h3>
            <p>{{ $user->department }} Department</p>
            <p>{{ __('def.detmore') }}</p>
        </div>

    </div>
</a>
