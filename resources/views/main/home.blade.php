@extends('layouts.app')

@section('meta')

    <title>{{ __('def.home') }} - {{ __('def.title') }}</title>
    <meta charset="UTF-8">
    <meta property="og:title" content="{{ __('def.home') }} - {{ __('def.title') }}"/>
    <meta property="og:description" content="The official website of the Luwal Sining-Pagganap"/>
    <meta name="description" content="The official website of the Luwal Sining-Pagganap"/>
    <meta property="og:image" content="{{ asset('img/ogphoto.png') }}"/>

@endsection

@section('content')

    <div class="banner banner--home">
        <center>
            <img class="banner__img" src="{{ asset('img/preview.jpg') }}" alt="Home Banner">
        </center>
        <div class="banner__text">
            <h2>{{ strtoupper(__('def.title')) }}</h2>
            <h4>{{ __('pages.previewtext_home') }}</h4>
        </div>
    </div>

    <main class="wrap--content--no-margin-top">

        <h2 class="title-bar">
            {{ __('pages.perf_title') }}
        </h2>

        <section class="container--grid">

            @if($shows->count())

                @foreach($shows as $show)

                    <x-show :show="$show">
                    </x-show>

                @endforeach

            @else()

                <p>{{ __('def.no_show') }}</p>

            @endif

        </section>

        <section class="container--grid-home">
            <iframe width="100%" height="300" scrolling="no" frameborder="no" allow="autoplay" src="https://w.soundcloud.com/player/?url=https%3A//api.soundcloud.com/playlists/1285958770&color=%23886b69&auto_play=false&hide_related=false&show_comments=true&show_user=true&show_reposts=false&show_teaser=true&visual=true"></iframe>

            <section class="category-container">
                <a href="https://www.youtube.com/channel/UC95DmLJKQmunjWpB2HIiVvw">
                    <div class="sc-card sc-card--youtube">
                        <div class="sc-card__content">
                            <h3 class="show__name">YouTube</h3>
                        </div>
                    </div>
                </a>
                <a href="https://facebook.com/LuwaLSP">
                    <div class="sc-card sc-card--facebook">
                        <div class="sc-card__content">
                            <h3 class="show__name">Facebook</h3>
                        </div>
                    </div>
                </a>
                <a href="https://soundcloud.com/luwal-sining-pagganap">
                    <div class="sc-card sc-card--soundcloud">
                        <div class="sc-card__content">
                            <h3 class="show__name">SoundCloud</h3>
                        </div>
                    </div>
                </a>
            </section>

        </section>

    </main>

@endsection
