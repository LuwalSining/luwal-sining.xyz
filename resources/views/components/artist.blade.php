<div class="sc-profile sc-light-blue sc-elevation--z3">
    <div class="sc-profile__img">
        <img src="{{ asset('img/pfp/' . $user->image) }}" alt="{{ $user->name }}'s profile image">
    </div>
    <div class="sc-profile__container">
        <div class="sc-profile__contents">
            <h2>{{ $user->name }}</h2>
            <p class="sc-profile__text">{{ $user->department }}</p>
            <div class="sc-profile__actions">
                <a class="sc-profile__action sc-button" href="{{ route('dir', app()->getLocale()) }}/{{ str_replace(' ', '+', $user->name) }}">
                    <i class="sc-button__icon material-icons-outlined" aria-hidden="true">visibility</i>
                    <span class="sc-button__label">Visit profile</span>
                </a>
            </div>
        </div>
    </div>
</div>
