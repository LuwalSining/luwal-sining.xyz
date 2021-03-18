
<a class="showLink" href="{{ route('shows', app()->getLocale()) }}/{{ str_replace(' ', '+', $show->slug) }}">
    <div class="performanceBox mdc-elevation--z2">
        <div class="perfImg">
            <img src="{{ asset('img/shows') }}/{{ $show->poster }}" alt="show_media">
        </div>
        <div class="textBox">
            <h3>{{ $show->name }}</h3>
            <p class="date">({{ $show->date }})</p>
        <!--<p>{{ $show->logline }}</p>-->
            <p>{{ __('def.detmore') }}</p>
        </div>
    </div>
</a>
