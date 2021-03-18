
<a class="showLink" href="{{ route('dir', app()->getLocale()) }}/{{ str_replace(' ', '+', $user->name) }}">
    <div class="performanceBox mdc-elevation--z2">
        <div class="perfImg">
            <img src="{{ $user->image }}" alt="show_media">
        </div>
        <div class="textBox">
            <h3>{{ $user->name }}</h3>
            <p>{{ $user->department }} Department</p>
            <p>{{ __('def.detmore') }}</p>
        </div>
    </div>
</a>
